<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-15 11:04:02
         compiled from "F:\wamp\www\itildemo\templates\user\my_request_list.html" */ ?>
<?php /*%%SmartyHeaderCode:353055f7c593c90d53-74471612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d896ef6c7449537e59f8559b73109f878c51d90' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\user\\my_request_list.html',
      1 => 1442315037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353055f7c593c90d53-74471612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f7c593e88c54_31584483',
  'variables' => 
  array (
    'res' => 0,
    'req' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c593e88c54_31584483')) {function content_55f7c593e88c54_31584483($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
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
    <title></title>
</head>
<body>
<br>

<div class="_012_RequestList">
    <div class="_23_config_staff">
        <form method="get" action="/itildemo/home/controller/user/my_request_list.php">
            <div class="input-group input-group-sm _24_config_staff ">
                <input type="text" name="searchcontent" class="form-control" placeholder="请求标题、分类内容等">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">搜索</button>
                </span>
            </div>
        </form>
    </div>
    <!--知识列表--->
    <div class="_39_knowledge">
        <?php if (count($_smarty_tpl->tpl_vars['res']->value)==0) {?>
        <br>
        <div class="_46_knowledge"><a>没有找到相关请求</a></div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
?>
        <div class="_45_knowledge">
            <!--标题栏-->
            <div>
                <a href="/itildemo/home/controller/share/request_detail.php?req_num=<?php echo $_smarty_tpl->tpl_vars['req']->value['req_num'];?>
">
                    <span class="_38_knowledge_title"><?php echo $_smarty_tpl->tpl_vars['req']->value['req_title'];?>
</span></a>
                <span class="_40_knowledge">&nbsp;&nbsp;[分类：<?php echo $_smarty_tpl->tpl_vars['req']->value['req_sort'];?>
]</span>
                <?php if ($_smarty_tpl->tpl_vars['req']->value['req_state']=='1') {?>
                <span class="_state_new">&nbsp;未处理&nbsp;</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']=='2') {?>
                <span class="_state_change">&nbsp;已指派&nbsp;</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']=='3') {?>
                <span class="_state_cancel">&nbsp;已取消&nbsp;</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['req']->value['req_state']=='4') {?>
                <span class="_state_pass">&nbsp;已解决&nbsp;</span>
                <?php }?>
            </div>
            <!--内容栏-->
            <div class="_43_knowledge">
                <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['req']->value['req_content']);?>

            </div>
            <!--结尾关键字栏-->
            <div>
                <span class="_42_knowledge">关键字：<?php echo $_smarty_tpl->tpl_vars['req']->value['req_keyword'];?>
</span>
                <span class="_44_knowledge">创建：<?php echo $_smarty_tpl->tpl_vars['req']->value['req_author'];?>
&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['req']->value['req_time'];?>
</span>
            </div>
        </div>
        <?php } ?>
        <br>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>

        </div>
        <br>
    </div>
</div>
</div>
</div>

</body>
</html><?php }} ?>
