<?php

namespace MiaoxingTest\Category\Service;

use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * 分类服务
 */
class CategoryTest extends BaseTestCase
{
    /**
     * 获取分类类型
     */
    public function testGetTypes()
    {
        $this->assertInternalType('array', wei()->category->getTypes());
    }
}
