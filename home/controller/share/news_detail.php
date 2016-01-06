<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/23
 * Time: 10:45
 */

session_start();
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$news_id = $_GET['news_id'];
$sqltool = new SQLTool();
$sqltool->dbUpdate("update t_news set news_read=news_read+1 where news_id='$news_id'");

$sql = "select *from t_news where news_id = '$news_id'";
$res = $sqltool->dbQuery($sql);
$attachment = $sqltool->dbQuery("select attach_name,t_attachment.attach_id from t_attachment,t_news where t_news.attach_id=t_attachment.attach_id and news_id='$news_id'");



$smarty->assign("res", $res[0]);
$smarty->assign("attach", $attachment);

$smarty->display("share/news_detail.html");