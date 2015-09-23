<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-23 03:17:32
         compiled from "F:\wamp\www\itildemo\templates\engineer\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1226355f77a65c03b39-24923746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b631868fddb00446fd9b8de9ea9c0c76854fda' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\engineer\\index.html',
      1 => 1442978248,
      2 => 'file',
    ),
    '5faa2dcbbfb8136e3a37dc4c1e38a72b8d01f8cf' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\frame\\index.html',
      1 => 1442366263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1226355f77a65c03b39-24923746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f77a6601b941_74277928',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f77a6601b941_74277928')) {function content_55f77a6601b941_74277928($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <title>运维管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/itildemo/static/img/itil.png" type="image/x-icon" />
    <link href="/itildemo/templates/frame/assets/css/dpl-min.css" rel="stylesheet" type="text/css"/>
    <link href="/itildemo/templates/frame/assets/css/bui-min.css" rel="stylesheet" type="text/css"/>
    <link href="/itildemo/templates/frame/assets/css/main-min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="header">
    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user"><?php echo $_SESSION['role'];?>
:<?php echo $_SESSION['user_name'];?>
</span>
        <a href="#" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform">
            <div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div>
        </div>
        <ul id="J_Nav" class="nav-list ks-clear">
            
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-home">主页</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-order">公告通知</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-order">知识库</div>
</li>

        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">
    </ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/itildemo/templates/frame/assets/js/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/itildemo/templates/frame/assets/js/bui-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/itildemo/templates/frame/assets/js/common/main-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/itildemo/templates/frame/assets/js/config-min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    BUI.use('common/main', function () {
        var config =
                [
                    {
                        id: '1',
                        homePage: '1',
                        menu: [{
                            text: '我的主页',
                            items: [
                                {id: '1', text: '任务清单', href: '/itildemo/home/controller/engineer/task_list.php'},
                                {id: '2', text: '个人信息', href: 'Role/index.html'},]
                        }]
                    },
                    {
                        id: '2',
                        homePage: '1',
                        menu: [{
                            text: '公告通知',
                            items: [
                                {id: '1', text: '最新通知', href: '/itildemo/home/controller/share/news_list.php'},
                                {id: '2', text: '消息提醒', href: 'Node/index.html'}]
                        }]
                    },
                    {
                        id: '3',
                        homePage: '1',
                        menu: [{
                            text: '知识库',
                            items: [
                                {id: '1', text: '知识检索', href: '/itildemo/home/controller/share/know_search.php'},
                                {id: '2', text: '我的知识', href: '/itildemo/home/controller/engineer/my_know_list.php'},
                                {id: '3', text: '知识采集', href: '/itildemo/home/controller/share/know_create.php'}]
                        }]
                    },
                ];
        new PageUtil.MainPage({
            modulesConfig: config
        });
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
