<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/25
 * Time: 10:52
 */
require_once "../../plugins/jpgraph/src/jpgraph.php";
require_once "../../plugins/jpgraph/src/jpgraph_bar.php";
require_once "../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$res = $sqltool->dbQuery("select user_name,(select count(*) from t_req_assign where req_time_left < 0 and  req_engineer=t_user.user_name ) num from t_user where user_role=2");
for($i=0;$i<count($res);$i++)
{
    $datay[$i]=$res[$i][1];
    $datax[$i]=$res[$i][0];
}

// Size of graph
$width = 870;
$height = count($res)*40+20;

// Set the basic parameters of the graph
$graph = new Graph($width, $height, 'auto');
$graph->SetScale('textlin');
$graph->setcolor('white');


// Rotate graph 90 degrees and set margin
$graph->Set90AndMargin(50, 20, 10, 10);


// Setup title
//$graph->title->Set('工程师工作量排行榜');
//$graph->title->SetFont(FF_SIMSUN, FS_NORMAL, 12);

// Setup X-axis
$graph->xaxis->SetTickLabels($datax);
$graph->xaxis->SetFont(FF_SIMSUN, FS_NORMAL, 12);
// Some extra margin looks nicer
$graph->xaxis->SetLabelMargin(10);
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right', 'center');

// Add some grace to y-axis so the bars doesn't go
// all the way to the end of the plot area
$graph->yaxis->scale->SetGrace(10);

// We don't want to display Y-axis
$graph->yaxis->Hide();

// Now create a bar pot
$bplot = new BarPlot($datay);
$bplot->SetFillColor('#FA480F');

//You can change the width of the bars if you like
$bplot->SetWidth(0.5);

// We want to display the value of each bar at the top
$bplot->value->Show();
$bplot->value->SetFont(FF_ARIAL, FS_NORMAL, 10);
$bplot->value->SetAlign('left', 'center');
$bplot->value->SetColor('black');
$bplot->value->SetFormat('%d');

// Add the bar to the graph
$graph->Add($bplot);

// .. and stroke the graph
$graph->Stroke();