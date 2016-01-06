<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/8
 * Time: 16:54
 */
require_once"../../smarty_include.php";
require_once "../../model/DepartTree.class.php";
require_once "../../tools/SQLTool.class.php";


$sqltool = new SQLTool();
$tree = new Tree();
$sql = "select depart_id id,depart_name name,depart_parent_id parent_id from t_depart";
$depart = $sqltool->dbQuery($sql);
$html_tree = $tree->staffDepartprocHtml($tree->getTree($depart,''));

$smarty->assign("tree",$html_tree);


$smarty->display("admin/config_staff.html");