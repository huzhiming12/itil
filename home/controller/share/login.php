<?php
require_once"../../smarty_include.php";

//设置session保存时间
session_start();

if(isset($_POST['user_name']))
{
    $user_name= $_POST['user_name'];
    $role = $_POST['role'];
    $_SESSION['user_name']=$user_name;
    $_SESSION['role'] =  $role;
    if($role=='user')
        echo "<script>window.location.href='../user/index.php'</script>";
    elseif($role=="engineer")
        echo "<script>window.location.href='../engineer/index.php'</script>";
    else
        echo "<script>window.location.href='../admin/index.php'</script>";

}

$smarty->display("share/login.html");





