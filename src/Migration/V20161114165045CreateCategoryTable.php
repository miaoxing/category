<?php

namespace Miaoxing\Category\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20161114165045CreateCategoryTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->scheme->table('category')
            ->string('id', 64)
            ->string('parentId', 64)
            ->string('binding', 64)->comment('绑定栏目')
            ->tinyInt('level', 1)->defaults(1)->comment('栏目的层级')
            ->string('type', 64)
            ->string('listTpl', 64)
            ->string('name')
            ->string('image')
            ->string('description')
            ->string('url')
            ->int('sort')
            ->text('linkTo')->comment('linkTo服务配置数组')
            ->bool('enable')->defaults(1)->comment('是否启用')
            ->timestamps()
            ->bool('canDelete')->defaults(1)
            ->bool('deleted')
            ->timestamp('deleteTime')
            ->primary('id')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->scheme->dropIfExists('category');
    }
}
