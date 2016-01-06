<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/10/8
 * Time: 22:14
 */

require_once "ExcelExport.php";

$excel = new ExcelExport();
$cell = array("姓名", "电话", "手机号");
$value = array(array("张三", "122334<a></a>", NULL),array("李四","23908u0","3345354343345"),
    array("李四","23908u0","3345354343345"),array("李四","23908u0","3345354343345"),array("李四","23908u0","3345354343345"),
    array("李四","23908u0","3345354343345"),array("李四","23908u0","3345354343345"),array("李四","23908u0","3345354343345")
);


$excel->setCellTitle($cell,"学生通信录");
$excel->setCellValue($value);

$excel->export();

