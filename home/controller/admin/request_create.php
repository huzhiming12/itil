<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/10
 * Time: 9:56
 */
session_start();
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
$sqltool = new SQLTool();
$sql = "select sort_id,sort_name from t_req_sort where sort_parent_id is NULL ";
$parent_sort = $sqltool->dbQuery($sql);
$sql = "select sort_id,sort_name,sort_parent_id from t_req_sort where sort_parent_id is not NULL";
$child_sort = $sqltool->dbQuery($sql);
$userlist = $sqltool->dbQuery("select user_name,name,depart_name from t_user,t_depart where t_user.depart_id=t_depart.depart_id and user_role='1'");


$attach_id = md5(uniqid(md5(microtime(true)), true));

$smarty->configLoad("config.ini","uploadfile");

$smarty->assign("attach_id", $attach_id);
$smarty->assign("parent_sort", $parent_sort);
$smarty->assign("child_sort", $child_sort);
$smarty->assign("userlist",$userlist);

$smarty->display("admin/request_create.html");

$sqltool->dbCloseConnection();