<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-22 12:28:51
         compiled from "F:\wamp\www\itildemo\templates\share\notice_list.html" */ ?>
<?php /*%%SmartyHeaderCode:5893560147f8549724-63110837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570717161f90340cff610f05cebf47866b4a9b88' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\notice_list.html',
      1 => 1442924925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5893560147f8549724-63110837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560147f85c0157_20969738',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560147f85c0157_20969738')) {function content_560147f85c0157_20969738($_smarty_tpl) {?><!DOCTYPE html>
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
        <form method="get" action="/itildemo/home/controller/admin/notice_list.php">
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
                <th>请求编号</th>
                <th>请求标题</th>
                <th>请求人</th>
                <th>请求时间</th>
                <th>请求状态</th>
                <th>操作</th>
            </tr>
            <tbody>
            <tr>
            </tbody>
            </thead>
        </table>
    </div>

</div>
</body>
</html><?php }} ?>
