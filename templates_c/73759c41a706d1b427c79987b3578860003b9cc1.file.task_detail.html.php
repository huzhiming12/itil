<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-14 11:56:57
         compiled from "F:\wamp\www\itildemo\templates\engineer\task_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1172355f91637852724-76109748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73759c41a706d1b427c79987b3578860003b9cc1' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\engineer\\task_detail.html',
      1 => 1444823811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1172355f91637852724-76109748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f916378bc656_10766639',
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
    'att' => 0,
    'flag' => 0,
    'ass' => 0,
    'process' => 0,
    'pro' => 0,
    'cancel' => 0,
    'feedback' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f916378bc656_10766639')) {function content_55f916378bc656_10766639($_smarty_tpl) {?><!DOCTYPE html>
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
            <?php echo $_smarty_tpl->tpl_vars['res']->value['req_content'];?>

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
            <a href="/itildemo/uploadfile/files/<?php echo $_smarty_tpl->tpl_vars['att']->value['attach_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['att']->value['attach_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['att']->value['attach_name'];?>
</a>
        </p>
        <?php } ?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['flag']->value==1) {?>
    <!--指派信息-->
    <div class="_48_task">
        <table>
            <tr>
                <td style="color: #999">指派时间：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ass']->value['assign_time'];?>
</td>
                <td class="col-sm-2"></td>

            </tr>
            <tr>
                <td style="color: #999">影响范围：</td>
                <td>
                    <span <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_effect']==1) {?> class="_span_low" <?php }?> >&nbsp;&nbsp;个人&nbsp;&nbsp;</span>&nbsp;&nbsp;
                    <span <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_effect']==2) {?> class="_span_middle" <?php }?> >&nbsp;&nbsp;部门&nbsp;&nbsp;</span>
                    &nbsp;&nbsp;
                    <span <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_effect']==3) {?> class="_span_high" <?php }?> >&nbsp;&nbsp;单位&nbsp;&nbsp;</span>&nbsp;&nbsp;
                </td>
                <td class="col-sm-2"></td>
                <td style="color: #999">优 先 级：</td>
                <td>
                    <span <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_priority']==1) {?> class="_span_low" <?php }?> >&nbsp;&nbsp;低&nbsp;&nbsp;</span>&nbsp;&nbsp;
                    <span <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_priority']==2) {?> class="_span_middle" <?php }?> >&nbsp;&nbsp;中&nbsp;&nbsp;</span>
                    &nbsp;&nbsp;
                    <span <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_priority']==3) {?> class="_span_high" <?php }?> >&nbsp;&nbsp;高&nbsp;&nbsp;</span>&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="color: #999">服务协议：</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==2) {?>
                    A级 2小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==12) {?>
                    B级 12小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==24) {?>
                    C级 24小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==48) {?>
                    D级 48小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==120) {?>
                    E级 120小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==240) {?>
                    F级 240小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==480) {?>
                    G级 480小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_time_limit']==7200) {?>
                    G级 720小时内完成
                    <?php }?>
                </td>
                <td class="col-sm-2"></td>
                <td style="color: #999">复杂程度：</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['ass']->value['req_complex']==1) {?>
                    一级 较容易
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_complex']==2) {?>
                    二级 容易
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_complex']==3) {?>
                    三级 一般
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_complex']==4) {?>
                    四级 复杂
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_complex']==5) {?>
                    五级 较复杂
                    <?php } elseif ($_smarty_tpl->tpl_vars['ass']->value['req_complex']==6) {?>
                    六级 很复杂
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td style="color: #999">追加描述：</td>
            </tr>
        </table>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['ass']->value['req_add_description'];?>

        </div>
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['flag']->value==2) {?>
    <!--解决方案-->
    <div class="_48_task">
        <table>
            <tr>
                <td style="color: #999">解决方案：</td>
            </tr>
        </table>
        <?php echo $_smarty_tpl->tpl_vars['res']->value['req_solution'];?>

    </div>
    <?php }?>
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
            <?php if ($_smarty_tpl->tpl_vars['cancel']->value['user_cancel']!='') {?><!--请求取消悉尼型-->
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
    <!--解决方案编辑-->
    <form method="post" name="solution_form"
          action="/itildemo/home/service/req_ser.php?req_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
&req_complex=<?php echo $_smarty_tpl->tpl_vars['ass']->value['req_complex'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['flag']->value==1) {?>
        <div class="_48_task">
            <span style="color: #999">解决方案：</span><br><br>
            <textarea class="form-control" name="req_solution" id="req_solution" rows="10"></textarea>
            <?php echo '<script'; ?>
>
                CKEDITOR.replace("req_solution", {
                    filebrowserBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
            <?php echo '</script'; ?>
>
        </div>
        <?php }?>
        <div class="_46_knowledge">
            <?php if ($_smarty_tpl->tpl_vars['flag']->value==1) {?>
            <button class="btn btn-sm btn-primary">提交方案</button>
            &nbsp;&nbsp;
            <a onclick="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="popover" data-html="true"
               data-placement="top"
               data-content="<form method='post' action='../../service/req_ser.php?req_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
'>
                              <textarea name='change_reason' style='width:300px;' class='form-control' rows='5' placeholder='变更理由(256字)'></textarea><br>
                              <div class='_46_knowledge'><button class='btn btn-sm btn-primary' type='submit'>提交</button>&nbsp;&nbsp;</form>
                              <a href='javascript:void(0)' class='btn btn-sm btn-default' onclick='hidePopover()'>取消</a></div>">申请变更
            </a>
            &nbsp;&nbsp;
            <?php }?>
            <a class="btn btn-sm btn-default" href="javascript:void(0)" onclick="window.history.go(-1)">返回</a>
        </div>
    </form>
    <br>
    <br>

</div>

</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $('[data-toggle="popover"]').popover();
    })
    function hidePopover() {
        $('[data-toggle="popover"]').popover('hide');
    }

<?php echo '</script'; ?>
><?php }} ?>
