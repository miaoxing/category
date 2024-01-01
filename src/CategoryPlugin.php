<?php

namespace Miaoxing\Category;

use Miaoxing\Admin\Service\AdminMenu;
use Miaoxing\App\Service\PermissionMap;

class CategoryPlugin extends \Miaoxing\Plugin\BasePlugin
{
    protected $name = '分类';

    protected $description = '用于商品分类';

    protected $code = 206;

    public function onAdminMenuGetMenus(AdminMenu $menu)
    {
        $product = $menu->child('product');

        $categories = $product->addChild()->setLabel('分类管理')->setUrl('admin/categories');
        $categories->addChild()->setLabel('添加')->setUrl('admin/categories/new');
        $categories->addChild()->setLabel('编辑')->setUrl('admin/categories/[id]/edit');
        $categories->addChild()->setLabel('删除')->setUrl('admin/categories/[id]/delete');
    }

    public function onPermissionGetMap(PermissionMap $map)
    {
        $map->prefix('admin/categories', static function (PermissionMap $map) {
            $map->addList();
            $map->addNew('', [
                'GET api/admin/categories',
            ]);
            $map->addEdit('', [
                'GET api/admin/categories',
            ]);
            $map->addDelete();
        });
    }
}
