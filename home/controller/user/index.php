<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/3
 * Time: 16:18
 */
session_start();
require_once "../../smarty_include.php";
$smarty->display("user/index.html");