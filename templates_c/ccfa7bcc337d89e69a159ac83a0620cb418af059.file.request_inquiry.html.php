<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-12 07:23:00
         compiled from "F:\wamp\www\itildemo\templates\admin\request_inquiry.html" */ ?>
<?php /*%%SmartyHeaderCode:1089055e3f86e8afd41-50589588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccfa7bcc337d89e69a159ac83a0620cb418af059' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_inquiry.html',
      1 => 1444634577,
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
    'options' => 0,
    'date1' => 0,
    'date2' => 0,
    'user' => 0,
    'engineer' => 0,
    'state' => 0,
    'keyword' => 0,
    'res' => 0,
    'req' => 0,
    'list' => 0,
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
        <div class="form-group _015_RequestList">
            <form method="get" action="">
                <table class="form-group-sm">
                    <tr class="form-group-sm">
                        <td>
                            <label class="control-label">日期：</label>
                        </td>
                        <td colspan="3">
                            <div class="btn-group" data-toggle="buttons">
                                <label onclick="showDatePicker(1)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==7||$_smarty_tpl->tpl_vars['options']->value=='') {?>active<?php }?>">
                                    <input type="radio" name="options" value="7" <?php if ($_smarty_tpl->tpl_vars['options']->value==7||$_smarty_tpl->tpl_vars['options']->value=='') {?>
                                    checked <?php }?>> 全部
                                </label>
                                <label onclick="showDatePicker(1)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==1) {?> active <?php }?>">
                                    <input type="radio" name="options" value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value==1) {?>checked <?php }?> > 本月
                                </label>
                                <label onclick="showDatePicker(1)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==2) {?>active<?php }?>">
                                    <input type="radio" name="options" value="2" <?php if ($_smarty_tpl->tpl_vars['options']->value==2) {?> checked <?php }?>> 上月
                                </label>
                                <label onclick="showDatePicker(1)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==3) {?>active<?php }?>">
                                    <input type="radio" name="options" value="3" <?php if ($_smarty_tpl->tpl_vars['options']->value==3) {?> checked <?php }?>> 本周
                                </label>
                                <label onclick="showDatePicker(1)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==4) {?>active<?php }?>">
                                    <input type="radio" name="options" value="4" <?php if ($_smarty_tpl->tpl_vars['options']->value==4) {?> checked <?php }?>> 上周
                                </label>
                                <label onclick="showDatePicker(1)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==5) {?>active<?php }?>">
                                    <input type="radio" name="options" value="5" <?php if ($_smarty_tpl->tpl_vars['options']->value==5) {?> checked <?php }?>> 本季度
                                </label>
                                <label onclick="showDatePicker(1)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==6) {?>active<?php }?>">
                                    <input type="radio" name="options" value="6" <?php if ($_smarty_tpl->tpl_vars['options']->value==6) {?> checked <?php }?>> 上季度
                                </label>
                                <label onclick="showDatePicker(0)"
                                       class="btn btn-sm btn-primary <?php if ($_smarty_tpl->tpl_vars['options']->value==8) {?>active<?php }?>">
                                    <input type="radio" name="options" value="8" <?php if ($_smarty_tpl->tpl_vars['options']->value==8) {?> checked <?php }?>>
                                    指定日期
                                </label>
                            </div>
                        </td>
                        <td id="datepicker1" style="display: none">
                            <table>
                                <tr>
                                    <td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <input name="date1" value="<?php echo $_smarty_tpl->tpl_vars['date1']->value;?>
" class="form-control datetimepicker"
                                               size="10">
                                    </td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <input name="date2" value="<?php echo $_smarty_tpl->tpl_vars['date2']->value;?>
" class="form-control datetimepicker"
                                               size="10">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr style="height: 10px">
                        <td></td>
                    </tr>
                    <tr>
                        <td><label class="control-label">请求人：</label></td>
                        <td><input type="text" class="form-control" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"></td>
                        <td><label class="control-label" name="engineer">&nbsp;&nbsp;&nbsp;&nbsp;工程师：</label></td>
                        <td><input type="text" class="form-control" name="engineer" value="<?php echo $_smarty_tpl->tpl_vars['engineer']->value;?>
"></td>
                    </tr>
                    <tr style="height: 10px">
                        <td></td>
                    </tr>
                    <tr>
                        <td><label class="control-label">请求状态：</label></td>
                        <td>
                            <select class="form-control" name="state">
                                <option value="0"
                                <?php if ($_smarty_tpl->tpl_vars['state']->value==0) {?> selected<?php }?> >全部</option>
                                <option value="1"
                                <?php if ($_smarty_tpl->tpl_vars['state']->value==1) {?> selected<?php }?> >未处理</option>
                                <option value="2"
                                <?php if ($_smarty_tpl->tpl_vars['state']->value==2) {?> selected<?php }?> >已指派</option>
                                <option value="3"
                                <?php if ($_smarty_tpl->tpl_vars['state']->value==3) {?> selected<?php }?> >已取消</option>
                                <option value="4"
                                <?php if ($_smarty_tpl->tpl_vars['state']->value==4) {?> selected<?php }?> >已解决</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 10px">
                        <td></td>
                    </tr>
                    <tr>
                        <td><label class="control-label">关键字检索：</label></td>
                        <td colspan="2">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-primary" type="submit" name="search_btn">搜索</button>
                            </span>
                            </div>
                        </td>
                    </tr>
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
                <th>工程师</th>
                <th>请求状态</th>
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
                <td><a href="/itildemo/home/controller/share/request_detail.php?req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
</a>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_finish_engineer'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['req']->value['req_state']==1) {?>
                    <span class="_span_new">未处理</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']==2) {?>
                    <span class="_span_middle">已指派</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']==3) {?>
                    <span class="_span_cancel">已取消</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']==4) {?>
                    <span class="_span_low">已解决</span>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['req']->value['fd']==1) {?>
                    <span class="_state_evaluate" style="float: none">已评价</span>
                    <?php }?>
                </td>
            </tr>
            <?php } ?>
            </tbody>
            </thead>
        </table>
    </div>
    <hr class="_016_RequestList_line">
    <div class="_015_RequestList">
        <a href="/itildemo/home/service/excel_export_ser.php?list=<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
" class="_52_Excel_export">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;导出</a>
        <div style="float: right"><?php echo $_smarty_tpl->tpl_vars['navi']->value;?>
</div>
    </div>
    <br><br>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">
    if ('<?php echo $_smarty_tpl->tpl_vars['options']->value;?>
' == '8')
        document.getElementById('datepicker1').style.display = "block";
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
    function showDatePicker(id) {
        if (id)
            document.getElementById('datepicker1').style.display = "none";
        else
            document.getElementById('datepicker1').style.display = "block";

    }
<?php echo '</script'; ?>
>

</html><?php }} ?>
