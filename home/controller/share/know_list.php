<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/14
 * Time: 19:26
 */


require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
require_once "../../tools/PageTool.class.php";

$sqltool = new SQLTool();

$sql = "select * from t_kno where 1=1 ";

//输入搜索
if (isset($_GET['searchcontent']) and $_GET['searchcontent'] != "") {
    $searchcontent = $_GET['searchcontent'];
    $sql .= " and kno_title like '%$searchcontent%' or kno_num like '%$searchcontent%' or kno_sort like '%$searchcontent%' or kno_keyword like '%$searchcontent%' or kno_content like '%$searchcontent%' and kno_state=3";
}
//分类搜索
if (isset($_GET['kno_sort'])) {
    $sort = $_GET['kno_sort'];
    $sql .= " and kno_sort like '%$sort%' and kno_state=3";
}

$sql .= " order by kno_read desc";

$res = $sqltool->dbQuery($sql);

$pagetool = new PageTool(count($res), 3);
$pagetool->url = "know_list.php";
$pagetool->sql = $sql;
$pagetool->url_arg = "searchcontent=$searchcontent&kno_sort=$sort";
$pageNow = 1;
if ($_GET['pageNow'])
    $pageNow = $_GET['pageNow'];
$pagetool->pageNow = $pageNow;

$smarty->assign("res", $pagetool->getPageResource());
if ($pagetool->pageCount >= 2)
    $smarty->assign("nav", $pagetool->getNavigate());

$smarty->assign("searchcontent", $searchcontent);
$smarty->display("share/know_list.html");