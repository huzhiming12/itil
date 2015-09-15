<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/15
 * Time: 19:35
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$sql = "select t_req.req_num,req_title,req_author,DATE_FORMAT(req_time,'%y/%m/%d %H:%i') req_time,DATE_FORMAT(assign_time,'%y/%m/%d %H:%i')assign_time,req_priority,req_effect,(NOW()-assign_time) times from t_req,t_req_assign where finish_flag=1 and t_req.req_num = t_req_assign.req_num";
$res = $sqltool->dbQuery($sql);

$smarty->assign("res", $res);
$smarty->display("engineer/task_list.html");
