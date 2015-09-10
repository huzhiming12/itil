<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 03:15:50
         compiled from "F:\wamp\www\itildemo\templates\user\addrequest.html" */ ?>
<?php /*%%SmartyHeaderCode:6495559f74cf796861-52642698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e63e3fc1d1673fee45bf40da9353e6d2048e024f' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\user\\addrequest.html',
      1 => 1436517994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6495559f74cf796861-52642698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559f74cf921bc9_10940020',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f74cf921bc9_10940020')) {function content_559f74cf921bc9_10940020($_smarty_tpl) {?><!DOCTYPE html>
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
<?php echo '<script'; ?>
>
    $.extend($.fn.textbox.methods, {
        addClearBtn: function (jq, iconCls) {
            return jq.each(function () {
                var t = $(this);
                var opts = t.textbox('options');
                opts.icons = opts.icons || [];
                opts.icons.unshift({
                    iconCls: iconCls,
                    handler: function (e) {
                        $(e.data.target).textbox('clear').textbox('textbox').focus();
                        $(this).css('visibility', 'hidden');
                    }
                });
                t.textbox();
                if (!t.textbox('getText')) {
                    t.textbox('getIcon', 0).css('visibility', 'hidden');
                }
                t.textbox('textbox').bind('keyup', function () {
                    var icon = t.textbox('getIcon', 0);
                    if ($(this).val()) {
                        icon.css('visibility', 'visible');
                    } else {
                        icon.css('visibility', 'hidden');
                    }
                });
            });
        }
    });

    $(function () {
        $('#tt').textbox().textbox('addClearBtn', 'icon-clear');
        $('#keyword').textbox().textbox('addClearBtn', 'icon-clear');
    });
<?php echo '</script'; ?>
>
<body background="/itildemo/static/img/bg.png">
<div class="_012_RequestList">
    <div class="_011_RequestList">
        请求列表
    </div>
    <br>

    <div class="_013_RequestList">
        <div class="_013_RequestList">
            <div class="form-group _015_RequestList">
                请求标题：&nbsp;&nbsp;
                <input id="tt" style="width:200px" data-options="prompt: '请求标题'">
            </div>
            <div class="form-group _015_RequestList">
                请求分类：&nbsp;&nbsp;
                <select class="easyui-combobox" name="state" style="width:150px;">
                    <option value="">全部</option>
                    <option value="">未处理</option>
                    <option value="">已指派</option>
                    <option value="">已解决</option>
                    <option value="">已取消</option>
                </select>
            </div>
            <div class="form-group _015_RequestList">
                &nbsp;关&nbsp;键&nbsp;字：&nbsp;&nbsp;
                <input id="keyword" style="width:200px" data-options="prompt: 'keyword'">
            </div>
            <div class="_015_RequestList">
                <textarea name="content"  id="content"></textarea>
                <?php echo '<script'; ?>
>
                    CKEDITOR.replace("content",{
                        filebrowserBrowseUrl :  '/itildemo/plugins/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl :  '/itildemo/plugins/ckfinder/ckfinder.html?Type=Images',
                        filebrowserFlashBrowseUrl :  '/itildemo/plugins/ckfinder/ckfinder.html?Type=Flash',
                        filebrowserUploadUrl :  '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl  :  '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl  :  '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'});
                <?php echo '</script'; ?>
>
            </div>
            <br>
            <button class="btn btn-primary btn-sm _017_AddRequest">提交请求</button>
            <br><br><br>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>
