<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-06 14:29:51
         compiled from "/Users/huzhiming/workspace/php/itildemo/templates/share/request_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:782401648568d16cf1622f1-05589104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a1048d41ea1e50d4d80ea7e1199505bb948e276' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/share/request_detail.html',
      1 => 1444482942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '782401648568d16cf1622f1-05589104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
    'att' => 0,
    'process' => 0,
    'pro' => 0,
    'cancel' => 0,
    'feedback' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568d16cf437002_78864978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d16cf437002_78864978')) {function content_568d16cf437002_78864978($_smarty_tpl) {?><!DOCTYPE html>
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
 language="JavaScript" src="/itildemo/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="javascript" src="/itildemo/plugins/feedback/lib/jquery.raty.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/itildemo/plugins/feedback/demo/css/application.css">
    <title></title>
    <style type="text/css">
        tr {
            line-height: 30px;
        }
    </style>
<body>
<div class="_012_RequestList">
    <div class="_011_RequestList">
        请求详情
    </div>
    <br>
    <!--请求详情-->
    <div class="_48_task">
        <table>
            <tr>
                <td style="color: #999">请求时间：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value['req_time'];?>
</td>
                <td class="col-sm-2"></td>
                <td style="color: #999">请 求 人：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value['req_author'];?>
</td>
            </tr>
            <tr>
                <td style="color: #999">请求分类：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value['req_sort'];?>
</td>
                <td class="col-sm-2"></td>
                <td style="color: #999">关 键 字：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value['req_keyword'];?>
</td>
            </tr>
            <tr>
                <td style="color: #999">请求标题：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value['req_title'];?>
</td>
                <td class="col-sm-2"></td>
            </tr>
            <tr>
                <td style="color: #999">详细描述：</td>
            </tr>
        </table>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['res']->value['req_content'];
