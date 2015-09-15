<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/3
 * Time: 15:04
 */

//设置session保存时间
session_start();

$_SESSION["user_name"] = "test";
echo "<script>window.location.href='../admin/index.php'</script>";