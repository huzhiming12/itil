<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/14
 * Time: 10:27
 */
require_once "../tools/SQLTool.class.php";

$sqltool = new SQLTool();
if (isset($_POST['sort_name']))
{
    $sort_name = $_POST['sort_name'];
    $sort_parent_id = $_POST['sort_parent_id'];
    $flag = $_POST['flag'];
    //添加知识请求分类
    if ($flag == 1) {
        if ($sort_parent_id == "")
            $sql = "insert into t_req_sort (sort_name) values('$sort_name')";
        else
            $sql = "insert into t_req_sort (sort_name,sort_parent_id) values('$sort_name','$sort_parent_id')";

        if ($sqltool->dbUpdate($sql)) {
            echo "<script>alert('添加成功！')</script>";
        } else {
            echo "<script>alert('添加失败！')</script>";
        }
        $sqltool->dbCloseConnection();
    }
}

if(isset($_GET['sort_id']))
{
    $sort_id = $_GET['sort_id'];
    $sql = "delete from t_req_sort where sort_id = '$sort_id'";
    if($sqltool->dbUpdate($sql))
    {
        echo "<script>alert('分类删除成功！')</script>";
    }
    else
        echo "<script>alert('分类删除失败！')</script>";
}
echo "<script>location.href='../controller/admin/config_sort.php'</script>";