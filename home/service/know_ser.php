<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/10
 * Time: 17:04
 */
session_start();

require_once "../tools/SQLTool.class.php";

$sqltool = new SQLTool();

//添加知识库
if (isset($_POST['add_kno'])) {
    $kno_title = $_POST['kno_title'];
    $kno_author = $_SESSION['user_name'];
    $kno_sort = $_POST['kno_sort'];
    $kno_keyword = $_POST['kno_keyword'];
    $kno_req_num = $_POST['req_num'];
    $kno_attach_id = $_POST['attach_id'];
    $kno_content = $_POST['kno_content'];

    if ($kno_req_num == "")
        $kno_req_num = NULL;

    $sql = "INSERT INTO t_kno (kno_num,kno_title,kno_sort,kno_author,kno_attach_id,kno_content,kno_sub_time,kno_keyword,kno_req_num) VALUES
            (
                (SELECT CONCAT('KNO',DATE_FORMAT(NOW(),'%Y%m%d'),id)  FROM
                (
                            SELECT
                            CASE
                                WHEN kno_num IS NULL THEN '00001'
                                ELSE LPAD(RIGHT(MAX(kno_num),5)+1,5,'0')
                                END id FROM  t_kno
                            WHERE kno_num LIKE CONCAT('KNO',DATE_FORMAT(NOW(),'%Y%m%d'),'%')
                ) kno_num),'$kno_title','$kno_sort','$kno_author','$kno_attach_id','$kno_content',Now(),'$kno_keyword','$kno_req_num'
            )";

    if ($sqltool->dbUpdate($sql))
        echo "<script>alert('知识采集成功！')</script>";
    else
        echo "<script>alert('知识采集失败！')</script>";

    echo "<script>window.location.href='/itildemo/home/controller/admin/know_create.php'</script>";
}

//发布
if(isset($_GET['flag']) and $_GET['flag']=='pass')
{
    $kno_num = $_GET['kno_num'];
    $res = $sqltool->dbUpdate("update t_kno set kno_state=2 where kno_num = '$kno_num'");
    if($res)
        echo "<script>alert('发布成功！')</script>";
    else
        echo "<script>alert('发布失败！')</script>";

    echo "<script>window.location.href='/itildemo/home/controller/admin/know_list.php'</script>";
}

//删除知识
if(isset($_GET['flag']) and $_GET['flag']=='del')
{
    $kno_num = $_GET['kno_num'];
    $res = $sqltool->dbUpdate("delete from t_kno where kno_num = '$kno_num'");
    if($res)
        echo "<script>alert('删除成功！')</script>";
    else
        echo "<script>alert('删除失败！')</script>";

    echo "<script>window.location.href='/itildemo/home/controller/admin/know_list.php'</script>";
}