<?php

use Miaoxing\Category\Service\CategoryModel;
use Miaoxing\Plugin\BaseController;

return new class () extends BaseController {
    public function get()
    {
        return CategoryModel::toRet();
    }
};
