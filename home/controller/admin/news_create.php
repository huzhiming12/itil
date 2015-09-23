<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/22
 * Time: 20:58
 */

require_once "../../smarty_include.php";

$attach_id = md5(uniqid(md5(microtime(true)), true));
$smarty->configLoad("config.ini", "uploadfile");
$smarty->assign("attach_id", $attach_id);
$smarty->display("admin/news_create.html");