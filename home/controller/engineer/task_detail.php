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

$attachment = $sqltool->dbQuery("select attach_name,attach_id from t_attachment,t_req where req_attach_id=attach_id and req_num='$req_num'");

$res2 = $sqltool->dbQuery("select * from t_req_assign where req_num='$req_num' and finish_flag=1");

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
$smarty->assign("ass", $res2[0]);
$smarty->assign("process", $process);
$smarty->assign("flag",$_GET['flag']);
$sqltool->dbCloseConnection();


$smarty->display("engineer/task_detail.html");