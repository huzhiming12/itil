<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/16
 * Time: 15:08
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$req_num = $_GET['req_num'];
$sql = "select *from t_req where req_num = '$req_num'";
$res = $sqltool->dbQuery($sql);
//附件信息
$attachment = $sqltool->dbQuery("select attach_name,attach_id from t_attachment,t_req where req_attach_id=attach_id and req_num='$req_num'");
//指派信息
$res2 = $sqltool->dbQuery("select * from t_req_assign where req_num='$req_num' and finish_flag=1");

//流程信息
$assign = $sqltool->dbQuery("select * from t_req_assign where req_num='$req_num' order by assign_time");
$change = $sqltool->dbQuery("select change_time,req_engineer,change_reason from t_req_change where req_num='$req_num' order by change_time");
$process = array();
//重组数组
for ($i = 0; $i < count($assign); $i++) {
    $process[$i]['title'] = $assign[$i]['assign_time'] . "  " . $assign[$i]['assign_admin'] . "  指派  " . $assign[$i]['req_engineer'] . "  解决该请求.";
    $process[$i]['req_priority'] = $assign[$i]['req_priority'];
    $process[$i]['req_effect'] = $assign[$i]['req_effect'];
    $process[$i]['req_time_limit'] = $assign[$i]['req_time_limit'];
    $process[$i]['add_description'] = $assign[$i]['req_add_description'];
    $process[$i]['req_complex'] = $assign[$i]['req_complex'];
    $process[$i]['time'] = $assign[$i]['assign_time'];
    $process[$i]['flag'] = "ass";
}

for ($j = $i; $j - $i < count($change); $j++) {
    $process[$j]['title'] = $change[$j - $i]['change_time'] . "  " . $change[$j - $i]['req_engineer'] . "  申请变更请求.";
    $process[$j]['add_description'] = $change[$j - $i]['change_reason'];
    $process[$j]['time'] = $change[$j - $i]['change_time'];
}

//二维数组按时间排序
$temp = array();
for ($i = 0; $i < count($process); $i++) {
    for ($j = 0; $j < count($process) - $i - 1; $j++) {
        if ($process[$j]['time'] > $process[$j + 1]['time']) {
            $temp = $process[$j];
            $process[$j] = NULL;
            $process[$j] = $process[$j + 1];
            $process[$j + 1] = $temp;
        }
    }
}
//取消信息
$cancel = $sqltool->dbQuery("select * from t_req_cancel where req_num ='$req_num'");

$smarty->assign("res", $res[0]);
$smarty->assign("attach", $attachment);
$smarty->assign("ass", $res2[0]);
$smarty->assign("process", $process);
$smarty->assign("flag", $_GET['flag']);
$smarty->assign("cancel", $cancel[0]);
$sqltool->dbCloseConnection();


$smarty->display("engineer/task_detail.html");