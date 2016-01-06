<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/14
 * Time: 14:59
 */
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
$sqltool = new SQLTool();
$sql = "SELECT sort_name,(select count(*) from t_kno where kno_sort  like CONCAT('%',t.sort_name,'%') and kno_state=3) times,sort_parent_id from t_req_sort t GROUP BY sort_name ORDER BY sort_parent_id";
$child_sort = $sqltool->dbQuery($sql);
$parent_sort = $sqltool->dbQuery("select sort_id,sort_name from t_req_sort where sort_parent_id is NULL ");
$kno = $sqltool->dbQuery("select kno_title,kno_num,kno_read from t_kno  where kno_state=3 order by kno_read desc limit 0,20");

$smarty->assign("child_sort", $child_sort);
$smarty->assign("parent_sort", $parent_sort);
$smarty->assign("kno", $kno);

$smarty->display("share/know_search.html");