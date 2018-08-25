<?php

namespace Miaoxing\Category\Service;

use Miaoxing\Category\Metadata\CategoryTrait;
use Miaoxing\Plugin\Model\CastTrait;
use Miaoxing\Plugin\Model\GetSetTrait;
use Miaoxing\Plugin\Model\QuickQueryTrait;

/**
 * CategoryModel
 */
class CategoryModel extends Category
{
    use CategoryTrait;
    use CastTrait;
    use QuickQueryTrait;
    use GetSetTrait;

    protected $table = 'category';

    public function afterFind()
    {
        //
    }
}
