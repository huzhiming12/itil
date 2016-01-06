<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/28
 * Time: 8:51
 */
require_once "../../plugins/jpgraph/src/jpgraph.php";
require_once "../../plugins/jpgraph/src/jpgraph_line.php";
require_once "../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$selector = 1;
$date = date('Y-m-d', time());

if (isset($_GET['selector'])) {
    $selector = $_GET['selector'];
    $date = $_GET['date'];
}
//按年统计
if ($selector == 2) {
    for ($i = 0; $i < 12; $i++) {
        $datax[$i] = $i + 1;
        $datay[$i] = 0;
    }
    $sql = "SELECT MONTH(req_time) mon,count(req_num) num from t_req where year(req_time)=YEAR('$date') GROUP by Month(req_time)";
    $res = $sqltool->dbQuery($sql);
    for ($i = 0; $i < count($res); $i++)
        $datay[$res[$i]['mon'] - 1] = $res[$i]['num'];
    $title = substr($date,0,4)."年请求量统计";
} else {
    $max = date('t', $date); //获取一月中的最后一天
    for ($i = 0; $i < $max; $i++) {
        $datax[$i] = $i + 1;
        $datay[$i] = 0;
    }
    $sql = "SELECT day(req_time) day,count(req_num) num from t_req where year(req_time)=YEAR('$date') and month(req_time)=month('$date') GROUP by day(req_time)";
    $res = $sqltool->dbQuery($sql);
    for ($i = 0; $i < count($res); $i++)
        $datay[$res[$i]['day'] - 1] = $res[$i]['num'];
    $title = substr($date,0,7)."份请求量统计";
}


$graph = new Graph(880, 450);
$graph->SetScale("textlin");
$graph->title->SetFont(FF_SIMSUN, FS_BOLD, 12);
$graph->title->Set($title);

$graph->xaxis->SetTickLabels($datax);

$linepot = new LinePlot($datay);
$linepot->SetColor("blue");
$linepot->value->Show(true);
$linepot->value->SetFormat('%d');

$graph->Add($linepot);

$graph->Stroke();