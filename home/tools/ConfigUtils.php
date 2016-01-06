<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/21
 * Time: 20:07
 */


function updateConfig($filename, $var, $value1, $value2)
{
    if (!file_exists($filename))
        return false;
    $str = file_get_contents($filename);
    $str2 = str_replace($var . " = " . $value2, $var . " = " . $value1, $str);
    $res = file_put_contents($filename,$str2);
    return $res;
}