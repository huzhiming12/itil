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
$user_name =$_SESSION['user_name'];

$sql = "select * from t_kno where kno_author='$user_name' ";

//搜索
if(isset($_GET['searchcontent']) and $_GET['searchcontent']!="")
{
    $searchcontent = $_GET['searchcontent'];
    $sql.=" and (kno_title like '%$searchcontent%' or kno_num like '%$searchcontent%' or kno_sort like '%$searchcontent%' or kno_keyword like '%$searchcontent%')";
}

$sql.=" order by kno_sub_time desc";

$res = $sqltool->dbQuery($sql);
$pagetool = new PageTool(count($res),4);
$pagetool->url = "my_know_list.php";
$pagetool->sql = $sql;
$pagetool->url_arg="&searchcontent=$searchcontent";
$pageNow = 1;
if ($_GET['pageNow'])
    $pageNow = $_GET['pageNow'];
$pagetool->pageNow = $pageNow;

$smarty->assign("res", $pagetool->getPageResource());
if ($pagetool->pageCount >= 2)
    $smarty->assign("nav", $pagetool->getNavigate());

$smarty->display("engineer/my_know_list.html");