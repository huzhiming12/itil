<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-13 01:55:44
         compiled from "F:\wamp\www\itildemo\templates\engineer\info.html" */ ?>
<?php /*%%SmartyHeaderCode:224525615d476f3e426-63167560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b289e09c1c015a185b347293b950caae63815129' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\engineer\\info.html',
      1 => 1444701341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224525615d476f3e426-63167560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5615d477083c44_20842822',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615d477083c44_20842822')) {function content_5615d477083c44_20842822($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="_014_RequestList">
        <div class="_53_user_info">&nbsp;&nbsp;&nbsp;个人明细</div><br>

        <div class="form-horizontal">
            <div class="form-group form-group-sm">
                <label class="control-label col-sm-2">帐号：</label>

                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-1"></div>
                <label class="control-label col-sm-1">姓名：</label>

                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="control-label col-sm-2">员工ID：</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="_53_user_info">&nbsp;&nbsp;&nbsp;联系方式</div><br>
        <div class="form-horizontal">
            <div class="form-group form-group-sm">
                <label class="control-label col-sm-2">电话：</label>

                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-1"></div>
                <label class="control-label col-sm-1">手机：</label>

                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="control-label col-sm-2">邮箱：</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="_53_user_info">&nbsp;&nbsp;&nbsp;部门信息</div><br>
        <div class="form-horizontal">
            <div class="form-group form-group-sm">
                <label class="control-label col-sm-2">所在部门(单位)：</label>

                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-1"></div>
                <label class="control-label col-sm-1">职务：</label>

                <div class="col-sm-3">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <br>
        <div class="_46_knowledge">
            <button class="btn btn-sm btn-primary"> 编 辑 </button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-sm btn-warning" data-toggle="popover" data-placement="top"
                    data-html="true" data-content="
                    <form>
                    <div class='form-horizontal'>
                        <div class='form-group form-group-sm'>
                            <label class='control-label col-sm-4'>原密码：</label>
                            <div class='col-sm-8'>
                                <input type='password' class='form-control'>
                            </div>
                        </div>
                         <div class='form-group form-group-sm'>
                            <label class='control-label col-sm-4'>原密码：</label>
                            <div class='col-sm-8'>
                                <input type='text' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group form-group-sm'>
                            <label class='control-label col-sm-4'>确认密码：</label>
                            <div class='col-sm-8'>
                                <input type='text' class='form-control'>
                            </div>
                        </div>
                    </div>
                    <div class='_46_knowledge'>
                        <button class='btn btn-sm btn-primary'>修改</button>&nbsp;&nbsp;
                        <button class='btn btn-sm btn-default' onclick='hidePopover()' type='reset'>取消</button>
                    </div>
                    </form>
                "> 修改密码 </button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-sm btn-default"> 返 回 </button>&nbsp;&nbsp;&nbsp;
        </div>

    </div>

</div>

</body>
</html>

<?php echo '<script'; ?>
>
    $(function () {
        $('[data-toggle="popover"]').popover();
    })

    function hidePopover()
    {
        $('[data-toggle="popover"]').popover('hide')
    }
<?php echo '</script'; ?>
><?php }} ?>
