<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 07:47:34
         compiled from "F:\wamp\www\itildemo\templates\user\knowledgedetail.html" */ ?>
<?php /*%%SmartyHeaderCode:1608555a21b9663dc87-41551972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e385bab4f88e6c3d1ed6bb8756a5dd54f2634423' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\user\\knowledgedetail.html',
      1 => 1436671699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1608555a21b9663dc87-41551972',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a21b966bd193_58963652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a21b966bd193_58963652')) {function content_55a21b966bd193_58963652($_smarty_tpl) {?><!DOCTYPE html>
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
    <title></title>
</head>
<body>

<div class="_012_RequestList">
    <div class="_011_RequestList">
        知识详情
    </div>
    <div class="_018_Title">
        【打印机】网络打印机安装常见故障及解决方法
    </div>
    <br>

    <div class="_019_KnowledgeDetail">
        <font color="#999">key words：测试, test, 电脑, 服务器, 网络, 系统, 打印机&nbsp;&nbsp;&nbsp;&nbsp;分类：测试</font>
    </div>
    <br>

    <div class="_015_RequestList">
        1、自检过程中总是出现“I/O CARD NOT READY”错误提示
        这类故障一般是打印服务器本身损坏所致，也有可能是打印服务器所选择的网络接口类型与公司网络不一致，当然还有可能是打印机本接口损坏等等。这种故障的解决方法就是找一个现正常使用的打印服务器（要接口类型与公司网络一致）插入试一下自检即可知道是打印机本身问题，还是打印服务器问题；对于接口类型是否一致就可查一下说明书或服务器本身标注即可查明。

        2、在Jet Admin软件中找不到网络打印机
        出现这种情况要么是用户对这个软件本身不会用，有很多网管员就经常用“Jet Admin”软件中“NEW”命令来查找，但是一般都不能找到新加的打印设备，总是出现“No New
        Device”(没有新设备)错误提示。要记住一定在用“Refresh”命令来更新系统设备。还有一种可能就是该网络节点没能与网络连通，这很简单，可用一连网正常的Note Book电脑来试一下即知；

        3、在Jet Admin软件中找到了网络打印机，但不能安装
        这个故障一般都是对该设备所选用的“IP”地址与其它设备的“IP”地址相冲突，如果该网络是利用DCHP来自动分配各电脑主机的IP地址时一般不会出现这一问题，但当我们自动手工分配时就很有可能发生冲突，这时我们就要查一下网络中所有电脑设备IP地址是否有冲突了。

        4、在服务器中不能安装网络打印机
        要解决这一故障的关键就是要查清楚我们为该打印机设置的IP地址，然后在添加端口时对应加上这一端口即可，如果加到其它端口上系统就找不到所添加的打印设备了，还有在“添加打印机“时一定有选择“本地打印机”，千万别因它是网络打印机就选择了“网络打印机”。

        5、工作站中不能安装网络打印机
        虽然在服务器上成功安装了，但在工作站中安装时却找不到该打印机，这一原因就是因为在服务器安装时没有正确输入共享名，或者没有正确找到这一共享名的打印机。

        6、打印机不能正确打印
        虽然全部正确安装了网络打印机，但在工作站中仍不能打印或不能正确打印，这主要原因是在“Jet Admin”中安装时没有很好地设置好，或者没有正确选择好其通信协议。如色太淡，是因为在打印机的控制面板或Jet
        Admin软件中把打印机设置成“Economy”（经济型），不能自动送纸是设置成“Free Hand”（手送），如要DOS下共享，则最好在选择协议时选择上“NETBEUI”协议，否则可能有些软件就不能以正确样式和字体打印了。
    </div>
    <br><br>

    <div class="_020_KnowledgeDetail">
        创建：刘美美 2013-5-5 9:58 更新：刘美美 2013-5-15 16:46 阅读(88) 评论(2)
    </div>
    <br>
    <div class="_015_RequestList">
        <font style="font-weight: bold">附件</font>

    </div>
    <br><br>

</div>
</body>
</html><?php }} ?>
