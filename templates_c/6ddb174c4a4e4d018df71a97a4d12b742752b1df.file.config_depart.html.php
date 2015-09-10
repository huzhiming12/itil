<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-14 01:45:05
         compiled from "F:\wamp\www\itildemo\templates\admin\config_depart.html" */ ?>
<?php /*%%SmartyHeaderCode:2638855a1de2b380725-94905385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ddb174c4a4e4d018df71a97a4d12b742752b1df' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\config_depart.html',
      1 => 1436838272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2638855a1de2b380725-94905385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a1de2b468912_79957147',
  'variables' => 
  array (
    'tree' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a1de2b468912_79957147')) {function content_55a1de2b468912_79957147($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/itildemo/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/itildemo/static/css/mystyle.css">
    <link rel="stylesheet" href="/itildemo/plugins/jquery-easyui-1.4.3/themes/default/easyui.css">
    <link rel="stylesheet" href="/itildemo/plugins/jquery-easyui-1.4.3/themes/icon.css">
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/plugins/jquery-easyui-1.4.3/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>

<body background="/itildemo/static/img/bg.png">
<div class="_21_config_staff">
    <div class="_011_RequestList">
        机构配置 &nbsp;&nbsp;
        <a href="#" title="添加机构">
            <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#myModal">
                +
            </button>
        </a>
    </div>
    <div class="_032_config_depart">
        <ul class="easyui-tree">
            <li>
                <span>全部机构 </span>
                <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

            </li>
        </ul>
    </div>
</div>

<!--添加机构的模态框-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <form class="form-horizontal" name="adddepart" method="post" action="/itildemo/home/service/depart_ser.php"
              role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加机构</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label">机构名称：</label>
                        <div class="col-sm-6">
                            <input type="text" name="depart_name" class="form-control" placeholder="机构名称">
                        </div>
                    </div>
                    <!--隐藏数据-->
                    <input type="hidden" name="flag" value="1">
                    <input type="hidden" id="depart_parent_id" name="depart_parent_id" value="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="submit">添加</button>
                    <button class="btn btn-default btn-sm " type="reset" data-dismiss="modal">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html><?php }} ?>
