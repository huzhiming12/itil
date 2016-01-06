<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-08 01:33:31
         compiled from "F:\wamp\www\itildemo\templates\admin\request_assign.html" */ ?>
<?php /*%%SmartyHeaderCode:1230455fa1b00c94f92-73396372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad530333eb304751d52fa4b6384c2abb26dd2101' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_assign.html',
      1 => 1444268004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1230455fa1b00c94f92-73396372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55fa1b00e84f47_92354393',
  'variables' => 
  array (
    'res' => 0,
    'attach' => 0,
    'att' => 0,
    'process' => 0,
    'pro' => 0,
    'flag' => 0,
    'engineer' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa1b00e84f47_92354393')) {function content_55fa1b00e84f47_92354393($_smarty_tpl) {?><!DOCTYPE html>
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

    <!--请求信息-->
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
    <!--附件信息-->
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
                        <?php if ($_smarty_tpl->tpl_vars['pro']->value['flag']=='ass') {?><!--指派信息-->
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
        </div>
    </div>
    <!--指派表单-->
    <?php if ($_smarty_tpl->tpl_vars['flag']->value!='doing_req') {?>
    <form method="post" name="assign_form" action="/itildemo/home/service/req_ser.php?flag=<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
"
          onsubmit="return CheckValue()">
        <div class="_48_task">
            <table class="form-group-sm">
                <tr>
                    <td style="color: #999"><span style="color:red;">*</span>服务协议：</td>
                    <td>
                        <select class="form-control" name="req_time_limit">
                            <option value="2">A级 2小时内完成</option>
                            <option value="12">B级 12小时内完成</option>
                            <option value="24">C级 24小时内完成</option>
                            <option value="48">D级 48小时内完成</option>
                            <option value="120">E级 120小时内完成</option>
                            <option value="240">F级 240小时内完成</option>
                            <option value="480">G级 480小时内完成</option>
                            <option value="720">H级 720小时内完成</option>
                        </select>
                    </td>
                    <td class="col-sm-2"></td>
                    <td style="color: #999;"><span style="color:red;">*</span>复杂程度：</td>
                    <td>
                        <select class="form-control" name="req_complex">
                            <option value="1">一级 较容易</option>
                            <option value="2">二级 容易</option>
                            <option value="3">三级 一般</option>
                            <option value="4">四级 复杂</option>
                            <option value="5">五级 较复杂</option>
                            <option value="6">六级 很复杂</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="color: #999"><span style="color:red;">*</span>影响范围：</td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="radio" name="effect" value="1" checked>个人
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="effect" value="2">部门
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="effect" value="3">单位
                        </label>
                    </td>
                    <td class="col-sm-2"></td>
                    <td style="color: #999"><span style="color:red;">*</span>优 先 级：</td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="1" checked>低
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="2">中
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="3">高
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="color: #999"><span style="color:red;">*</span>工 程 师:</td>
                    <td>
                        <input type="text" id="engineer" name="engineer" class="form-control"
                               data-toggle="popover"
                               data-html="true"
                               data-placement="bottom"
                               data-content="
                                            <div style='max-height: 300px; overflow-y: scroll'>
                                                    <table class='table table-hover'>
                                                        <tr>
                                                            <th>帐号</th>
                                                            <th>姓名</th>
                                                            <th>当前任务量</th>
                                                        </tr>
                                                        <tbody>
                                                        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['engineer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                                        <tr>
                                                            <td><a href='javascript:void(0)' onclick=&quot;chooseUser('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
')&quot;><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</a></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['task'];?>
</td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                        </table>
                                            </div>">
                    </td>
                </tr>
                <tr>
                    <td style="color: #999"><span style="color:red;">*</span>意见或建议：</td>
                </tr>
            </table>
            <div>
                <textarea name="add_description" class="form-control" rows="3" placeholder="您的意见(256字)"></textarea>
            </div>
        </div>
        <input type="hidden" name="req_num" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
">

        <div class="_46_knowledge">
            <button class="btn btn-sm btn-primary" name="assign_btn">指派工程师</button>
            &nbsp;&nbsp;
            <?php if ($_smarty_tpl->tpl_vars['res']->value['req_state']==1||$_smarty_tpl->tpl_vars['flag']->value=='re_assign') {?>
            <a href="javascript:void(0)" class="btn btn-sm btn-warning" data-toggle="popover" data-placement="top"
               data-html="true" data-trigger="focus"
               data-content="
                    <div class='_46_knowledge'>确定要注销吗？注销后将<br>不会指派工程师解决该问题<br><br>
                    <a href='javascript:void(0)' class='btn btn-sm btn-primary' onclick='window.location.href=&quot;/itildemo/home/service/req_ser.php?cancel_req=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
&flag=admin&quot;'>注销</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href='javascript:void(0)' class='btn btn-sm btn-default'>取消</a></div>">取消请求</a>&nbsp;&nbsp;&nbsp;
            <?php }?>
            <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="popover" data-placement="top"
               data-html="true" data-trigger="focus"
               data-content="
                    <div class='_46_knowledge'>确定要删除该请求？<br><br>
                    <a href='javascript:void(0)' class='btn btn-sm btn-danger' onclick='window.location.href=&quot;/itildemo/home/service/req_ser.php?delete_req=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
&quot;'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href='javascript:void(0)' class='btn btn-sm btn-default'>取消</a></div>">删除</a>&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0)" class="btn btn-sm btn-default" onclick="history.go(-1)">返回</a>
        </div>
    </form>
    <?php } else { ?>
    <div class="_46_knowledge"><button class="btn btn-sm btn-default" onclick="window.history.go(-1)"> 返 回 </button></div>
    <?php }?>
    <br>
    <br>
</div>
</body>
</html>


<?php echo '<script'; ?>
>
    $(function () {
        $('[data-toggle="popover"]').popover();
    })
    function chooseUser(user_name) {
        $('#engineer').popover('hide');
        document.getElementById('engineer').value = user_name;
    }
    function CheckValue() {
        if ("" == assign_form.engineer.value) {
            alert("还未选择工程师！");
            return false;
        }
        if ("" == assign_form.add_description.value) {
            alert("建议或意见不能为空！");
            return false;
        }
    }
<?php echo '</script'; ?>
><?php }} ?>
