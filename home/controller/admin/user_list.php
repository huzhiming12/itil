<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/1
 * Time: 19:05
 */

require_once "../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$depart_id = $_GET['depart_id'];
$sqltool = new SQLTool();

if ($_GET['flag'] == 1) //删除人员操作
{
    $user_id = $_GET['user_id'];
    $sql = "delete from t_user where user_id='$user_id'";
    if ($sqltool->dbUpdate($sql))
        echo "<script>alert('删除成功！')</script>";
    else
        echo "<script>alert('删除失败！')</script>";
}
if ($_GET['flag'] == 2)//关键字查询
{
    $keyword = $_GET['keyword'];
    $sql = "select *from t_user,t_depart where t_user.depart_id=t_depart.depart_id and (name like '%$keyword%' or position like '%$keyword%' or depart_name like '%$keyword%' or staff_id like '%$keyword%')";
} else
    $sql = "select *from t_user,t_depart where t_user.depart_id ='$depart_id' and t_user.depart_id=t_depart.depart_id";

if($_GET['flag']=="" or ($depart_id=="" and $_GET['flag']!=2))  //查询所有结果
    $sql = "select *from t_user,t_depart where t_user.depart_id=t_depart.depart_id";

$res = $sqltool->dbQuery($sql);
$smarty->assign("res", $res);
$smarty->assign("depart_id", $depart_id);
//print_r($res);
$smarty->display('share/user_list.html');