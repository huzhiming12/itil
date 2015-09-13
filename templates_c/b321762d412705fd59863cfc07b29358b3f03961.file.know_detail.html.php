<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-13 11:42:09
         compiled from "F:\wamp\www\itildemo\templates\share\know_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1671755f2d67bd50c31-24948832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b321762d412705fd59863cfc07b29358b3f03961' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\know_detail.html',
      1 => 1442144522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671755f2d67bd50c31-24948832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f2d67be42b49_74576056',
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
    'arr' => 0,
    'change' => 0,
    'cha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2d67be42b49_74576056')) {function content_55f2d67be42b49_74576056($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php echo $_smarty_tpl->tpl_vars['res']->value['kno_title'];?>

    </div>
    <br>
    <div class="_019_KnowledgeDetail">
        <font color="#999">key words：<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_keyword'];?>
&nbsp;&nbsp;&nbsp;&nbsp;分类：<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_sort'];?>
</font>
    </div>
    <br>
    <div class="_015_RequestList">
        <?php echo $_smarty_tpl->tpl_vars['res']->value['kno_content'];?>

    </div>
    <br><br>

    <div class="_020_KnowledgeDetail">
        创建：<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_author'];?>
&nbsp; <?php echo $_smarty_tpl->tpl_vars['res']->value['kno_sub_time'];?>
&nbsp;   阅读(88) 评论(2)
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
            <a href="javascript:void(0)" data-toggle="popover" data-placement="right" data-html="true" data-trigger="focus"
                       data-content="<button class='btn btn-sm btn-primary' onclick='window.location.href=&quot;/itildemo/uploadfile/files/<?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_name'];?>
&quot;'>下载</button>&nbsp;&nbsp;
                                     <button class='btn btn-sm btn-delete' onclick='window.location.href=&quot;/itildemo/home/controller/admin/know_detail.php?flag=del&attach_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_id'];?>
&file_name=<?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_name'];?>
&kno_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_num'];?>
&quot;'>删除</button>"><?php echo $_smarty_tpl->tpl_vars['arr']->value['attach_name'];?>
</a>
        </p>
        <?php } ?>
    </div>
    <br>
    <div class="_015_RequestList">
        <b>关联请求：</b><a href="/itildemo/home/controller/admin/request_detail.php?req_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_req_num'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['res']->value['kno_req_num'];?>
</span></a>
    </div>
    <br>
    <div class="_015_RequestList">
        <b>变更信息:</b>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['cha'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cha']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['change']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cha']->key => $_smarty_tpl->tpl_vars['cha']->value) {
$_smarty_tpl->tpl_vars['cha']->_loop = true;
?>
            <li>
                <?php echo $_smarty_tpl->tpl_vars['cha']->value['kno_change_author'];?>
 &nbsp;&nbsp;
                <?php echo $_smarty_tpl->tpl_vars['cha']->value['kno_change_time'];?>
 &nbsp;&nbsp;
                <?php echo $_smarty_tpl->tpl_vars['cha']->value['kno_change'];?>

            </li>
            <?php } ?>
        </ul>
        <br>

    </div>
    <div class="_46_knowkedge">
        <?php if ($_smarty_tpl->tpl_vars['res']->value['kno_state']!='3') {?>
        <button class="btn btn-sm btn-primary" data-toggle="popover" data-placement="top" data-html="true" data-trigger="focus"
                data-content="确定要发布吗？<br><br><button class='btn btn-sm btn-primary' onclick='window.location.href=&quot;/itildemo/home/service/know_ser.php?flag=pass&kno_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_num'];?>
&quot;'>发布</button>&nbsp;&nbsp;
                                              <button class='btn btn-sm btn-default'>取消</button>">发布</button>
        <?php }?>
        <button class="btn btn-sm btn-primary" onclick="window.location.href='/itildemo/home/controller/admin/know_edit.php?kno_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_num'];?>
'">编辑</button>&nbsp;&nbsp;
        <button class="btn btn-sm btn-danger" data-toggle="popover" data-placement="top" data-html="true" data-trigger="focus"
                data-content="确定要发布吗？<br><br><button class='btn btn-sm btn-danger' onclick='window.location.href=&quot;/itildemo/home/service/know_ser.php?flag=del&kno_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['kno_num'];?>
&quot;'>删除</button>&nbsp;&nbsp;
                                              <button class='btn btn-sm btn-default'>取消</button>">删除</button>
        <button class="btn btn-sm btn-default" onclick="history.go(-1)">返回</button>
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
