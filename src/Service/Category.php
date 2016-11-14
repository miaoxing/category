<?php

namespace Miaoxing\Category\Service;

use plugins\menu\services\Menu;

/**
 * @property \Miaoxing\LinkTo\Service\LinkTo $linkTo
 */
class Category extends \miaoxing\plugin\BaseModel
{
    protected $autoId = true;

    protected $types = [
        'mall' => '商城',
        'photo' => '相册',
    ];

    protected $data = [
        'sort' => 50,
        'linkTo' => [],
    ];

    protected $type;

    /**
     * @var Menu|Menu[]
     */
    protected $menus;

    public function afterFind()
    {
        parent::afterFind();
        $this['linkTo'] = $this->linkTo->decode($this['linkTo']);
    }

    public function beforeSave()
    {
        parent::beforeSave();
        $this['linkTo'] = $this->linkTo->encode($this['linkTo']);
    }

    public function afterSave()
    {
        parent::afterSave();
        $this->clearTagCache();
    }

    public function afterDestroy()
    {
        parent::afterDestroy();
        $this->clearTagCache();
    }

    public function withParent($parentId)
    {
        return $this->andWhere('parentId = ?', $parentId)->desc('sort');
    }

    public function withType($type)
    {
        $this->type = $type;

        return $this->andWhere('type = ?', $type);
    }

    public function withoutParent()
    {
        return $this->andWhere("parentId = ''");
    }

    /**
     * 如果设置了URL地址,说明是外链,否则是内部栏目
     *
     * @return string
     */
    public function getUrl()
    {
        if (!$this['linkTo'] || !isset($this['linkTo']['type'])) {
            $this['linkTo'] = $this->createLinkTo();
        }

        return $this->linkTo->getUrl($this['linkTo']);
    }

    /**
     * Record: 根据当前栏目,创建linkTo数组
     *
     * @return array
     * @todo 是否应该由mallCategory,photoCategory等去生成URL?
     */
    public function createLinkTo()
    {
        switch (true) {
            case $this['type'] == 'mall':
                return ['type' => 'mall', 'decorator' => '', 'mall' => 'mall/product/index?categoryId=' . $this['id']];

            case $this['type'] == 'photo':
                return ['type' => 'photo', 'decorator' => '', 'photo' => 'album?categoryId=' . $this['id']];

            case $this['type'] == 'video':
                return ['type' => 'video', 'decorator' => '', 'video' => 'video?categoryId=' . $this['id']];

            case $this['type'] == 'article':
            default:
                return ['type' => 'site', 'decorator' => '', 'site' => 'article?categoryId=' . $this['id']];
        }
    }

    /**
     * Record: 获取当前栏目的子栏目
     *
     * @return $this|$this[]
     */
    public function getChildren()
    {
        return wei()->category()->where(['parentId' => $this['id']])->notDeleted()->desc('sort')->desc('id');
    }

    /**
     * Record: 获取当前栏目的父栏目
     *
     * @return $this
     */
    public function getParent()
    {
        return wei()->category()->where(['id' => $this['parentId']]);
    }

    /**
     * Record: 获取当前栏目的所有父栏目
     */
    public function getParents()
    {
        $parents = $this()->beColl();

        $category = $this;
        while ($parent = $category->getParent()->find()) {
            $parents[] = $category = $parent;
        }

        return $parents;
    }

    /**
     * Record: 获取某级父栏目
     */
    public function getParentByLevel($level)
    {
        $parent = $this;
        while ($parent->find()) {
            if ($parent['level'] == $level) {
                break;
            }
            $parent = $parent->getParent();
        }

        return $parent;
    }

    /**
     * Collection
     *
     * @param array $categories
     * @return array
     */
    public function getTree($categories = [])
    {
        /** @var $category Category */
        foreach ($this as $category) {
            $categories[] = $category;
            $categories = $category->getChildren()->notDeleted()->findAll()->getTree($categories);
        }

        return $categories;
    }

    public function getTreeToArray($categories = [])
    {
        /** @var $category Category */
        foreach ($this as $category) {
            $categories[] = $category->toArray();
            $categories = $category->getChildren()->notDeleted()->desc('sort')->findAll()->getTreeToArray($categories);
        }

        return $categories;
    }

    /**
     * 获取当前分类下的所有子分类
     *
     * @param Category $categories
     * @return Category|Category[]
     */
    public function getAllChildren(Category $categories = null)
    {
        // 第一次,初始化一个Collection对象
        if (!$categories) {
            $categories = $this()->beColl();
        }

        // 递归获取所有子分类
        $children = $this->getChildren()->findAll();
        foreach ($children as $category) {
            $categories[] = $category;
            $category->getAllChildren($categories);
        }

        // 返回所有分类
        return $categories;
    }

    /**
     * Record: 获取当前分类和子分类
     */
    public function getChildrenIds()
    {
        $categories = $this->getAllChildren();
        $categories[] = $this;

        return $categories->getAll('id');
    }

    /**
     * Repo: 获取所有的分类类型
     *
     * @return array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Record: 获取栏目对应的多个菜单
     */
    public function getMenus()
    {
        $this->menus || $this->menus = wei()->menu()->notDeleted()->findAll(['categoryId' => $this['id']]);

        return $this->menus;
    }

    /*
     * 根据类别名得到类别ID
     * */
    public function getCategoryIdByName($name)
    {
        $category = wei()->category()->where('name=?', $name);
        if ($category['id']) {
            return $category['id'];
        }

        return 0;
    }
}
