<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-06 14:23:37
         compiled from "/Users/huzhiming/workspace/php/itildemo/templates/share/know_search.html" */ ?>
<?php /*%%SmartyHeaderCode:1272383095568d1559e80642-49131394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e87ef651a5185b50fb8f18348dac563b6850e67' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/share/know_search.html',
      1 => 1444479856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272383095568d1559e80642-49131394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_sort' => 0,
    'p_sort' => 0,
    'child_sort' => 0,
    'c_sort' => 0,
    'kno' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568d155a0ae6b2_84258768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d155a0ae6b2_84258768')) {function content_568d155a0ae6b2_84258768($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/itildemo/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/itildemo/static/css/mystyle.css">
    <link rel="stylesheet" href="/itildemo/static/css/bootstrap-datetimepicker.min.css">
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <!--搜素框-->
    <br><br>

    <form method="get" action="/itildemo/home/controller/share/know_list.php">
        <div class="col-sm-4"></div>
        <div class="input-group input-group-sm col-sm-4">
            <input type="text" name="searchcontent" class="form-control" placeholder="知识主题、编号、分类、关键字等">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">搜索</button>
                </span>
        </div>
    </form>

    <div class="_014_RequestList _45_knowledge">
        <table>
            <?php  $_smarty_tpl->tpl_vars['p_sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_sort']->key => $_smarty_tpl->tpl_vars['p_sort']->value) {
$_smarty_tpl->tpl_vars['p_sort']->_loop = true;
?>
            <tr>
                <td style="width: 100px;"><label class="control-label"><?php echo $_smarty_tpl->tpl_vars['p_sort']->value['sort_name'];?>
：</label></td>
                <td style="line-height: 30px">
                    <?php  $_smarty_tpl->tpl_vars['c_sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c_sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c_sort']->key => $_smarty_tpl->tpl_vars['c_sort']->value) {
$_smarty_tpl->tpl_vars['c_sort']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['c_sort']->value['sort_parent_id']==$_smarty_tpl->tpl_vars['p_sort']->value['sort_id']) {?>
                    <a href="/itildemo/home/controller/share/know_list.php?kno_sort=<?php echo $_smarty_tpl->tpl_vars['c_sort']->value['sort_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['c_sort']->value['sort_name'];?>
</a>(<?php echo $_smarty_tpl->tpl_vars['c_sort']->value['times'];?>
)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php }?>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br>
    </div>
    <div class="_014_RequestList">
        <label class="control-label">热门知识</label>
        <table>
            <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kno']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kno']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kno']['index']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kno']['index']%2==0) {?>
            <tr>
                <?php }?>
                <td style="line-height: 30px; padding-left: 80px">
                    <a href="/itildemo/home/controller/admin/know_detail.php?kno_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_num'];?>
&readflag=1"><?php echo $_smarty_tpl->tpl_vars['res']->value['kno_title'];?>
</a>&nbsp;&nbsp;&nbsp;
                    <span style="color: #999">阅读(<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_read'];?>
)</span>
                </td>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kno']['index']%2==1) {?>
            </tr>
            <?php }?>
            <?php } ?>
        </table>

    </div>
    <br><br>


</div>

</body>
</html><?php }} ?>
