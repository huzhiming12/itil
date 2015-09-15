<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/10
 * Time: 16:00
 */

require_once "../../smarty_include.php";

require_once "../../tools/SQLTool.class.php";
$sqltool = new SQLTool();
$sql = "select sort_id,sort_name from t_req_sort where sort_parent_id is NULL ";
$parent_sort = $sqltool->dbQuery($sql);
$sql = "select sort_id,sort_name,sort_parent_id from t_req_sort where sort_parent_id is not NULL";
$child_sort = $sqltool->dbQuery($sql);
$req = $sqltool->dbQuery("select req_num,req_title from t_req where req_state='4'");


$sqltool->dbCloseConnection();
//生成唯一的附件id标识符
$attach_id = md5(uniqid(md5(microtime(true)), true));

$smarty->assign("attach_id", $attach_id);
$smarty->assign("parent_sort", $parent_sort);
$smarty->assign("child_sort", $child_sort);
$smarty->assign("reqlist", $req);

$smarty->display("share/know_create.html");