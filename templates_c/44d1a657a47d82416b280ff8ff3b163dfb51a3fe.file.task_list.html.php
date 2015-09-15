<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 14:00:27
         compiled from "F:\wamp\www\itildemo\templates\engineer\task_list.html" */ ?>
<?php /*%%SmartyHeaderCode:909155f8056a783865-38473970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d1a657a47d82416b280ff8ff3b163dfb51a3fe' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\engineer\\task_list.html',
      1 => 1442325622,
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
<?php if ($_valid && !is_callable('content_55f8056a7fef22_50990536')) {function content_55f8056a7fef22_50990536($_smarty_tpl) {?><!DOCTYPE html>
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
                    <th>余时/超时</th>
                </tr>
                <tbody>
            <?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
?>
                <tr>
                    <td>1</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_time'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['assign_time'];?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['req']->value['req_priority']==1) {?><div class="_span_low">&nbsp;低&nbsp;</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_priority']==2) {?><div class="_span_middle">&nbsp;中&nbsp;</div>
                        <?php } else { ?><div class="_span_high">&nbsp;高&nbsp;</div>
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['req']->value['req_effect']==1) {?><div class="_span_low">&nbsp;个人&nbsp;</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_effect']==2) {?><div class="_span_middle">&nbsp;部门&nbsp;</div>
                        <?php } else { ?><div class="_span_high">&nbsp;单位&nbsp;</div>
                        <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['times'];?>
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
