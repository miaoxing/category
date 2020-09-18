<?php

namespace MiaoxingTest\Category\Pages\AdminApi\Categories;

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Service\User;
use Miaoxing\Plugin\Test\BaseTestCase;

class IdTest extends BaseTestCase
{
    public function testDelete()
    {
        User::loginById(1);

        $category = CategoryModel::save();

        $ret = Tester::deleteAdminApi('categories/' . $category->id);
        $this->assertRetSuc($ret);

        $category->reload();
        $this->assertNull($category->id);
    }

    public function testDeleteWithChildren()
    {
        User::loginById(1);

        $category = CategoryModel::save();
        $subCategory = CategoryModel::save([
            'parentId' => $category->id,
        ]);

        $ret = Tester::deleteAdminApi('categories/' . $category->id);
        $this->assertRetSuc($ret);

        $subCategory->reload();
        $this->assertNull($subCategory->id);
    }
}
