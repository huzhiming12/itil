<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-06 14:07:16
         compiled from "/Users/huzhiming/workspace/php/itildemo/templates/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1051393957568d11844cfc19-03110062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6bba480b4825aadb0f08309f9530403255bee5d' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/admin/index.html',
      1 => 1444807828,
      2 => 'file',
    ),
    '2a757a84d577507058f434678216cb1693616db0' => 
    array (
      0 => '/Users/huzhiming/workspace/php/itildemo/templates/frame/index.html',
      1 => 1444696438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1051393957568d11844cfc19-03110062',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568d1184649e70_73049340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d1184649e70_73049340')) {function content_568d1184649e70_73049340($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <title>运维管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/itildemo/static/img/itil.png" type="image/x-icon"/>
    <link href="/itildemo/templates/frame/assets/css/dpl-min.css" rel="stylesheet" type="text/css"/>
    <link href="/itildemo/templates/frame/assets/css/bui-min.css" rel="stylesheet" type="text/css"/>
    <link href="/itildemo/templates/frame/assets/css/main-min.css" rel="stylesheet" type="text/css"/>

</head>

<body>

<div class="header">
    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，尊敬的<span class="dl-log-user">
        <?php if ($_SESSION['role']=='user') {?>
        用户:
        <?php } elseif ($_SESSION['role']=='engineer') {?>
        工程师：
        <?php } else { ?>
        管理员：
        <?php }?>
        <a class="dl-log-quit"><?php echo $_SESSION['user_name'];?>
</a> &nbsp;&nbsp;您好！
    </span>
        <a href="/itildemo/home/controller/share/login.php" title="退出系统" class="dl-log-quit">[退出]</a>
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
    <div class="nav-item-inner nav-inventory">知识库</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-order">报表</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-supplier">配置</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-goods">公告</div>
</li>
<li class="nav-item dl-selected">
    <div class="nav-item-inner nav-goods">个人信息</div>
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
                                {id: '1', text: '知识检索', href: '/itildemo/home/controller/share/know_search.php'},
                                {id: '2', text: '知识库管理', href: '/itildemo/home/controller/admin/know_list.php'},
                                {id: '3', text: '知识采集', href: '/itildemo/home/controller/share/know_create.php'}]
                        }]
                    },
                    {
                        id: '3',
                        homePage: '1',
                        menu: [{
                            text: '报表',
                            items: [
                                {id: '1', text: '请求总体统计', href: '/itildemo/home/controller/admin/graph_req.php'},
                                {id: '2', text: '工程师工作量统计', href: '/itildemo/home/controller/admin/graph_engineer.php'},
                                {id: '3', text: '用户请求统计', href: '/itildemo/home/controller/admin/graph_user_req.php'},
                                {id: '4', text: '请求评价统计', href: '/itildemo/home/controller/admin/graph_feedback.php'},

                            ]
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
                                {id: '3', text: '附件上传配置', href: '/itildemo/home/controller/admin/config_attach.php'},
                                {id: '4', text: '知识请求分类配置', href: '/itildemo/home/controller/admin/config_sort.php'},
                            ]
                        }]
                    },
                    {
                        id: '5',
                        homePage: '1',
                        menu: [{
                            text: '公告',
                            items: [
                                {id: '1', text: '公告列表', href: '/itildemo/home/controller/share/news_list.php'},
                                {id: '2', text: '新建公告', href: '/itildemo/home/controller/admin/news_create.php'},
                            ]
                        }]
                    },
                    {
                        id: '6',
                        homePage: '1',
                        menu: [{
                            text: '个人信息',
                            items: [
                                {id: '1', text: '个人信息', href: '/itildemo/home/controller/share/info.php'},
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
