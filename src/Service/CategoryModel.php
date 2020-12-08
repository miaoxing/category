<?php

namespace Miaoxing\Category\Service;

use Miaoxing\Category\Metadata\CategoryTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\GetSetTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SoftDeleteTrait;
use Miaoxing\Plugin\Service\Model;

/**
 * @property CategoryModel $parent
 * @property CategoryModel[]|CategoryModel $children
 */
class CategoryModel extends BaseModel
{
    use CategoryTrait;
    use SoftDeleteTrait;
    use ReqQueryTrait;

    protected $data = [
        'parentId' => 0,
        'level' => 1,
        'sort' => 50,
        'linkTo' => [],
    ];

    public function getCasts(): array
    {
        return array_merge($this->casts, [
            'linkTo' => 'json',
        ]);
    }

    public function getGuarded()
    {
        return array_merge($this->guarded, [
            'level',
        ]);
    }

    public function afterDestroy()
    {
        parent::afterDestroy();

        $this->children->destroy();
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
                return ['type' => 'mall', 'mall' => 'products?categoryId=' . $this['id']];

            case $this['type'] == 'photo':
                return ['type' => 'photo', 'photo' => 'album?categoryId=' . $this['id']];

            case $this['type'] == 'video':
                return ['type' => 'video', 'video' => 'video?categoryId=' . $this['id']];

            case $this['type'] == 'article':
            default:
                return ['type' => 'site', 'site' => 'article?categoryId=' . $this['id']];
        }
    }

    /**
     * 获取当前栏目的父栏目
     *
     * @return $this
     */
    public function parent()
    {
        return $this->belongsTo(static::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(static::class, 'parent_id')->desc('sort');
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
        /** @var $category CategoryModel */
        foreach ($this as $category) {
            $categories[] = $category;
            $categories = $category->children->getTree($categories);
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
}
