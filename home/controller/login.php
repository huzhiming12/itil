<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/3
 * Time: 15:04
 */

//设置session保存时间
session_start();
ini_set('session.gc_maxlifetime', "60"); // 秒
ini_set("session.cookie_lifetime","60"); // 秒
require_once "../tools/session_init.php";
$_SESSION["user_name"] = "test";
echo "<script>window.location.href='admin/index.php'</script>";