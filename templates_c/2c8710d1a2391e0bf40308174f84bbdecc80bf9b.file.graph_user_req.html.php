<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-29 03:24:49
         compiled from "F:\wamp\www\itildemo\templates\admin\graph_user_req.html" */ ?>
<?php /*%%SmartyHeaderCode:84560a031c099533-92209782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c8710d1a2391e0bf40308174f84bbdecc80bf9b' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\graph_user_req.html',
      1 => 1443497086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84560a031c099533-92209782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560a031c360531_89157120',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a031c360531_89157120')) {function content_560a031c360531_89157120($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\itildemo\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
            <li class="active"><a href="#home" data-toggle="tab">用户请求统计</a></li>
            <li><a href="#ios" data-toggle="tab">请求分类统计</a></li>
            <li><a href="#java" data-toggle="tab"></a></li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _015_RequestList">
        <!--用户请求统计-->
        <div class="tab-pane in active" id="home">
            <div class="form-group">
                <table>
                    <tr class="form-group-sm">
                        <td><label class="control-label">查询条件:&nbsp;&nbsp;</label></td>
                        <td>
                            <select class="form-control" id="selector">
                                <option value="1">按月查询</option>
                                <option value="2">按年查询</option>
                            </select>
                        </td>
                        <td><label class="control-label">&nbsp;&nbsp;&nbsp;日期:&nbsp;&nbsp;&nbsp;</label></td>
                        <td>
                            <div class="input-group">
                                <input type="text" id="date" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
"
                                       class="form-control datetimepicker" readonly>
                                <span class="input-group-btn"><button class="btn btn-sm btn-primary"
                                                                      onclick="graph_req_change()">查询
                                </button></span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="width: 100%;border-bottom: 2px solid #426AA3;"></div>
            <br>
            <label class="control-label">用户请求统计</label>
            <img id="line_req" style="width: 100%" src="/itildemo/home/graph/line_req.php">
            <br>
        </div>
        <!--请求分类统计-->
        <div class="tab-pane" id="ios">
            <div class="form-group">
                <table>
                    <tr class="form-group-sm">
                        <td>
                            <label class="control-label">日期：</label></td>
                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary active" onclick="graph_req_source(1)">
                                    <input type="radio" name="options" checked> 本月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_req_source(2)">
                                    <input type="radio" name="options"> 上月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_req_source(3)">
                                    <input type="radio" name="options"> 本周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_req_source(4)">
                                    <input type="radio" name="options"> 上周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_req_source(5)">
                                    <input type="radio" name="options"> 本季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_req_source(6)">
                                    <input type="radio" name="options"> 上季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_req_source(7)">
                                    <input type="radio" name="options"> 指定日期
                                </label>
                            </div>
                        </td>
                        <td id="datepicker1" style="display: none">
                            <table>
                                <tr>
                                    <td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <input id="date1" class="form-control datetimepicker" size="10">
                                    </td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td class="input-group">
                                        <input id="date2" class="form-control datetimepicker" size="10">
                                        <span class="input-group-btn">
                                             <button class="btn btn-sm btn-primary" onclick="graph_req_source(8)">查询
                                             </button>
                                         </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="width: 100%;border-bottom: 2px solid #426AA3;"></div>
            <br>
            <label class="control-label">按请求方式统计</label><br>
            <img id="req_source" src="/itildemo/home/graph/bar_req_source.php?id=1">
            <br><br>
            <label class="control-label">按请求分类统计</label><br>
            <img id="req_sort" src="/itildemo/home/graph/bar_req_sort.php?id=1">
        </div>
        <br>
    </div>

</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $('.datetimepicker').datetimepicker({
        format: 'yyyy-MM-dd',
        startView: 2,
        minView: 2,
        language: 'zh-CN',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        forceParse: 0
    });
<?php echo '</script'; ?>
><?php }} ?>
