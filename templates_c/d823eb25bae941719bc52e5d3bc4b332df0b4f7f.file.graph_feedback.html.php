<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-07 12:40:49
         compiled from "F:\wamp\www\itildemo\templates\admin\graph_feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:268985614b084ab5713-46001283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd823eb25bae941719bc52e5d3bc4b332df0b4f7f' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\graph_feedback.html',
      1 => 1444221647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268985614b084ab5713-46001283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5614b084b2dab5_84158419',
  'variables' => 
  array (
    'fd' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5614b084b2dab5_84158419')) {function content_5614b084b2dab5_84158419($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/locales/bootstrap-datetimepicker.zh-CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="javascript" src="/itildemo/plugins/feedback/lib/jquery.raty.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/itildemo/plugins/feedback/demo/css/application.css">
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <div class="_034_request_home">
        <ul id="myTab" class="nav nav-tabs title_font">
            <li class="active"><a href="#home" data-toggle="tab">评价的总体统计</a></li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _015_RequestList">
        <!--按用户单位统计-->
        <div class="tab-pane in active" id="home">

            <div style="width: 100%;border-bottom: 2px solid #426AA3;"></div><br>
            <div style="float: right">
                <div style="line-height: 10px;margin-top: 5px">
                    <span class="start_5"></span>

                    <div class="_chart_star_5" style="width: 80px; border-radius: 3px">&nbsp;</div>
                </div>
                <div style="line-height: 10px;margin-top: 5px">
                    <span class="start_4"></span>

                    <div class="_chart_star_4" style="width: 80px; border-radius: 3px">&nbsp;</div>
                </div>
                <div style="line-height: 10px;margin-top: 5px">
                    <span class="start_3"></span>

                    <div class="_chart_star_3" style="width: 80px; border-radius: 3px">&nbsp;</div>
                </div>
                <div style="line-height: 10px;margin-top: 5px">
                    <span class="start_2"></span>

                    <div class="_chart_star_2" style="width: 80px; border-radius: 3px">&nbsp;</div>
                </div>
                <div style="line-height: 10px;margin-top: 5px">
                    <span class="start_1"></span>

                    <div class="_chart_star_1" style="width: 80px; border-radius: 3px">&nbsp;</div>
                </div>
            </div>
            <label class="control-label">已评价的请求总数：<?php echo $_smarty_tpl->tpl_vars['fd']->value[0][6];?>
</label>
            <table width="100%" class="table">
                <caption><label class="control-label">用户评价的总体统计</label></caption>
                <tr align="center">
                    <td>评价内容</td>
                    <td>平均评价</td>
                    <td colspan="5">各评价分的事件量</td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
                <tr align="center">
                    <td><?php echo $_smarty_tpl->tpl_vars['res']->value[0];?>
</td>
                    <td><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['res']->value[7]);?>
</td>
                    <td width="620px">
                        <a href="#" title="占比例为：<?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['res']->value[5]/$_smarty_tpl->tpl_vars['res']->value[6]*100));?>
%">
                            <div class="_chart_star_5" style="width: <?php echo $_smarty_tpl->tpl_vars['res']->value[5]/$_smarty_tpl->tpl_vars['res']->value[6]*600;?>
px;"><?php echo $_smarty_tpl->tpl_vars['res']->value[5];?>
</div>
                        </a>
                        <a href="#" title="占比例为：<?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['res']->value[5]/$_smarty_tpl->tpl_vars['res']->value[6]*100));?>
%">
                            <div class="_chart_star_4" style="width: <?php echo $_smarty_tpl->tpl_vars['res']->value[4]/$_smarty_tpl->tpl_vars['res']->value[6]*600;?>
px;"><?php echo $_smarty_tpl->tpl_vars['res']->value[4];?>
</div>
                        </a>
                        <a href="#" title="占比例为：<?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['res']->value[5]/$_smarty_tpl->tpl_vars['res']->value[6]*100));?>
%">
                            <div class="_chart_star_3" style="width: <?php echo $_smarty_tpl->tpl_vars['res']->value[3]/$_smarty_tpl->tpl_vars['res']->value[6]*600;?>
px;"><?php echo $_smarty_tpl->tpl_vars['res']->value[3];?>
</div>
                        </a>
                        <a href="#" title="占比例为：<?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['res']->value[5]/$_smarty_tpl->tpl_vars['res']->value[6]*100));?>
%">
                            <div class="_chart_star_2" style="width: <?php echo $_smarty_tpl->tpl_vars['res']->value[2]/$_smarty_tpl->tpl_vars['res']->value[6]*600;?>
px;"><?php echo $_smarty_tpl->tpl_vars['res']->value[2];?>
</div>
                        </a>
                        <a href="#" title="占比例为：<?php echo sprintf('%.2f',($_smarty_tpl->tpl_vars['res']->value[5]/$_smarty_tpl->tpl_vars['res']->value[6]*100));?>
%">
                            <div class="_chart_star_1" style="width: <?php echo $_smarty_tpl->tpl_vars['res']->value[1]/$_smarty_tpl->tpl_vars['res']->value[6]*600;?>
px;"><?php echo $_smarty_tpl->tpl_vars['res']->value[1];?>
</div>
                        </a>
                    </td>
                </tr>
                <?php } ?>

            </table>
            <br><br>
        </div>

    </div>
</div>

</body>
</html>

<?php echo '<script'; ?>
>
    $.fn.raty.defaults.path = '/itildemo/plugins/feedback/lib/img';
    $('.start_1').raty({readOnly: true, score: 1});
    $('.start_2').raty({readOnly: true, score: 2});
    $('.start_3').raty({readOnly: true, score: 3});
    $('.start_4').raty({readOnly: true, score: 4});
    $('.start_5').raty({readOnly: true, score: 5});

<?php echo '</script'; ?>
><?php }} ?>
