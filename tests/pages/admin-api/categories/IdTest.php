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

    public function testPatch()
    {
        User::loginById(1);

        $category = CategoryModel::save();

        $ret = Tester::patchAdminApi('categories/' . $category->id, [
            'name' => '测试',
            'description' => '描述',
            'sort' => 60,
        ]);

        /** @var CategoryModel $newCategory */
        $newCategory = $ret['data'];

        $this->assertSame($category->id, $newCategory->id);
        $this->assertNotEquals($category->name, $newCategory->name);
        $this->assertSame('测试', $newCategory->name);
        $this->assertSame(60, $newCategory->sort);
        $this->assertSame('描述', $newCategory->description);
    }

    public function testPatchSelfAsParent()
    {
        User::loginById(1);

        $category = CategoryModel::save();

        $ret = Tester::patchAdminApi('categories/' . $category->id, [
            'parentId' => $category->id,
        ]);
        $this->assertRetErr($ret, null, '不能使用自己作为父级分类');
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
