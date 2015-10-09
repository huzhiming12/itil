<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/10/9
 * Time: 15:44
 */

require_once "../model/ExcelExport.php";
require_once "../tools/SQLTool.class.php";

$list = $_GET['list'];

$sqltool = new SQLTool();
$excel = new ExcelExport();
$cell = array("请求编号", "请求标题", "请求分类", "请求方式", "请求时间", "请求描述", "优先级", "影响范围",
    "复杂程度", "服务协议", "请求人姓名", "请求人帐号", "请求人单位", "请求人职工号", "请求人职务", "请求人电话",
    "请求人手机", "请求人邮箱", "工程师", "请求状态", "解决方案");
$sql = "select t_req.req_num, t_req.req_title, t_req.req_sort,t_req.req_source, t_req.req_time, t_req.req_content, req_priority,req_effect,
        t_req_assign.req_complex,req_time_limit,t_user.name,t_req.req_author,(select depart_name from t_depart where t_depart.depart_id=t_user.depart_id),t_user.staff_id,t_user.position,t_user.phone,
        t_user.telephone,t_user.email,t_req_assign.req_engineer,t_req.req_state,t_req.req_solution
        from t_req left outer join t_req_assign on t_req.req_num=t_req_assign.req_num and (finish_flag=1 or finish_flag=2),t_user
		where t_req.req_author = t_user.user_name  and t_req.req_num in $list order by req_time desc";
$res = $sqltool->dbQuery($sql);


for ($i = 0; $i < count($res); $i++)
{
    switch ($res[$i][3])
    {
        case 1:
            $res[$i][3] = "网页请求";
            break;
        case 2:
            $res[$i][3] = "电话请求";
            break;
        case 3:
            $res[$i][3] = "邮件请求";
            break;
    }
    switch ($res[$i][6])
    {
        case 1:
            $res[$i][6] = "低";
            break;
        case 2:
            $res[$i][6] = "中";
            break;
        case 3:
            $res[$i][6] = "高";
            break;
    }
    switch ($res[$i][7])
    {
        case 1:
            $res[$i][7] = "个人";
            break;
        case 2:
            $res[$i][7] = "部门";
            break;
        case 3:
            $res[$i][7] = "单位";
            break;
    }
    switch ($res[$i][8])
    {
        case 1:
            $res[$i][8] = "一级 较容易";
            break;
        case 2:
            $res[$i][8] = "二级 容易";
            break;
        case 3:
            $res[$i][8] = "三级 一般";
            break;
        case 4:
            $res[$i][8] = "四级 复杂";
            break;
        case 5:
            $res[$i][8] = "二级 较复杂";
            break;
        case 6:
            $res[$i][8] = "三级 很复杂";
            break;

    }
    switch ($res[$i][9])
    {
        case 2:
            $res[$i][9] = "A级 2小时内完成";
            break;
        case 12:
            $res[$i][9] = "B级 12小时内完成";
            break;
        case 24:
            $res[$i][9] = "C级 24小时内完成";
            break;
        case 48:
            $res[$i][9] = "D级 48小时内完成";
            break;
        case 120:
            $res[$i][9] = "E级 120小时内完成";
            break;
        case 240:
            $res[$i][9] = "F级 240小时内完成";
            break;
        case 480:
            $res[$i][9] = "G级 480小时内完成";
            break;
        case 720:
            $res[$i][9] = "H级 720小时内完成";
            break;

    }
    switch ($res[$i][19])
    {
        case 1:
            $res[$i][19] = "未处理";
            break;
        case 2:
            $res[$i][19] = "已指派";
            break;
        case 3:
            $res[$i][19] = "已取消";
            break;
        case 4:
            $res[$i][19] = "已解决";
            break;
    }


}


$excel->setCellTitle($cell, "用户请求列表");
$excel->setCellValue($res);

$excel->export();
