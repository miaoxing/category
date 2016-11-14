<?php $view->layout() ?>

<div class="page-header">
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
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form id="category-form" class="form-horizontal" method="post" role="form">
      <div class="form-group">
        <label class="col-lg-2 control-label" for="type">
          分类
        </label>

        <div class="col-lg-4">
          <select name="type" id="type" class="form-control">
            <option value="">请选择类型</option>
            <option value="index">首页</option>
            <?php if ($plugin->isInstalled('mall')) : ?>
              <option value="mall">商城</option>
            <?php endif ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="parentId">
          所属栏目
        </label>

        <div class="col-lg-4">
          <select name="parentId" id="parentId" class="form-control">
            <option value="0">根栏目</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="name">
          <span class="text-warning">*</span>
          名称
        </label>

        <div class="col-lg-4">
          <input type="text" class="form-control" name="name" id="name" data-rule-required="true">
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="image">
          图标
        </label>

        <div class="col-lg-4">
          <div class="input-group">
            <input type="text" class="form-control" id="image" name="image">
                        <span class="input-group-btn">
                            <button id="select-thumb" class="btn btn-white" type="button">
                              <i class="fa fa-picture-o"></i>
                              选择图片
                            </button>
                        </span>
          </div>
        </div>
      </div>

      <?php require $view->getFile('linkTo:linkTo/linkTo.php') ?>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="sort">
          顺序
        </label>

        <div class="col-lg-4">
          <input type="text" class="form-control" name="sort" id="sort">
        </div>

        <label class="col-lg-6 help-text" for="sort">
          大的显示在前面,按从大到小排列.
        </label>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="description">
          简介
        </label>

        <div class="col-lg-4">
          <textarea class="form-control" id="description" name="description"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="listTpl">
          列表模版
        </label>

        <div class="col-lg-4">
          <select name="listTpl" id="listTpl" class="form-control">
            <option value="">默认</option>
            <option value="wasterfalls">瀑布流</option>
            <option value="score">积分</option>
          </select>
        </div>
      </div>

      <input type="hidden" name="id" id="id">

      <div class="clearfix form-actions form-group">
        <div class="col-lg-offset-2">
          <button class="btn btn-info" type="submit">
            <i class="fa fa-check bigger-110"></i>
            提交
          </button>
          &nbsp; &nbsp; &nbsp;
          <a class="btn" href="<?= $url('admin/category/index') ?>">
            <i class="fa fa-undo bigger-110"></i>
            返回列表
          </a>
        </div>
      </div>
    </form>
  </div>
  <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
<!-- /.row -->

<?= $block('js') ?>
<script>
  require(['linkTo', 'form', 'ueditor', 'jquery-deparam', 'dataTable', 'validator'], function (linkTo, form) {
    form.toOptions($('#parentId'), <?= json_encode(wei()->category()->notDeleted()->getTreeToArray()) ?>, 'id', 'name');

    var category = <?= $category->toJson() ?>;

    $('#category-form')
      .loadJSON(category)
      .loadParams()
      .ajaxForm({
        url: '<?= $url('admin/category/' . ($category->isNew() ? 'create' : 'update')) ?>',
        dataType: 'json',
        beforeSubmit: function (arr, $form, options) {
          return $form.valid();
        },
        beforeSend: function (jqXHR, settings) {
          settings.data += '&' + $.param({linkTo: linkTo.getData()});
        },
        success: function (result) {
          $.msg(result, function () {
            if (result.code > 0) {
              window.location = $.url('admin/category/index');
            }
          });
        }
      })
      .validate();

    // 初始化外链
    linkTo.init({
      data: category.linkTo
    });

    // 点击选择图片
    $('#image').imageInput();

    // 选择父栏目时,栏目类型跟着父栏目改变
    $('#parentId').change(function () {
      var type = $(this).find('option:selected').data('type');
      if (type) {
        $('#type').val(type).prop('disabled', true);
      } else {
        $('#type').prop('disabled', false);
      }
    });
  });
</script>
<?= $block->end() ?>
