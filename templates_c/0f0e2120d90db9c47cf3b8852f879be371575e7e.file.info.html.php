<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-14 10:57:56
         compiled from "F:\wamp\www\itildemo\templates\share\info.html" */ ?>
<?php /*%%SmartyHeaderCode:30895561c65b4a0e958-28542738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f0e2120d90db9c47cf3b8852f879be371575e7e' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\info.html',
      1 => 1444820272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30895561c65b4a0e958-28542738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561c65b4b3df55_36739191',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c65b4b3df55_36739191')) {function content_561c65b4b3df55_36739191($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="_011_RequestList">
        个人信息&nbsp;&nbsp;
    </div>
    <br>

    <form name="info_form" method="post" action="/itildemo/home/service/staff_ser.php">
        <div class="_014_RequestList">
            <div class="_53_user_info">&nbsp;&nbsp;&nbsp;个人明细</div>
            <br>

            <div class="form-horizontal">
                <div class="form-group form-group-sm">
                    <label class="control-label col-sm-2">帐号：</label>

                    <div class="col-sm-3">
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
" class="form-control" readonly>
                    </div>
                    <div class="col-sm-1"></div>
                    <label class="control-label col-sm-1">姓名：</label>

                    <div class="col-sm-3">
                        <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" class="form-control">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="control-label col-sm-2">员工ID：</label>

                    <div class="col-sm-3">
                        <input type="text" name="staff_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['staff_id'];?>
" class="form-control">
                    </div>
                </div>
            </div>

            <div class="_53_user_info">&nbsp;&nbsp;&nbsp;联系方式</div>
            <br>

            <div class="form-horizontal">
                <div class="form-group form-group-sm">
                    <label class="control-label col-sm-2">电话：</label>

                    <div class="col-sm-3">
                        <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
" class="form-control">
                    </div>
                    <div class="col-sm-1"></div>
                    <label class="control-label col-sm-1">手机：</label>

                    <div class="col-sm-3">
                        <input type="text" name="telephone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['telephone'];?>
" class="form-control">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="control-label col-sm-2">邮箱：</label>

                    <div class="col-sm-3">
                        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" class="form-control">
                    </div>
                </div>
            </div>
            <div class="_53_user_info">&nbsp;&nbsp;&nbsp;部门信息</div>
            <br>

            <div class="form-horizontal">
                <div class="form-group form-group-sm">
                    <label class="control-label col-sm-2">所在部门(单位)：</label>

                    <div class="col-sm-3">
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['depart_name'];?>
" class="form-control" readonly>
                    </div>
                    <div class="col-sm-1"></div>
                    <label class="control-label col-sm-1">职务：</label>

                    <div class="col-sm-3">
                        <input type="text" name="position" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['position'];?>
" class="form-control">
                    </div>
                </div>
            </div>
            <br>

            <div class="_46_knowledge">
                <button class="btn btn-sm btn-primary" name="edit_btn"> 保存修改</button>
                &nbsp;&nbsp;&nbsp;

                <a href="javascript:void(0)" class="btn btn-sm btn-warning" data-toggle="popover" data-placement="top"
                        data-html="true" data-content="
                    <form name='pwd_form' onsubmit='return checkPwd();' method='post' action='/itildemo/home/service/staff_ser.php'>
                    <div class='form-horizontal'>
                        <div class='form-group form-group-sm'>
                            <label class='control-label col-sm-4'>原密码：</label>
                            <div class='col-sm-8'>
                                <input type='password' name='old_pwd' class='form-control'>
                            </div>
                        </div>
                         <div class='form-group form-group-sm'>
                            <label class='control-label col-sm-4'>原密码：</label>
                            <div class='col-sm-8'>
                                <input type='password' name='new_pwd' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group form-group-sm'>
                            <label class='control-label col-sm-4'>确认密码：</label>
                            <div class='col-sm-8'>
                                <input type='password' name='confirm_pwd' class='form-control'>
                            </div>
                        </div>
                    </div>
                    <div class='_46_knowledge'>
                        <button class='btn btn-sm btn-primary' name='pwd_change_btn'>修改</button>&nbsp;&nbsp;
                        <button class='btn btn-sm btn-default' onclick='hidePopover()' type='reset'>取消</button>
                    </div>
                    </form>
                "> 修改密码
                </a>
                &nbsp;&nbsp;&nbsp;
            </div>

        </div>
    </form>
</div>

</body>
</html>

<?php echo '<script'; ?>
>
    $(function () {
        $('[data-toggle="popover"]').popover();
    })

    function hidePopover() {
        $('[data-toggle="popover"]').popover('hide')
    }
    function checkPwd() {
        if (pwd_form.new_pwd.value == "") {
            alert("密码不能为空！")
            return false;
        }
        if (pwd_form.new_pwd.value != pwd_form.confirm_pwd.value) {
            alert("密码前后输入不一致！")
            return false;
        }
    }


<?php echo '</script'; ?>
><?php }} ?>
