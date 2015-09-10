<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-01 01:24:15
         compiled from "F:\wamp\www\itildemo\templates\admin\config_user.html" */ ?>
<?php /*%%SmartyHeaderCode:2484655a1de2b493996-87700018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898a4441922a25c2a38b25b4412e5a19aee11511' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\config_user.html',
      1 => 1441070651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484655a1de2b493996-87700018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a1de2b632fe1_40651840',
  'variables' => 
  array (
    'navi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a1de2b632fe1_40651840')) {function content_55a1de2b632fe1_40651840($_smarty_tpl) {?><!DOCTYPE html>
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
    <title></title>
</head>
<body>

<div class="_21_config_staff">
    <div class="_028_config_user">
        <div class="_23_config_staff">
            <div class="input-group input-group-sm _24_config_staff " style="float: left">
                <input type="text" class="form-control" placeholder="人员姓名、职位、单位等">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">搜索</button>
                </span>
            </div>
            <div class="input-group input-group-sm _24_config_staff ">
                <select class="form-control">
                    <option>全部</option>
                    <option>工程师</option>
                    <option>管理员</option>
                    <option>用户</option>
                </select>
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">搜索</button>
                </span>
            </div>
        </div>
        <div class="_011_RequestList">
            账号列表 &nbsp;&nbsp;
            <a href="#" title="添加登录帐号">
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
                    <h4 class="modal-title">添加登录帐号</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">帐号:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="帐号">
                        </div>
                        <label for="inputPassword" class="col-sm-2 control-label">关联人员:</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="职工编号">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label for="inputPassword" class="col-sm-2 control-label">角色:</label>
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
