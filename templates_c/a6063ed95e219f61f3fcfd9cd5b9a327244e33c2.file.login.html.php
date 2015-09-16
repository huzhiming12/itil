<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 01:17:56
         compiled from "F:\wamp\www\itildemo\templates\share\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1042555f8c3446476c7-63712636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6063ed95e219f61f3fcfd9cd5b9a327244e33c2' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\login.html',
      1 => 1442365929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1042555f8c3446476c7-63712636',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f8c3446ed688_78681304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f8c3446ed688_78681304')) {function content_55f8c3446ed688_78681304($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" action="/itildemo/home/controller/share/login.php">
用户名：<input type="text" name="user_name"><br>
密码：<input type="password" name="pwd"><br>
    <label for="user">用户</label>
    <input type="radio" id="user" name="role" value="user" checked>
    <label for="engineer">工程师</label>
    <input type="radio" id="engineer" name="role" value="engineer">
    <label for="admin">管理员</label>
    <input type="radio" id="admin" name="role" value="admin"><br>
    <button type="submit">登录</button>
</form>
</body>
</html><?php }} ?>
