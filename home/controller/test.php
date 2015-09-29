<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/14
 * Time: 10:04
 */

echo '<br>上月起始时间:<br>';
echo date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m")-1,1,date("Y"))),"\n";
echo date("Y-m-d H:i:s",mktime(23,59,59,date("m") ,0,date("Y"))),"\n";
echo '<br>本月起始时间:<br>';
echo date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),1,date("Y"))),"\n";
echo date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("t"),date("Y"))),"\n";