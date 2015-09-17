<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/17
 * Time: 9:30
 */

header("Content-type: text/html; charset=utf-8");
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";


$req_num = $_GET['req_num'];
$flag = $_GET['flag'];
$sqltool = new SQLTool();
$sql = "select *from t_req where req_num = '$req_num'";
//请求信息
$res = $sqltool->dbQuery($sql);
//附件信息
$attachment = $sqltool->dbQuery("select attach_name,attach_id from t_attachment,t_req where req_attach_id=attach_id and req_num='$req_num'");
//工程师列表
$engineer = $sqltool->dbQuery("select user_name,name,(select count(finish_flag) from t_req_assign where req_engineer=t.user_name and finish_flag=1) task from t_user t where user_role=2 order by task");
//流程信息
$assign = $sqltool->dbQuery("select * from t_req_assign where req_num='$req_num' order by assign_time");
$change = $sqltool->dbQuery("select change_time,req_engineer,change_reason from t_req_change where req_num='$req_num' order by change_time");
$process = array();
//重组数组

for ($i = 0; $i < count($assign); $i++) {
    $j = $i * 2;
    $process[$j]['title'] = $assign[$i]['assign_time'] . "  " . $assign[$i]['assign_admin'] . "  指派  " . $assign[$i]['req_engineer'] . "  解决该请求.";
    $process[$j]['req_priority'] = $assign[$i]['req_priority'];
    $process[$j]['req_effect'] = $assign[$i]['req_effect'];
    $process[$j]['req_time_limit'] = $assign[$i]['req_time_limit'];
    $process[$j]['add_description'] = $assign[$i]['req_add_description'];
    if ($i < count($change)) {
        $process[$j + 1]['title'] = $change[$i]['change_time'] . "  " . $change[$i]['req_engineer'] . "  申请变更请求.";
        $process[$j + 1]['add_description'] = $change[$i]['change_reason'];
    }

}


$smarty->assign("res", $res[0]);
$smarty->assign("attach", $attachment);
$smarty->assign("engineer", $engineer);
$smarty->assign("flag", $flag);
$smarty->assign("process", $process);
$smarty->display('admin/request_assign.html');