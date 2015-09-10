<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/2
 * Time: 10:52
 */
//定义文件路径常量
$dir = dirname(dirname(__FILE__));
define('PROJECT_DIR',$dir);
require_once($dir . "/libs/Smarty.class.php");
$smarty = new Smarty();
//$smarty->debugging = true; //开启调试功能
//$smarty->caching = false;   //启用缓存
//$smarty->cache_lifetime = 60;
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
$smarty->setTemplateDir($dir . "/templates");
$smarty->setCompileDir($dir . "/templates_c");
$smarty->setCacheDir($dir."/cache");