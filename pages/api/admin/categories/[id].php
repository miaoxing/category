<?php

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\ItemTrait;

return new class extends BasePage {
    use ItemTrait;

    public function patch($req)
    {
        $category = CategoryModel::findFromReq($req);

        $category->fromArray($req);

        // 选择了父栏目,但类型和父栏目一致,同时层级为父栏目加1
        if ($category->parentId) {
            if ($category->parentId === $category->id) {
                return err('不能使用自己作为父级分类');
            }

            if ($category->children()->first()) {
                return err('当前只支持 2 级分类，该分类已有子分类，不能成为其他分类的子分类');
            }

            $parent = $category->parent;
            $category->level = $parent->level + 1;
        } else {
            $category->level = 1;
        }

        $category->save();

        return $category->toRet();
    }
};
