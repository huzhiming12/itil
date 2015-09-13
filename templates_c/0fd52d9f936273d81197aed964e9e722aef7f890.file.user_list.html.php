<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-11 07:00:21
         compiled from "F:\wamp\www\itildemo\templates\admin\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2960555f27c05c0beb3-05636782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fd52d9f936273d81197aed964e9e722aef7f890' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\user_list.html',
      1 => 1441161433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2960555f27c05c0beb3-05636782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'user' => 0,
    'depart_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f27c05cf5526_36270106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f27c05cf5526_36270106')) {function content_55f27c05cf5526_36270106($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <?php echo '<script'; ?>
 language="javascript" src="/itildemo/static/js/ajax.js"><?php echo '</script'; ?>
>
</head>
<body>
<table class="table table-hover">
    <thead>
    <tr>
        <th>编号</th>
        <th>登陆账号</th>
        <th>姓名</th>
        <th>职工号</th>
        <th>所属机构</th>
        <th>职务</th>
        <th>联系方式</th>
        <th>操作</th>
    </tr>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['user']['index']++;
?>
    <tr>
        <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['user']['index']+1;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['staff_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['depart_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['position'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['telephone'];?>
</td>

        <td><a href="javascript:void(0);" onclick="AJAX('/itildemo/home/controller/admin/user_list.php?flag=1&depart_id=<?php echo $_smarty_tpl->tpl_vars['depart_id']->value;?>
&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
')">删除</a></td>
    </tr>
    <?php } ?>
    </tbody>
    </thead>
</table>
<br>
</body>
</html>
<?php }} ?>
