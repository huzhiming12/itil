<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 08:28:34
         compiled from "F:\wamp\www\itildemo\templates\admin\request_home.html" */ ?>
<?php /*%%SmartyHeaderCode:2595255a20a27136c40-20673934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33437a35cf15e7b10b10d96518203490251a751a' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_home.html',
      1 => 1442305709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2595255a20a27136c40-20673934',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a20a27210b63_26805566',
  'variables' => 
  array (
    'res' => 0,
    'req' => 0,
    'engineer' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a20a27210b63_26805566')) {function content_55a20a27210b63_26805566($_smarty_tpl) {?><!DOCTYPE html>
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
 language="javascript" src="/itildemo/static/js/ajax.js"><?php echo '</script'; ?>
>
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <div class="_034_request_home">
        <ul id="myTab" class="nav nav-tabs title_font">
            <li class="active"><a href="#home" data-toggle="tab">待审核请求(<?php echo count($_smarty_tpl->tpl_vars['res']->value);?>
)</a></li>
            <li><a href="#ios" data-toggle="tab">变更请求(0)</a></li>
            <li><a href="#java" data-toggle="tab">逾期请求(0)</a></li>
        </ul>
    </div>
    <br>

    <div id="myTabContent" class="tab-content _007_MyBoard">
        <div class="tab-pane in active" id="home">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td></td>
                    <th>请求编号</th>
                    <th>请求标题</th>
                    <th>请求人</th>
                    <th>请求时间</th>
                    <th>请求状态</th>
                    <th>操作</th>
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
                    <td>
                        <a href="javascript:void(0)" data-toggle="modal"
                           onclick="AJAX('/itildemo/home/controller/admin/showcontent.php?flag=2&req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
','attach');AJAX('/itildemo/home/controller/admin/showcontent.php?flag=1&req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
','box')"
                           data-target="#myModal"
                           data-req_title="<?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
"
                           data-req_author="<?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
"
                           data-req_time="<?php echo $_smarty_tpl->tpl_vars['req']->value['req_time'];?>
"
                           data-req_num="<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
"
                                >
                            <?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>

                        </a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['req']->value['req_time'];?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['req']->value['req_state']=='1') {?>
                        <span>&nbsp;未处理&nbsp;</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']=='2') {?>
                        <span>&nbsp;已指派&nbsp;</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']=='3') {?>
                        <span>&nbsp;已取消&nbsp;</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']=='4') {?>
                        <span>&nbsp;已解决&nbsp;</span>
                        <?php }?>
                    </td>
                    <td>删除</td>
                </tr>
                <?php } ?>
                </tbody>
                </thead>
            </table>
        </div>
        <div class="tab-pane" id="ios">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td></td>
                    <th>请求编号</th>
                    <th>请求标题</th>
                    <th>请求人</th>
                    <th>请求时间</th>
                    <th>请求状态</th>
                    <th>操作</th>
                </tr>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>SQ15070004</td>
                    <td>电脑重装系统</td>
                    <td>韦小宝</td>
                    <td>7-6 17:28</td>
                    <td>已解决</td>
                    <td>删除</td>
                </tr>
                </tbody>
                </thead>
            </table>
        </div>
        <div class="tab-pane" id="java">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td></td>
                    <th>请求编号</th>
                    <th>请求标题</th>
                    <th>请求人</th>
                    <th>请求时间</th>
                    <th>请求状态</th>
                    <th>操作</th>
                </tr>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>SQ15070004</td>
                    <td>电脑重装系统</td>
                    <td>韦小宝</td>
                    <td>7-6 17:28</td>
                    <td>已解决</td>
                    <td>删除</td>
                </tr>
                </tbody>
                </thead>
            </table>
        </div>

        <br><br>
    </div>
</div>

<!--任务指派-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal" method="post" action="/itildemo/home/service/req_ser.php">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">服务请求指派</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label class="col-md-2 control-label">请求标题:</label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control req_title" readonly>
                        </div>
                        <label class="col-md-1 control-label">请求人:</label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control req_author" readonly>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-md-2 control-label">请求时间:</label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control req_time" readonly>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-md-2 control-label">请求描述: </label>

                        <div class="col-sm-9">
                            <div class="form-control" id="box" style="height: 200px;overflow-y: scroll"></div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-md-2 control-label"> 附 件: </label>

                        <div class="col-sm-9" id="attach">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group form-group-sm">
                        <label class="col-md-2 control-label">追加描述:</label>

                        <div class="col-sm-9">
                            <textarea rows="5" class="form-control" name="add_description"></textarea>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-md-2 control-label">影响范围:</label>

                        <div class="col-sm-4">
                            <label class='btn btn-sm btn-default'><input type='radio' name='req_effect' value="1"
                                                                         checked>个人</label>
                            &nbsp;&nbsp;
                            <label class='btn btn-sm btn-default'><input type='radio' name='req_effect'
                                                                         value="2">部门</label>
                            &nbsp;&nbsp;
                            <label class='btn btn-sm btn-default'><input type='radio' name='req_effect'
                                                                         value="3">单位</label>
                        </div>
                        <label class="col-md-1 control-label">优先级:</label>

                        <div class="col-sm-4">
                            <label class='btn btn-sm btn-default'><input type='radio' name='priority' value="1" checked>低</label>
                            &nbsp;&nbsp;
                            <label class='btn btn-sm btn-default'><input type='radio' name='priority'
                                                                         value="2">中</label>
                            &nbsp;&nbsp;
                            <label class='btn btn-sm btn-default'><input type='radio' name='priority'
                                                                         value="3">高</label>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-md-2 control-label">服务协议:</label>

                        <div class="col-sm-3">
                            <select class="form-control" name="req_time_limit">
                                <option value="2">A级2小时内完成</option>
                                <option value="12">B级12小时内完成</option>
                                <option value="24">C级24小时内完成</option>
                                <option value="48">D级48小时内完成</option>
                                <option value="120">E级120小时内完成</option>
                                <option value="240">F级240小时内完成</option>
                                <option value="720">F级720小时内完成</option>
                            </select>
                        </div>
                        <label class="col-md-2 control-label">指派工程师:</label>

                        <div class="col-sm-3 input-group">
                            <input tabindex="0" name="req_gcs" id="gcsPopover" class="form-control" type="text"
                                   readonly
                                   data-toggle="popover"
                                   data-container="body"
                                   data-placement="top"
                                   data-html="true"
                                   title="工程师列表"
                                   data-content="
                                                <div style='max-height: 250px;overflow-y: scroll;'>
                                                <table class='table table-hover'>
                                                    <tr>
                                                         <th>帐号</th>
                                                         <th>姓名</th>
                                                         <th>选择</th>
                                                    </tr>
                                                    <tbody>
                                                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['engineer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                                    <tr>
                                                         <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
                                                         <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                                                         <td><input type='radio' checked name='gcs' value='<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
'></td>
                                                    </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                                </div>
                               ">
                            <span class="input-group-btn">
                            <button type="button" id="gcs_btn" class='btn btn-sm btn-primary'>选择</button>
                            </span>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="req_num" class="req_num">

                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="submit" name="assign_btn">指派</button>
                    <button class="btn btn-default btn-sm " data-dismiss="modal">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
>
    $('#myModal').on('show.bs.modal', function (event) {
        var req = $(event.relatedTarget) // Button that triggered the modal
        var modal = $(this)
        modal.find('.req_title').val(req.data('req_title'))
        modal.find('.req_author').val(req.data('req_author'))
        modal.find('.req_time').val(req.data('req_time'))
        modal.find('.req_num').val(req.data('req_num'))
    });
    $(function () {
        $('#gcsPopover').popover()
    });

    $('#gcs_btn').click(function chooseGcs() {
        $('#gcsPopover').popover('hide');
        var gcs = document.getElementsByName('gcs');
        for (var i = 0; i < gcs.length; i++) {
            if (gcs[i].checked) {
                document.getElementById('gcsPopover').value = gcs[i].value;
            }
        }
    })


<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
