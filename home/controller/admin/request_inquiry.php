<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/10
 * Time: 9:45
 */

require_once "../../smarty_include.php";
require_once "../../tools/PageTool.class.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$sql = "";

$options = 7;
if ($_GET['options'])
{
    $options = $_GET['options'];
}
$date1 = $_GET['date1'];
$date2 = $_GET['date2'];
$user = $_GET['user'];
$engineer = $_GET['engineer'];
$state = $_GET['state'];
$keyword = $_GET['keyword'];
switch ($options)
{
    case 1:
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), 1, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("t"), date("Y")));
        break;
    case 2://上个月的起止时间
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m") - 1, 1, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), 0, date("Y")));
        break;
    case 3://本周的起止时间
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), date("d") - (date("w") == 0 ? 7 : date('w')) + 1, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("d") - (date("w") == 0 ? 7 : date('w')) + 7, date("Y")));
        break;
    case 4://上周的起止时间
        $start_date = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), date("d") - (date("w") == 0 ? 7 : date('w')) + 1 - 7, date("Y")));
        $end_date = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("d") - (date("w") == 0 ? 7 : date('w')) + 7 - 7, date("Y")));
        break;
    case 5://本季度的起止时间
        $season = ceil((date('n')) / 3);//当月是第几季度
        $start_date = date('Y-m-d H:i:s', mktime(0, 0, 0, $season * 3 - 3 + 1, 1, date('Y')));
        $end_date = date('Y-m-d H:i:s', mktime(23, 59, 59, $season * 3, date('t', mktime(0, 0, 0, $season * 3, 1, date("Y"))), date('Y')));
        break;
    case 6://上季度的起止日期
        $season = ceil((date('n')) / 3) - 1;//上季度是第几季度
        $start_date = date('Y-m-d H:i:s', mktime(0, 0, 0, $season * 3 - 3 + 1, 1, date('Y')));
        $end_date = date('Y-m-d H:i:s', mktime(23, 59, 59, $season * 3, date('t', mktime(0, 0, 0, $season * 3, 1, date("Y"))), date('Y')));
        break;
    case 8:
        $start_date = date('Y-m-d H:i:s', strtotime($date1));
        $end_date = date('Y-m-d H:i:s', mktime(23, 59, 59, date('m', strtotime($date2)), date('d', strtotime($date2)), date('Y', strtotime($date2))));
        break;
}
if ($options != 7)
{
    $sql = " and req_time>'$start_date' and req_time< '$end_date'";
}
if ($user != "")
{
    $sql .= " and req_author='$user'";
}
if ($engineer != '')
{
    $sql .= " and req_finish_engineer='$engineer'";
}
if ($state != 0)
{
    $sql .= " and req_state=$state";
}
if ($keyword != '')
{
    $sql .= " and req_keyword='$keyword'";
}


$res = $sqltool->dbQuery("select count(*) from t_req where 1=1 $sql");
$pagetool = new PageTool($res[0][0]);
$pagetool->url = "request_inquiry.php";
$pagetool->url_arg = "options=$options&date1=$date1&date2=$date2&user=$user&engineer=$engineer&state=$state&keyword=$keyword";
$pageNow = 1;
$pagetool->sql = "select *from t_req where 1=1 $sql order by req_time desc";
if ($_GET['pageNow'])
{
    $pageNow = $_GET['pageNow'];
}
$pagetool->pageNow = $pageNow;

$req = $pagetool->getPageResource();
$list = "(";
for ($i = 0; $i < count($req); $i++)
{
    if ($i == count($req) - 1)
    {
        $list .= "'".$req[$i]['req_num']."'";
    }
    else
    {
        $list .= "'".$req[$i]['req_num']."',";
    }
}
$list .= ")";
$smarty->assign("res", $req);
$smarty->assign("list", $list);
$smarty->assign("navi", $pagetool->getNavigate());

$smarty->assign("options", $options);
$smarty->assign("date1", $date1);
$smarty->assign("date2", $date2);
$smarty->assign("user", $user);
$smarty->assign("engineer", $engineer);
$smarty->assign("state", $state);
$smarty->assign("keyword", $keyword);

$smarty->display("admin/request_inquiry.html");