<?php 
    include("frame.php");
?>

<div id="_006">
    <div id="_017" class="bg_color" style="border-bottom:thin solid #99BBE8">&nbsp;&nbsp;详情统计</div>
    <div id="_121">
        <div id="_122">
           &nbsp&nbsp; 查询条件：
           <select id="lineselector">
              <option value="1">按月查询</option>
              <option value="2">按年查询</option>
           </select>&nbsp;&nbsp;
            日期：<input type="date" id="date1" style="width:120px; height:30px;" />&nbsp;&nbsp;
            <input type="button" value="查询" onclick="ChartLine()" />
        </div>
        <div id="_123">请求数量统计图</div>
        <img src="chart_linepot.php" id="img" style="margin-left:10px; margin-top:10px;" />
    </div>
    
    <div id="_121" style="width:400px;">
        <div id="_122" style=" width:400px">
          &nbsp&nbsp; 查询条件：
           <select id="pieselector">
              <option value="1">按天查询</option>
              <option value="2">按月查询</option>
              <option value="3">按年查询</option>
           </select>
           日期：<input type="date" id="date2" style="width:100px; height:30px;" />&nbsp;&nbsp;
            <input type="button" value="查询" onclick="chartPie()" />
        </div>
        <div id="_123">请求完成情况统计图</div>
        <img src="chart_pie.php" id="pieimg" style="margin-left:10px; margin-top:10px;" />
    </div>
	 	   
 	
</div>

<script language="javascript">
function ChartLine()
{
	 var id=document.getElementById("lineselector").value;
	 var date=document.getElementById("date1").value;
	 var year=date[0].concat(date[1]).concat(date[2]).concat(date[3]);
	 var month=date[5].concat(date[6]);
	 var day=date[8].concat(date[9]);
	 document.getElementById("img").src="chart_linepot.php?id="+id+"&year="+year+"&month="+month+"&day="+day+"";
}

function chartPie()
{
	var id=document.getElementById("pieselector").value;
	 var date=document.getElementById("date2").value;
	 var year=date[0].concat(date[1]).concat(date[2]).concat(date[3]);
	 var month=date[5].concat(date[6]);
	 var day=date[8].concat(date[9]);
	 document.getElementById("pieimg").src="chart_pie.php?id="+id+"&year="+year+"&month="+month+"&day="+day+"";
}

</script>