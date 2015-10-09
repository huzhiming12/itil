<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/14
 * Time: 10:04
 */

echo date("Ymd",strtotime("-1 week Monday")), "\n";
echo date("Ymd",strtotime("-1 week Sunday")), "\n";
echo date("Ymd",strtotime("+0 week Monday")), "\n";
echo date("Ymd",strtotime("+0 week Sunday")), "\n";