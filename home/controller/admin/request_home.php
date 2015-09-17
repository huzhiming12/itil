<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/9
 * Time: 20:57
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$sql = "select *from t_req where req_state=1";
$undo_res = $sqltool->dbQuery($sql);
$sql = "select t_req.req_num,req_title,req_author,req_time,req_engineer,change_time from t_req,t_req_change where t_req.req_num=t_req_change.req_num and flag=1";
$change_req = $sqltool->dbQuery("$sql");


$smarty->assign("change_req", $change_req);
$smarty->assign("res", $undo_res);
$smarty->display("admin/request_home.html");