<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-06 14:25:10
         compiled from "/Users/huzhiming/workspace/php/itildemo/templates/admin/graph_user_req.html" */ ?>
<?php /*%%SmartyHeaderCode:1844611903568d15b6203bd7-80369646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83186a46604855bd12507e4c0b8c32f206597634' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/admin/graph_user_req.html',
      1 => 1443963932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844611903568d15b6203bd7-80369646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'depart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568d15b62e3a49_40679875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d15b62e3a49_40679875')) {function content_568d15b62e3a49_40679875($_smarty_tpl) {?><!DOCTYPE html>
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
            <li class="active"><a href="#home" data-toggle="tab">按用户单位统计</a></li>
            <li><a href="#ios" data-toggle="tab">按用户个人统计</a></li>
            <li><a href="#java" data-toggle="tab"></a></li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _015_RequestList">
        <!--按用户单位统计-->
        <div class="tab-pane in active" id="home">
            <div class="form-group">
                <table>
                    <tr class="form-group-sm">
                        <td>
                            <label class="control-label">日期：</label></td>
                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary active" onclick="graph_depart_req_change(1)">
                                    <input type="radio" name="options" checked> 本月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_depart_req_change(2)">
                                    <input type="radio" name="options"> 上月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_depart_req_change(3)">
                                    <input type="radio" name="options"> 本周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_depart_req_change(4)">
                                    <input type="radio" name="options"> 上周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_depart_req_change(5)">
                                    <input type="radio" name="options"> 本季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_depart_req_change(6)">
                                    <input type="radio" name="options"> 上季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_depart_req_change(9)">
                                    <input type="radio" name="options"> 全部
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_depart_req_change(7)">
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
                                                     onclick="graph_depart_req_change(8)">查询
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
            <label class="control-label">用户单位请求量统计(<font color="#ff8c00">请求数量统计</font>)</label>
            <img id="depart_req" src="/itildemo/home/graph/bar_depart_req.php?id=1">
            <br><br>
        </div>
        <!--按用户个人统计-->
        <div class="tab-pane" id="ios">
            <div class="form-group">
                <table>
                    <tr class="form-group-sm">
                        <td><label class="control-label">单位：</label></td>
                        <td class="input-group">
                            <select class="form-control" id="depart">
                                <?php  $_smarty_tpl->tpl_vars['depart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['depart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['depart']->key => $_smarty_tpl->tpl_vars['depart']->value) {
$_smarty_tpl->tpl_vars['depart']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['depart']->value['depart_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['depart']->value['depart_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr class="form-group-sm">
                        <td>
                            <label class="control-label">日期：</label></td>
                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary active" onclick="graph_user_req(1)">
                                    <input type="radio" name="options" checked> 本月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_user_req(2)">
                                    <input type="radio" name="options"> 上月
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_user_req(3)">
                                    <input type="radio" name="options"> 本周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_user_req(4)">
                                    <input type="radio" name="options"> 上周
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_user_req(5)">
                                    <input type="radio" name="options"> 本季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_user_req(6)">
                                    <input type="radio" name="options"> 上季度
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_user_req(9)">
                                    <input type="radio" name="options"> 全部
                                </label>
                                <label class="btn btn-sm btn-primary" onclick="graph_user_req(7)">
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
                                             <button class="btn btn-sm btn-primary" onclick="graph_user_req(8)">查询
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
            <label class="control-label">用户请求量统计</font>)</label>
            <img id="user_req" src="/itildemo/home/graph/bar_user_req.php?id=1">
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

    function graph_depart_req_change(id) {
        switch (id) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 9:
                document.getElementById("datepicker1").style.display = "none";
                document.getElementById("depart_req").src = "/itildemo/home/graph/bar_depart_req.php?id=" + id + "";
                break;
            case 7:
                document.getElementById("datepicker1").style.display = "block";
                break;
            case 8:
                document.getElementById("datepicker1").style.display = "block";
                var date1 = document.getElementById("date1").value;
                var date2 = document.getElementById("date2").value;
                document.getElementById("depart_req").src = "/itildemo/home/graph/bar_depart_req.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "";
                break;
        }
    }

    function graph_user_req(id) {
        var depart= document.getElementById("depart").value;
        switch (id) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 9:
                document.getElementById("datepicker2").style.display = "none";
                document.getElementById("user_req").src = "/itildemo/home/graph/bar_user_req.php?id=" + id + "&depart_id="+depart+"";
                break;
            case 7:
                document.getElementById("datepicker2").style.display = "block";
                break;
            case 8:
                document.getElementById("datepicker2").style.display = "block";
                var date1 = document.getElementById("date3").value;
                var date2 = document.getElementById("date4").value;
                document.getElementById("user_req").src = "/itildemo/home/graph/bar_user_req.php?id=" + id + "&date1=" + date1 + "&date2=" + date2 + "&depart_id="+depart+"";
                break;
        }
    }
<?php echo '</script'; ?>
><?php }} ?>
