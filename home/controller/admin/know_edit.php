<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/13
 * Time: 14:17
 */
require_once"../../smarty_include.php";
require_once"../../tools/SQLTool.class.php";

$kno_num = $_GET['kno_num'];
$sqltool = new SQLTool();

$sql = "select *from t_kno where kno_num='$kno_num'";
$res = $sqltool->dbQuery($sql);

$sql = "select sort_id,sort_name from t_req_sort where sort_parent_id is NULL ";
$parent_sort = $sqltool->dbQuery($sql);
$sql = "select sort_id,sort_name,sort_parent_id from t_req_sort where sort_parent_id is not NULL";
$child_sort = $sqltool->dbQuery($sql);
$req = $sqltool->dbQuery("select req_num,req_title from t_req where req_state='已解决'");


$sqltool->dbCloseConnection();


$smarty->assign("parent_sort", $parent_sort);
$smarty->assign("child_sort", $child_sort);
$smarty->assign("reqlist", $req);


$smarty->assign("kno",$res[0]);


$smarty->display("admin/know_edit.html");


