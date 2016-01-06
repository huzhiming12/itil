<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-12 01:36:43
         compiled from "F:\wamp\www\itildemo\templates\login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3455561b0cf1814037-69579551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a6996abd474bbd58d38dca39a633a2595976d2e' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\login\\login.html',
      1 => 1444613776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3455561b0cf1814037-69579551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561b0cf18bf9f5_39992510',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b0cf18bf9f5_39992510')) {function content_561b0cf18bf9f5_39992510($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<meta charset="utf-8">
<title>html5响应式后台登录界面模板</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="/itildemo/templates/login/css/supersized.css">
<link rel="stylesheet" href="/itildemo/templates/login/css/login.css">
<link rel="stylesheet" href="/itildemo/templates/login/css/bootstrap.min.css">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="js/html5.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 src="/itildemo/templates/login/js/jquery-1.8.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/itildemo/templates/login/js/jquery.form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/itildemo/templates/login/js/tooltips.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/itildemo/templates/login/js/login.js"><?php echo '</script'; ?>
>
</head>

<body>

<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<img src="images/logo.png" >
			</div>
		
			<div class="login_form">
				<form action="index.html" id="login_form" method="post">
					<div class="form-group">
						<label for="j_username" class="t">帐　号：</label> 
						<input id="email" value="" name="email" type="text" class="form-control x319 in" 
						autocomplete="off">
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in">
					</div>
					<div class="form-group">
						<label for="j_captcha" class="t">验证码：</label>
						 <input id="j_captcha" name="j_captcha" type="text" class="form-control x164 in">
						<img id="captcha_img" alt="点击更换" title="点击更换" src="images/captcha.jpeg" class="m">
					</div>
					<div class="form-group">
						<label class="t"></label>
						<label for="j_remember" class="m">
						<input id="j_remember" type="checkbox" value="true">&nbsp;记住登陆账号!</label>
					</div>
					<div class="form-group space">
						<label class="t"></label>　　　
						<button type="button"  id="submit_btn" 
						class="btn btn-primary">&nbsp;登&nbsp;录&nbsp </button>
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default">
					</div>
				</form>
			</div>
		</div>
		<div class="bottom">Copyright &copy; 2014 - 2015 <a href="#">系统登陆</a></div>
	</div>
</div>

<!-- Javascript -->

<?php echo '<script'; ?>
 src="/itildemo/templates/login/js/supersized.3.2.7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/itildemo/templates/login/js/supersized-init.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/itildemo/templates/login/js/scripts.js"><?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
