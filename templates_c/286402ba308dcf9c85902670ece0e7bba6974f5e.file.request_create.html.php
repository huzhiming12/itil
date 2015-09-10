<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 01:59:20
         compiled from "F:\wamp\www\itildemo\templates\admin\request_create.html" */ ?>
<?php /*%%SmartyHeaderCode:1505559f72aac941a0-30030718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '286402ba308dcf9c85902670ece0e7bba6974f5e' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_create.html',
      1 => 1436666354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1505559f72aac941a0-30030718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559f72aad6de86_60206651',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f72aad6de86_60206651')) {function content_559f72aad6de86_60206651($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <title></title>
</head>
<body background="/itildemo/static/img/bg.png">
<div class="_012_RequestList">
    <div class="_011_RequestList">
        请求列表
    </div>
    <br>

    <div class="_013_RequestList">
        <div class="_013_RequestList">
            <form class="form-inline form-group-sm">
                <div class="_015_RequestList">
                    <label class="">请求标题：</label>
                    <input class="form-control" style="width: 60%"  type="text">
                </div>
                <br>
                <div class=" _015_RequestList">
                    <label class="">请求分类：</label>
                    <input class="form-control" style="width: 60%"type="text">
                </div>
                <br>
                <div class=" _015_RequestList">
                    <label class="">&nbsp;关 键 字：</label>
                    <input class="form-control" style="width: 60%" type="text">
                </div>
                <br>
                <div class=" _015_RequestList">
                    <label class="">&nbsp;创 建 者：</label>
                    <input class="form-control" style="width: 60%" type="text">
                </div>
                <br>

                <div class="_015_RequestList">
                    <textarea name="content" id="content"></textarea>
                    <?php echo '<script'; ?>
>
                        CKEDITOR.replace("content", {
                            filebrowserBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html?Type=Images',
                            filebrowserFlashBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html?Type=Flash',
                            filebrowserUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                    <?php echo '</script'; ?>
>
                </div>
                <br>
                <button class="btn btn-primary btn-sm _017_AddRequest">提交请求</button>
                <br><br><br>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>
