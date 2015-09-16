<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-16 14:05:53
         compiled from "F:\wamp\www\itildemo\templates\engineer\task_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1172355f91637852724-76109748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73759c41a706d1b427c79987b3578860003b9cc1' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\engineer\\task_detail.html',
      1 => 1442412346,
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
    'ass' => 0,
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
    <title></title>
    <style type="text/css">
        tr {
            line-height: 30px;
        }
    </style>
<body>

<div class="_012_RequestList">
    <div class="_011_RequestList">
        任务详情
    </div>
    <br>

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
                    <?php if ($_smarty_tpl->tpl_vars['res']->value['req_time_limit']==2) {?>
                    A级 2小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->value['req_time_limit']==12) {?>
                    B级 12小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->value['req_time_limit']==24) {?>
                    C级 24小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->value['req_time_limit']==48) {?>
                    D级 2小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->value['req_time_limit']==120) {?>
                    E级 120小时内完成
                    <?php } elseif ($_smarty_tpl->tpl_vars['res']->value['req_time_limit']==240) {?>
                    F级 240小时内完成
                    <?php } else { ?>
                    G级 720小时内完成
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

    <div class="_48_task">
        <span style="color: #999">流程信息：</span><br><br>
        <ul>
            <li><?php echo $_smarty_tpl->tpl_vars['res']->value['req_time'];?>
 &nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['res']->value['req_author'];?>
 &nbsp;&nbsp; 创建请求</li>
        </ul>
    </div>
    <div class="_48_task">
        <span style="color: #999">解决方案：</span><br><br>
        <textarea class="form-control" id="req_solution" rows="10" ></textarea>
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
    <br>
    <br>

    <div class="_46_knowledge">
        <button class="btn btn-sm btn-primary">提交方案</button>&nbsp;&nbsp;
        <button class="btn btn-sm btn-primary" data-toggle="popover" data-html="true" data-placement="top"
                data-content="<form method='post' action='../../service/req_ser.php?req_num=<?php echo $_smarty_tpl->tpl_vars['res']->value['req_num'];?>
'>
                              <textarea name='change_reason' style='width:300px;' class='form-control' rows='5' placeholder='变更理由(256字)'></textarea><br>
                              <div class='_46_knowledge'><button class='btn btn-sm btn-primary' type='submit'>提交</button>&nbsp;&nbsp;</form>
                              <a href='javascript:void(0)' class='btn btn-sm btn-default'>取消</a></div>">申请变更
        </button>&nbsp;&nbsp;
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
