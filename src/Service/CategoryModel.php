<?php

namespace Miaoxing\Category\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

/**
 * @property CategoryModel $parent
 * @property CategoryModel[]|CategoryModel $children
 * @property string|null $id
 * @property string $appId
 * @property string $parentId
 * @property int $level 分类的层级
 * @property string $name
 * @property string $image
 * @property string $description
 * @property int $sort
 * @property string $listTpl
 * @property string $linkTo 链接到的配置数组
 * @property bool $isEnabled 是否启用
 * @property int $pv
 * @property int $uv
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property string|null $deletedAt
 * @property string $deletedBy
 */
class CategoryModel extends BaseModel
{
    use HasAppIdTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    protected $attributes = [
        'parentId' => 0,
        'level' => 1,
        'sort' => 50,
        'linkTo' => [],
    ];

    protected $columns = [
        'linkTo' => [
            'cast' => 'json',
            'default' => [],
        ],
    ];

    public function getGuarded(): array
    {
        return array_merge($this->guarded, [
            'level',
        ]);
    }

    public function afterDestroy()
    {
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
            case 'mall' == $this['type']:
                return ['type' => 'mall', 'mall' => 'products?categoryId=' . $this['id']];

            case 'photo' == $this['type']:
                return ['type' => 'photo', 'photo' => 'album?categoryId=' . $this['id']];

            case 'video' == $this['type']:
                return ['type' => 'video', 'video' => 'video?categoryId=' . $this['id']];

            case 'article' == $this['type']:
            default:
                return ['type' => 'site', 'site' => 'article?categoryId=' . $this['id']];
        }
    }

    /**
     * 获取当前栏目的父栏目
     *
     * @return $this
     */
    public function parent(): self
    {
        return $this->belongsTo(static::class, 'id', 'parent_id');
    }

    public function children(): self
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
     * @param mixed $level
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
        foreach ($this->attributes as $category) {
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
    public function getAllChildren(?Category $categories = null)
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
