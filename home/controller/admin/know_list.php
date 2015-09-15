<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/11
 * Time: 14:54
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
require_once "../../tools/PageTool.class.php";

$sqltool = new SQLTool();

$sql = "select * from t_kno where 1=1 ";

//搜索
if(isset($_GET['searchcontent']) and $_GET['searchcontent']!="")
{
    $searchcontent = $_GET['searchcontent'];
    $sql.=" and kno_title like '%$searchcontent%' or kno_num like '%$searchcontent%' or kno_sort like '%$searchcontent%' or kno_keyword like '%$searchcontent%'";
}

$sql.=" order by kno_state, kno_sub_time desc";

$res = $sqltool->dbQuery($sql);
$pagetool = new PageTool(count($res));
$pagetool->url = "know_list.php";
$pagetool->sql = $sql;
$pagetool->url_arg="&searchcontent=$searchcontent";
$pageNow = 1;
if ($_GET['pageNow'])
    $pageNow = $_GET['pageNow'];
$pagetool->pageNow = $pageNow;

$smarty->assign("res", $pagetool->getPageResource());
if ($pagetool->pageCount >= 2)
    $smarty->assign("nav", $pagetool->getNavigate());

$smarty->display("admin/know_list.html");