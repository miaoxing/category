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
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $createdBy
 * @property int $updatedBy
 * @property string $deletedAt
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
        'app_id' => 'int',
        'parent_id' => 'int',
        'level' => 'int',
        'name' => 'string',
        'image' => 'string',
        'description' => 'string',
        'sort' => 'int',
        'list_tpl' => 'string',
        'link_to' => 'string',
        'is_enabled' => 'bool',
        'pv' => 'int',
        'uv' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'created_by' => 'int',
        'updated_by' => 'int',
        'deleted_at' => 'datetime',
        'deleted_by' => 'int',
    ];
}
