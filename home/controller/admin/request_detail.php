<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/8
 * Time: 9:07
 */

require_once"../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$req_num = $_GET['req_num'];
$sql = "select *from t_req where req_num = '$req_num'";
$res = $sqltool->dbQuery($sql);
$attachment = $sqltool->dbQuery("select attach_name,attach_md5_name,attach_id from t_attachment,t_req where req_attach_id=attach_id and req_num='$req_num'");
$smarty->assign("res",$res[0]);
$smarty->assign("attach",$attachment);
$sqltool->dbCloseConnection();

$smarty->display("admin/request_detail.html");