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
require_once "../../tools/PageTool.class.php";

$user_name = $_SESSION['user_name'];
$sqltool = new SQLTool();

$sql = "select t_req.req_num,req_title,req_author,req_time,assign_time,req_priority,req_effect,req_time_limit from t_req,t_req_assign where req_engineer='$user_name' and finish_flag=1 and t_req.req_num = t_req_assign.req_num order by req_priority,req_effect ";
//任务列表
$res = $sqltool->dbQuery($sql);
//计算任务剩余时间
for ($i = 0; $i < count($res); $i++) {
    $t1 = date('Y-m-d H:i:s', time());
    $t1 = strtotime($t1);
    $t2 = strtotime($res[$i]['assign_time']);
    $time = ($res[$i]['req_time_limit'] * 3600) - ($t1 - $t2);
    if ($time < 0)
        $res[$i]['flag'] = 1;
    $time = abs($time);
    $res[$i]['hour'] = floor($time / 3600);
    $res[$i]['minute'] = floor($time % 3600 / 60);
}
//我的已处理列表
$sql2 = "select count(*) from t_req where req_finish_engineer='$user_name' and req_state=4";
$res2 = $sqltool->dbQuery($sql2);
$page2 = new PageTool($res2[0][0]);
$page2->url = "task_list.php";
$page2->sql = "select t_req.*,(select count(req_num) from t_feedback where t_feedback.req_num=t_req.req_num) fd from t_req where req_finish_engineer='$user_name' and req_state=4 order by req_finish_time desc";
$page2->pageNow = 1;
$page2->url_arg = "flag=2";
if ($_GET['flag'] == 2 and $_GET['pageNow'])
    $page2->pageNow = $_GET['pageNow'];
$smarty->assign("done", $page2->getPageResource());
$smarty->assign("nav2", $page2->getNavigate());
$smarty->assign("totalCount2", $res2[0][0]);

//变更列表
$sql3 = " from t_req,t_req_change where t_req.req_num=t_req_change.req_num and req_engineer='$user_name' order by change_time desc";
$res3 = $sqltool->dbQuery("select count(*)" . $sql3);
$page3 = new PageTool($res3[0][0]);
$page3->sql = "select t_req.req_num,req_title,req_author,req_time,change_time,flag " . $sql3;
$page3->url = "task_list.php";
$page3->url_arg = "flag=3";
$page3->pageNow = 1;
if ($_GET['flag'] == 3 and $_GET['pageNow'])
    $page3->pageNow = $_GET['pageNow'];
$smarty->assign("changelist", $page3->getPageResource());
$smarty->assign("nav3", $page3->getNavigate());
$smarty->assign("totalCount3", $res3[0][0]);



$flag = 1;
if ($_GET['flag'])
    $flag = $_GET['flag'];

$smarty->assign("res", $res);
$smarty->assign("flag", $flag);
$smarty->display("engineer/task_list.html");
