<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>运维管理系统</title>
</head>
<script language="javascript" src="../JS/opendiv.js">
</script>
<?php
 include("frame.php");
?>
<body>
  <div id="_006"> 
       <div id="_017" class="bg_color"></div>
       <div id="_031">
          	<div id="_032" class="bg_color">&nbsp;知识列表</div>
            <div id="_036">
              <div id="_038c" onclick="Getdata(400,300);opendiv('search')" onmouseover="this.style.border='thin solid #99BBE8';this.style.color='#FF0000'" onmouseout="this.style.border='';this.style.color=''">&nbsp;&nbsp;&nbsp;搜索</div>
              <div id="_038a" onmouseover="this.style.border='thin solid #99BBE8';this.style.color='#FF0000'" onmouseout="this.style.border='';this.style.color=''">&nbsp;&nbsp;&nbsp;删除</div>
              <div id="_038b" onclick="showmenu('add')" onmouseover="this.style.border='thin solid #99BBE8';this.style.color='#FF0000'" onmouseout="this.style.border='';this.style.color=''">&nbsp;&nbsp;&nbsp;编辑</div>
            </div>
            <table width="984px">
             <tr>
                 <td id="_039" width="36"><input class="selector" type="checkbox"  value="" name=""></td><td id="_039" width="87">ID</td><td id="_039" width="246">标题</td><td id="_039" width="126">创建者</td><td id="_039" width="126">知识分类</td><td id="_039" width="126">创建时间</td><td id="_039" width="126">点击次数</td><td id="_039" width="126">操作项</td>
             </tr>
            </table>
            <div style="height:385px; overflow:scroll">
                <table cellpadding="0" cellspacing="0">
                   <tr>
                      <td id="_029"><input class="selector" type="checkbox"  value="" name=""></td>
                      <td id="_029">测试</td>
                      <td id="_029">测试</td>
                      <td id="_029">测试</td>
                      <td id="_029">测试</td>
                      <td id="_029">2013-09-04</td>
                      <td id="_029">34</td>
                      <td id="_029">图</td>
                   </tr>
                   
                   
                   <tr>
                      <td width="39"></td><td width="88"></td><td width="246"></td><td width="126"></td><td width="126"></td><td width="126"></td><td width="126"></td></td><td width="126"></td>
                   </tr>
                </table>
                <div id="_030" class="bg_color1"></div>
            </div>
            
            
            <!--弹出的搜索框-->
            <div id="search">
               <div class="bg_color" id="_040">&nbsp;&nbsp;热门知识搜索
                  <div id="_041" onclick="fnSmall()" onmouseover="this.style.border='thin solid #99BBE8'" onmouseout="this.style.border=''"></div>
               </div>
               <table style="margin-top:10px; border:thin solid #99BBE8; margin-left:35px;">
                  <form  method="post">
                 <tr><td id="_042" width="100">知识类型:</td><td id="_042"><input type="text" name="sort" id="_043"/></td></tr>
                 <tr><td id="_042" width="100">知识标题:</td><td id="_042"><input type="text" name="title" id="_043"/></td></tr>
                 <tr><td id="_042" width="100">创建者:</td><td id="_042"><input type="text" name="author" id="_043"/></td></tr>
                 <tr><td id="_042" width="100">关键字:</td><td id="_042"><input type="text" name="keyword" id="_043"/></td></tr>
                 <tr><td id="_042" width="100">日期范围:</td><td id="_042"><input type="date" name="date1"  id="_043"/></td></tr>
                 <tr><td></td><td id="_042"><input type="date" name="date2" id="_043" /></td></tr>
                 <tr><td></td><td><input type="image" src="../img/search1.ico" style="float:right; margin-right:30px;" onmouseover="this.style.border='thin solid #99BBE8'" onmouseout="this.style.border=''"/></td></tr>
                 </form>
                 
               </table>
            </div>
            
            <div id="add">
            <form>
                <div style=" width:350px; height:495px; border-right:thin solid #99BBE8; background:#FFF; float:left;">
                   <div id="_044">&nbsp;基本信息</div>
                   <table cellpadding="0" cellspacing="0" border="1" bordercolor="#EEEEEE" style="margin-top:10px; margin-left:2px; margin-right:5px;">
                      <tr><td id="_045" width="80">知识标题<font color="#FF0000">*</font></td><td><input type="text" name="title" id="_046"></td></tr>
                      <tr><td id="_045">知识类型<font color="#FF0000">*</font></td><td><input type="text" name="sort" id="_046" /></td></tr>
                      <tr><td id="_045">关键字题<font color="#FF0000">*</font></td><td><input type="text" name="keyword" id="_046"/></td></tr>
                      <tr><td id="_045">添加附件</td><td><br /><font size="-1" color="#FF3300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;附件最大为10M</font>
                      									<input type="file" name="addfile" style="width:180px; border:none; margin-top:10px; margin-left:50px;"/><br />
                                                        <img src="../img/addattr_upload.png" style="margin-top:10px; margin-left:70px; margin-bottom:20px;" />
                                                        </td></tr>
                   </table>
                   <input type="image" src="../img/save_default.png" name="submit" onmouseout="this.src='../img/save_default.png'" onmouseover="this.src='../img/save_hover.png'" style="border:none; float:right; margin-right:30px; margin-top:50px;" />
                </div>
                <div style=" width:650px; height:495px; border-left:thin solid #99BBE8; background:#FFF; float:right">
                    <div id="_044" style="width:650px;">&nbsp;知识明细</div>
                     <textarea name="content1"  id="content1" style="width:645px; height:458px;"></textarea>
                     <script language="javascript" src="../ckeditor/ckeditor.js"></script>
                     <script>
					 CKEDITOR.replace("content1",{width:648, height:258}); 
					 </script>
                </div>
             </form>
           </div>
           
      </div>
          
         
       
   </div>
</body>
</html>