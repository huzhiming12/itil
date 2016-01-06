<?php
require_once "../../smarty_include.php";

//设置session保存时间
session_start();

if (isset($_POST['user_name']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $_SESSION['user_name'] = $user_name;
    $_SESSION['role'] = $role;
    $_SESSION['pwd'] = md5($password);
    $remember = $_POST['remember'];
    if ($remember)
    {
        setcookie('user_name', $user_name, time() + 3600);
        setcookie('password', $password, time() + 3600);
        setcookie('remember', $remember, time() + 3600);
    }

    if ($role == 'user')
    {
        echo "<script>window.location.href='../user/index.php'</script>";
    }
    elseif ($role == "engineer")
    {
        echo "<script>window.location.href='../engineer/index.php'</script>";
    }
    else
    {
        echo "<script>window.location.href='../admin/index.php'</script>";
    }

}

$smarty->display("share/login.html");





