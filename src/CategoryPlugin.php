<?php

namespace Miaoxing\Category;

use Miaoxing\Admin\Service\AdminMenu;

class CategoryPlugin extends \Miaoxing\Plugin\BasePlugin
{
    protected $name = '分类';

    protected $description = '用于商品分类';

    protected $code = 206;

    public function onAdminMenuGetMenus(AdminMenu $menu)
    {
        $product = $menu->child('product');

        $categories = $product->addChild()->setLabel('分类管理')->setUrl('admin/categories')->setApis([
            'GET admin-api/categories',
        ]);
        $categories->addChild()->setUrl('admin/categories/new')->setLabel('添加')->setApis([
            'GET admin-api/categories/defaults',
            'POST admin-api/categories',
        ]);
        $categories->addChild()->setUrl('admin/categories/[id]/edit')->setLabel('编辑')->setApis([
            'GET admin-api/categories/[id]',
            'PATCH admin-api/categories/[id]',
        ]);
    }
}
