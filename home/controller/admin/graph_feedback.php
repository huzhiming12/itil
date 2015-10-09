<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/10/7
 * Time: 13:39
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

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

$sqltool = new SQLTool();
$fd[0][0] = "工程师的技能与知识水平";
$fd[1][0] = "工程师的服务态度";
$fd[2][0] = "工程师的总体评价";
$fd[3][0] = "请求处理是否及时";
$fd[4][0] = "请求的解决方案是否满意";
$fd[5][0] = "对本次请求服务的总体评价";

for ($j = 1; $j < 7; $j++)
{
    $sql = "select fd_$j,count(fd_$j) from t_feedback group by fd_$j";
    $res = $sqltool->dbQuery($sql);
    $sum = 0;
    $score = 0;
    for ($i = 0; $i < count($res); $i++)
    {
        $fd[$j - 1][$res[$i][0]] = $res[$i][1];
        $sum += $res[$i][1];
        $score += $res[$i][0] * $res[$i][1];
    }
    $fd[$j - 1][6] = $sum;
    $fd[$j - 1][7] = $score / $sum;
}

$smarty->assign("fd", $fd);
$smarty->display("admin/graph_feedback.html");