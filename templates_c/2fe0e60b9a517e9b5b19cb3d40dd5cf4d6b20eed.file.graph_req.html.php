<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-29 03:21:37
         compiled from "F:\wamp\www\itildemo\templates\admin\graph_req.html" */ ?>
<?php /*%%SmartyHeaderCode:9440560607ffd3db85-14670314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fe0e60b9a517e9b5b19cb3d40dd5cf4d6b20eed' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\graph_req.html',
      1 => 1443496893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9440560607ffd3db85-14670314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560607ffde53b5_54029605',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560607ffde53b5_54029605')) {function content_560607ffde53b5_54029605($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\itildemo\\libs\\plugins\\modifier.date_format.php';
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
            <li class="active"><a href="#home" data-toggle="tab">请求总体统计</a></li>
            <li><a href="#ios" data-toggle="tab">请求分类统计</a></li>
            <li><a href="#java" data-toggle="tab"></a></li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _015_RequestList">
        <!--请求总体统计-->
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
            <label class="control-label">请求趋势统计</label>
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
 type="text/javascript">
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

    function graph_req_change() {
        var selector = document.getElementById("selector").value;
        var date = document.getElementById("date").value;
        document.getElementById("line_req").src = "/itildemo/home/graph/line_req.php?selector=" + selector + "&date=" + date + "";
    }

    function graph_req_source(id) {
        switch (id) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                document.getElementById("datepicker1").style.display = "none";
                document.getElementById("req_source").src = "/itildemo/home/graph/bar_req_source.php?id=" + id + "";
                document.getElementById("req_sort").src = "/itildemo/home/graph/bar_req_sort.php?id=" + id + "";
                break;
            case 7:
                document.getElementById("datepicker1").style.display = "block";
                break;
            case 8:

                document.getElementById("datepicker1").style.display = "block";
                var date1 = document.getElementById("date1").value;
                var date2 = document.getElementById("date2").value;
                document.getElementById("req_source").src = "/itildemo/home/graph/bar_req_source.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "";
                document.getElementById("req_sort").src = "/itildemo/home/graph/bar_req_sort.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "";
                break;
        }
    }
<?php echo '</script'; ?>
><?php }} ?>
