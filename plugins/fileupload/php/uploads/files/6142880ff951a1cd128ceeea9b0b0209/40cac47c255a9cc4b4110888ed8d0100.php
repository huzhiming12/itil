<?php 
    include("frame.php");
	$db=new mysql();
	$result=$db->query("select user_name,staffid from enduser where role='engineer'");
?>

<div id="_006">
    <div id="_017" class="bg_color" style="border-bottom:thin solid #99BBE8">&nbsp;&nbsp;详情统计</div>
    <div id="_121" style="width:250px;">
        <div id="_128">工程师</div>
         <table>
           <tr>
              <td id="_039" width="80">员工号</td>
              <td id="_039" width="170">账号</td>
           </tr>
         </table>
         <div style="width:250px; height:415px; overflow:scroll">
           <table cellpadding="0" cellspacing="0">
            
               <?php for($i=0;$i<count($result);$i++) {?>
                <tr onmouseover="this.style.background='#FFFFCC'" onmouseout="this.style.background=''">
                   <td id="_029"><a href="javascript:changetechnician('<?php echo $result[$i][0];?>')"><div style="width:80px;"><?php echo $result[$i][1]; ?><div></a></td>
                   <td id="_029"><a href="javascript:changetechnician('<?php echo $result[$i][0];?>')" onMouseOut="this.style.color='#000'"><div style="width:150px;"><?php echo $result[$i][0]; ?></div></a></td>
                </tr>
               <?php } ?>
              <tr>
                <td width="80"></td>
                <td width="150"></td>
             </tr>
           </table>
         </div>
      
    </div>
    
    <div id="_121" style="width:850px;">
        <div id="_128" style=" width:850px">满意度统计图</div>
        <div id="_130"><img src="chart_bar.php?technician=<?php echo $result[0][0]?>&id=1" id="img1"></div>
        <div id="_130"><img src="chart_bar.php?technician=<?php echo $result[0][0]?>&id=2" id="img2"></div>
        <div id="_130"><img src="chart_bar.php?technician=<?php echo $result[0][0]?>&id=3" id="img3"></div>
        <div id="_130"><img src="chart_bar.php?technician=<?php echo $result[0][0]?>&id=4" id="img4"></div>
        <div id="_130"><img src="chart_bar.php?technician=<?php echo $result[0][0]?>&id=5" id="img5"></div>
         
    </div>
</div>

<script language="javascript">
function changetechnician(tech)
{
	document.getElementById("img1").src = "chart_bar.php?technician="+tech+"&id=1";
	document.getElementById("img2").src = "chart_bar.php?technician="+tech+"&id=2";
	document.getElementById("img3").src = "chart_bar.php?technician="+tech+"&id=3";
	document.getElementById("img4").src = "chart_bar.php?technician="+tech+"&id=4";
	document.getElementById("img5").src = "chart_bar.php?technician="+tech+"&id=5";
}
</script>

