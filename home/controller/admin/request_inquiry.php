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
$sql = " ";


$and_or = $_GET['and_or'];
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];
$req_state = $_GET['req_state'];
$keyword = $_GET['keyword'];

if ($start_date != "" and $end_date != "")
    $sql .= $and_or . " (req_time >='$start_date' and req_time <='$end_date') ";
else {
    if ($start_date != "")
        $sql .= $and_or . " req_time >='$start_date' ";
    if ($end_date != "")
        $sql .= $and_or . " req_time <='$end_date' ";
}
if ($req_state != "")
    $sql .= $and_or . " req_state = '$req_state' ";
if ($keyword != "")
    $sql .= $and_or . " req_keyword like '%$keyword%' ";

$res = $sqltool->dbQuery("select count(*) from t_req where 1=1 " . $sql);


$pagetool = new PageTool($res[0][0]);
$pagetool->url = "request_inquiry.php";
$pagetool->url_arg="&and_or=$and_or&start_date=$start_date&end_date=$end_date&req_state=$req_state&keyword=$keyword";
$pageNow = 1;
$pagetool->sql = "select *from t_req where 1=1" . $sql;
if ($_GET['pageNow'])
    $pageNow = $_GET['pageNow'];
$pagetool->pageNow = $pageNow;

$smarty->assign("res", $pagetool->getPageResource());

$smarty->assign("navi", $pagetool->getNavigate());
$smarty->display("admin/request_inquiry.html");