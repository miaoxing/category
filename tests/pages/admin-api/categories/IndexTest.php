<?php

namespace MiaoxingTest\Category\Pages\AdminApi\Categories;

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Service\User;
use Miaoxing\Plugin\Test\BaseTestCase;

class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        User::loginById(1);

        $category = CategoryModel::save([
            'name' => '测试',
            'sort' => 30,
            'description' => '测试描述',
        ]);
        CategoryModel::save([
            'parentId' => $category->id,
            'name' => '子分类',
            'sort' => 60,
            'description' => '子分类描述',
        ]);

        $ret = Tester::request(['id' => $category->id])->getAdminApi('categories');

        $category->reload();

        // FIXME
        $category->id = (int) $category->id;
        $category->children[0]->deletedAt = (string) $category->children[0]->deletedAt;

        $this->assertSame($category->toArray(), $ret['data'][0], '返回列表数据包含下级');
    }

    public function testPost()
    {
        User::loginById(1);

        $ret = Tester::postAdminApi('categories', [
            'id' => '1',
            'name' => '测试',
            'sort' => '60',
            'description' => '描述',
        ]);
        $this->assertRetSuc($ret);

        /** @var CategoryModel $category */
        $category = $ret['data'];
        $this->assertNotEquals('1', $category->id);
        $this->assertEquals('测试', $category->name);
        $this->assertEquals(60, $category->sort);
        $this->assertEquals('描述', $category->description);
    }

    public function testPostCreateSubCategory()
    {
        User::loginById(1);

        $category = CategoryModel::save();

        $ret = Tester::postAdminApi('categories', [
            'parentId' => $category->id,
        ]);
        $this->assertRetSuc($ret);

        /** @var CategoryModel $subCategory */
        $subCategory = $ret['data'];
        $this->assertSame($category->id, $subCategory->parentId);
    }
}
