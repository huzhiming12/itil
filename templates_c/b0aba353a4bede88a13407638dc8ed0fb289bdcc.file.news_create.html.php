<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-14 10:52:02
         compiled from "F:\wamp\www\itildemo\templates\admin\news_create.html" */ ?>
<?php /*%%SmartyHeaderCode:11743560150b4416135-31487185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0aba353a4bede88a13407638dc8ed0fb289bdcc' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\admin\\news_create.html',
      1 => 1444819918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11743560150b4416135-31487185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560150b4488640_14413620',
  'variables' => 
  array (
    'attach_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560150b4488640_14413620')) {function content_560150b4488640_14413620($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
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
 language="JavaScript" src="/itildemo/plugins/fileupload/js/stream-v1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/itildemo/plugins/fileupload/css/stream-v1.css">
    <title></title>
</head>
<body>
<br>
<div class="_012_RequestList">
    <div class="_011_RequestList">
        通知创建
    </div>
    <br>
    <div class="_013_RequestList">
        <form class="form-horizontal" name="add_news" onsubmit="return checkValue()" action="/itildemo/home/service/news_ser.php" method="post">
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label">通知标题:</label>
                <div class="col-sm-8">
                    <input type="text" name="news_title" class="form-control" placeholder="通知标题">
                </div>
            </div>
            <div class="_015_RequestList">
                <textarea name="news_content" id="content"></textarea>
                <?php echo '<script'; ?>
>
                    CKEDITOR.replace("news_content", {
                        filebrowserBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html?Type=Images',
                        filebrowserFlashBrowseUrl: '/itildemo/plugins/ckfinder/ckfinder.html?Type=Flash',
                        filebrowserUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '/itildemo/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
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
           <div class="_46_knowledge"> <button name="add_news" class="btn btn-primary btn-sm">发布通知</button></div>
            <br><br><br>
        </form>
    </div>
</div>

</body>
</html>
<?php echo '<script'; ?>
>
    $('._50_attach').click(function () {
        var attach = document.getElementById("attach");
        if(attach.style.display=="none")
            attach.style.display="block";
        else
            attach.style.display="none";
    })

    function checkValue()
    {
        if(add_news.news_title.value=="")
        {
            alert("通知标题不能为空！")
            add_news.news_title.focus();
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
        browseFileId: "i_select_files", /** 选择文件的ID, 默认: i_select_files */
        browseFileBtn: "<div></div>", /** 显示选择文件的样式, 默认: `<div>请选择文件</div>` */
        dragAndDropArea: "i_select_files", /** 拖拽上传区域，Id（字符类型"i_select_files"）或者DOM对象, 默认: `i_select_files` */
        dragAndDropTips: "<span><span class='btn btn-sm btn-default'>添加文件</span> <font color='red'>*每个文件不超过<?php echo $_smarty_tpl->getConfigVariable('MaxFileSize')/1024/1024;?>
M，最多<?php echo $_smarty_tpl->getConfigVariable('MaxFileCount');?>
个文件</font></span>", /** 拖拽提示, 默认: `<span>把文件(文件夹)拖拽到这里</span>` */
        filesQueueId: "i_stream_files_queue", /** 文件上传容器的ID, 默认: i_stream_files_queue */
        filesQueueHeight: 150, /** 文件上传容器的高度（px）, 默认: 450 */
        messagerId: "i_stream_message_container", /** 消息显示容器的ID, 默认: i_stream_message_container */
        multipleFiles: true, /** 多个文件一起上传, 默认: false */
        autoUploading: false, /** 选择文件后是否自动上传, 默认: true */
//		autoRemoveCompleted : true, /** 是否自动删除容器中已上传完毕的文件, 默认: false */
		maxSize: <?php echo $_smarty_tpl->getConfigVariable('MaxFileSize');?>
, /** 单个文件的最大大小，默认:2G */
//		retryCount : 5, /** HTML5上传失败的重试次数 */
//		postVarsPerFile : { /** 上传文件时传入的参数，默认: {} */
//			param1: "val1",
//			param2: "val2"
//		},
        swfURL: "/itildemo/plugins/fileupload/swf/FlashUploader.swf", /** SWF文件的位置 */
        tokenURL: "/itildemo/plugins/fileupload/php/upload.php?action=tk&attach_id=<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
", /** 根据文件名、大小等信息获取Token的URI（用于生成断点续传、跨域的令牌） */
        frmUploadURL: "/itildemo/plugins/fileupload/php/upload.php?action=fd&attach_id=<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
;", /** Flash上传的URI */
        uploadURL: "/itildemo/plugins/fileupload/php/upload.php?action=up&attach_id=<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
", /** HTML5上传的URI */
//		simLimit: 200, /** 单次最大上传文件个数 */
        extFilters: [ <?php echo $_smarty_tpl->getConfigVariable('extFilters');?>
 ],/** 允许的文件扩展名, 默认: [] */
//		onSelect: function(list) {alert('onSelect')}, /** 选择文件后的响应事件 */
        onMaxSizeExceed: function(size, limited, name) {alert("文件大小超出限制")}, /** 文件大小超出的响应事件 */
        onFileCountExceed: function(selected, limit) {alert('文件数量过多')} /** 文件数量超出的响应事件 */
//	    onExtNameMismatch: function(name, filters) {alert('onExtNameMismatch')}, /** 文件的扩展名不匹配的响应事件 */
//		onCancel : function(file) {alert('Canceled:  ' + file.name)}, /** 取消上传文件的响应事件 */
//		onComplete: function(file) {alert('onComplete')}, /** 单个文件上传完毕的响应事件 */
//		onQueueComplete: function() {alert('onQueueComplete')}, /** 所以文件上传完毕的响应事件 */
//		onUploadError: function(status, msg) {alert('onUploadError')} /** 文件上传出错的响应事件 */
    };
    var _t = new Stream(config);
<?php echo '</script'; ?>
><?php }} ?>
