<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/22
 * Time: 20:20
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
require_once "../../tools/PageTool.class.php";

$sqltool = new SQLTool();
$sql = " from t_news";
if ($_GET['searchcontent']) {
    $searchcontent = $_GET['searchcontent'];
    $sql = " from t_news where news_title like '%$searchcontent%' or news_content like '%$searchcontent%'";
}
$res = $sqltool->dbQuery("select count(*) " . $sql);
$sql.=" order by news_time desc";
$pagetool = new PageTool($res[0][0]);
$pagetool->url = "news_list.php";
$pagetool->url_arg = "searchcontent=$searchcontent";
$pagetool->sql = "select *" . $sql;
$pagetool->pageNow = 1;
if ($_GET['pageNow'])
    $pagetool->pageNow = $_GET['pageNow'];

$smarty->assign("nav", $pagetool->getNavigate());
$smarty->assign("res", $pagetool->getPageResource());
$smarty->display("share/news_list.html");
$sqltool->dbCloseConnection();

