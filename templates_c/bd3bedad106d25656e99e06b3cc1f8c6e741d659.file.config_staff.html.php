<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 03:19:21
         compiled from "F:\wamp\www\itildemo\templates\admin\config_staff.html" */ ?>
<?php /*%%SmartyHeaderCode:26059559f7498009ce9-50614118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd3bedad106d25656e99e06b3cc1f8c6e741d659' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\config_staff.html',
      1 => 1436671158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26059559f7498009ce9-50614118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559f7498809527_45873976',
  'variables' => 
  array (
    'navi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f7498809527_45873976')) {function content_559f7498809527_45873976($_smarty_tpl) {?><!DOCTYPE html>
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

<?php echo '</script'; ?>
>

<body background="/itildemo/static/img/bg.png">
<div class="_21_config_staff">
    <div class="_22_config_staff">
        <ul class="easyui-tree">
            <li>
                <span>全部机构 </span>
                <ul>
                    <li>
                        <span>运维部</span>
                        <ul>
                            <li><span>File 11</span></li>
                            <li><span>File 12</span></li>
                            <li>
                                <span>File 13</span>
                                <ul>
                                    <li><span>file</span></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>运维部</span>
                        <ul>
                            <li><span>File 11</span></li>
                            <li><span>File 12</span></li>
                            <li>
                                <span>File 13</span>
                                <ul>
                                    <li><span>file</span></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>客户部门</span>
                        <ul>
                            <li><span>File 11</span></li>
                            <li><span>File 12</span></li>
                            <li>
                                <span>File 13</span>
                                <ul>
                                    <li><span>file</span></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="_25_config_staff">
        <div class="_23_config_staff">
            <div class="input-group input-group-sm _24_config_staff ">
                <input type="text" class="form-control" placeholder="人员姓名、职位、单位等">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">搜索</button>
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
        <div class="_015_RequestList">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td></td>
                    <th>姓名</th>
                    <th>职工号</th>
                    <th>所属机构</th>
                    <th>职务</th>
                    <th>联系方式</th>
                    <th>登陆账号</th>
                </tr>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="/itildemo/home/controller/user/knowledgedetail.php">SQ15070004</a></td>
                    <td>电脑重装系统</td>
                    <td>韦小宝</td>
                    <td>7-6 17:28</td>
                    <td>已解决</td>
                    <td>删除</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SQ15070004</td>
                    <td>电脑重装系统</td>
                    <td>韦小宝</td>
                    <td>7-6 17:28</td>
                    <td>已解决</td>
                    <td>删除</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SQ15070004</td>
                    <td>电脑重装系统</td>
                    <td>韦小宝</td>
                    <td>7-6 17:28</td>
                    <td>已解决</td>
                    <td>删除</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SQ15070004</td>
                    <td>电脑重装系统</td>
                    <td>韦小宝</td>
                    <td>7-6 17:28</td>
                    <td>已解决</td>
                    <td>删除</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SQ15070004</td>
                    <td>电脑重装系统</td>
                    <td>韦小宝</td>
                    <td>7-6 17:28</td>
                    <td>已解决</td>
                    <td>删除</td>
                </tr>
                </tbody>
                </thead>
            </table>
        </div>
        <br><br>

        <div class="_015_RequestList">
            <?php echo $_smarty_tpl->tpl_vars['navi']->value;?>

        </div>
    </div>
</div>

<!--添加人员窗口-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <form class="form-horizontal" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加人员</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">姓名:</label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="姓名">
                        </div>
                        <label for="inputPassword" class="col-sm-2 control-label">职工号:</label>

                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="职工编号">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="inputPassword" class="col-sm-2 control-label">所属机构:</label>

                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="所属机构">
                        </div>
                        <label for="inputPassword" class="col-sm-2 control-label">性别:</label>

                        <div class="col-sm-4">
                            <label for="man">男</label>
                            <input type="radio" name="option" checked="true" id="man">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <label for="woman">女</label>
                            <input type="radio" name="option" checked="true" id="woman">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="inputPassword" class="col-sm-2 control-label">职务:</label>

                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="职务">
                        </div>
                        <label for="inputPassword" class="col-sm-2 control-label">办公电话:</label>

                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="办公电话">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="inputPassword" class="col-sm-2 control-label">手机号:</label>

                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="手机号">
                        </div>
                        <label for="inputPassword" class="col-sm-2 control-label">邮箱:</label>

                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="邮箱">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="submit">保存</button>
                    <button class="btn btn-danger btn-sm " type="reset">重置</button>
                    <button class="btn btn-default btn-sm "  data-dismiss="modal">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html><?php }} ?>
