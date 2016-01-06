<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-06 14:25:09
         compiled from "/Users/huzhiming/workspace/php/itildemo/templates/admin/graph_engineer.html" */ ?>
<?php /*%%SmartyHeaderCode:325275144568d15b59ca843-72008148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ff3dd7577eaf7c9340a970235333f1e0aa2897' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/admin/graph_engineer.html',
      1 => 1443492730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325275144568d15b59ca843-72008148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568d15b5a4db62_13106984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d15b5a4db62_13106984')) {function content_568d15b5a4db62_13106984($_smarty_tpl) {?><!DOCTYPE html>
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
        <!--工程师工作量统计-->
        <div class="tab-pane in active" id="home">
            <div class="form-group">
                <table>
                    <tr class="form-group-sm">
                        <td>
                            <label class="control-label">日期：</label></td>
                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary active" onclick="graph_engineer_work_change(1)">
                                    <input type="radio" name="options" checked> 本月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_engineer_work_change(2)">
                                    <input type="radio" name="options"> 上月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_engineer_work_change(3)">
                                    <input type="radio" name="options"> 本周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_engineer_work_change(4)">
                                    <input type="radio" name="options"> 上周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_engineer_work_change(5)">
                                    <input type="radio" name="options"> 本季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_engineer_work_change(6)">
                                    <input type="radio" name="options"> 上季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_engineer_work_change(7)">
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
                                             <button class="btn btn-sm btn-primary"
                                                     onclick="graph_engineer_work_change(8)">查询
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
            <label class="control-label">工程师工作量排行榜(<font color="#ff8c00">按解决的请求数量*请求复杂系数排名</font>)</label>
            <img id="engineer_work1" src="/itildemo/home/graph/bar_engineer_work_1.php?id=1">
            <br>
            <span style="color: red; font-size: 10px">请求复杂程度对应的复杂系数如下：一级-->1.0  二级-->1.2 三级-->1.4 四级-->1.6 五级-->1.8 六级-->2.0</span>
            <br><br>
            <label class="control-label">工程师请求解决量排行榜(<font color="#ff8c00">按实际解决的请求数量排名</font>)</label>
            <img id="engineer_work2" src="/itildemo/home/graph/bar_engineer_work_2.php?id=1">
        </div>
        <!--工程师逾期请求量-->
        <div class="tab-pane" id="ios">
            <div class="form-group">
                <table>
                    <tr class="form-group-sm">
                        <td>
                            <label class="control-label">日期：</label></td>
                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary active" onclick="graph_over_time(1)">
                                    <input type="radio" name="options" checked> 本月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_over_time(2)">
                                    <input type="radio" name="options"> 上月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_over_time(3)">
                                    <input type="radio" name="options"> 本周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_over_time(4)">
                                    <input type="radio" name="options"> 上周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_over_time(5)">
                                    <input type="radio" name="options"> 本季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_over_time(6)">
                                    <input type="radio" name="options"> 上季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_over_time(7)">
                                    <input type="radio" name="options"> 指定日期
                                </label>
                            </div>
                        </td>
                        <td id="datepicker2" style="display: none">
                            <table>
                                <tr>
                                    <td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <input id="date3" class="form-control datetimepicker" size="10">
                                    </td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td class="input-group">
                                        <input id="date4" class="form-control datetimepicker" size="10">
                                        <span class="input-group-btn">
                                             <button class="btn btn-sm btn-primary" onclick="graph_over_time(8)">查询
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
            <label class="control-label">工程师逾期请求记录(<font color="#ff8c00">逾期请求数量统计</font>)</label>
            <img id="over_time1" src="/itildemo/home/graph/bar_engineer_overtime_1.php?id=1">
            <br><br>
            <label class="control-label">工程师耽误工时统计(<font color="#ff8c00">逾期请求超时之和</font>)&nbsp;&nbsp;单位：小时</label>
            <img id="over_time2" src="/itildemo/home/graph/bar_engineer_overtime_2.php?id=1">
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
        format: 'yyyy-mm-dd',
        language: 'zh-CN',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });

    function graph_engineer_work_change(id) {
        switch (id) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                document.getElementById("datepicker1").style.display = "none";
                document.getElementById("engineer_work1").src = "/itildemo/home/graph/bar_engineer_work_1.php?id=" + id + "";
                document.getElementById("engineer_work2").src = "/itildemo/home/graph/bar_engineer_work_2.php?id=" + id + "";
                break;
            case 7:

                document.getElementById("datepicker1").style.display = "block";
                break;
            case 8:
                document.getElementById("datepicker1").style.display = "block";
                var date1 = document.getElementById("date1").value;
                var date2 = document.getElementById("date2").value;
                document.getElementById("engineer_work1").src = "/itildemo/home/graph/bar_engineer_work_1.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "";
                document.getElementById("engineer_work2").src = "/itildemo/home/graph/bar_engineer_work_2.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "";
                break;
        }
    }

    function graph_over_time(id) {
        switch (id) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                document.getElementById("datepicker2").style.display = "none";
                document.getElementById("over_time1").src = "/itildemo/home/graph/bar_engineer_overtime_1.php?id=" + id + "";
                document.getElementById("over_time2").src = "/itildemo/home/graph/bar_engineer_overtime_2.php?id=" + id + "";
                break;
            case 7:
                document.getElementById("datepicker2").style.display = "block";
                break;
            case 8:
                document.getElementById("datepicker2").style.display = "block";
                var date1 = document.getElementById("date3").value;
                var date2 = document.getElementById("date4").value;
                document.getElementById("over_time1").src = "/itildemo/home/graph/bar_engineer_overtime_1.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "";
                document.getElementById("over_time2").src = "/itildemo/home/graph/bar_engineer_overtime_2.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "";
                break;
        }
    }
<?php echo '</script'; ?>
><?php }} ?>
