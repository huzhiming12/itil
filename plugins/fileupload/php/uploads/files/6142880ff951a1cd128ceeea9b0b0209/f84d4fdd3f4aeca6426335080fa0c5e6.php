<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>运维管理系统</title>
</head>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="../JS/Js.js">
</script>
<?php
   include("../public/islogin.php");
   include("../public/database.php");
    if($_GET["login"]=="out")
   {
	  unset($_SESSION[user_name]);
	  unset($_SESSION[pwd]);
   }
   if(!islogin()||$_SESSION[role]!="admin")
   {
	   echo"<script> window.location.href='../public/login.php'</script>";
   }
  
?>
<body bgcolor="#D2E0F2">
<div>
   <div>
      <!--网页头部-->
      <div id="_001" style=" background:url(../img/bg.jpg)"></div>
   </div>
   
    <!--左框架-->
      <div id="_008" onmouseover="this.style.backgroundColor='#999999'" onmouseout="this.style.backgroundColor=''" onclick="Hide('_002')" ></div>
   <div id="_002">
  <?php
  
       if($_GET["action"]=="")
	   {
		   $_GET["action"]="myboard";
	   }
       switch($_GET["action"])
	   {
		 case "myboard":
		 case "schedule":
		 case "mydetail":	  
   ?>
      <div>
        <div id="_007" class="bg_color">我的首页</div>
        <div id="_009">
           <table style="border:none">
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_1')">我的视图</td></tr>
             <tr id="detail_1" style="display:none">
                 <td>
                    <table><tr><td><a href="index.php?action=myboard"><div id="_011" onmouseover="this.style.backgroundColor='#91A0FD';style.color='#FFF'" onmouseout="this.style.backgroundColor='';style.color=''">我的面板</div></a></td></tr></table>
             	 </td>
             </tr>
             
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_4')">我的资料</td></tr>
             <tr id="detail_4" style="display:none;">
               <td>
                  <table >
                     <tr><td><a href="material.php?action=mydetail"><div id="_011">详细资料</div></a></td></tr>
                     <tr><td><a href="changepwd.php"><div id="_011">密码修改</div></a></td></tr>
                  </table>
                </td>
              </tr>
           </table>
        </div>
      </div>
    <?php
       break;
	   case "addnotice":
	   case "managenotice":
	   case "addpeople"
    ?>   
     <div>
        <div id="_007" class="bg_color">公告通知</div>
        <div id="_009">
           <table style="border:none">
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_4')">新建通知</td></tr>
             <tr id="detail_4" style="display:none">
                 <td>
                    <table><tr><td><a href="addnotice.php?action=addnotice"><div id="_011">新建通知</div></a></td></tr></table>
             	 </td>
             </tr>
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_5')">通知管理</td></tr>
             <tr id="detail_5" style="display:none">
                <td>
                    <table><tr><td><a href="managenotice.php?action=managenotice"><div id="_011">通知管理</div></a></td></tr></table>
                </td>
             </tr>
           </table>
        </div>
      </div>
   <?php
         break;
		 case "addrequest":
		 case "requestlist":
		 case "feedbackstatic":
   ?>
      <div>
        <div id="_007" class="bg_color">服务目录</div>
        <div id="_009">
           <table style="border:none">
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_7')">新增请求</td></tr>
             <tr id="detail_7" style="display:none">
                 <td>
                    <table>
                    <tr><td><a href="addrequest.php?action=addrequest"><div id="_011">新建请求</div></a></td></tr>
                    </table>
             	 </td>
             </tr>
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_8')">请求列表</td></tr>
             <tr id="detail_8" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="orderlist.php?action=requestlist"><div id="_011">请求列表</div></a></td></tr>
                    </table>
                </td>
             </tr>
             
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_8a')">逾期请求</td></tr>
             <tr id="detail_8a" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="overtimerequest.php?action=requestlist"><div id="_011">逾期请求</div></a></td></tr>
                    </table>
                </td>
             </tr>
             
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_9')">请求统计</td></tr>
             <tr id="detail_9" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="Graph.php?action=requestlist"><div id="_011">请求统计</div></a></td></tr>
                    </table>
                </td>
             </tr>
                <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_11')">满意度统计</td></tr>
             <tr id="detail_11" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="feedbackstatic.php?action=requestlist"><div id="_011">满意度统计</div></a></td></tr>
                    </table>
                </td>
             </tr>
           </table>
        </div>
      </div>
   <?php
       break;
	   case "knowledgelist":
	   case "knowledgerequest":
	   case "addknowledge"
   ?>
    <div>
        <div id="_007" class="bg_color">知识库</div>
        <div id="_009">
           <table style="border:none">
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_12')">已有知识</td></tr>
             <tr id="detail_12" style="display:none">
                 <td>
                    <table>
                    <tr><td><a href="knowledgelist.php?action=knowledgelist"><div id="_011">知识列表</div></a></td></tr>
                    <tr><td><a href="hotknowledge.php?action=knowledgelist"><div id="_011">热门知识</div></a></td></tr>
                    </table>
             	 </td>
             </tr>
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_13')">申请列表</td></tr>
             <tr id="detail_13" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="knowledgerequest.php?action=knowledgerequest"><div id="_011">申请列表</div></a></td></tr>
                    </table>
                </td>
             </tr>
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_14')">新建知识</td></tr>
             <tr id="detail_14" style="display:none;">
               <td>
                  <table >
                     <tr><td><a href="addknowledge.php?action=addknowledge"><div id="_011">新建知识</div></a></td></tr>
                  </table>
                </td>
              </tr>
              <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_15')">知识分类管理</td></tr>
             <tr id="detail_15" style="display:none;">
               <td>
                  <table >
                     <tr><td><a href="knowledgesortmanage.php?action=addknowledge"><div id="_011">知识分类管理</div></a></td></tr>
                  </table>
                </td>
              </tr>
              
           </table>
        </div>
      </div>
        <?php
       break;
	   case "adduser":
	   case "deleteuser":
   ?>
    <div>
        <div id="_007" class="bg_color">用户管理</div>
        <div id="_009">
           <table style="border:none">
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_16')">添加用户</td></tr>
             <tr id="detail_16" style="display:none">
                 <td>
                    <table>
                    <tr><td><a href="adduser.php?action=adduser"><div id="_011">添加用户</div></a></td></tr>
                    </table>
             	 </td>
             </tr>
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_17')">账号管理</td></tr>
             <tr id="detail_17" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="manageuser.php?action=deleteuser"><div id="_011">账号管理</div></a></td></tr>
                    </table>
                </td>
             </tr>
             
              
           </table>
        </div>
      </div>
   <?php
      break;
	  case "resourcemanage":
	  ?>
       <div>
        <div id="_007" class="bg_color">技术员专区</div>
        <div id="_009">
           <table style="border:none">
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_18')">资源上传</td></tr>
             <tr id="detail_18" style="display:none">
                 <td>
                    <table>
                    <tr><td><a href="documentupload.php?action=resourcemanage"><div id="_011">资源上传</div></a></td></tr>
                    </table>
             	 </td>
             </tr>
             <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_19')">资源管理</td></tr>
             <tr id="detail_19" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="documentmanage.php?action=resourcemanage"><div id="_011">资源管理</div></a></td></tr>
                    </table>
                </td>
             </tr>
              <tr><td id="_010" onmouseover="this.style.color='#E87538'" onmouseout="this.style.color=''" onclick="showmenu('detail_20')">资源分类管理</td></tr>
             <tr id="detail_20" style="display:none">
                <td>
                    <table>
                    <tr><td><a href="resourcesortmanage.php?action=resourcemanage"><div id="_011">资源分类管理</div></a></td></tr>
                    </table>
                </td>
             </tr>
             
              
           </table>
        </div>
      </div>
      
      <?php
	  break;
	  default:break;
	   }
   ?>
   <!--快速创建请求-->
    <?php
      
	  $db=new mysql();
	  $user=$_SESSION[user_name];
	  date_default_timezone_set('Asia/Shanghai');
	  $date=Date('Y-m-d H:i:s');
	  if(isset($_POST['submit1']))
	  {
		  $result=$db->update("insert into request(title,sort,keyword,resourse,complex,urgency,content,author,date,technician) values('$_POST[title]','$_POST[sort]','$_POST[keyword]','$_POST[resourse]','$_POST[complex]','$_POST[urgency]','$_POST[content]','$user','$date',NULL)");
	      if($result)
	       echo"<script>alert('请求提交成功！');</script>";
		  else
		   echo"<script>alert('请求提交失败！');</script>";
	  }
   $sort=$db->query("select *from knowledgesort");
   $num=count($sort);
   ?>
   <div>
      <div id="_007" class="bg_color">请求快速创建</div>
      <div style="height:290px; overflow-y:scroll">
         <form method="post" name="request" action="" onSubmit="return checkpost()" >
         <table>
            <tr><td id="_034">请求标题：</td></tr>
            <tr><td><input type="text" name="title" id="_033"/></td></tr>
            <tr><td id="_034">关键字：</td></tr>
            <tr><td><input type="text" id="_033" name="keyword" /> </td></tr>
            <tr><td id="_034">请求分类：</td></tr>
            <tr><td><select id="_033" name="sort" />
                      <?php for($j=0;$j<$num;$j++) {?>
                          <option value="<?php echo $sort[$j][1]; ?>"> <?php echo $sort[$j][1];?></option>
                      <?php }?>
                 </td></tr>
            <tr><td id="_034">请求描述：</td></tr>
            <tr><td><textarea name="content" id="_035"></textarea></td></tr>
            <tr><td id="_034">复杂程度：</td></tr>
            <tr><td id="_034"><select name="complex" id="_033">
                              <option value="">---请选择---</option>
                              <option value="一级">一级：简单咨询</option>
                              <option value="二级">二级：已知简单故障</option>
                              <option value="三级">三级：需要较多时间解决故障</option>
                              <option value="四级">四级：未知故障且要较长时间解决</option>
                              </select></td></tr>
             <tr><td id="_034">紧急程度：</td></tr>
             <tr><td><select name="urgency" id="_033">
                     <option value="">---请选择---</option>
                     <option value="正常">正常</option>
                     <option value="紧急">紧急</option>
                     <option value="高">高</option>
                     <option value="低">低</option>
                     </select>
             </td></tr>
             <tr><td><input type="submit" name="submit1" style="width:60px; height:25px; margin-left:60px; margin-top:10px;"/></td></tr>
         </table>
         </form>
         
      </div>
   
   </div>
 
 </div>
   
    <!--导航栏-->
 <div class="bg_color" id="_003">
      <div id="_004" style="margin-left:50px;" onmouseover="showmenu('menu1')" onmouseout="showmenu('menu1')">
         <div id="_XX1" onmouseover="changebgColor('_XX1',1);" onmouseout="changebgColor('_XX1',0);">我的首页</div>
          <table id="menu1" style="display:none" class="_000">
            <tr><td><a href="index.php?action=myboard"><div id="_XX5" style="width:95px; height:30px;" onmouseover="changebgColor('_XX5',1)" onmouseout="changebgColor('_XX5',0)">我的视图</div></a></td></tr>
            <tr><td><a href="material.php?action=mydetail"><div id="_XX7" style="width:95px; height:30px;" onmouseover="changebgColor('_XX7',1)" onmouseout="changebgColor('_XX7',0)">我的资料</div></a></td></tr>
          </table>
       </div>
        
       <div id="_004" onmouseover="showmenu('menu2')" onmouseout="showmenu('menu2')">
         <div id="_XX2" onmouseover="changebgColor('_XX2',1)" onmouseout="changebgColor('_XX2',0)">公告通知</div>
          <table id="menu2" style="display:none" class="_000">
            <tr><td><a href="addnotice.php?action=addnotice"><div id="_XX8" style="width:95px; height:30px;" onmouseover="changebgColor('_XX8',1)" onmouseout="changebgColor('_XX8',0)">新建通知</div></a></td></tr>
            <tr><td><a href="managenotice.php?action=managenotice"><div id="_XX9" style="width:95px; height:30px;" onmouseover="changebgColor('_XX9',1)" onmouseout="changebgColor('_XX9',0)">通知管理</div></a></td></tr>
          </table>
       </div>
         
       <div id="_004" onmouseover="showmenu('menu3')" onmouseout="showmenu('menu3')">
           <div id="_XX3" onmouseover="changebgColor('_XX3',1)" onmouseout="changebgColor('_XX3',0)">服务目录 </div>
           <table id="menu3" style="display:none" class="_000">
              <tr><td><a href="addrequest.php?action=addrequest"><div id="_XX11" style="width:95px; height:30px;" onmouseover="changebgColor('_XX11',1)" onmouseout="changebgColor('_XX11',0)">新增请求</div></a></td></tr>
              <tr><td><a href="orderlist.php?action=requestlist"><div id="_XX12" style="width:95px; height:30px;" onmouseover="changebgColor('_XX12',1)" onmouseout="changebgColor('_XX12',0)">请求列表</div></a></td></tr>
              <tr><td><a href="requestchange.php?action=requestlist"><div id="_XX12b" style="width:95px; height:30px;" onmouseover="changebgColor('_XX12b',1)" onmouseout="changebgColor('_XX12b',0)">变更请求</div></a></td></tr>
              <tr><td><a href="overtimerequest.php?action=requestlist"><div id="_XX12c" style="width:95px; height:30px;" onmouseover="changebgColor('_XX12c',1)" onmouseout="changebgColor('_XX12c',0)">逾期请求</div></a></td></tr>
              <tr><td><a href="Graph.php?action=requestlist"><div id="_XX12a" style="width:95px; height:30px;" onmouseover="changebgColor('_XX12a',1)" onmouseout="changebgColor('_XX12a',0)">请求统计</div></a></td></tr>
               <tr><td><a href="feedbackstatic.php?action=feedbackstatic"><div id="_XX15" style="width:95px; height:30px;" onmouseover="changebgColor('_XX15',1)" onmouseout="changebgColor('_XX15',0)">满意度统计</div></a></td></tr>
          </table>
       </div>
         
        <div id="_004" onmouseover="showmenu('menu4')" onmouseout="showmenu('menu4')">
           <div id="_XX4" onmouseover="changebgColor('_XX4',1)" onmouseout="changebgColor('_XX4',0)">知识库</div>
           <table width="100" id="menu4" style="display:none" class="_000">
              <tr><td><a href="knowledgelist.php?action=knowledgelist"><div id="_XX16" style="width:95px; height:30px;" onmouseover="changebgColor('_XX16',1)" onmouseout="changebgColor('_XX16',0)">知识列表</div></a></td></tr>
              <tr><td><a href="knowledgerequest.php?action=knowledgerequest&state=1"><div id="_XX17" style="width:95px; height:30px;" onmouseover="changebgColor('_XX17',1)" onmouseout="changebgColor('_XX17',0)">申请列表</div></a></td></tr>
              <tr><td><a href="knowledgerequest.php?action=knowledgerequest&state=2"><div id="_XX17a" style="width:95px; height:30px;" onmouseover="changebgColor('_XX17a',1)" onmouseout="changebgColor('_XX17a',0)">驳回列表</div></a></td></tr>
              <tr><td><a href="addknowledge.php?action=addknowledge"><div id="_XX18" style="width:95px; height:30px;" onmouseover="changebgColor('_XX18',1)" onmouseout="changebgColor('_XX18',0)">新建知识</div></a></td></tr>
              <tr><td><a href="knowledgesortmanage.php?action=addknowledge"><div id="_XX19" style="width:95px; height:30px;" onmouseover="changebgColor('_XX19',1)" onmouseout="changebgColor('_XX19',0)">知识分类管理</div></a></td></tr>
          </table>
        </div>
        
        <div id="_004" onmouseover="showmenu('menu5')" onmouseout="showmenu('menu5')">
           <div id="_XX23" onmouseover="changebgColor('_XX23',1)" onmouseout="changebgColor('_XX23',0)">用户管理</div>
           <table width="100" id="menu5" style="display:none" class="_000">
              <tr><td><a href="adduser.php?action=adduser"><div id="_XX20" style="width:95px; height:30px;" onmouseover="changebgColor('_XX20',1)" onmouseout="changebgColor('_XX20',0)">添加用户</div></a></td></tr>
              <tr><td><a href="manageuser.php?action=deleteuser"><div id="_XX21" style="width:95px; height:30px;" onmouseover="changebgColor('_XX21',1)" onmouseout="changebgColor('_XX21',0)">账号管理</div></a></td></tr>
          </table>
        </div>
        
         <div id="_004" onmouseover="showmenu('menu6')" onmouseout="showmenu('menu6')">
           <div id="_XX24" onmouseover="changebgColor('_XX24',1)" onmouseout="changebgColor('_XX24',0)">技术员专区</div>
           <table width="100" id="menu6" style="display:none" class="_000">
              <tr><td><a href="documentupload.php?action=resourcemanage"><div id="_XX25" style="width:95px; height:30px;" onmouseover="changebgColor('_XX25',1)" onmouseout="changebgColor('_XX25',0)">资源上传</div></a></td></tr>
              <tr><td><a href="documentmanage.php?action=resourcemanage"><div id="_XX26" style="width:95px; height:30px;" onmouseover="changebgColor('_XX26',1)" onmouseout="changebgColor('_XX26',0)">资源管理</div></a></td></tr>
              <tr><td><a href="resourcesortmanage.php?action=resourcemanage"><div id="_XX27" style="width:95px; height:30px;" onmouseover="changebgColor('_XX27',1)" onmouseout="changebgColor('_XX27',0)">资源分类管理</div></a></td></tr>
          </table>
        </div>
        
        
        <div style="float:right; margin-right:50px; line-height:30px; font-weight:700; font-size:13px;"><img src="../img/admin.ico" width="25" height="25" style="float:left; margin-top:2px;" />&nbsp;管理员&nbsp;|&nbsp;<a href="javascript:location.reload()" target="_self">刷新</a>&nbsp;|&nbsp;<a href='?login=out'>注销</a></div>
        
   </div>
   
 </div>
</body>
</html>

<script language="javascript">
function checkpost()
{
	 if(request.title.value=="")
	   {
		   alert("请求标题不能为空，请填写！");
		   request.title.focus();
		   return false;
	   }
	if(request.sort.value=="")
	   {
		   alert("请求分类不能为空，请填写！");
		   request.sort.focus();
		   return false;
	   }
	if(request.keyword.value=="")
	   {
		   alert("关键字不能为空，请填写！");
		   request.keyword.focus();
		   return false;
	   }
	if(request.content.value=="")
	   {
		   alert("请求描述不能为空，请填写！");
		   request.content.focus();
		   return false;
	   }
}
</script>
