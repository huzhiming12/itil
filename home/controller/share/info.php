<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/10/8
 * Time: 10:23
 */

session_start();
require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$user_name = $_SESSION['user_name'];

$res = $sqltool->dbQuery("select t_user.*,depart_name from t_user,t_depart where t_user.depart_id=t_depart.depart_id and user_name='$user_name'");

$smarty->assign("user",$res[0]);
$smarty->display("share/info.html");