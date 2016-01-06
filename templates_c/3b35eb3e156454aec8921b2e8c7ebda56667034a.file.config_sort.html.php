<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-21 07:27:18
         compiled from "F:\wamp\www\itildemo\templates\admin\config_sort.html" */ ?>
<?php /*%%SmartyHeaderCode:2079655a1e221c3d1c8-39512616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b35eb3e156454aec8921b2e8c7ebda56667034a' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\config_sort.html',
      1 => 1442820435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2079655a1e221c3d1c8-39512616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a1e221ccba88_52372451',
  'variables' => 
  array (
    'parent_sort' => 0,
    'p_sort' => 0,
    'child_sort' => 0,
    'c_sort' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a1e221ccba88_52372451')) {function content_55a1e221ccba88_52372451($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/itildemo/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/itildemo/static/css/mystyle.css">
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <div class="_011_RequestList">
        知识请求分类&nbsp;&nbsp;
        <button class="btn btn-sm btn-default" title="添加分类" data-toggle="modal" data-target="#myModal">+</button>
    </div>
    <div class="_015_RequestList">
        <div class="_014_RequestList">
            <table width="100%">
                <?php  $_smarty_tpl->tpl_vars['p_sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_sort']->key => $_smarty_tpl->tpl_vars['p_sort']->value) {
$_smarty_tpl->tpl_vars['p_sort']->_loop = true;
?>
                <tr class="_031_config_sort">
                    <td class="_029_config_sort"><?php echo $_smarty_tpl->tpl_vars['p_sort']->value['sort_name'];?>
：</td>
                    <td class="_030_config_sort">
                        <?php  $_smarty_tpl->tpl_vars['c_sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c_sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c_sort']->key => $_smarty_tpl->tpl_vars['c_sort']->value) {
$_smarty_tpl->tpl_vars['c_sort']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c_sort']->value['sort_parent_id']==$_smarty_tpl->tpl_vars['p_sort']->value['sort_id']) {?>
                        <a tabindex="0" role="button" data-trigger="focus" class="btn btn-sm btn-default"
                           data-toggle="popover" title="操作"
                           data-content="<a href='#' onclick='deleteSort(<?php echo $_smarty_tpl->tpl_vars['c_sort']->value['sort_id'];?>
)'>删除</a>"
                           data-html="true">
                            <?php echo $_smarty_tpl->tpl_vars['c_sort']->value['sort_name'];?>

                        </a>
                        &nbsp;&nbsp;
                        <?php }?>
                        <?php } ?>
                        <button class="btn btn-sm btn-default" onclick="ChangeValue('<?php echo $_smarty_tpl->tpl_vars['p_sort']->value['sort_id'];?>
')"
                                title="添加子类别">+
                        </button>
                    </td>
                    <td class="_36_config_sort"><a href="#" onclick="deleteSort('<?php echo $_smarty_tpl->tpl_vars['p_sort']->value['sort_id'];?>
')"
                                                   class="_37_config_sort">删除</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <br>
</div>

<!--添加分类的模态框-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <form class="form-horizontal" method="post" action="/itildemo/home/service/reqsort_ser.php"
              role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加分类</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label">分类名称：</label>

                        <div class="col-sm-6">
                            <input type="text" name="sort_name" class="form-control" placeholder="分类名称">
                        </div>
                    </div>
                </div>
                <!---隐藏数据-->
                <input type="hidden" name="flag" value="1">
                <input type="hidden" id="sort_parent_id" name="sort_parent_id" value="">

                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="submit">添加</button>
                    <button class="btn btn-default btn-sm " type="reset" data-dismiss="modal">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    function ChangeValue(id) {
        document.getElementById('sort_parent_id').value = id;
        //alert(document.getElementById('sort_parent_id').value);
        $('#myModal').modal();
    }
    function deleteSort(id) {
        if (confirm("确定要删除该分类？")) {
            location.href = "/itildemo/home/service/reqsort_ser.php?sort_id=" + id + "";
        }
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
