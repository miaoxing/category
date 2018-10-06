<?php

namespace Miaoxing\Category\Service;

use Miaoxing\Category\Metadata\CategoryTrait;
use Miaoxing\Plugin\Model\CastTrait;
use Miaoxing\Plugin\Model\GetSetTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;

/**
 * CategoryModel
 */
class CategoryModel extends Category
{
    use CategoryTrait;
    use CastTrait;
    use ReqQueryTrait;
    use GetSetTrait;

    protected $table = 'category';

    public function afterFind()
    {
        //
    }
}
