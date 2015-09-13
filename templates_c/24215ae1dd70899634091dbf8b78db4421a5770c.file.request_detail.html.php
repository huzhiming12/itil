<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 09:16:17
         compiled from "F:\wamp\www\itildemo\templates\admin\request_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2072355ee356769d979-80355304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24215ae1dd70899634091dbf8b78db4421a5770c' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_detail.html',
      1 => 1442135767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2072355ee356769d979-80355304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ee35677246e4_12631760',
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee35677246e4_12631760')) {function content_55ee35677246e4_12631760($_smarty_tpl) {?><!DOCTYPE html>
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

<div class="_012_RequestList">
    <div class="_011_RequestList">
        请求详情
    </div>
    <div class="_018_Title">
        <?php echo $_smarty_tpl->tpl_vars['res']->value['req_title'];?>

    </div>
    <br>

    <div class="_019_KnowledgeDetail">
        <font color="#999">key words：<?php echo $_smarty_tpl->tpl_vars['res']->value['req_keyword'];?>
&nbsp;&nbsp;&nbsp;&nbsp;分类：<?php echo $_smarty_tpl->tpl_vars['res']->value['req_sort'];?>
</font>
    </div>
    <br>

    <div class="_015_RequestList">
        <?php echo $_smarty_tpl->tpl_vars['res']->value['req_content'];?>

    </div>
    <br><br>

    <div class="_020_KnowledgeDetail">
        创建：刘美美 2013-5-5 9:58 更新：刘美美 2013-5-15 16:46 阅读(88) 评论(2)
    </div>
    <br>

    <div class="_015_RequestList">
        <font style="font-weight: bold">附件:</font><br><br>
        <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/itildemo/uploadfile/files/<?php echo $_smarty_tpl->tpl_vars['res']->value['attach_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['res']->value['attach_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['attach_name'];?>
</a>
        </p>
        <?php } ?>

    </div>
    <br>
    <div class="_46_knowkedge">
        <button class="btn btn-sm btn-default" onclick="history.go(-1)">返回</button>
    </div>
    <br>

</div>
</body>
</html><?php }} ?>
