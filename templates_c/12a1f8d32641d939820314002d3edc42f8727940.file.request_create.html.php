<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-14 08:26:28
         compiled from "F:\wamp\www\itildemo\templates\admin\request_create.html" */ ?>
<?php /*%%SmartyHeaderCode:2277955e3f8717b4c90-45168449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12a1f8d32641d939820314002d3edc42f8727940' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\request_create.html',
      1 => 1444811179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277955e3f8717b4c90-45168449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e3f871899ec5_72709908',
  'variables' => 
  array (
    'parent_sort' => 0,
    'p_sort' => 0,
    'child_sort' => 0,
    'c_sort' => 0,
    'userlist' => 0,
    'user' => 0,
    'attach_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3f871899ec5_72709908')) {function content_55e3f871899ec5_72709908($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/plugins/ckfinder/ckfinder.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="/itildemo/plugins/fileupload/js/stream-v1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/itildemo/plugins/fileupload/css/stream-v1.css">
    <title></title>
</head>

<body background="/itildemo/static/img/bg.png">
<div class="_012_RequestList">
    <div class="_011_RequestList">
        请求创建
    </div>
    <br>
    <div class="_013_RequestList">
        <form class="form-horizontal form-group-sm" name="req_form" onsubmit="return checkValue();" action="/itildemo/home/service/req_ser.php?flag=admin" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">标题:</label>

                <div class="col-sm-3">
                    <input type="text" name="req_title" class="form-control" placeholder="请求标题">
                </div>
                <label class="col-sm-2 control-label">请求分类:</label>

                <div class="col-sm-3">
                    <input tabindex="0" name="req_sort" id="sortPopover" class="form-control" type="text"
                           readonly
                           data-toggle="popover"
                           data-container="body"
                           data-placement="bottom"
                           data-html="true"
                           title="分类请求"
                           data-content="
                               <div class='_015_RequestList'>
                                    <div class='_014_RequestList btn-group' data-toggle='buttons'>
                                        <table width='100%'>
                                            <?php  $_smarty_tpl->tpl_vars['p_sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_sort']->key => $_smarty_tpl->tpl_vars['p_sort']->value) {
$_smarty_tpl->tpl_vars['p_sort']->_loop = true;
?>
                                            <tr class='_031_config_sort'>
                                                <td class='_029_config_sort'><?php echo $_smarty_tpl->tpl_vars['p_sort']->value['sort_name'];?>
：</td>
                                                <td class='_030_config_sort'>
                                                    <?php  $_smarty_tpl->tpl_vars['c_sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c_sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_sort']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c_sort']->key => $_smarty_tpl->tpl_vars['c_sort']->value) {
$_smarty_tpl->tpl_vars['c_sort']->_loop = true;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['c_sort']->value['sort_parent_id']==$_smarty_tpl->tpl_vars['p_sort']->value['sort_id']) {?>
                                                        <label class='btn btn-sm btn-default'>
                                                          <input type='checkbox' autocomplete='off' name='chooseSort' value='<?php echo $_smarty_tpl->tpl_vars['c_sort']->value['sort_name'];?>
'>
                                                            <?php echo $_smarty_tpl->tpl_vars['c_sort']->value['sort_name'];?>
</label>
                                                    &nbsp;&nbsp;
                                                    <?php }?>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <br><br>
                                    <div class='_46_knowledge'><button class='btn btn-sm btn-primary' onclick='selectSort()'> 确 定 </button></div>
                                </div>
                               ">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">关键字:</label>

                <div class="col-sm-3">
                    <input type="text" name="req_keyword" placeholder="keyword" class="form-control">
                </div>
                <label class="col-sm-2 control-label">请求来源:</label>

                <div class="col-sm-3">
                    <select class="form-control" name="req_source">
                        <option value="1">网页请求</option>
                        <option value="2">邮件请求</option>
                        <option value="3">电话请求</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">请求人:</label>
                <div class="col-sm-3">
                    <input tabindex="0" name="req_author"
                           id="userPopover" class="form-control" type="text" readonly
                           data-toggle="popover"
                           data-container="body"
                           data-placement="bottom"
                           data-html="true"
                           title="人员列表"
                           data-content="
                                                <div style='max-height: 300px; overflow-y: scroll'>
                                                    <table class='table table-hover'>
                                                        <tr>
                                                            <th>帐号</th>
                                                            <th>姓名</th>
                                                            <th>所在机构</th>
                                                        </tr>
                                                        <tbody>
                                                        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                                        <tr>
                                                            <td><a href='javascript:void(0)' onclick=&quot;chooseUser('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
')&quot;><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</a></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['depart_name'];?>
</td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                        </table>
                                                </div>">
                </div>
            </div>
            <div class="_015_RequestList">
                <textarea name="req_content" id="content"></textarea>
                <?php echo '<script'; ?>
>
                    CKEDITOR.replace("req_content", {
                        filebrowserBrowseUrl        : '/itildemo/plugins/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl   : '/itildemo/plugins/ckfinder/ckfinder.html?Type=Images',
                        filebrowserFlashBrowseUrl   : '/itildemo/plugins/ckfinder/ckfinder.html?Type=Flash',
                        filebrowserUploadUrl        : '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl   : '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl   : '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });
                <?php echo '</script'; ?>
>
            </div>
            <br>
            <a href="#" class="_50_attach _015_RequestList">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;添加附件</a>
            <div id="attach" style="display: none" class="panel panel-primary  form-group-sm _015_RequestList">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">附件:</label>
                        <div class="col-sm-6">
                            <p id="i_select_files"></p>
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
" name="attach_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div id="i_stream_files_queue">
                            </div>
                            <br>
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary"
                               onclick="javascript:_t.upload();">开始上传</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                               onclick="javascript:_t.stop();">停止上传</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-default"
                               onclick="javascript:_t.cancel();">
                                &nbsp;取&nbsp;消&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>

            <button name="add_req" type="submit" class="btn btn-primary btn-sm _017_AddRequest">提交请求</button>
            <br><br><br>
        </form>

    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $('#sortPopover').popover();
        $('#userPopover').popover()
    });

    function selectSort() {
        $('#sortPopover').popover('hide');
        var chooseSort = document.getElementsByName('chooseSort');
        var sort = "";
        for (var i = 0; i < chooseSort.length; i++) {
            if (chooseSort[i].checked) {
                sort += chooseSort[i].value + "    ";
            }
        }
        document.getElementById('sortPopover').value = sort;
    }
    function chooseUser(user_name) {
        $('#userPopover').popover('hide');
        document.getElementById('userPopover').value = user_name;
    }


    $('._50_attach').click(function () {
        var attach = document.getElementById("attach");
        if(attach.style.display=="none")
            attach.style.display="block";
        else
            attach.style.display="none";
    })

    function checkValue()
    {
        if(req_form.req_title.value=="")
        {
            alert("请求标题不能为空！");
            req_form.req_title.focus();
            return false;
        }
        if(req_form.req_sort.value=="")
        {
            alert("请求分类不能为空！");
            req_form.req_sort.focus();
            return false;
        }
        if(req_form.req_keyword.value=="")
        {
            alert("关键字不能为空！");
            req_form.req_keyword.focus();
            return false;
        }
        if(req_form.req_author.value=="")
        {
            alert("请求人不能为空！");
            req_form.req_author.focus();
            return false;
        }
    }
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
    /**
     * 配置文件（如果没有默认字样，说明默认值就是注释下的值）
     * 但是，on*（onSelect， onMaxSizeExceed...）等函数的默认行为
     * 是在ID为i_stream_message_container的页面元素中写日志
     */
    var config = {
                browseFileId: "i_select_files",
                /** 选择文件的ID, 默认: i_select_files */
                browseFileBtn: "<div></div>",
                /** 显示选择文件的样式, 默认: `<div>请选择文件</div>` */
                dragAndDropArea: "i_select_files",
                /** 拖拽上传区域，Id（字符类型"i_select_files"）或者DOM对象, 默认: `i_select_files` */
                dragAndDropTips: "<span><span class='btn btn-sm btn-default'>添加文件</span> <font color='red'>*每个文件不超过<?php echo $_smarty_tpl->getConfigVariable('MaxFileSize')/1024/1024;?>
M<br>最多<?php echo $_smarty_tpl->getConfigVariable('MaxFileCount');?>
个文件</font></span>",
                /** 拖拽提示, 默认: `<span>把文件(文件夹)拖拽到这里</span>` */
                filesQueueId: "i_stream_files_queue",
                /** 文件上传容器的ID, 默认: i_stream_files_queue */
                filesQueueHeight: 150,
                /** 文件上传容器的高度（px）, 默认: 450 */
                messagerId: "i_stream_message_container",
                /** 消息显示容器的ID, 默认: i_stream_message_container */
                multipleFiles: true,
                /** 多个文件一起上传, 默认: false */
                autoUploading: false,
                /** 选择文件后是否自动上传, 默认: true */
//		autoRemoveCompleted : true, /** 是否自动删除容器中已上传完毕的文件, 默认: false */
                maxSize: <?php echo $_smarty_tpl->getConfigVariable('MaxFileSize');?>
, /** 单个文件的最大大小，默认:2G */
    //		retryCount : 5, /** HTML5上传失败的重试次数 */
    //		postVarsPerFile : { /** 上传文件时传入的参数，默认: {} */
    //			param1: "val1",
    //			param2: "val2"
    //		},
            swfURL: "/itildemo/plugins/fileupload/swf/FlashUploader.swf",
    /** SWF文件的位置 */
            tokenURL: "/itildemo/plugins/fileupload/php/upload.php?action=tk&attach_id=<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
",
    /** 根据文件名、大小等信息获取Token的URI（用于生成断点续传、跨域的令牌） */
            frmUploadURL: "/itildemo/plugins/fileupload/php/upload.php?action=fd&attach_id=<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
;",
    /** Flash上传的URI */
            uploadURL: "/itildemo/plugins/fileupload/php/upload.php?action=up&attach_id=<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
",
    /** HTML5上传的URI */
            simLimit: <?php echo $_smarty_tpl->getConfigVariable('MaxFileCount');?>
, /** 单次最大上传文件个数 */
            extFilters: [ <?php echo $_smarty_tpl->getConfigVariable('extFilters');?>
 ], /** 允许的文件扩展名, 默认: [] */
    //		onSelect: function(list) {alert('onSelect')}, /** 选择文件后的响应事件 */
            onMaxSizeExceed: function(size, limited, name) {alert("文件大小超出限制")}, /** 文件大小超出的响应事件 */
            onFileCountExceed: function(selected, limit) {alert('文件数量过多')} /** 文件数量超出的响应事件 */
    //		onExtNameMismatch: function(name, filters) {alert('onExtNameMismatch')}, /** 文件的扩展名不匹配的响应事件 */
    //		onCancel : function(file) {alert('Canceled:  ' + file.name)}, /** 取消上传文件的响应事件 */
    //		onComplete: function(file) {alert('onComplete')}, /** 单个文件上传完毕的响应事件 */
    //		onQueueComplete: function() {alert('onQueueComplete')}, /** 所以文件上传完毕的响应事件 */
    //		onUploadError: function(status, msg) {alert('onUploadError')} /** 文件上传出错的响应事件 */
    };
    var _t = new Stream(config);
<?php echo '</script'; ?>
><?php }} ?>
