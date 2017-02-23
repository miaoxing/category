<?php

namespace Miaoxing\Category\Controller\Admin;

class Category extends \miaoxing\plugin\BaseController
{
    public function indexAction($req)
    {
        switch ($req['_format']) {
            case 'json':
                $categories = wei()->category();

                $categories->notDeleted();

                // 分页
                $categories->limit($req['rows'])->page($req['page']);

                // 排序
                $categories->desc('sort');

                // 搜索
                if ($req['search']) {
                    $categories->andWhere('name LIKE ?', '%' . $req['search'] . '%');
                }

                // 只显示指定parentId
                if ($req['parentId']) {
                    $categories->andWhere(['parentId' => $req['parentId']]);
                }

                $data = [];
                /** @var $tree \Miaoxing\Category\Service\Category */
                $tree = $categories->findAll()->getTree();

                /** @var $category \Miaoxing\Category\Service\Category */
                foreach ($tree as $category) {
                    $data[] = $category->toArray() + [
                            'linkToUrl' => $category->getUrl(),
                        ];
                }

                return $this->json('读取列表成功', 1, array(
                    'data' => $data,
                    'page' => $req['page'],
                    'rows' => $req['rows'],
                    'records' => $categories->count(),
                ));

            default:
                return get_defined_vars();
        }
    }

    public function newAction($req)
    {
        return $this->editAction($req);
    }

    public function createAction($req)
    {
        return $this->updateAction($req);
    }

    public function editAction($req)
    {
        $category = wei()->category()->findOrInitById($req['id']);

        return get_defined_vars();
    }

    public function updateAction($req)
    {
        $category = wei()->category()->findOrInitById($req['id']);
        $category->fromArray($req);

        // TODO 找一个完善的Tree方案
        // 选择了父栏目,但类型和父栏目一致,同时层级为父栏目加1
        if ($category['parentId']) {
            if ($category['parentId'] == $req['id']) {
                return $this->err('不能选取自己作为根栏目');
            }

            $parent = $category->getParent();
            $category['type'] = (string)$category['type'];
            $category['level'] = $parent['level'] + 1;
        }

        $category->save();

        return $this->suc([
            'data' => $category->toArray()
        ]);
    }

    public function destroyAction($req)
    {
        $category = wei()->category()->notDeleted()->findOneById($req['id']);
        $category->softDelete();
        return $this->suc();
    }
}
