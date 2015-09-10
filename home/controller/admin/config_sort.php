<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/9
 * Time: 15:29
 */
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
$sqltool = new SQLTool();
$sql = "select sort_id,sort_name from t_req_sort where sort_parent_id is NULL ";
$parent_sort = $sqltool->dbQuery($sql);
$sql = "select sort_id,sort_name,sort_parent_id from t_req_sort where sort_parent_id is not NULL";
$child_sort = $sqltool->dbQuery($sql);
$sqltool->dbCloseConnection();

$smarty->assign("parent_sort", $parent_sort);
$smarty->assign("child_sort", $child_sort);
$smarty->display("admin/config_sort.html");