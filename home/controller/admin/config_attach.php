<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/21
 * Time: 14:24
 */

require_once "../../smarty_include.php";
require_once "../../tools/ConfigUtils.php";

$smarty->configLoad("config.ini", "uploadfile");

if (isset($_POST['config_change'])) {
    $file_siz = $_POST['file_size'];
    $file_count = $_POST['file_count'];
    $file_type = $_POST['file_type'];
    $extFilters = "";
    $head = true;
    for ($i = 0; $i < count($file_type); $i++) {
        if (NULL != $file_type[$i])
            if ($head) {
                $extFilters .= "\"." . $file_type[$i] . "\"";
                $head = false;
            } else
                $extFilters .= " ,\"." . $file_type[$i] . "\"";
    }
    $file_siz = $file_siz * 1024 * 1024;
    $oldextFilters = $smarty->getConfigVars("extFilters");
    $oldfilesize = $smarty->getConfigVars("MaxFileSize");
    $oldfileCount = $smarty->getConfigVars("MaxFileCount");
    $res1 = updateConfig(PROJECT_DIR . "/configs/config.ini", "extFilters", $extFilters, $oldextFilters);
    $res2 = updateConfig(PROJECT_DIR . "/configs/config.ini", "MaxFileSize", $file_siz, $oldfilesize);
    $res3 = updateConfig(PROJECT_DIR . "/configs/config.ini", "MaxFileCount", $file_count, $oldfileCount);
    if ($res1 and $res2 and $res3)
        echo "<script>alert('配置修改成功！')</script>";
    else
        echo "<script>alert('配置修改失败！')</script>";
    echo "<script>window.location.href='/itildemo/home/controller/admin/config_attach.php'</script>";
}


$smarty->display("admin/config_attach.html");