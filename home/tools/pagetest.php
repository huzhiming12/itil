<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/1
 * Time: 17:16
 */

require_once "SQLTool.class.php";
require_once "PageTool.class.php";

$sqlTool = new SQLTool();
$res = $sqlTool->dbQuery("select count(*)from emp");
$pageTool = new PageTool($res[0][0], 2);
$pageTool->url = "./pagetest.php";
echo "用户列表:<br><br><br>";
$sql = "select *from emp ";
$pageTool->sql = $sql;
$pageNow = 1;
if($_GET['pageNow'])
    $pageNow = $_GET['pageNow'];

$res = $pageTool->getPageResource($pageNow);
for ($i = 0; $i < count($res); $i++) {
    echo $res[$i][emp_id] . "--" . $res[$i][emp_name] . "--" . $res[$i][emp_pwd] . "<br>";
}
echo "<br>";
echo $pageTool->getNavigate();
