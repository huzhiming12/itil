<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/14
 * Time: 19:26
 */

session_start();

require_once "../tools/SQLTool.class.php";
$sqltool = new SQLTool();

//添加人员
if (isset($_POST['add_staff']))
{
    $user_name = $_POST['username'];
    $user_role = $_POST['role'];
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

    if ($sqltool->dbUpdate($sql))
    {
        echo "<script>alert('人员添加成功！')</script>";
    }
    else
    {
        echo "<script>alert('人员添加失败！')</script>";
    }
    echo "<script>location.href='/itildemo/home/controller/admin/config_staff.php';</script>";
}

//修改密码
if (isset($_POST['pwd_change_btn']))
{
    $new_pwd = md5($_POST['new_pwd']);
    $old_pwd = md5($_POST['old_pwd']);
    if ($old_pwd != $_SESSION['pwd'])
    {
        echo "<script>alert('原密码输入错误！')</script>";
        echo "<script>location.href='/itildemo/home/controller/share/info.php';</script>";
    }
    $user_name = $_SESSION['user_name'];
    $_SESSION['pwd'] = $new_pwd;

    if ($sqltool->dbUpdate("update t_user set pwd='$new_pwd' where user_name='$user_name'"))
    {
        echo "<script>alert('密码修改成功！')</script>";
    }
    else
    {
        echo "<script>alert('密码修改失败！')</script>";
    }
    echo "<script>location.href='/itildemo/home/controller/share/info.php';</script>";

}


//修改个人信息
if (isset($_POST['edit_btn']))
{
    $user_name=$_SESSION['user_name'];
    $name = $_POST['name'];
    $staff_id = $_POST['staff_id'];
    $phone = $_POST['phone'];
    $telephone =$_POST['telephone'];
    $email =$_POST['email'];
    $position =$_POST['position'];

    $sql = "update t_user set name='$name',staff_id='$staff_id',phone='$phone',telephone='$telephone',email='$email',position='$position' where user_name='$user_name'";
    //echo $sql;
    if($sqltool->dbUpdate($sql))
    {
        echo "<script>alert('信息修改成功！')</script>";
    }
    else
    {
        echo "<script>alert('信息修改失败！')</script>";
    }
    echo "<script>location.href='/itildemo/home/controller/share/info.php';</script>";
}

$sqltool->dbCloseConnection();
