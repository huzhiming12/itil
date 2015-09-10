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
$sql = "select *from t_req where req_state='未处理'";
$undo_res = $sqltool->dbQuery($sql);

$engineer = $sqltool->dbQuery("select *from t_user where user_role=2");

$smarty->assign("res", $undo_res);
$smarty->assign("engineer",$engineer);
$smarty->display("admin/request_home.html");