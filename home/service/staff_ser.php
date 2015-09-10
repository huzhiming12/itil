<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/14
 * Time: 19:26
 */

require_once "../tools/SQLTool.class.php";
$sqltool = new SQLTool();

if (isset($_POST['add_staff'])) {
    $user_name = $_POST['username'];
    $user_role =$_POST['role'];
    $name = $_POST['name'];
    $staff_id = $_POST['staff_id'];
    $depart_id = $_POST['depart_id'];
    $sex = $_POST['sex'];
    $position = $_POST['position'];
    $phone = $_POST['phone'];
    $telephone = $_POST['telphone'];
    $email = $_POST['email'];

    $sql = "insert into t_user (name,user_name,user_role,staff_id,depart_id,sex,position,phone,telephone,email)
            values('$name','$user_name','$user_role','$staff_id','$depart_id','$sex','$position','$phone','$telephone','$email')";

    if($sqltool->dbUpdate($sql))
        echo "<script>alert('人员添加成功！')</script>";
    else
        echo "<script>alert('人员添加失败！')</script>";
}


$sqltool->dbCloseConnection();
echo "<script>location.href='../controller/admin/config_staff.php';</script>";