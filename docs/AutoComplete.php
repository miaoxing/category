<?php

namespace MiaoxingDoc\Category {

    /**
     * @property    \Miaoxing\Category\Service\Category $category
     * @method      \Miaoxing\Category\Service\Category|\Miaoxing\Category\Service\Category[] category()
     *
     * @property    \Miaoxing\Category\Service\CategoryModel $categoryModel CategoryModel
     * @method      \Miaoxing\Category\Service\CategoryModel|\Miaoxing\Category\Service\CategoryModel[] categoryModel()
     */
    class AutoComplete
    {
    }
}

namespace {

    /**
     * @return MiaoxingDoc\Category\AutoComplete
     */
    function wei()
    {
    }

    /** @var Miaoxing\Category\Service\Category $category */
    $category = wei()->category;

    /** @var Miaoxing\Category\Service\CategoryModel $categoryModel */
    $category = wei()->categoryModel();

    /** @var Miaoxing\Category\Service\CategoryModel|Miaoxing\Category\Service\CategoryModel[] $categoryModels */
    $categorys = wei()->categoryModel();
}
