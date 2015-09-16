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
$res = $sqltool->dbQuery($sql);  //请求信息
//附件信息
$attachment = $sqltool->dbQuery("select attach_name,attach_id from t_attachment,t_req where req_attach_id=attach_id and req_num='$req_num'");
//指派信息
$assign = $sqltool->dbQuery("select * from t_req_assign where req_num='$req_num' and finish_flag=1");


$smarty->assign("res", $res[0]);
$smarty->assign("attach", $attachment);
$smarty->assign("ass", $assign[0]);
$sqltool->dbCloseConnection();


$smarty->display("engineer/task_detail.html");