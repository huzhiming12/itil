<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-23 03:13:18
         compiled from "F:\wamp\www\itildemo\templates\share\news_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:10221560214fc8f4d23-58235187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e2be0a050bb51e1faf31cc17c528a8113b479de' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\news_detail.html',
      1 => 1442977994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10221560214fc8f4d23-58235187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560214fc9ea749_77207226',
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560214fc9ea749_77207226')) {function content_560214fc9ea749_77207226($_smarty_tpl) {?><!DOCTYPE html>
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
        知识详情
    </div>
    <div class="_018_Title">
        <?php echo $_smarty_tpl->tpl_vars['res']->value['news_title'];?>

    </div>
    <br>

    <div class="_019_KnowledgeDetail">
        <font color="#999">发布人：<?php echo $_smarty_tpl->tpl_vars['res']->value['news_author'];?>
&nbsp;&nbsp;&nbsp;&nbsp;</font>
    </div>
    <br>

    <div class="_015_RequestList">
        <?php echo $_smarty_tpl->tpl_vars['res']->value['news_content'];?>

    </div>
    <br><br>

    <div class="_020_KnowledgeDetail">
        发布时间： <?php echo $_smarty_tpl->tpl_vars['res']->value['news_time'];?>
&nbsp; 阅读(<?php echo $_smarty_tpl->tpl_vars['res']->value['news_read'];?>
)
    </div>
    <br>

    <div class="_015_RequestList">
        <font style="font-weight: bold">附件:</font><br><br>
        <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0)" data-toggle="popover" data-placement="right" data-html="true"
               data-trigger="focus"
               data-content="<button class='btn btn-sm btn-primary' onclick='window.location.href=&quot;/itildemo/uploadfile/files/news/<?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_name'];?>
&quot;'>下载</button>&nbsp;&nbsp;"><?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_name'];?>

            </a>

        </p>
        <?php } ?>
    </div>
    <br>

    <div class="_46_knowledge">
        <?php if ($_SESSION['role']=='admin') {?>
        <button class="btn btn-sm btn-danger" data-toggle="popover" data-placement="top" data-html="true"
                data-trigger="focus"
                data-content="确定要删除吗？<br><br><button class='btn btn-sm btn-danger' onclick='window.location.href=&quot;/itildemo/home/service/news_ser.php?news_delete=<?php echo $_smarty_tpl->tpl_vars['res']->value['news_id'];?>
&quot;'>删除</button>&nbsp;&nbsp;
                                              <button class='btn btn-sm btn-default'>取消</button>">删 除
        </button>
        &nbsp;&nbsp;&nbsp;
        <?php }?>
        <button class="btn btn-sm btn-default" onclick="history.go(-1)">返 回</button>
    </div>
    <br>
    <br>
</div>
</body>
</html>

<?php echo '<script'; ?>
>
    $(function () {
        $('[data-toggle="popover"]').popover();
    })
<?php echo '</script'; ?>
><?php }} ?>
