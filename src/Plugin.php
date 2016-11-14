<?php

namespace Miaoxing\Category;

class Plugin extends \miaoxing\plugin\BasePlugin
{
    protected $name = '分类';

    protected $description = '用于商品,文章,相册,视频等';

    public function onShowCategory($categories)
    {
    }
}
