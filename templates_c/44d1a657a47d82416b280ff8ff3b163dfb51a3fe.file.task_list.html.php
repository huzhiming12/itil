<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 16:20:05
         compiled from "F:\wamp\www\itildemo\templates\engineer\task_list.html" */ ?>
<?php /*%%SmartyHeaderCode:909155f8056a783865-38473970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d1a657a47d82416b280ff8ff3b163dfb51a3fe' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\engineer\\task_list.html',
      1 => 1442391601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '909155f8056a783865-38473970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f8056a7fef22_50990536',
  'variables' => 
  array (
    'res' => 0,
    'req' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f8056a7fef22_50990536')) {function content_55f8056a7fef22_50990536($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\itildemo\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <div class="_011_RequestList">
        任务清单
    </div>
    <br>

    <div class="_034_request_home">
        <ul id="myTab" class="nav nav-tabs title_font">
            <li class="active"><a href="#do" data-toggle="tab">我的待办</a></li>
            <li><a href="#done" data-toggle="tab">我的已办</a></li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _007_MyBoard">
        <div class="tab-pane active" id="do">
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
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['res']['index']+1;?>
</td>
                    <td><a href="task_detail.php?req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
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
        </div>
        <div class="tab-pane" id="done">

        </div>
    </div>

</div>

</body>
</html><?php }} ?>
