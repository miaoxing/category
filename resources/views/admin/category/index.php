<?php $view->layout() ?>

<div class="page-header">
  <a class="btn pull-right btn-success" href="<?= $url('admin/category/new') ?>">添加栏目</a>

  <h1>
    微官网
    <small>
      <i class="fa fa-angle-double-right"></i>
      栏目管理
    </small>
  </h1>
</div>
<!-- /.page-header -->

<div class="row">
  <div class="col-12">
    <!-- PAGE CONTENT BEGINS -->
    <div class="table-responsive">
      <div class="well">
        <form class="form-inline" id="search-form" role="form">
          <div class="form-group">
            <select class="form-control" name="type">
              <option value="">请选择类型</option>
              <option value="index">首页</option>
              <option value="nav">头部导航</option>
              <?php if ($wei->plugin->isInstalled('mall')) : ?>
                <option value="personal">个人中心</option>
                <option value="mall">商城</option>
              <?php endif ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="search" placeholder="请输入名称搜索">
          </div>
        </form>
      </div>
      <table id="category-table" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>类型</th>
          <th>名称</th>
          <th>简介</th>
          <th>顺序</th>
          <th>操作</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
    <!-- PAGE CONTENT ENDS -->
  </div>
  <!-- /col -->
</div>
<!-- /row -->

<script id="table-actions" type="text/html">
  <div class="action-buttons">
    <a href="<%= linkToUrl %>" title="查看" target="_blank">
      <i class="fa fa-search-plus bigger-130"></i>
    </a>
    <a href="<%= $.url('admin/category/edit', {id: id}) %>" title="编辑">
      <i class="fa fa-edit bigger-130"></i>
    </a>
    <a class="text-danger delete-record" href="javascript:"
      data-href="<%= $.url('admin/category/destroy', {id: id}) %>" title="删除">
      <i class="fa fa-trash-o bigger-130"></i>
    </a>
  </div>
</script>

<?= $block->js() ?>
<script>
  var types = {
    index: '首页',
    nav: '头部导航',
    personal: '个人中心',
    mall: '商城'
  };
  require(['plugins/admin/js/data-table', 'plugins/admin/js/form'], function () {
    var recordTable = $('#category-table').dataTable({
      ajax: {
        url: $.queryUrl('admin/category.json')
      },
      columns: [
        {
          data: 'type',
          render: function (data) {
            return data in types ? types[data] : '无';
          }
        },
        {
          data: 'name',
          render: function (data, type, full) {
            if (full.level == 1) {
              return data;
            } else {
              return '|' + (new Array(parseInt(full.level, 10)).join('--')) + data;
            }
          }
        },
        {
          data: 'description',
          render: function (data) {
            return data || '-';
          }
        },
        {
          data: 'sort',
          sClass: 'text-center'
        },
        {
          data: 'id',
          sClass: 'text-center',
          render: function (data, type, full) {
            return template.render('table-actions', full);
          }
        }
      ]
    });

    recordTable.deletable();

    $('#search-form').update(function () {
      recordTable.reload($(this).serialize(), false);
    });
  });
</script>
<?= $block->end() ?>

