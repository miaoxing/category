<?php

/**
 * @property    Miaoxing\Category\Service\Category $category
 */
class CategoryMixin {
}

/**
 * @property    Miaoxing\Category\Service\CategoryModel $categoryModel
 * @method      Miaoxing\Category\Service\CategoryModel|Miaoxing\Category\Service\CategoryModel[] categoryModel($table = null)
 */
class CategoryModelMixin {
}

/**
 * @mixin CategoryMixin
 * @mixin CategoryModelMixin
 */
class AutoCompletion {
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion;
}

/** @var Miaoxing\Category\Service\Category $category */
$category = wei()->category;

/** @var Miaoxing\Category\Service\CategoryModel $categoryModel */
$category = wei()->categoryModel();

/** @var Miaoxing\Category\Service\CategoryModel|Miaoxing\Category\Service\CategoryModel[] $categoryModels */
$categorys = wei()->categoryModel();
