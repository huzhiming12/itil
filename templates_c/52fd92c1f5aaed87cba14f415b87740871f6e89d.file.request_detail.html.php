<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-23 08:23:22
         compiled from "F:\wamp\www\itildemo\templates\share\request_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1546155f7cee85bb8e1-78268792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52fd92c1f5aaed87cba14f415b87740871f6e89d' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\request_detail.html',
      1 => 1442978144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1546155f7cee85bb8e1-78268792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f7cee86d43c0_33071158',
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
    'att' => 0,
    'process' => 0,
    'pro' => 0,
    'cancel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7cee86d43c0_33071158')) {function content_55f7cee86d43c0_33071158($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="_46_knowledge">
        <?php if ($_smarty_tpl->tpl_vars['res']->value['req_author']==$_SESSION['user_name']&&$_smarty_tpl->tpl_vars['res']->value['req_state']==1) {?>
        <a href="javascript:void(0)" class="btn btn-sm btn-warning" data-toggle="popover" data-placement="top"
           data-html="true" data-trigger="focus"
           data-content="
                    <div class='_46_knowledge'>确定要注销吗？注销后将<br>不会指派工程师解决该问题<br><br>
                    <a href='javascript:void(0)' class='btn btn-sm btn-primary' onclick='window.location.href=&quot;/itildemo/home/service/req_ser.php?cancel_req=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
&flag=user&quot;'>注销</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href='javascript:void(0)' class='btn btn-sm btn-default'>取消</a></div>">取消请求</a>&nbsp;&nbsp;&nbsp;
        <?php }?>
        <button class="btn btn-sm btn-default" onclick="window.history.go(-1)">返回</button>
    </div>
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
<?php echo '</script'; ?>
><?php }} ?>
