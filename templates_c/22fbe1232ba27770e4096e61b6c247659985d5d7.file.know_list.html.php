<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-12 12:28:40
         compiled from "F:\wamp\www\itildemo\templates\share\know_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1577255f27bec626277-65418021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22fbe1232ba27770e4096e61b6c247659985d5d7' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\share\\know_list.html',
      1 => 1442060917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1577255f27bec626277-65418021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f27bec6b5567_50171546',
  'variables' => 
  array (
    'res' => 0,
    'kno' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f27bec6b5567_50171546')) {function content_55f27bec6b5567_50171546($_smarty_tpl) {?><!DOCTYPE html>
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
        <form method="get">
            <div class="input-group input-group-sm _24_config_staff ">

                <input type="text" name="searchcontent" class="form-control" placeholder="知识主题、编号、分类、关键字">
                <span class="input-group-btn">
                  <button class="btn btn-primary" name="search_btn" type="button">搜索</button>
                </span>
            </div>
        </form>
    </div>
    <!--知识列表--->
    <div class="_39_knowledge">
        <?php  $_smarty_tpl->tpl_vars['kno'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kno']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kno']->key => $_smarty_tpl->tpl_vars['kno']->value) {
$_smarty_tpl->tpl_vars['kno']->_loop = true;
?>
        <div class="_45_knowledge">
            <!--标题栏-->
            <div>
                <a href="/itildemo/home/controller/admin/know_detail.php?kno_num=<?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_num'];?>
"><span
                        class="_38_knowledge_title"><?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_title'];?>
</span></a>
                <span class="_40_knowledge">&nbsp;&nbsp;[分类：<?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_sort'];?>
]</span>
                <?php if ($_smarty_tpl->tpl_vars['kno']->value['kno_state']=='1') {?>
                <span class="_state_new">&nbsp;新采集&nbsp;</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['kno']->value['kno_state']=='2') {?>
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
 阅读(0) 评论(0)</span>
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
