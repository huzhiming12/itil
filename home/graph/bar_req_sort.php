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

$id = 1;
if (isset($_GET['id']))
{
    $id = $_GET['id'];
}


switch ($id)
{
    case 1://本月份起止时间
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), 1, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("t"), date("Y")));
        $title = date('Y/m', time()) . "月份";
        break;
    case 2://上个月的起止时间
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m") - 1, 1, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), 0, date("Y")));
        $title = date("Y/m", strtotime($start_date)) . "月份";
        break;
    case 3://本周的起止时间
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), date("d") - (date("w")==0? 7:date('w')) + 1, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("d") - (date("w")==0? 7:date('w')) + 7, date("Y")));
        $title = date('Y/m/d', strtotime($start_date)) . "—" . date('Y/m/d', strtotime($end_date)) . "日";
        break;
    case 4://上周的起止时间
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), date("d") - (date("w")==0? 7:date('w')) + 1 - 7, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("d") - (date("w")==0? 7:date('w')) + 7 - 7, date("Y")));
        $title = date('Y/m/d', strtotime($start_date)) . "—" . date('Y/m/d', strtotime($end_date)) . "日";
        break;
    case 5://本季度的起止时间
        $season = ceil((date('n')) / 3);//当月是第几季度
        $start_date = date('Y-m-d H:i:s', mktime(0, 0, 0, $season * 3 - 3 + 1, 1, date('Y')));
        $end_date = date('Y-m-d H:i:s', mktime(23, 59, 59, $season * 3, date('t', mktime(0, 0, 0, $season * 3, 1, date("Y"))), date('Y')));
        $title = date('Y/m/d', strtotime($start_date)) . "—" . date('Y/m/d', strtotime($end_date)) . "日 ";
        break;
    case 6://上季度的起止日期
        $season = ceil((date('n')) / 3) - 1;//上季度是第几季度
        $start_date = date('Y-m-d H:i:s', mktime(0, 0, 0, $season * 3 - 3 + 1, 1, date('Y')));
        $end_date = date('Y-m-d H:i:s', mktime(23, 59, 59, $season * 3, date('t', mktime(0, 0, 0, $season * 3, 1, date("Y"))), date('Y')));
        $title = date('Y/m/d', strtotime($start_date)) . "—" . date('Y/m/d', strtotime($end_date)) . "日 ";
        break;
    case 8:
        $start_date = date('Y-m-d H:i:s', strtotime($_GET['date1']));
        $end_date = date('Y-m-d H:i:s', mktime(23, 59, 59, date('m', strtotime($_GET['date2'])), date('d', strtotime($_GET['date2'])), date('Y', strtotime($_GET['date2']))));
        $title = date('Y/m/d', strtotime($_GET['date1'])) . "—" . date('Y/m/d', strtotime($_GET['date2'])) . "日 ";
        break;
}

$title.=" 请求分类统计";

$sql = " and (req_time >'$start_date' and req_time<'$end_date')";


$sqltool = new SQLTool();
$res = $sqltool->dbQuery("select sort_name,(select count(*) from t_req where req_sort like  CONCAT('%',t_req_sort.sort_name,'%') $sql ) num from t_req_sort where sort_parent_id!='' order by num desc");
for ($i = 0; $i < count($res); $i++)
{
    $datay[$i] = $res[$i][1];
    $datax[$i] = $res[$i][0];
}

// Size of graph
$width = 870;
$height = count($res) * 40 + 20;

// Set the basic parameters of the graph
$graph = new Graph($width, $height, 'auto');
$graph->SetScale('textlin');
$graph->setcolor('white');


// Rotate graph 90 degrees and set margin
$graph->Set90AndMargin(120, 20, 30, 10);


// Setup title
$graph->title->Set($title);
$graph->title->SetFont(FF_SIMSUN, FS_BOLD, 12);

// Setup X-axis
$graph->xaxis->SetTickLabels($datax);
$graph->xaxis->SetFont(FF_SIMSUN, FS_NORMAL, 10);
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
$bplot->SetFillColor('#57B5D6');

//You can change the width of the bars if you like
$bplot->SetWidth(0.5);

// We want to display the value of each bar at the top
$bplot->value->Show();
$bplot->value->SetFont(FF_SIMSUN, FS_NORMAL, 10);
$bplot->value->SetAlign('left', 'center');
$bplot->value->SetColor('black');
$bplot->value->SetFormat('%d');

// Add the bar to the graph
$graph->Add($bplot);

// .. and stroke the graph
$graph->Stroke();