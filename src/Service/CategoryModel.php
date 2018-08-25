<?php

namespace Miaoxing\Category\Service;

use Miaoxing\Category\Metadata\CategoryTrait;
use Miaoxing\Plugin\BaseModelV2;

/**
 * CategoryModel
 */
class CategoryModel extends BaseModelV2
{
    use CategoryTrait;

    protected $table = 'category';
}
