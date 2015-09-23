<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/7
 * Time: 14:45
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
$sqltool = new SQLTool();
$sql = "select sort_id,sort_name from t_req_sort where sort_parent_id is NULL ";
$parent_sort = $sqltool->dbQuery($sql);
$sql = "select sort_id,sort_name,sort_parent_id from t_req_sort where sort_parent_id is not NULL";
$child_sort = $sqltool->dbQuery($sql);
$sqltool->dbCloseConnection();
$attach_id =md5(uniqid(md5(microtime(true)),true));

$smarty->configLoad('config.ini', 'uploadfile');
$smarty->assign("attach_id",$attach_id);
$smarty->assign("parent_sort", $parent_sort);
$smarty->assign("child_sort", $child_sort);
$smarty->display("user/request_create.html");