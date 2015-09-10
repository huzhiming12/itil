<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-08 03:18:51
         compiled from "F:\wamp\www\itildemo\templates\admin\request_inquiry.html" */ ?>
<?php /*%%SmartyHeaderCode:1089055e3f86e8afd41-50589588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccfa7bcc337d89e69a159ac83a0620cb418af059' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_inquiry.html',
      1 => 1441682328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089055e3f86e8afd41-50589588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e3f86ea87c84_92606565',
  'variables' => 
  array (
    'res' => 0,
    'req' => 0,
    'navi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3f86ea87c84_92606565')) {function content_55e3f86ea87c84_92606565($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/locales/bootstrap-datetimepicker.zh-CN.js"><?php echo '</script'; ?>
>
    <title></title>
</head>


<body background="/itildemo/static/img/bg.png">
<br>

<div class="_012_RequestList">
    <div class="_013_RequestList">
        <br>

        <div class="form-group _015_RequestList">
            <table>
                <form action="/itildemo/home/controller/admin/request_inquiry.php" method="GET">
                    <tr>
                        <td>条件关系：</td>
                        <td class="input-group-sm">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-success active">
                                    <input type="radio" name="and_or" value="and"  autocomplete="off" checked> and
                                </label>
                                <label class="btn btn-success">
                                    <input type="radio" name="and_or" value="or" autocomplete="off"> or
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>请求日期：</td>
                        <td>&nbsp;&nbsp;起始日期：</td>
                        <td class="input-group-sm">
                            <input type="text" name="start_date" class="form-control datetimepicker" readonly>
                        </td>
                        <td>&nbsp;&nbsp;截至日期：</td>
                        <td class="input-group-sm">
                            <input type="text" name="end_date" class="form-control datetimepicker" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="form-group">
                        <td colspan="1">请求状态：&nbsp;&nbsp;</td>
                        <td colspan="4" class="input-group-sm">
                            <select name="req_state" class="form-control" style="width:150px;">
                                <option value="">全部</option>
                                <option value="未处理">未处理</option>
                                <option value="已指派">已指派</option>
                                <option value="已解决">已解决</option>
                                <option value="已取消">已取消</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="form-group">
                        <td>
                            &nbsp;关&nbsp;键&nbsp;字：&nbsp;&nbsp;
                        </td>
                        <td colspan="4" class="form-group-sm">
                            <input name="keyword" class="form-control" style="width:200px">
                        </td>
                        <td style="width: 250px"></td>
                        <td>
                            <button name="search_btn" class="btn btn-sm btn-primary">&nbsp;&nbsp;搜&nbsp;&nbsp;索&nbsp;&nbsp;</button>
                        </td>
                    </tr>
                </form>
            </table>
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
            <?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['req']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['req']['index']++;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['req']['index']+1;?>
</td>
                <td><a href="/itildemo/home/controller/admin/request_detail.php?req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_state'];?>
</td>
                <td>删除</td>
            </tr>
            <?php } ?>
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
<?php echo '<script'; ?>
 type="text/javascript">
    $('.datetimepicker').datetimepicker({
        format: 'yyyy-MM-dd',
        language: 'zh-CN',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
<?php echo '</script'; ?>
>

</html><?php }} ?>
