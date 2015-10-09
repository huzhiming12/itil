<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/9
 * Time: 20:57
 */

session_start();
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";
date_default_timezone_set('prc');
date_default_timezone_set('prc');

$user_name = $_SESSION['user_name'];
$sqltool = new SQLTool();
$sql = "select *from t_req where req_state=1";
$undo_res = $sqltool->dbQuery($sql);
$sql = "select t_req.req_num,req_title,req_author,req_time,req_engineer,change_time from t_req,t_req_change where t_req.req_num=t_req_change.req_num and flag=1";
$change_req = $sqltool->dbQuery("$sql");
$sql = "select t_req.req_num,req_title,req_author,req_time,req_engineer,assign_time, (TIME_TO_SEC(TIMEDIFF(NOW(),assign_time))-req_time_limit*3600) as time_left,finish_flag  from t_req,t_req_assign where t_req.req_num=t_req_assign.req_num and finish_flag=1 and (TIME_TO_SEC(TIMEDIFF(NOW(),assign_time))-req_time_limit *3600)>0";
$over_time_req = $sqltool->dbQuery($sql);

//请求追踪
$sql = "select t_req.req_num,req_title,req_author,req_time,assign_time,req_priority,req_effect,req_time_limit from t_req,t_req_assign where assign_admin='$user_name' and finish_flag=1 and t_req.req_num = t_req_assign.req_num";
$res = $sqltool->dbQuery($sql);
//计算任务剩余时间
for ($i = 0; $i < count($res); $i++)
{
    $t1 = date('Y-m-d H:i:s', time());
    $t1 = strtotime($t1);
    $t2 = strtotime($res[$i]['assign_time']);
    $time = ($res[$i]['req_time_limit'] * 3600) - ($t1 - $t2);
    if ($time < 0)
    {
        $res[$i]['flag'] = 1;
    }
    $time = abs($time);
    $res[$i]['hour'] = floor($time / 3600);
    $res[$i]['minute'] = floor($time % 3600 / 60);
}

$smarty->assign("change_req", $change_req);
$smarty->assign("undo_res", $undo_res);
$smarty->assign("over_time_req", $over_time_req);
$smarty->assign("doing_req",$res);
$smarty->display("admin/request_home.html");