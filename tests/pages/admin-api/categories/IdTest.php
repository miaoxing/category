<?php

namespace MiaoxingTest\Category\Pages\AdminApi\Categories;

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Service\User;
use Miaoxing\Plugin\Test\BaseTestCase;

class IdTest extends BaseTestCase
{
    public function testGet()
    {
        User::loginById(1);

        $category = CategoryModel::save([
            'name' => '测试'
        ]);

        $ret = Tester::getAdminApi('categories/' . $category->id);
        $this->assertRetSuc($ret);
        $this->assertSame('测试', $ret['data']['name']);

        $category->destroy();
        $this->expectExceptionObject(new \Exception('Record not found', 404));
        Tester::getAdminApi('categories/' . $category->id);
    }

    public function testGet404()
    {
        $this->expectExceptionObject(new \Exception('Record not found', 404));

        Tester::getAdminApi('categories/not-found' );
    }

    public function testDelete()
    {
        User::loginById(1);

        $category = CategoryModel::save();

        $ret = Tester::deleteAdminApi('categories/' . $category->id);
        $this->assertRetSuc($ret);

        $category->reload();
        $this->assertTrue($category->isDeleted());
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
        $this->assertTrue($subCategory->isDeleted());
    }
}
