<?php

namespace Miaoxing\Category\Migration;

use Wei\Migration\BaseMigration;

class V20161114165045CreateCategoriesTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('categories')->tableComment('商品分类')
            ->bigId()
            ->uBigInt('app_id')
            ->uBigInt('parent_id')
            ->smallInt('level', 1)->defaults(1)->comment('分类的层级')
            ->string('name')
            ->string('image')
            ->string('description')
            ->int('sort')
            ->string('list_tpl', 16)
            ->string('link_to', 2048)->comment('链接到的配置数组')
            ->bool('is_enabled')->defaults(1)->comment('是否启用')
            ->int('pv')
            ->int('uv')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('categories');
    }
}
