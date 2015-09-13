<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>运维管理系统</title>
</head>
<script language="javascript" src="../JS/Js.js"></script>
<script language="javascript" src="../JS/opendiv.js"></script>
<?php
  include("frame.php");
  $db=new mysql();
  $knowledge=$db->query("select title,creat_date,t_id from knowledge where t_condition='通过' order by clicks desc");
  $notice=$db->query("select title,date,ID from notice order by date desc");
  date_default_timezone_set('Asia/Shanghai');
  $date=Date('Y-m-d H:i:s');
  $overdue=$db->GetCount("select count(*) as total from request where deadline <'$date' and (conditions='未处理' or conditions='已指派技术员')"); //逾期请求
  $undo=$db->GetCount("select count(*) as total from request where conditions='未处理'");  //待处理的请求
  $undoknowledge=$db->GetCount("select count(*) as total from knowledge where t_condition='未处理'");  //待处理的请求
  $undochangerequest=$db->GetCount("select count(*) as total from taskchange,request where request.id=requestid and taskchange.conditions='F'");
  $message=$db->GetCount("select count(*) as total from messagebox where user='$_SESSION[user_name]' and sort=1 ");
?>
<body>
   <!--主界面-->
  <div id="_006">
      <div id="_017" class="bg_color"></div>
     
      <div id="_110">
         <div id="_112">&nbsp;&nbsp;我的视图</div>
         <div style="float:left;">
                 <!--//////////////////////////////////////////-->
                 
                 <div id="_113">
                     <div id="_111">&nbsp;我的一览表</div>
                     <a href="overtimerequest.php?action=requestlist">
                            <div id="_114" onmouseover="this.style.backgroundColor='#FFFFCC';this.style.color='#0000CC'" onmouseout="this.style.backgroundColor='';this.style.color=''"><img src="../img/linedpaperplus32.png" id="_115"/>&nbsp;&nbsp;逾期的请求<div style="float:right; margin-right:20px;">(<?php echo $overdue; ?>)</div>
                            </div>
                     </a>
                     <a href="orderlist.php?action=requestlist">
                            <div id="_114" onmouseover="this.style.backgroundColor='#FFFFCC';this.style.color='#0000CC'" onmouseout="this.style.backgroundColor='';this.style.color=''"><img src="../img/notepencil32.png" id="_115"/>&nbsp;&nbsp;待处理的请求<div style="float:right; margin-right:20px;">(<?php echo $undo; ?>)</div>
                            </div>
                     </a>
                     <a href="knowledgerequest.php?action=knowledgelist&state=1">
                            <div id="_114" onmouseover="this.style.backgroundColor='#FFFFCC';this.style.color='#0000CC'" onmouseout="this.style.backgroundColor='';this.style.color=''"><img src="../img/paperpencil32.png" id="_115"/>&nbsp;&nbsp;待审批的知识<div style="float:right; margin-right:20px;">(<?php echo $undoknowledge; ?>)</div>
                            </div>
                     </a>
                   
                     <a href="requestchange.php?action=requestlist">
                            <div id="_114" onmouseover="this.style.backgroundColor='#FFFFCC';this.style.color='#0000CC'" onmouseout="this.style.backgroundColor='';this.style.color=''"><img src="../img/linedpaperminus32.png" id="_115"/>&nbsp;&nbsp;未审批的变更<div style="float:right; margin-right:20px;">(<?php echo $undochangerequest; ?>)</div>
                            </div>
                     </a>
                      <a href="managenotice.php?action=managenotice">
                            <div id="_114" style=" border-bottom: double #9A9A9A;" onmouseover="this.style.backgroundColor='#FFFFCC';this.style.color='#0000CC'" onmouseout="this.style.backgroundColor='';this.style.color=''"><img src="../img/commentblack32.png"  id="_115"/>&nbsp;&nbsp;新发布的通知<div style="float:right; margin-right:20px;">(<?php echo $message ?>)</div>
                            </div>
                     </a>
                 </div>
         </div>
       <!--//////////////////////////////-->
         <div id="_116">
             <img src="../img/Marker.png" width="40" height="40" style="float:left"/><font id="_117">&nbsp;热门知识</font>
             <table style=" margin-left:40px;">
               <?php for($i=0;$i<count($knowledge)&& $i<5 ;$i++) {?>
                <tr>
                <td id="_118"><a href="javascript:showknowledge(<?php echo $knowledge[$i][2]; ?>)"><div onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000'" style="width:280px;height:30px; float:left;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;"><?php echo $knowledge[$i][0]; ?></div><div style="float:right;"><?php echo $knowledge[$i][1]; ?></div></a></td>
                </tr>
                <?php } ?>
                <tr><td style="float:right; font-size:13px; font-weight:800; line-height:30px;" ><a href="knowledgelist.php" onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000'">更多>></a></td></tr>
             </table>
         </div>
         <!--////  //////////////////////////////////-->
         <div id="_119">
            <div id="_111" style="margin-top:0px;" align="center">&nbsp;&nbsp;公告通知<a href="managenotice.php"><font onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color=''" style="float:right; color:#00F;">更多>>&nbsp;</font></a></div>
            <img src="../img/2014-03-08_130323.png" style="float:left;" />
            <table>
            <?php for($i=0;$i<count($notice) && $i<6;$i+=2) {?>
               <tr>
                  <td id="_118"><a href="javascript:shownotice(<?php echo $notice[$i][2]; ?>)" ><div onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000'" style="width:280px;height:30px; float:left;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;"><?php echo $notice[$i][0];?></div><div style="float:right;"><?php echo $notice[$i][1]; ?></div><td width="30"></td>
                  <td id="_118"><a href="javascript:shownotice(<?php echo $notice[$i+1][2]; ?>)" ><div onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000'" style="width:280px;height:30px; float:left;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;"><?php if($i<count($notice)-1) echo $notice[$i+1][0]; ?></div><div style="float:right;"><?php echo $notice[$i+1][1]; ?></div></a></td>
               </tr>
            <?php } ?>
            </table>
         </div>
      </div>
  
 </div>
</body>
</html>