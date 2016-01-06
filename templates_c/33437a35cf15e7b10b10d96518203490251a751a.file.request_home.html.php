<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-10 20:00:37
         compiled from "F:\wamp\www\itildemo\templates\admin\request_home.html" */ ?>
<?php /*%%SmartyHeaderCode:2595255a20a27136c40-20673934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33437a35cf15e7b10b10d96518203490251a751a' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_home.html',
      1 => 1444478418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2595255a20a27136c40-20673934',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a20a27210b63_26805566',
  'variables' => 
  array (
    'undo_req' => 0,
    'change_req' => 0,
    'over_time_req' => 0,
    'doing_req' => 0,
    'req' => 0,
    'undo_req_num' => 0,
    'change_req_num' => 0,
    'over' => 0,
    'over_time_req_num' => 0,
    'doing_req_num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a20a27210b63_26805566')) {function content_55a20a27210b63_26805566($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\itildemo\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 language="javascript" src="/itildemo/static/js/ajax.js"><?php echo '</script'; ?>
>
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <div class="_034_request_home">
        <ul id="myTab" class="nav nav-tabs title_font">
            <li class="active"><a href="#home" data-toggle="tab">待审核请求(<?php echo count($_smarty_tpl->tpl_vars['undo_req']->value);?>
)</a></li>
            <li><a href="#ios" data-toggle="tab">变更请求(<?php echo count($_smarty_tpl->tpl_vars['change_req']->value);?>
)</a></li>
            <li><a href="#java" data-toggle="tab">逾期请求(<?php echo count($_smarty_tpl->tpl_vars['over_time_req']->value);?>
)</a></li>
            <li><a href="#req" data-toggle="tab">请求追踪(<?php echo count($_smarty_tpl->tpl_vars['doing_req']->value);?>
)</a> </li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _007_MyBoard">
        <!--请求列表-->
        <div class="tab-pane in active" id="home">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th>请求编号</th>
                    <th>请求标题</th>
                    <th>请求分类</th>
                    <th>请求人</th>
                    <th>请求时间</th>
                    <th>请求状态</th>
                </tr>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['undo_req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['req']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['req']['index']++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['req']['index']+1;?>
</td>
                    <td>
                        <a href="request_assign.php?req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
</a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_sort'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_time'];?>
</td>
                    <td>
                        <span class="_span_new">&nbsp;未处理&nbsp;</span>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                </thead>
            </table>
            <?php if (count($_smarty_tpl->tpl_vars['undo_req']->value)!=0) {?>
            <a href="/itildemo/home/service/excel_export_ser.php?list=<?php echo $_smarty_tpl->tpl_vars['undo_req_num']->value;?>
&title=待审核请求列表" class="_52_Excel_export">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;导出</a>
            <?php }?>
        </div>
        <!--变更列表-->
        <div class="tab-pane" id="ios">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th>请求编号</th>
                    <th>请求标题</th>
                    <th>请求人</th>
                    <th>请求时间</th>
                    <th>当前工程师</th>
                    <th>变更时间</th>
                </tr>
                <tbody>
            <?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['change_req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['res']['index']+1;?>
</td>
                    <td><a href="/itildemo/home/controller/admin/request_assign.php?flag=re_assign&req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['req']->value['req_time'],'%y/%m/%d %H:%M');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_engineer'];?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['req']->value['change_time'],'%y/%m/%d %H:%M');?>
</td>
                </tr>
            <?php } ?>
                </tbody>
                </thead>
            </table>
            <?php if (count($_smarty_tpl->tpl_vars['change_req']->value)!=0) {?>
            <a href="/itildemo/home/service/excel_export_ser.php?list=<?php echo $_smarty_tpl->tpl_vars['change_req_num']->value;?>
&title=变更请求列表" class="_52_Excel_export">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;导出</a>
            <?php }?>
        </div>
        <!--逾期列表-->
        <div class="tab-pane" id="java">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th>请求编号</th>
                    <th>请求标题</th>
                    <th>请求人</th>
                    <th>请求时间</th>
                    <th>指派时间</th>
                    <th>当前工程师</th>
                    <th style="color: red">超时</th>
                </tr>
                <tbody>
            <?php  $_smarty_tpl->tpl_vars['over'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['over']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['over_time_req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['req']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['over']->key => $_smarty_tpl->tpl_vars['over']->value) {
$_smarty_tpl->tpl_vars['over']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['req']['index']++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['req']['index']+1;?>
</td>
                    <td><a href="/itildemo/home/controller/admin/request_assign.php?flag=over_assign&req_num=<?php echo $_smarty_tpl->tpl_vars['over']->value['req_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['over']->value['req_num'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['over']->value['req_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['over']->value['req_author'];?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['over']->value['req_time'],'%y/%m/%d %H:%M');?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['over']->value['assign_time'],'%y/%m/%d %H:%M');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['over']->value['req_engineer'];?>
</td>
                    <td><span style="color:red;"><?php echo sprintf("%d",($_smarty_tpl->tpl_vars['over']->value['time_left']/3600));?>
小时<?php echo sprintf("%d",($_smarty_tpl->tpl_vars['over']->value['time_left']%3600/60));?>
分</span></td>
                </tr>
            <?php } ?>
                </tbody>
                </thead>
            </table>
            <?php if (count($_smarty_tpl->tpl_vars['over_time_req']->value)!=0) {?>
            <a href="/itildemo/home/service/excel_export_ser.php?list=<?php echo $_smarty_tpl->tpl_vars['over_time_req_num']->value;?>
&title=逾期请求列表" class="_52_Excel_export">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;导出</a>
            <?php }?>
        </div>
        <!--请求追踪-->
        <div class="tab-pane" id="req">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>请求编号</th>
                    <th>请求标题</th>
                    <th>请求人</th>
                    <th>请求时间</th>
                    <th>指派时间</th>
                    <th>优先级</th>
                    <th>影响范围</th>
                    <th><span style="color: #009900">余时</span>/<span style="color: red">超时</span></th>
                </tr>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['doing_req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['res']['index']+1;?>
</td>
                    <td><a href="/itildemo/home/controller/admin/request_assign.php?req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
&flag=doing_req"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
</a></td>
                    <td style="max-width: 200px;"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</td>
                    <td style="max-width: 80px;"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['req']->value['req_time'],'%y/%m/%d %H:%M');?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['req']->value['assign_time'],'%y/%m/%d %H:%M');?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['req']->value['req_priority']==1) {?>
                        <div class="_span_low">&nbsp;低&nbsp;</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_priority']==2) {?>
                        <div class="_span_middle">&nbsp;中&nbsp;</div>
                        <?php } else { ?>
                        <div class="_span_high">&nbsp;高&nbsp;</div>
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['req']->value['req_effect']==1) {?>
                        <div class="_span_low">&nbsp;个人&nbsp;</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_effect']==2) {?>
                        <div class="_span_middle">&nbsp;部门&nbsp;</div>
                        <?php } else { ?>
                        <div class="_span_high">&nbsp;单位&nbsp;</div>
                        <?php }?>
                    </td>
                    <td><?php if ($_smarty_tpl->tpl_vars['req']->value['flag']) {?>
                        <span style="color: red"><?php echo $_smarty_tpl->tpl_vars['req']->value['hour'];?>
小时<?php echo $_smarty_tpl->tpl_vars['req']->value['minute'];?>
分</span>
                        <?php } else { ?>
                        <span style="color: #009900"><?php echo $_smarty_tpl->tpl_vars['req']->value['hour'];?>
小时<?php echo $_smarty_tpl->tpl_vars['req']->value['minute'];?>
分</span>
                        <?php }?>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                </thead>
            </table>
            <?php if (count($_smarty_tpl->tpl_vars['doing_req']->value)!=0) {?>
            <a href="/itildemo/home/service/excel_export_ser.php?list=<?php echo $_smarty_tpl->tpl_vars['doing_req_num']->value;?>
" class="_52_Excel_export">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;导出</a>
            <?php }?>
        </div>

        <br><br>
    </div>
</div>

</body>
</html><?php }} ?>
