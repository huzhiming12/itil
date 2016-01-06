<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/3
 * Time: 10:47
 */

session_start();
require_once "../../smarty_include.php";
$smarty->display("admin/index.html");