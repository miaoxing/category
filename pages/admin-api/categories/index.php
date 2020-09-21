<?php

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\BaseController;
use Miaoxing\Services\Page\PostToPatchTrait;
use Miaoxing\Services\Service\IndexAction;

return new class extends BaseController {
    use PostToPatchTrait;

    public function get()
    {
        return IndexAction
            ::beforeFind(function (CategoryModel $models) {
                $models->reqQuery()
                    ->where('level', 1)
                    ->sort('sort');
            })
            ->afterFind(function (CategoryModel $models) {
                $models->load('children');
            })
            ->exec($this);
    }
};
