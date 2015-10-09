<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/29
 * Time: 11:18
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();

$res = $sqltool->dbQuery("select depart_name,depart_id from t_depart");

$smarty->assign("res", $res);
$smarty->display("admin/graph_user_req.html");