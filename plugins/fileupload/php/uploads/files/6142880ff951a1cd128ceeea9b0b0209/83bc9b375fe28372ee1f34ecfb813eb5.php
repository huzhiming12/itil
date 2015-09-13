<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>运维管理系统</title>
</head>

<link href="swfupload/css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfupload/swfupload/swfupload.js"></script>
<script type="text/javascript" src="swfupload/js/swfupload.queue.js"></script>
<script type="text/javascript" src="swfupload/js/fileprogress.js"></script>
<script type="text/javascript" src="swfupload/js/handlers.js"></script>
<script type="text/javascript" src="../JS/ajax.js"></script>
<script type="text/javascript">
		var swfu;
		window.onload = function() {
			var settings = {
				flash_url : "swfupload/swfupload/swfupload.swf",
				upload_url: "swfupload/upload.php",	
				post_params: {"PHPSESSID" : "<?php echo session_id(); ?>"},
				file_size_limit : "1024 MB",
				file_types : "*.*",
				file_types_description : "All Files",
				file_upload_limit : 10,  //配置上传个数
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},
				debug: false,

				// Button settings
				button_image_url: "images/TestImageNoText_65x29.png",
				button_width: "65",
				button_height: "29",
				button_placeholder_id: "spanButtonPlaceHolder",
				button_text: '<span class="theFont">浏览</span>',
				button_text_style: ".theFont { font-size: 16; }",
				button_text_left_padding: 12,
				button_text_top_padding: 3,
				
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete	
			};
			swfu = new SWFUpload(settings);
	     };
	</script>
</head>
<body onload="AJAX('swfupload/setcookie.php?sortname='+document.getElementsByName('uploadfilesort')[0].value+'');">
<?php 
   include("frame.php");
   $db=new mysql();
   $sort=$db->query("select *from resourcesort");
   $num=count($sort);
?>

<div id="_006"> 
       <div id="_017" class="bg_color"></div>
       <div id="_031">
          	<div id="_032" class="bg_color">&nbsp;资料上传</div>
            <div id="_135">
                    <div id="content">
                        <form id="form1" action="index.php" method="post" enctype="multipart/form-data">
                            <p>点击“浏览”按钮，选择您要上传的文档文件后，系统将自动上传并在完成后提示您。</p>
                            <p>若存在同名文件将自动覆盖！</p>
                            <div class="fieldset flash">
                               <span class="legend" >分类</span>
                                <select id="_046" onchange="AJAX('swfupload/setcookie.php?sortname='+document.getElementsByName('uploadfilesort')[0].value+'');" name="uploadfilesort">
                                    <?php for($j=0;$j<$num;$j++) {?>
                                               <option value="<?php echo $sort[$j][1]; ?>"> <?php echo $sort[$j][1];?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div id="box" hidden="true">aa</div>
                            <br />
                            <div class="fieldset flash" id="fsUploadProgress">
                                <span class="legend">快速上传</span>
                          </div>
                            <div id="divStatus">0 个文件已上传</div><br />
                                <div>
                                    <span id="spanButtonPlaceHolder"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input id="btnCancel" type="button" value="取消所有上传" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
                                    <!--<input type="text" name="filename" id="filename" />
                                    （上项可修改为隐藏表单，用于提交时用就可以了)-->
                                </div>
                    
                        </form>
                    </div>
                    <div style="color:#F00; margin-left:40px;">注：仅限于上传以下格式文件：doc,docx,ppt,pptx,xls,xlsx,txt,pdf,jpg,gif,png,rar,zip,avi,mp4,且不得超过文件大小不得超过1GB</div>
            </div>
           
       </div>
</div>
</body>


</html>
