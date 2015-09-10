<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/6
 * Time: 19:52
 */

require_once "../../smarty_include.php";
require_once "../../tools/PageTool.class.php";
$pagetool = new PageTool(100, 5);
$pagetool->url = "requestlist.php";
$pageNow = 1;
if ($_GET['pageNow'])
    $pageNow = $_GET['pageNow'];
$pagetool->pageNow = $pageNow;
$smarty->assign("navi", $pagetool->getNavigate());
$smarty->display("user/requestlist.html");