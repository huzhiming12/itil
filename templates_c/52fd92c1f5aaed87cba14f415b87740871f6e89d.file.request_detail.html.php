<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 08:56:04
         compiled from "F:\wamp\www\itildemo\templates\share\request_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1546155f7cee85bb8e1-78268792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52fd92c1f5aaed87cba14f415b87740871f6e89d' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\request_detail.html',
      1 => 1442307148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1546155f7cee85bb8e1-78268792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f7cee86d43c0_33071158',
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
    'att' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7cee86d43c0_33071158')) {function content_55f7cee86d43c0_33071158($_smarty_tpl) {?><!DOCTYPE html>
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
        创建：<?php echo $_smarty_tpl->tpl_vars['res']->value['req_author'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['res']->value['req_time'];?>

    </div>
    <br>
    <div class="_015_RequestList">
        <font style="font-weight: bold">附件:</font><br><br>
        <?php  $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['att']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['att']->key => $_smarty_tpl->tpl_vars['att']->value) {
$_smarty_tpl->tpl_vars['att']->_loop = true;
?>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/itildemo/uploadfile/files/<?php echo $_smarty_tpl->tpl_vars['att']->value['attach_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['att']->value['attach_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['att']->value['attach_name'];?>
</a>
        </p>
        <?php } ?>
    </div>
    <br>
    <div class="_46_knowledge">
        <?php if ($_smarty_tpl->tpl_vars['res']->value['req_state']==1) {?>
        <button class="btn btn-sm btn-warning" data-toggle="popover" data-placement="top" data-html="true" data-trigger="focus"
                data-content="
                    <div class='_46_knowledge'><a>确定要注销吗？注销后将<br>不会指派工程师帮您解决问题</a><br><br>
                    <button class='btn btn-sm btn-primary' onclick='window.location.href=&quot;/itildemo/home/service/req_ser.php?cancel_req=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
&quot;'>注销</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class='btn btn-sm btn-default'>取消</button></div>">注销</button>&nbsp;&nbsp;
        <?php }?>
        <button class="btn btn-sm btn-default" onclick="history.go(-1)">返回</button>
    </div>
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