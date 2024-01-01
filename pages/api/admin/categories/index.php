<?php

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\PostToPatchTrait;
use Miaoxing\Services\Service\IndexAction;

return new class () extends BasePage {
    use PostToPatchTrait;

    public function get()
    {
        return IndexAction::new()
            ->beforeFind(static function (CategoryModel $models) {
                $models->where('level', 1)
                    ->setDefaultSortColumn(['sort', 'id']);
            })
            ->afterFind(static function (CategoryModel $models) {
                $models->load('children');
            })
            ->exec($this);
    }
};
