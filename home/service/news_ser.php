<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/23
 * Time: 9:51
 */
session_start();
require_once("../smarty_include.php");
require_once("../tools/SQLTool.class.php");
require_once("../tools/FileUtils.php");

$sqltool = new SQLTool();
$fileutil = new FileUtil();


//发布通知
if (isset($_POST['add_news'])) {
    $news_title = $_POST['news_title'];
    $news_content = $_POST['news_content'];
    $attach_id = $_POST['attach_id'];
    $news_author = $_SESSION['user_name'];
    $sql = "insert into t_news(news_title,news_content,attach_id,news_time,news_author) values('$news_title','$news_content','$attach_id',NOW(),'$news_author')";
    $res = $sqltool->dbUpdate($sql);

    $res1 = 1;
    if (file_exists(PROJECT_DIR . "/uploadfile/temp/" . $attach_id))
        $res1 = $fileutil->moveDir(PROJECT_DIR . "/uploadfile/temp/" . $attach_id, PROJECT_DIR . "/uploadfile/files/news/" . $attach_id);
    if ($res and $res1)
        echo "<script>alert('通知发布成功！')</script>";
    else
        echo "<script>alert('通知发布失败！')</script>";

    echo "<script>window.location.href='/itildemo/home/controller/admin/news_create.php'</script>";
}

//删除通知
if (isset($_GET['news_delete'])) {
    $news_id = $_GET['news_delete'];
    $sql = "delete from t_news where news_id='$news_id'";
    if($sqltool->dbUpdate($sql))
        echo "<script>alert('通知删除成功！')</script>";
    else
        echo "<script>alert('通知删除失败！')</script>";

    echo "<script>window.location.href='/itildemo/home/controller/share/news_list.php'</script>";

}

$sqltool->dbCloseConnection();