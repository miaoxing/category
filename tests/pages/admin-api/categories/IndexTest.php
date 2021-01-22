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

        $categories = CategoryModel::findAll([$category->id])
            ->load('children')
            ->toArray();

        $this->assertSame($categories, $ret['data'], '返回列表数据包含下级');
    }

    public function testPost()
    {
        User::loginById(1);

        $ret = Tester::postAdminApi('categories', [
            'id' => '1', // ignored
            'level' => '2', // ignored
            'name' => '测试',
            'sort' => '60',
            'description' => '描述',
        ]);
        $this->assertRetSuc($ret);

        /** @var CategoryModel $category */
        $category = $ret['data'];
        $this->assertNotEquals('1', $category->id);
        $this->assertSame('测试', $category->name);
        $this->assertSame(60, $category->sort);
        $this->assertSame('描述', $category->description);
        $this->assertSame(1, $category->level);
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
        $this->assertSame(2, $subCategory->level);
    }
}
