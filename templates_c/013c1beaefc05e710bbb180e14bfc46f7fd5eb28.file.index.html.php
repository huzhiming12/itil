<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-08 03:20:23
         compiled from "F:\wamp\www\itildemo\templates\user\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1246955e6655c3b4a00-93256839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '013c1beaefc05e710bbb180e14bfc46f7fd5eb28' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\user\\index.html',
      1 => 1436671699,
      2 => 'file',
    ),
    '5faa2dcbbfb8136e3a37dc4c1e38a72b8d01f8cf' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\frame\\index.html',
      1 => 1441682414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1246955e6655c3b4a00-93256839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e6655c997640_64830184',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6655c997640_64830184')) {function content_55e6655c997640_64830184($_smarty_tpl) {?><!DOCTYPE HTML>
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

    <div class="dl-log">欢迎您，<span class="dl-log-user"><?php echo $_SESSION['user_name'];?>
</span>
        <a href="/chinapost/index.php?m=Public&a=logout" title="退出系统" class="dl-log-quit">[退出]</a>
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
    <div class="nav-item-inner nav-order">服务请求</div>
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
                            text: '系统主页',
                            items: [
                                {id: '1', text: '我的面板', href: '/itildemo/home/controller/user/myboard.php'},
                                {id: '2', text: '个人信息', href: 'Role/index.html'},]
                        }]
                    },
                    {
                        id: '2',
                        homePage: '1',
                        menu: [{
                            text: '公告通知',
                            items: [
                                {id: '1', text: '最新通知', href: 'Node/index.html'},
                                {id: '2', text: '消息提醒', href: 'Node/index.html'}]
                        }]
                    },
                    {
                        id: '3',
                        homePage: '1',
                        menu: [{
                            text: '服务请求',
                            items: [
                                {id: '1', text: '我的请求', href: '/itildemo/home/controller/user/requestlist.php'},
                                {id: '2', text: '新增请求', href: '/itildemo/home/controller/user/addrequest.php'}]
                        }]
                    },
                    {
                        id: '4',
                        homePage: '1',
                        menu: [{
                            text: '知识库',
                            items: [
                                {id: '1', text: '知识列表', href: '/itildemo/home/controller/user/knowledgelist.php'},
                                {id: '2', text: '我的知识', href: 'Node/index.html'},
                                {id: '3', text: '新增知识', href: 'Node/index.html'}]
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
