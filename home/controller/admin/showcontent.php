<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/8
 * Time: 19:51
 */
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
if ($_GET['flag'] == 1) {
    $req_num = $_GET['req_num'];
    $sql = "select req_content from t_req where req_num='$req_num'";
    $res = $sqltool->dbQuery($sql);
    echo $res[0][0];
}

if($_GET['flag']==2)
{
    $req_num = $_GET['req_num'];
    $sql = "select attach_id,attach_name,attach_md5_name from t_attachment,t_req where req_num='$req_num' and attach_id = req_attach_id";
    $res = $sqltool->dbQuery($sql);
    $n= count($res);
    for($i=0;$i<$n;$i++)
    {
        echo "<a href='/itildemo/plugins/fileupload/php/uploads/files/".$res[$i][0]."/".$res[$i][2]."'>".$res[$i][1]."</a><br>";
    }
    if(!$n)
        echo "<a>无</a>";
}
$sqltool->dbCloseConnection();
