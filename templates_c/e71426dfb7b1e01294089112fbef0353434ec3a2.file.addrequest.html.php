<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-06 08:25:38
         compiled from "F:\wamp\www\itildemo\templates\user\addrequest.html" */ ?>
<?php /*%%SmartyHeaderCode:2807155e3fd38c525f8-24153504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71426dfb7b1e01294089112fbef0353434ec3a2' => 
    array (
      0 => 'F:\\wamp\\www\\itildemo\\templates\\user\\addrequest.html',
      1 => 1441527932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2807155e3fd38c525f8-24153504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e3fd38d6baa4_97098016',
  'variables' => 
  array (
    'parent_sort' => 0,
    'p_sort' => 0,
    'child_sort' => 0,
    'c_sort' => 0,
    'attach_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3fd38d6baa4_97098016')) {function content_55e3fd38d6baa4_97098016($_smarty_tpl) {?><!DOCTYPE html>
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
 language="JavaScript" src="/itildemo/plugins/fileupload/js/stream-v1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/itildemo/plugins/fileupload/css/stream-v1.css">
    <title></title>
</head>

<body background="/itildemo/static/img/bg.png">
<div class="_012_RequestList">
    <div class="_011_RequestList">
        添加请求
    </div>
    <br>

    <div class="_013_RequestList">
        <div class="_013_RequestList form-group-sm">
            <form class="form-horizontal" action="/itildemo/home/service/req_ser.php" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">标题</label>

                    <div class="col-sm-3">
                        <input type="text" name="req_title" class="form-control" placeholder="请求标题">
                    </div>
                    <label class="col-sm-1 control-label">请求分类</label>

                    <div class="col-sm-4">
                        <input tabindex="0" name="req_sort" id="sortPopover" class="form-control" type="text" readonly
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
                                    <br><br><button class='btn btn-sm btn-primary' onclick='selectSort()'>确定</button>
                                </div>
                               ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">关键字</label>
                    <div class="col-sm-3">
                        <input type="text" name="req_keyword" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">附件</label>
                    <div class="col-sm-4">
                        <p id="i_select_files"></p>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['attach_id']->value;?>
" name="attach_id">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1"></label>
                    <div class="col-sm-6">
                        <div id="i_stream_files_queue">
                        </div>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="javascript:_t.upload();">开始上传</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                           onclick="javascript:_t.stop();">停止上传</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default" onclick="javascript:_t.cancel();">
                            &nbsp;取&nbsp;消&nbsp;</a>
                    </div>
                </div>

                <div class="_015_RequestList">
                    <textarea name="req_content" id="content"></textarea>
                    <?php echo '<script'; ?>
>
                        CKEDITOR.replace("req_content", {
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

                <button name="add_req" class="btn btn-primary btn-sm _017_AddRequest">提交请求</button>
                <br><br><br>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $('#sortPopover').popover()
    })

    function selectSort() {
        $('#sortPopover').popover('hide');
        var chooseSort = document.getElementsByName('chooseSort');
        var sort = "";
        for (var i = 0; i < chooseSort.length; i++) {
            if (chooseSort[i].checked) {
                sort += chooseSort[i].value + "  ";
            }
        }
        document.getElementById('sortPopover').value = sort;
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
        dragAndDropTips: "<span class='btn btn-sm btn-default'>添加文件</span>", /** 拖拽提示, 默认: `<span>把文件(文件夹)拖拽到这里</span>` */
        filesQueueId: "i_stream_files_queue", /** 文件上传容器的ID, 默认: i_stream_files_queue */
        filesQueueHeight: 200, /** 文件上传容器的高度（px）, 默认: 450 */
        messagerId: "i_stream_message_container", /** 消息显示容器的ID, 默认: i_stream_message_container */
        multipleFiles: true, /** 多个文件一起上传, 默认: false */
        autoUploading: false, /** 选择文件后是否自动上传, 默认: true */
//		autoRemoveCompleted : true, /** 是否自动删除容器中已上传完毕的文件, 默认: false */
//		maxSize: 104857600//, /** 单个文件的最大大小，默认:2G */
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
",/** HTML5上传的URI */
//		simLimit: 200, /** 单次最大上传文件个数 */
		extFilters: [".txt", ".rpm", ".rmvb", ".gz", ".rar", ".zip", ".avi", ".mkv", ".mp3",".wmv"] /** 允许的文件扩展名, 默认: [] */
//		onSelect: function(list) {alert('onSelect')}, /** 选择文件后的响应事件 */
//		onMaxSizeExceed: function(size, limited, name) {alert('onMaxSizeExceed')}, /** 文件大小超出的响应事件 */
//		onFileCountExceed: function(selected, limit) {alert('onFileCountExceed')}, /** 文件数量超出的响应事件 */
//		onExtNameMismatch: function(name, filters) {alert('onExtNameMismatch')}, /** 文件的扩展名不匹配的响应事件 */
//		onCancel : function(file) {alert('Canceled:  ' + file.name)}, /** 取消上传文件的响应事件 */
//		onComplete: function(file) {alert('onComplete')}, /** 单个文件上传完毕的响应事件 */
//		onQueueComplete: function() {alert('onQueueComplete')}, /** 所以文件上传完毕的响应事件 */
//		onUploadError: function(status, msg) {alert('onUploadError')} /** 文件上传出错的响应事件 */
    };
    var _t = new Stream(config);
<?php echo '</script'; ?>
><?php }} ?>
