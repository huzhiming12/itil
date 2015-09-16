<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/6
 * Time: 13:01
 */

session_start();
require_once("../smarty_include.php");
require_once("../tools/SQLTool.class.php");
require_once("../tools/FileUtils.php");

$sqltool = new SQLTool();
$fileutil = new FileUtil();

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
                (SELECT CONCAT('REQ',DATE_FORMAT(NOW(),'%y%m%d'),id)  FROM
                (
                            SELECT
                            CASE
                                WHEN req_num IS NULL THEN '00001'
                                ELSE LPAD(RIGHT(MAX(req_num),5)+1,5,'0')
                                END id FROM  t_req
                            WHERE req_num LIKE CONCAT('REQ',DATE_FORMAT(NOW(),'%y%m%d'),'%')
                ) req_num),'$req_title','$req_sort','$req_author','$req_attach_id','$req_content',Now(),'$req_keyword','$req_source'
            )";
    //上传的文件移动
    $res = 1;
    if (file_exists(PROJECT_DIR . "/uploadfile/temp/" . $req_attach_id))
        $res = $fileutil->moveDir(PROJECT_DIR . "/uploadfile/temp/" . $req_attach_id, PROJECT_DIR . "/uploadfile/files/" . $req_attach_id);
    if ($sqltool->dbUpdate($sql) and $res)
        echo "<script>alert('请求添加成功！')</script>";
    else {
        echo "<script>alert('请求添加失败！');</script>";
    }
    if ($flag == "admin")
        echo "<script>window.location.href='/itildemo/home/controller/admin/request_create.php'</script>";
    else
        echo "<script>window.location.href='/itildemo/home/controller/user/request_create.php'</script>";
}

//指派请求
if (isset($_POST['assign_btn'])) {
    $req_num = $_POST['req_num'];
    $decription = $_POST['add_description'];
    $req_effect = $_POST['req_effect'];
    $req_priority = $_POST['priority'];
    $req_time_limit = $_POST['req_time_limit'];
    $req_gcs = $_POST['req_gcs'];
    $admin = $_SESSION['user_name'];

    $sql1 = "update t_req set req_state='2' where req_num='$req_num'";
    $sql2 = "insert into t_req_assign (req_num,req_engineer,assign_time,req_priority,req_effect,req_time_limit,req_add_description,assign_admin) values ('$req_num','$req_gcs',NOW(),'$req_priority','$req_effect','$req_time_limit','$decription','$admin')";
    //echo $sql1."<br>".$sql2;
    if ($sqltool->dbUpdate($sql1) and $sqltool->dbUpdate($sql2))
        echo "<script>alert('请求指派成功！')</script>";
    else
        echo "<script>alert('请求指派失败！')</script>";
    echo "<script>window.location.href='/itildemo/home/controller/admin/request_home.php'</script>";
}

//注销请求
if(isset($_GET['cancel_req']))
{
    $req_num = $_GET['cancel_req'];
    if($sqltool ->dbUpdate("update t_req set req_state=3 where req_num ='$req_num'"))
        echo "<script>alert('请求注销成功！')</script>";
    else
        echo "<script>alert('请求注销失败！')</script>";
    echo "<script>window.location.href='/itildemo/home/controller/user/my_request_list.php'</script>";
}

//请求变更

if(isset($_POST['change_reason']))
{
    $change_reason = $_POST['change_reason'];
    $req_num = $_GET['req_num'];
    $user_name = $_SESSION['user_name'];
    $res1=$sqltool->dbUpdate("insert into t_req_change (req_num,req_engineer,change_reason,change_time) values('$req_num','$user_name','$change_reason',NOW())");
    $res2=$sqltool->dbUpdate("update t_req_assign set finish_flag=3 where req_num='$req_num' and finish_flag=1");

    if($res1 and $res2)
        echo "<script>alert('请求变更成功！')</script>";
    else
        echo "<script>alert('请求变更失败！')</script>";

    echo "<script>window.location.href='/itildemo/home/controller/engineer/task_list.php'</script>";
}

