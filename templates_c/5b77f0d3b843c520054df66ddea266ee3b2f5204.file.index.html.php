<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-10 07:22:15
         compiled from "F:\wamp\www\itildemo\templates\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:22961559f72a7945f23-15136195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b77f0d3b843c520054df66ddea266ee3b2f5204' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\index.html',
      1 => 1436495024,
      2 => 'file',
    ),
    '41de0f9fb155b330caef7b7f8f5168a864330e5a' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\frame\\index.html',
      1 => 1436356571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22961559f72a7945f23-15136195',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559f72a7a75628_20808924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f72a7a75628_20808924')) {function content_559f72a7a75628_20808924($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <title>运维管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link href="/itildemo/templates/frame/assets/css/dpl-min.css" rel="stylesheet" type="text/css"/>
    <link href="/itildemo/templates/frame/assets/css/bui-min.css" rel="stylesheet" type="text/css"/>
    <link href="/itildemo/templates/frame/assets/css/main-min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">root</span>
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
    <div class="nav-item-inner nav-home">服务台</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-order">知识库</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-order">报表</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-order">配置</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-order">公告</div>
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
                            text: '服务台',
                            items: [
                                {id: '1', text: '服务首页', href: '/itildemo/home/controller/admin/request_home.php'},
                                {id: '2', text: '服务请求查询', href: '/itildemo/home/controller/admin/request_inquiry.php'},
                                {id: '3', text: '服务请求创建', href: '/itildemo/home/controller/admin/request_create.php'}]

                        }]
                    },
                    {
                        id: '2',
                        homePage: '1',
                        menu: [{
                            text: '知识库',
                            items: [
                                {id: '1', text: '知识库首页', href: 'Node/index.html'},
                                {id: '2', text: '知识库查询', href: 'Node/index.html'},
                                {id: '3', text: '知识创建', href: 'Node/index.html'}]
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
                            text: '配置',
                            items: [
                                {id: '1', text: '机构配置', href: '/itildemo/home/controller/admin/config_depart.php'},
                                {id: '2', text: '人员配置', href: '/itildemo/home/controller/admin/config_staff.php'},
                                {id: '3', text: '登陆账号配置', href: '/itildemo/home/controller/admin/config_user.php'},
                                {id: '4', text: '知识分类配置', href: '/itildemo/home/controller/admin/config_sort.php'},
                            ]
                        }]
                    },
                    {
                        id: '5',
                        homePage: '1',
                        menu: [{
                            text: '公告',
                            items: [
                                {id: '1', text: '公告列表', href: '/itildemo/home/controller/admin/config_depart.php'},
                                {id: '2', text: '新建公告', href: '/itildemo/home/controller/admin/config_staff.php'},
                            ]
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
