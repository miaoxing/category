<?php

namespace Miaoxing\Category\Metadata;

/**
 * CategoryTrait
 *
 * @property int $id
 * @property int $appId
 * @property int $parentId
 * @property int $level 分类的层级
 * @property string $name
 * @property string $image
 * @property string $description
 * @property int $sort
 * @property string $listTpl
 * @property string $linkTo linkTo服务配置数组
 * @property bool $isEnabled 是否启用
 * @property int $pv
 * @property int $uv
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property int $createdBy
 * @property int $updatedBy
 * @property string|null $deletedAt
 * @property int $deletedBy
 * @internal will change in the future
 */
trait CategoryTrait
{
    /**
     * @var array
     * @see CastTrait::$casts
     */
    protected $casts = [
        'id' => 'int',
        'appId' => 'int',
        'parentId' => 'int',
        'level' => 'int',
        'name' => 'string',
        'image' => 'string',
        'description' => 'string',
        'sort' => 'int',
        'listTpl' => 'string',
        'linkTo' => 'string',
        'isEnabled' => 'bool',
        'pv' => 'int',
        'uv' => 'int',
        'createdAt' => 'datetime',
        'updatedAt' => 'datetime',
        'createdBy' => 'int',
        'updatedBy' => 'int',
        'deletedAt' => 'datetime',
        'deletedBy' => 'int',
    ];
}
