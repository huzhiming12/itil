<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-25 13:56:59
         compiled from "F:\wamp\www\itildemo\templates\admin\graph_engineer.html" */ ?>
<?php /*%%SmartyHeaderCode:1558560358364b0710-41846670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97fdb475cb322e50d009a0aea04696b8a8057fca' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\graph_engineer.html',
      1 => 1443189416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558560358364b0710-41846670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56035836528b92_65701099',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56035836528b92_65701099')) {function content_56035836528b92_65701099($_smarty_tpl) {?><!DOCTYPE html>
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
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <div class="_034_request_home">
        <ul id="myTab" class="nav nav-tabs title_font">
            <li class="active"><a href="#home" data-toggle="tab">工程师工作量统计</a></li>
            <li><a href="#ios" data-toggle="tab">工程师请求逾期记录统计</a></li>
            <li><a href="#java" data-toggle="tab"></a></li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _015_RequestList">
        <!--请求列表-->
        <div class="tab-pane in active" id="home">
            <div class="form-group">
                <label class="control-label">日期：</label>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-sm btn-primary active">
                        <input type="radio" name="options" id="option1" checked> 本月
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option2"> 上月
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option3"> 本周
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option4"> 上周
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option5"> 本季度
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option6"> 上季度
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option7"> 指定日期
                    </label>
                </div>
            </div>
            <div style="width: 100%;border-bottom: 2px solid #426AA3;" ></div>
            <br>
            <label class="control-label">工程师工作量排行榜(<font color="#ff8c00">按解决的请求数量*请求复杂系数排名</font>)</label>
            <img src="/itildemo/home/graph/bar_engineer_work_1.php">
            <span style="color: red; font-size: 10">请求复杂程度对应的复杂系数如下：一级-->1.0  二级-->1.2 三级-->1.4 四级-->1.6 五级-->1.8 六级-->2.0</span>
            <br><br>
            <label class="control-label">工程师请求解决量排行榜(<font color="#ff8c00">按实际解决的请求数量排名</font>)</label>
            <img src="/itildemo/home/graph/bar_engineer_work_2.php">
        </div>
        <!--变更列表-->
        <div class="tab-pane" id="ios">
            <div class="form-group">
                <label class="control-label">日期：</label>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-sm btn-primary active">
                        <input type="radio" name="options" id="option1" checked> 本月
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option2"> 上月
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option3"> 本周
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option4"> 上周
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option5"> 本季度
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option6"> 上季度
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="options" id="option7"> 指定日期
                    </label>
                </div>
            </div>
            <div style="width: 100%;border-bottom: 2px solid #426AA3;" ></div>
            <br>
            <label class="control-label">工程师逾期请求记录(<font color="#ff8c00">逾期请求数量统计</font>)</label>
            <img src="/itildemo/home/graph/bar_engineer_overtime_1.php">
            <br><br>
            <label class="control-label">工程师耽误工时统计(<font color="#ff8c00">逾期请求超时之和</font>)&nbsp;&nbsp;单位：小时</label>
            <img src="/itildemo/home/graph/bar_engineer_overtime_2.php">
        </div>
        <!--逾期列表-->
        <div class="tab-pane" id="java">

        </div>

        <br><br>
    </div>

</div>

</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
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
><?php }} ?>
