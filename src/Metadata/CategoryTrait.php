<?php

namespace Miaoxing\Category\Metadata;

/**
 * CategoryTrait
 *
 * @property string $id
 * @property string $parentId
 * @property string $binding 绑定栏目
 * @property bool $level 栏目的层级
 * @property string $type
 * @property string $listTpl
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string $url
 * @property int $sort
 * @property string $linkTo linkTo服务配置数组
 * @property bool $enable 是否启用
 * @property string $createTime
 * @property string $updateTime
 * @property bool $canDelete
 * @property int $deleted
 * @property string $deleteTime
 */
trait CategoryTrait
{
    /**
     * @var array
     * @see CastTrait::$casts
     */
    protected $casts = [
        'id' => 'string',
        'parentId' => 'string',
        'binding' => 'string',
        'level' => 'bool',
        'type' => 'string',
        'listTpl' => 'string',
        'name' => 'string',
        'image' => 'string',
        'description' => 'string',
        'url' => 'string',
        'sort' => 'int',
        'linkTo' => 'string',
        'enable' => 'bool',
        'createTime' => 'datetime',
        'updateTime' => 'datetime',
        'canDelete' => 'bool',
        'deleted' => 'int',
        'deleteTime' => 'datetime',
    ];
}
