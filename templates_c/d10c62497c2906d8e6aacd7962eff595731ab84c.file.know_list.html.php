<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-06 14:24:03
         compiled from "/Users/huzhiming/workspace/php/itildemo/templates/share/know_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1256988429568d15732ff2f9-46514138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd10c62497c2906d8e6aacd7962eff595731ab84c' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/share/know_list.html',
      1 => 1444479552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1256988429568d15732ff2f9-46514138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchcontent' => 0,
    'res' => 0,
    'kno' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568d1573500c47_76163645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d1573500c47_76163645')) {function content_568d1573500c47_76163645($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/huzhiming/workspace/php/itildemo/libs/plugins/modifier.replace.php';
?><!DOCTYPE html>
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
            <div class="col-sm-4"></div>
            <div class="input-group input-group-sm col-sm-4">
                <input type="text" name="searchcontent" value="<?php echo $_smarty_tpl->tpl_vars['searchcontent']->value;?>
" class="form-control"
                       placeholder="知识主题、编号、分类、关键字等">
                <span class="input-group-btn">
                  <button class="btn btn-primary" name="search_btn" type="button">搜索</button>
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
&readflag=1">
                    <span class="_38_knowledge_title">
                    <?php if ($_smarty_tpl->tpl_vars['searchcontent']->value!='') {?>
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['kno']->value['kno_title'],$_smarty_tpl->tpl_vars['searchcontent']->value,"<font style='color: red'>".((string)$_smarty_tpl->tpl_vars['searchcontent']->value)."</font>");?>

                    <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_title'];?>

                    <?php }?>
                    </span></a>
                <span class="_40_knowledge">&nbsp;&nbsp;[分类：
                    <?php if ($_smarty_tpl->tpl_vars['searchcontent']->value!='') {?>
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['kno']->value['kno_sort'],$_smarty_tpl->tpl_vars['searchcontent']->value,"<font style='color: red'>".((string)$_smarty_tpl->tpl_vars['searchcontent']->value)."</font>");?>

                    <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_sort'];?>

                    <?php }?>
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
                <?php if ($_smarty_tpl->tpl_vars['searchcontent']->value!='') {?>
                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['kno']->value['kno_content'],$_smarty_tpl->tpl_vars['searchcontent']->value,"<font style='color: red'>".((string)$_smarty_tpl->tpl_vars['searchcontent']->value)."</font>");?>

                <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_content'];?>

                <?php }?>
            </div>
            <!--结尾关键字栏-->
            <div>
                <span class="_42_knowledge">关键字：
                    <?php if ($_smarty_tpl->tpl_vars['searchcontent']->value!='') {?>
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['kno']->value['kno_keyword'],$_smarty_tpl->tpl_vars['searchcontent']->value,"<font style='color: red'>".((string)$_smarty_tpl->tpl_vars['searchcontent']->value)."</font>");?>

                    <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['kno']->value['kno_keyword'];?>

                    <?php }?>
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
