<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/6
 * Time: 13:01
 */

session_start();
require_once("../tools/SQLTool.class.php");

$sqltool = new SQLTool();


//添加请求
if (isset($_POST['add_req'])) {
    $flag = $_GET['flag'];
    if ($flag == "admin") {
        $req_source = $_POST['req_source'];
        $req_author = $_POST['req_author'];
    } else {
        $req_author = $_SESSION['user_name'];
        $req_source = "1";
    }
    $req_title = $_POST['req_title'];
    $req_sort = $_POST['req_sort'];
    $req_attach_id = $_POST['attach_id'];
    $req_content = $_POST['req_content'];
    $req_keyword = $_POST['req_keyword'];
    $sql = "INSERT INTO t_req (req_num,req_title,req_sort,req_author,req_attach_id,req_content,req_time,req_keyword,req_source) VALUES
            (
                (SELECT CONCAT('REQ',DATE_FORMAT(NOW(),'%Y%m%d'),id)  FROM
                (
                            SELECT
                            CASE
                                WHEN req_num IS NULL THEN '00001'
                                ELSE LPAD(RIGHT(MAX(req_num),5)+1,5,'0')
                                END id FROM  t_req
                            WHERE req_num LIKE CONCAT('REQ',DATE_FORMAT(NOW(),'%Y%m%d'),'%')
                ) req_num),'$req_title','$req_sort','$req_author','$req_attach_id','$req_content',Now(),'$req_keyword','$req_source'
            )";
    if ($sqltool->dbUpdate($sql))
        echo "<script>alert('请求添加成功！')</script>";
    else {
        echo "<script>alert('请求添加失败！');</script>";
        exit;
    }
    echo "<script>window.location.href='/itildemo/home/controller/user/addrequest.php'</script>";
}

//指派请求
if (isset($_POST['assign_btn'])) {
    $req_num = $_POST['req_num'];
    $decription = $_POST['add_description'];
    $req_effect = $_POST['req_effect'];
    $req_priority = $_POST['priority'];
    $req_time_limit = $_POST['req_time_limit'];
    $req_gcs = $_POST['req_gcs'];

    $sql1 = "update t_req set req_add_description ='$decription',req_effect='$req_effect',req_priority='$req_priority',req_time_limit='$req_time_limit',req_state='已指派' where req_num='$req_num'";
    $sql2 = "insert into t_req_assign (req_num,req_engineer,assign_time) values ('$req_num','$req_gcs',NOW())";
    //echo $sql1."<br>".$sql2;
    if ($sqltool->dbUpdate($sql1) and $sqltool->dbUpdate($sql2))
        echo "<script>alert('请求指派成功！')</script>";
    else
        echo "<script>alert('请求指派失败！')</script>";
    echo "<script>window.location.href='/itildemo/home/controller/admin/request_home.php'</script>";


}

