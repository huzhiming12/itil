<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-11 01:51:01
         compiled from "F:\wamp\www\itildemo\templates\admin\config_staff.html" */ ?>
<?php /*%%SmartyHeaderCode:1822355a1de335d3062-09046241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5567e853a1a58a23739c4e5b7dc669f5c78afe14' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\config_staff.html',
      1 => 1441936255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822355a1de335d3062-09046241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a1de337ace89_06422569',
  'variables' => 
  array (
    'tree' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a1de337ace89_06422569')) {function content_55a1de337ace89_06422569($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/itildemo/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/itildemo/static/css/mystyle.css">
    <link rel="stylesheet" href="/itildemo/plugins/jquery-easyui-1.4.3/themes/default/easyui.css">
    <link rel="stylesheet" href="/itildemo/plugins/jquery-easyui-1.4.3/themes/icon.css">
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/plugins/jquery-easyui-1.4.3/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
 language="javascript">
function searchStaff()
{
    keyword = document.getElementById('searchcontent').value;
    AJAX("/itildemo/home/controller/admin/user_list.php?flag=2&keyword="+keyword+"",'box');
}
<?php echo '</script'; ?>
>

<body background="/itildemo/static/img/bg.png" onload="AJAX('/itildemo/home/controller/admin/user_list.php','box');">
<div class="_21_config_staff">
    <div class="_22_config_staff">
        <ul class="easyui-tree">
            <li>
                <span>全部机构 </span>
                <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

            </li>
        </ul>
    </div>
    <div class="_25_config_staff">
        <div class="_23_config_staff">
            <div class="input-group input-group-sm _24_config_staff ">
                <input type="text" id="searchcontent" class="form-control" placeholder="人员姓名、职务、机构、职工号">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button" onclick="searchStaff()">搜索</button>
                </span>
            </div>
        </div>
        <div class="_011_RequestList">
            人员列表 &nbsp;&nbsp;
            <a href="#" title="添加人员">
                <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#myModal">
                    +
                </button>
            </a>
        </div>
        <div class="_015_RequestList" id="box">
        </div>
        <br>
    </div>
</div>

<!--添加人员窗口-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <form class="form-horizontal" action="/itildemo/home/service/staff_ser.php" method="post" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加人员</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">登录帐号：</label>
                        <div class="col-sm-4">
                            <input type="text" name="username" class="form-control" placeholder="ID">
                        </div>
                        <label class="col-sm-2 control-label">角色:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="role">
                                <option value="1">用户</option>
                                <option value="2">工程师</option>
                                <option value="3">管理员</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">姓名:</label>

                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" placeholder="姓名">
                        </div>
                        <label class="col-sm-2 control-label">职工号:</label>

                        <div class="col-sm-4">
                            <input type="text" name="staff_id" class="form-control" placeholder="职工编号">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="inputPassword" class="col-sm-2 control-label">所属机构:</label>

                        <div class="col-sm-4">
                            <input type="text" id="depart_name" class="form-control" placeholder="所属机构" readonly>
                            <input type="hidden" id="depart_id" name="depart_id">
                        </div>
                        <label for="inputPassword" class="col-sm-2 control-label">性别:</label>

                        <div class="col-sm-4">
                            <label for="man">男</label>
                            <input type="radio" name="sex" checked="true" id="man" value="man">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <label for="woman">女</label>
                            <input type="radio" name="sex" checked="true" id="woman" value="woman">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">职务:</label>

                        <div class="col-sm-4">
                            <input type="text" name="position" class="form-control" placeholder="职务">
                        </div>
                        <label class="col-sm-2 control-label">办公电话:</label>

                        <div class="col-sm-4">
                            <input type="tel" name="phone" class="form-control" placeholder="办公电话">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">手机号:</label>

                        <div class="col-sm-4">
                            <input type="tel" name="telphone" class="form-control" placeholder="手机号">
                        </div>
                        <label class="col-sm-2 control-label">邮箱:</label>

                        <div class="col-sm-4">
                            <input type="email" name="email" class="form-control" placeholder="邮箱">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="submit" name="add_staff">保存</button>
                    <button class="btn btn-danger btn-sm " type="reset">重置</button>
                    <button class="btn btn-default btn-sm " data-dismiss="modal">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html><?php }} ?>
