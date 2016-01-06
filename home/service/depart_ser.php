<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/12
 * Time: 19:16
 */
require_once "../tools/SQLTool.class.php";
$sqltool = new SQLTool();

if (isset($_POST['depart_name'])) {

    $flag = $_POST['flag'];
    //添加机构
    if ($flag == 1) {
        $depart_name = $_POST['depart_name'];
        $depart_parent = $_POST['depart_parent_id'];
        if ($depart_parent == "")
            $depart_parent="NULL";
        $sql = "insert into t_depart (depart_name,depart_parent_id) values ('$depart_name',$depart_parent)";
        if ($sqltool->dbUpdate($sql))
            echo "<script> alert('机构添加成功！');</script>";
        else
            echo "<script> alert('机构添加失败！')</script>";
    }
}

if (isset($_GET['id']))
{
    //删除机构
    $sql = "delete from t_depart where depart_id = '$_GET[id]'";
    if($sqltool->dbUpdate($sql))
        echo "<script> alert('机构删除成功！');</script>";
    else
        echo "<script> alert('机构删除失败！');</script>";
}

$sqltool->dbCloseConnection();
echo "<script>location.href='../controller/admin/config_depart.php';</script>";