<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-06 14:08:28
         compiled from "/Users/huzhiming/workspace/php/itildemo/templates/admin/know_list.html" */ ?>
<?php /*%%SmartyHeaderCode:200370705568d11cc038561-66543055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eea418f8190838ab0612b053743a3fb54abdee9' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/admin/know_list.html',
      1 => 1444479592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200370705568d11cc038561-66543055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'kno' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568d11cc0f6061_97289009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d11cc0f6061_97289009')) {function content_568d11cc0f6061_97289009($_smarty_tpl) {?><!DOCTYPE html>
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
        <form method="get" action="/itildemo/home/controller/admin/know_list.php">
            <div class="input-group input-group-sm _24_config_staff ">
                <input type="text" name="searchcontent" class="form-control" placeholder="知识主题、编号、分类、关键字">
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
        <div class="_46_knowledge"><a>没有找到相关知识</a></div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['kno'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kno']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kno']->key => $_smarty_tpl->tpl_vars['kno']->value) {
$_smarty_tpl->tpl_vars['kno']->_loop = true;
?>
        <div class="_45_knowledge">
            <!--标题栏-->
            <div>
                <a href="/itildemo/home/controller/admin/know_detail.php?kno_num=<?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_num'];?>
">
                    <span class="_38_knowledge_title"><?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_title'];?>
</span></a>
                <span class="_40_knowledge">&nbsp;&nbsp;[分类：<?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_sort'];?>
]</span>
                <?php if ($_smarty_tpl->tpl_vars['kno']->value['kno_state']=='1') {?>
                <span class="_state_new">&nbsp;新采集&nbsp;</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['kno']->value['kno_state']=='2') {?>
                <span class="_state_change">&nbsp;有更新&nbsp;</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['kno']->value['kno_state']=='3') {?>
                <span class="_state_pass">&nbsp;已发布&nbsp;</span>
                <?php }?>
            </div>
            <!--内容栏-->
            <div class="_43_knowledge">
                <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['kno']->value['kno_content']);?>

            </div>
            <!--结尾关键字栏-->
            <div>
                <span class="_42_knowledge">关键字：<?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_keyword'];?>
</span>
                <span class="_44_knowledge">创建：<?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_author'];?>
  <?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_sub_time'];?>
 阅读(<?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_read'];?>
)</span>
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
