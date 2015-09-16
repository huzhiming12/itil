<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/15
 * Time: 19:35
 */
session_start();
date_default_timezone_set('prc');
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$user_name = $_SESSION['user_name'];
$sqltool = new SQLTool();
$sql = "select t_req.req_num,req_title,req_author,req_time,assign_time,req_priority,req_effect,req_time_limit from t_req,t_req_assign where req_engineer='$user_name' and finish_flag=1 and t_req.req_num = t_req_assign.req_num order by req_priority,req_effect ";
$res = $sqltool->dbQuery($sql);

// 计算剩余时间
for ($i = 0; $i < count($res); $i++) {
    $t1 = date('Y-m-d H:i:s', time());  //当前时间
    $t1 = strtotime($t1);
    $t2 = strtotime($res[$i]['assign_time']);
    $time = ($res[$i]['req_time_limit'] * 3600) - ($t1 - $t2);
    if ($time < 0)
        $res[$i]['flag'] = 1;
    $time = abs($time);
    $res[$i]['hour'] = floor($time / 3600);
    $res[$i]['minute'] = floor($time % 3600 / 60);
}
$smarty->assign("res", $res);
$smarty->display("engineer/task_list.html");
