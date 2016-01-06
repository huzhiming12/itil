<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-12 08:09:38
         compiled from "F:\wamp\www\itildemo\templates\share\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1042555f8c3446476c7-63712636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6063ed95e219f61f3fcfd9cd5b9a327244e33c2' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\login.html',
      1 => 1444637374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1042555f8c3446476c7-63712636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f8c3446ed688_78681304',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f8c3446ed688_78681304')) {function content_55f8c3446ed688_78681304($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
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
    <title>用户登录</title>
</head>
<body class="_login_body">
<div class="_login_form_box">
    <div class="_login_form">
        <form method="post" class="form-horizontal" action="/itildemo/home/controller/share/login.php">
            <div class="form-group">
                <label class="control-label col-sm-3" style=""> 角 色： </label>

                <div class="col-sm-8">
                    <input type="radio" value="user" name="role" id="user" checked>
                    <label for="user">&nbsp;&nbsp;用户</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" value="engineer" name="role" id="engineer">
                    <label for="engineer">&nbsp;&nbsp;工程师</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" value="admin" name="role" id="admin">
                    <label for="admin">&nbsp;&nbsp;管理员</label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">用 户 名：</label>

                <div class="col-sm-8">
                    <input type="text" value="<?php echo $_COOKIE['user_name'];?>
" class="form-control" name="user_name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3"> 密 码：</label>

                <div class="col-sm-8">
                    <input type="password" value="<?php echo $_COOKIE['password'];?>
" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3"></label>

                <div class="col-sm-5">
                    <input type="checkbox" name="remember" value="1" id="remember"
                    <?php if ($_COOKIE['remember']==1) {?>checked<?php }?> >
                    <label class="control-label" for="remember">&nbsp;&nbsp;记住登录帐号密码</label>
                </div>

            </div>
            <div class="_46_knowledge">
                <button type="submit" class="btn btn-primary">登录</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-default">重置</button>
            </div>

        </form>
    </div>
</div>
</body>
</html><?php }} ?>
