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
$sql = "select t_req.req_num,req_title,req_author,req_time,req_engineer,assign_time, (TIME_TO_SEC(TIMEDIFF(NOW(),assign_time))-req_time_limit*3600) as time_left,finish_flag  from t_req,t_req_assign where t_req.req_num=t_req_assign.req_num and finish_flag=1 and (TIME_TO_SEC(TIMEDIFF(NOW(),assign_time))-req_time_limit *3600)>0";
$over_time_req = $sqltool->dbQuery($sql);

$smarty->assign("change_req", $change_req);
$smarty->assign("res", $undo_res);
$smarty->assign("over_time_req", $over_time_req);
$smarty->display("admin/request_home.html");