if ($_smarty_tpl->tpl_vars['res']->value['req_content']=='') {?><a>该请求已删除或不存在！</a><?php }?>
        </div>
    </div>
    <!---附件信息-->
    <div class="_48_task">
        <span style="color: #999">相关附件:</span><br><br>
        <?php  $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['att']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['att']->key => $_smarty_tpl->tpl_vars['att']->value) {
$_smarty_tpl->tpl_vars['att']->_loop = true;
?>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/itildemo/uploadfile/files/req/<?php echo $_smarty_tpl->tpl_vars['att']->value['attach_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['att']->value['attach_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['att']->value['attach_name'];?>
</a>
        </p>
        <?php } ?>
    </div>
    <!--解决方案-->
    <div class="_48_task">
        <table>
            <tr>
                <td style="color: #999">解决方案：</td>
            </tr>
        </table>
        <?php echo $_smarty_tpl->tpl_vars['res']->value['req_solution'];?>

    </div>
    <!--流程信息-->
    <div class="_48_task">
        <span style="color: #999">流程信息：</span><br><br>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 30px;line-height:30px;padding: 0px 10px ">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <?php echo $_smarty_tpl->tpl_vars['res']->value['req_time'];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value['req_author'];?>
 创建请求
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        无相关信息
                    </div>
                </div>
            </div>
            <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['process']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res']['index']++;
?>
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 30px;line-height:30px;padding: 0px 10px ">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['res']['index'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['pro']->value['title'];?>

                    </a>
                </div>
                <div id="collapse<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['res']['index'];?>
" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['res']['index']%2==0) {?><!--指派信息-->
                        <table>
                            <tr>
                                <td style="color: #999">影响范围：</td>
                                <td>
                                    <span <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_effect']==1) {?> class="_span_low" <?php }?> >&nbsp;&nbsp;个人&nbsp;&nbsp;</span>
                                    &nbsp;&nbsp;
                                    <span <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_effect']==2) {?> class="_span_middle" <?php }?> >&nbsp;&nbsp;部门&nbsp;&nbsp;</span>
                                    &nbsp;&nbsp;
                                    <span <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_effect']==3) {?> class="_span_high" <?php }?> >&nbsp;&nbsp;单位&nbsp;&nbsp;</span>
                                    &nbsp;&nbsp;
                                </td>
                                <td class="col-sm-2"></td>
                                <td style="color: #999">优 先 级：</td>
                                <td>
                                    <span <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_priority']==1) {?> class="_span_low" <?php }?> >&nbsp;&nbsp;低&nbsp;&nbsp;</span>
                                    &nbsp;&nbsp;
                                    <span <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_priority']==2) {?> class="_span_middle" <?php }?> >&nbsp;&nbsp;中&nbsp;&nbsp;</span>
                                    &nbsp;&nbsp;
                                    <span <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_priority']==3) {?> class="_span_high" <?php }?> >&nbsp;&nbsp;高&nbsp;&nbsp;</span>
                                    &nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #999">服务协议：</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==2) {?>
                                    A级 2小时内完成
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==12) {?>
                                    B级 12小时内完成
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==24) {?>
                                    C级 24小时内完成
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==48) {?>
                                    D级 2小时内完成
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==120) {?>
                                    E级 120小时内完成
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==240) {?>
                                    F级 240小时内完成
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==480) {?>
                                    G级 480小时内完成
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_time_limit']==7200) {?>
                                    G级 720小时内完成
                                    <?php }?>
                                </td>
                                <td class="col-sm-2"></td>
                                <td style="color: #999">复杂程度：</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['pro']->value['req_complex']==1) {?>
                                    一级 较容易
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_complex']==2) {?>
                                    二级 容易
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_complex']==3) {?>
                                    三级 一般
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_complex']==4) {?>
                                    四级 复杂
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_complex']==5) {?>
                                    五级 较复杂
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pro']->value['req_complex']==6) {?>
                                    六级 很复杂
                                    <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #999">建议或意见：</td>
                            </tr>
                        </table>
                        <?php echo $_smarty_tpl->tpl_vars['pro']->value['add_description'];?>

                        <?php } else { ?><!--变更信息-->
                        <table>
                            <tr>
                                <td style="color: #999">变更理由:</td>
                            </tr>
                        </table>
                        <?php echo $_smarty_tpl->tpl_vars['pro']->value['add_description'];?>

                        <?php }?>
                        </table>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['res']->value['req_state']==4) {?><!--请求的解决信息-->
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 30px;line-height:30px;padding: 0px 10px ">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseend">
                        <?php echo $_smarty_tpl->tpl_vars['res']->value['req_finish_time'];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value['req_finish_engineer'];?>
 解决了该请求
                    </a>
                </div>
                <div id="collapseend" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table>
                            <tr>
                                <td style="color: #999">解决方案：</td>
                            </tr>
                        </table>
                        <?php echo $_smarty_tpl->tpl_vars['res']->value['req_solution'];?>

                    </div>
                </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['cancel']->value['user_cancel']!='') {?><!--请求取消-->
            <div class="panel panel-default">
                <div class="panel-heading" style="height: 30px;line-height:30px;padding: 0px 10px ">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsecancel">
                        <?php echo $_smarty_tpl->tpl_vars['cancel']->value['cancel_time'];?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value['user_cancel'];?>
 取消了该请求
                    </a>
                </div>
                <div id="collapsecancel" class="panel-collapse collapse">
                    <div class="panel-body">
                        无相关信息
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <!--用户评价-->
    <?php if ($_smarty_tpl->tpl_vars['feedback']->value['req_num']!='') {?>
    <div class="_48_task">
        <span style="color: #999">用户评价：</span><br><br>
        <table width="100%">
            <tr class="_51_border">
                <td colspan="2" style="color: #999">对工程师的评价</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;工程师的技能与知识水平</td>
                <td>
                    <div class="fd_demo_1"></div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;工程师的服务态度</td>
                <td>
                    <div class="fd_demo_2"></div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;工程师的总体评价</td>
                <td>
                    <div class="fd_demo_3"></div>
                </td>
            </tr>
            <tr class="_51_border">
                <td colspan="2" style="color: #999">对请求处理情况的评价</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;请求处理是否及时</td>
                <td>
                    <div class="fd_demo_4"></div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;请求的解决方案是否满意</td>
                <td>
                    <div class="fd_demo_5"></div>
                </td>
            </tr>
            <tr class="_51_border">
                <td colspan="2" style="color: #999">对服务的总体评价</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;对本次请求服务的总体评价</td>
                <td>
                    <div class="fd_demo_6"></div>
                </td>
            </tr>
        </table>
        <div style="color: #999">建议或意见：</div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['feedback']->value['suggest'];?>
</p>

    </div>
    <?php echo '<script'; ?>
>
        $.fn.raty.defaults.path = '/itildemo/plugins/feedback/lib/img';
        $('.fd_demo_1').raty({ readOnly: true, score: <?php echo $_smarty_tpl->tpl_vars['feedback']->value['fd_1'];?>
 });
        $('.fd_demo_2').raty({ readOnly: true, score: <?php echo $_smarty_tpl->tpl_vars['feedback']->value['fd_2'];?>
 });
        $('.fd_demo_3').raty({ readOnly: true, score: <?php echo $_smarty_tpl->tpl_vars['feedback']->value['fd_3'];?>
 });
        $('.fd_demo_4').raty({ readOnly: true, score: <?php echo $_smarty_tpl->tpl_vars['feedback']->value['fd_4'];?>
 });
        $('.fd_demo_5').raty({ readOnly: true, score: <?php echo $_smarty_tpl->tpl_vars['feedback']->value['fd_5'];?>
 });
        $('.fd_demo_6').raty({ readOnly: true, score: <?php echo $_smarty_tpl->tpl_vars['feedback']->value['fd_6'];?>
 });
    <?php echo '</script'; ?>
>
    <?php }?>

    <div class="_46_knowledge">
        <!--反馈-->
        <?php if ($_smarty_tpl->tpl_vars['res']->value['req_author']==$_SESSION['user_name']&&$_smarty_tpl->tpl_vars['res']->value['req_state']==4&&$_smarty_tpl->tpl_vars['feedback']->value['req_num']=='') {?>
        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">评价服务</button>
        &nbsp;&nbsp;&nbsp;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['res']->value['req_author']==$_SESSION['user_name']&&$_smarty_tpl->tpl_vars['res']->value['req_state']==1) {?>
        <a href="javascript:void(0)" class="btn btn-sm btn-warning" data-toggle="popover" data-placement="top"
           data-html="true" data-trigger="focus"
           data-content="
                    <div class='_46_knowledge'>确定要注销吗？注销后将<br>不会指派工程师解决该问题<br><br>
                    <a href='javascript:void(0)' class='btn btn-sm btn-primary' onclick='window.location.href=&quot;/itildemo/home/service/req_ser.php?cancel_req=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
&flag=user&quot;'>注销</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href='javascript:void(0)' class='btn btn-sm btn-default'>取消</a></div>">取消请求</a>&nbsp;&nbsp;&nbsp;
        <?php }?>
        <button class="btn btn-sm btn-default" onclick="window.history.go(-1)"> 返 回</button>
    </div>
    <br>
    <br>
</div>

<!--评价输入框-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <form class="form-horizontal" name="feedback" action="/itildemo/home/service/req_ser.php" method="post"
              onsubmit="return checkValue()">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">用户评价反馈</h4>
                </div>
                <div class="modal-body">
                    <table width="100%">
                        <tr class="_51_border">
                            <td colspan="2"><label class="control-label">对工程师的评价</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;工程师的技能与知识水平</td>
                            <td>
                                <div id="fd_demo_1"></div>
                                <input type="hidden" name="fd_1" id="fd_1">
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;工程师的服务态度</td>
                            <td>
                                <div id="fd_demo_2"></div>
                                <input type="hidden" name="fd_2" id="fd_2">
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;工程师的总体评价</td>
                            <td>
                                <div id="fd_demo_3"></div>
                                <input type="hidden" name="fd_3" id="fd_3">
                            </td>
                        </tr>
                        <tr class="_51_border">
                            <td colspan="2"><label class="control-label">对请求处理情况的评价</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;请求处理是否及时</td>
                            <td>
                                <div id="fd_demo_4"></div>
                                <input type="hidden" name="fd_4" id="fd_4">
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;请求的解决方案是否满意</td>
                            <td>
                                <div id="fd_demo_5"></div>
                                <input type="hidden" name="fd_5" id="fd_5">
                            </td>
                        </tr>
                        <tr class="_51_border">
                            <td colspan="2"><label class="control-label">对服务的总体评价</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;对本次请求服务的总体评价</td>
                            <td>
                                <div id="fd_demo_6"></div>
                                <input type="hidden" name="fd_6" id="fd_6">
                            </td>
                        </tr>
                    </table>
                    <div><label class="control-label">建议或意见：</label></div>
                    <textarea class="form-control" name="suggest"></textarea>
                    <input type="hidden" name="req_num" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
">
                    <input type="hidden" name="engineer" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['req_finish_engineer'];?>
">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" name="feedback_btn"> 评 价</button>
                    &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-sm btn-default" data-dismiss="modal"> 取 消</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
<?php echo '<script'; ?>
>
    function checkValue() {
        if (feedback.fd_1.value == "" || feedback.fd_2.value == "" || feedback.fd_3.value == "" || feedback.fd_4.value == "" || feedback.fd_5.value == "") {
            alert("您还有未评价的内容！");
            return false;
        }
    }
    $(function () {
        $('[data-toggle="popover"]').popover();
    })
    $.fn.raty.defaults.path = '/itildemo/plugins/feedback/lib/img';
    $('#fd_demo_1').raty({
        click: function (score, evt) {
            document.getElementById('fd_1').value = score;
        },
    });
    $('#fd_demo_2').raty({
        click: function (score, evt) {
            document.getElementById('fd_2').value = score;
        },
    });
    $('#fd_demo_3').raty({
        click: function (score, evt) {
            document.getElementById('fd_3').value = score;
        },
    });
    $('#fd_demo_4').raty({
        click: function (score, evt) {
            document.getElementById('fd_4').value = score;
        },
    });
    $('#fd_demo_5').raty({
        click: function (score, evt) {
            document.getElementById('fd_5').value = score;
        },
    });
    $('#fd_demo_6').raty({
        click: function (score, evt) {
            document.getElementById('fd_6').value = score;
        },
    });


<?php echo '</script'; ?>
><?php }} ?>
