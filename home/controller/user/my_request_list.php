<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/11
 * Time: 14:54
 */
session_start();
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
require_once "../../tools/PageTool.class.php";

$sqltool = new SQLTool();
$user_name = $_SESSION['user_name'];

$sql = "select t_req.*,(select count(req_num) from t_feedback where t_feedback.req_num=t_req.req_num) fd from t_req where req_author='$user_name' ";

$searchcontent = "";
if (isset($_GET['searchcontent']) and $_GET['searchcontent'] != "") {
    $searchcontent = $_GET['searchcontent'];
    $sql .= " and (req_title like '%$searchcontent%' or req_sort like '%$searchcontent%' or req_keyword like '%$searchcontent%' or req_content like '%$searchcontent%') ";
}
$sql.=" order by req_time desc";


$res = $sqltool->dbQuery($sql);
$pagetool = new PageTool(count($res));
$pagetool->url = "my_request_list.php";
$pagetool->sql = $sql;
$pagetool->url_arg = "searchcontent=$searchcontent";
$pageNow = 1;
if ($_GET['pageNow'])
    $pageNow = $_GET['pageNow'];
$pagetool->pageNow = $pageNow;

$smarty->assign("res", $pagetool->getPageResource());

if ($pagetool->pageCount >= 2)
    $smarty->assign("nav", $pagetool->getNavigate());

$smarty->display("user/my_request_list.html");