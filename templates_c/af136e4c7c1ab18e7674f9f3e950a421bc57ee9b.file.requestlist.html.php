<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 06:33:09
         compiled from "F:\wamp\www\itildemo\templates\user\requestlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1776355a20a25bfd323-97839385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af136e4c7c1ab18e7674f9f3e950a421bc57ee9b' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\user\\requestlist.html',
      1 => 1436671699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1776355a20a25bfd323-97839385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a20a25c99fd7_28885583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a20a25c99fd7_28885583')) {function content_55a20a25c99fd7_28885583($_smarty_tpl) {?><!DOCTYPE html>
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
<body background="/itildemo/static/img/bg.png">
<div class="_012_RequestList">
    <div class="_013_RequestList">
        <br>
        <div class="form-group _015_RequestList">
            <table>
                <tr>
                    <td>请求日期：</td>
                    <td>&nbsp;&nbsp;起始日期：</td>
                    <td><input class="easyui-datebox" data-options="sharedCalendar:'#cc'"></td>
                    <td>&nbsp;&nbsp;截至日期：</td>
                    <td><input class="easyui-datebox" data-options="sharedCalendar:'#cc'"></td>
                </tr>
            </table>
            <div id="cc" class="easyui-calendar"></div>
        </div>
        <div class="form-group _015_RequestList">
            请求状态：&nbsp;&nbsp;
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
            <input class="easyui-searchbox" data-options="prompt:'Please Input Value'" style="width:200px">
        </div>

    </div>
    <div class="_011_RequestList">
        请求列表
    </div>
    <div class="_014_RequestList">
        <table class="table table-hover">
            <thead>
            <tr>
                <td></td>
                <th>请求编号</th>
                <th>请求标题</th>
                <th>请求人</th>
                <th>请求时间</th>
                <th>请求状态</th>
                <th>操作</th>
            </tr>
            <tbody>
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
    <hr class="_016_RequestList_line">
    <div class="_015_RequestList">
        <?php echo $_smarty_tpl->tpl_vars['navi']->value;?>

    </div>
    <br><br>


</div>
</body>
</html><?php }} ?>
