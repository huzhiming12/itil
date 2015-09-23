<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-23 04:33:33
         compiled from "F:\wamp\www\itildemo\templates\share\news_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2470156014b47ca9534-26362222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e6292faa9075612f54c909c1dabcbbd443a717' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\news_list.html',
      1 => 1442982810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2470156014b47ca9534-26362222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56014b47d21814_49742305',
  'variables' => 
  array (
    'res' => 0,
    'news' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56014b47d21814_49742305')) {function content_56014b47d21814_49742305($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\itildemo\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="_23_config_staff">
        <form method="get" action="/itildemo/home/controller/share/news_list.php">
            <div class="input-group input-group-sm _24_config_staff ">
                <input type="text" name="searchcontent" class="form-control" placeholder="通知标题、内容">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">搜索</button>
                </span>
            </div>
        </form>
    </div>
    <div class="_011_RequestList">
        通知列表
    </div>
    <div class="_014_RequestList">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>编号</th>
                <th style="width: 500px;">通知标题</th>
                <th>发布时间</th>
                <th>发布人</th>
                <th>浏览次数</th>
            </tr>
            <tbody>
            <?php if (count($_smarty_tpl->tpl_vars['res']->value)==0) {?>
            <tr>
                <td colspan="5">
                    <div class="_46_knowledge"><a>没有找到相关通知</a></div>
                </td>
            </tr>
            <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']++;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['res']['index']+1;?>
</td>
                <td><a href="/itildemo/home/controller/share/news_detail.php?news_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['news_title'];?>
</a>
                </td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['news_time'],'%y/%m/%d %H:%M');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['news']->value['news_author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['news']->value['news_read'];?>
</td>
            </tr>
            <?php } ?>
            <?php }?>
            </tbody>
            </thead>
        </table>
    </div>
    <div class="_015_RequestList"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</div>

</div>
</body>
</html><?php }} ?>
