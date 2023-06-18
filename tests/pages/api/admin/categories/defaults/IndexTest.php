<?php

namespace MiaoxingTest\Category\Pages\Api\Admin\Categories\Defaults;

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        $ret = Tester::getAdminApi('categories/defaults');
        $this->assertRetSuc($ret);
        $this->assertInstanceOf(CategoryModel::class, $ret['data']);
    }
}
