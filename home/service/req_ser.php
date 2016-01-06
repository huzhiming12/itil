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
require_once("../tools/emailUtils.php");

$sqltool = new SQLTool();
$fileutil = new FileUtil();

//添加请求
if (isset($_POST['add_req']))
{
    $flag = $_GET['flag'];
    if ($flag == "admin")
    {
        $req_source = $_POST['req_source'];
        $req_author = $_POST['req_author'];
    }
    else
    {
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
    {
        $res = $fileutil->moveDir(PROJECT_DIR . "/uploadfile/temp/" . $req_attach_id, PROJECT_DIR . "/uploadfile/files/req/" . $req_attach_id);
    }
    if ($sqltool->dbUpdate($sql) and $res)
    {
        echo "<script>alert('请求添加成功！')</script>";
    }
    else
    {
        echo "<script>alert('请求添加失败！');</script>";
    }
    if ($flag == "admin")
    {
        echo "<script>window.location.href='/itildemo/home/controller/admin/request_create.php'</script>";
    }
    else
    {
        echo "<script>window.location.href='/itildemo/home/controller/user/request_create.php'</script>";
    }
}

//指派请求
if (isset($_POST['assign_btn']))
{
    $req_num = $_POST['req_num'];
    $decription = $_POST['add_description'];
    $req_effect = $_POST['effect'];
    $req_priority = $_POST['priority'];
    $req_time_limit = $_POST['req_time_limit'];
    $req_gcs = $_POST['engineer'];
    $req_complex = $_POST['req_complex'];
    $admin = $_SESSION['user_name'];

    if ($_GET['flag'] == "re_assign")
    {
        $sql1 = "update t_req_change set flag=2 where req_num ='$req_num' and flag=1";
    } //请求重新指派
    else
    {
        if ($_GET['flag'] == "over_assign")//请求逾期再指派
        {
            $sql1 = "update t_req_assign set finish_flag=4,req_time_left = req_time_limit *3600 -TIME_TO_SEC(TIMEDIFF(NOW(),assign_time)) where req_num='$req_num' and finish_flag=1";
        }
        else
        {
            $sql1 = "update t_req set req_state='2' where req_num='$req_num'";
        }
    }
    $sql2 = "insert into t_req_assign (req_num,req_engineer,assign_time,req_priority,req_effect,req_time_limit,req_add_description,assign_admin,req_complex) values ('$req_num','$req_gcs',NOW(),'$req_priority','$req_effect','$req_time_limit','$decription','$admin','$req_complex')";
    //echo $_GET['flag'];
    if ($sqltool->dbUpdate($sql1) and $sqltool->dbUpdate($sql2))
    {
        $email = new emailUtils($req_gcs, 1);
        $email->sEmail();
        echo "<script>alert('请求指派成功！')</script>";
    }
    else
    {
        echo "<script>alert('请求指派失败！')</script>";
    }
    echo "<script>window.location.href='/itildemo/home/controller/admin/request_home.php'</script>";
}


//注销请求
if (isset($_GET['cancel_req']))
{
    $req_num = $_GET['cancel_req'];
    $user_name = $_SESSION['user_name'];
    //插入注销记录
    $sql = "insert into t_req_cancel (req_num,user_cancel,cancel_time) values('$req_num','$user_name',now())";
    $sqltool->dbUpdate($sql);
    $sqltool->dbUpdate("update t_req_change set flag=3 where req_num='$req_num' and flag=1");
    //req_state =3 请求取消
    if ($sqltool->dbUpdate("update t_req set req_state=3 where req_num ='$req_num'"))
    {
        echo "<script>alert('请求注销成功！')</script>";
    }
    else
    {
        echo "<script>alert('请求注销失败！')</script>";
    }
    if ($_GET['flag'] == "admin")
    {
        echo "<script>window.location.href='/itildemo/home/controller/admin/request_home.php'</script>";
    }
    else
    {
        echo "<script>window.location.href='/itildemo/home/controller/user/my_request_list.php'</script>";
    }
}

//请求变更
if (isset($_POST['change_reason']))
{
    $change_reason = $_POST['change_reason'];
    $req_num = $_GET['req_num'];
    $user_name = $_SESSION['user_name'];
    $res1 = $sqltool->dbUpdate("insert into t_req_change (req_num,req_engineer,change_reason,change_time) values('$req_num','$user_name','$change_reason',NOW())");
    $res2 = $sqltool->dbUpdate("update t_req_assign set finish_flag=3,req_time_left = req_time_limit *3600 -TIME_TO_SEC(TIMEDIFF(NOW(),assign_time)) where req_num='$req_num' and finish_flag=1");
    if ($res1 and $res2)
    {
        echo "<script>alert('请求变更成功！')</script>";
    }
    else
    {
        echo "<script>alert('请求变更失败！')</script>";
    }
    echo "<script>window.location.href='/itildemo/home/controller/engineer/task_list.php'</script>";
}

//提交解决方案
if (isset($_POST['req_solution']))
{
    $solution = $_POST['req_solution'];
    $req_num = $_GET['req_num'];
    $req_complex = $_GET['req_complex'];
    $user_name = $_SESSION['user_name'];
    $res1 = $sqltool->dbUpdate("update t_req_assign set finish_flag=2,req_time_left = req_time_limit *3600 -TIME_TO_SEC(TIMEDIFF(NOW(),assign_time)) where req_num='$req_num' and finish_flag=1");
    $res2 = $sqltool->dbUpdate("update t_req set req_state=4,req_finish_time=Now(),req_finish_engineer='$user_name',req_solution='$solution',req_complex='$req_complex' where req_num='$req_num'");
    if ($res1 and $res2)
    {
        echo "<script>alert('解决方案提交成功！')</script>";
    }
    else
    {
        echo "<script>alert('解决方案提交失败！')</script>";
    }
    echo "<script>window.location.href='/itildemo/home/controller/engineer/task_list.php'</script>";
}

//删除请求
if (isset($_GET['delete_req']))
{
    $req_num = $_GET['delete_req'];
    $res = $sqltool->dbUpdate("delete from t_req where req_num='$req_num'");
    if ($res)
    {
        echo "<script>alert('请求删除成功！')</script>";
    }
    else
    {
        echo "<script>alert('请求删除失败！')</script>";
    }
    echo "<script>window.location.href='/itildemo/home/controller/admin/request_home.php'</script>";
}

//评价服务请求
if (isset($_POST['feedback_btn']))
{
    $req_num = $_POST['req_num'];
    $fd_1 = $_POST['fd_1'];
    $fd_2 = $_POST['fd_2'];
    $fd_3 = $_POST['fd_3'];
    $fd_4 = $_POST['fd_4'];
    $fd_5 = $_POST['fd_5'];
    $fd_6= $_POST['fd_6'];
    $suggest = $_POST['suggest'];
    $engineer = $_POST['engineer'];
    $sql = "insert into t_feedback (req_num,fd_1,fd_2,fd_3,fd_4,fd_5,fd_6,suggest,fd_time,engineer) values('$req_num','$fd_1','$fd_2','$fd_3','$fd_4','$fd_5','$fd_6','$suggest',NOW(),'$engineer')";
    if($sqltool->dbUpdate($sql))
        echo "<script>alert('评价成功！')</script>";
    else
        echo "<script>alert('评价失败！')</script>";
    echo "<script>window.location.href='/itildemo/home/controller/share/request_detail.php?req_num=$req_num'</script>";
}

$sqltool->dbCloseConnection();