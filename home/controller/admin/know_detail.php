<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/8
 * Time: 9:07
 */

require_once"../../smarty_include.php";
require_once "../../tools/SQLTool.class.php";

$sqltool = new SQLTool();
$kno_num = $_GET['kno_num'];
//删除附件
if(isset($_GET['flag']) and $_GET['flag']=='del')
{
    $attach_id = $_GET['attach_id'];
    $attach_name = $_GET['file_name'];
    //echo $attach_md5_name;
    $res = $sqltool->dbUpdate("delete from t_attachment where attach_id='$attach_id' and attach_name='$attach_name'");
    //删除文件
    $res1 =1;
    if(file_exists(PROJECT_DIR."\\uploadfile\\files\\".$attach_id."\\".$attach_name))
        $res1 = unlink(PROJECT_DIR."\\uploadfile\\files\\".$attach_id."\\".$attach_name);
    if($res and $res1)
        echo "<script>alert('附件删除成功！')</script>";
    else
        echo "<script>alert('附件删除失败！')</script>";
}
$sql = "select *from t_kno where kno_num = '$kno_num'";
$res = $sqltool->dbQuery($sql);
$attachment = $sqltool->dbQuery("select attach_name,attach_id from t_attachment,t_kno where kno_attach_id=attach_id and kno_num='$kno_num'");
$change = $sqltool->dbQuery("select *from t_kno_change where kno_num='$kno_num'");


$smarty->assign("res",$res[0]);
$smarty->assign("attach",$attachment);
$smarty->assign("change",$change);
$sqltool->dbCloseConnection();

$smarty->display("share/know_detail.html");