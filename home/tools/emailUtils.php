<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/23
 * Time: 19:31
 */

$dir = dirname(dirname(__FILE__));
require_once($dir . "/smarty_include.php");
$smarty->configLoad("config.ini", "email_message");

require_once "../model/SendEmail.php";
require_once "SQLTool.class.php";

class emailUtils
{
    var $sqltool;
    var $email;
    var $user_email;
    var $type;
    function __construct($user/*用户名*/, $type/*邮件类型*/)
    {
        $sqltool = new SQLTool();
        $this->type = $type;
        $user_mail = $sqltool->dbQuery("select email from t_user where user_name='$user'");
        $this->user_email = $user_mail[0][0];
    }

    function sEmail()
    {
        global $smarty;
        $title = $smarty->getConfigVars("title_" . $this->type);
        $content = $smarty->getConfigVars("content_" . $this->type);
        $content .="<br>详细信息可以访问网址：".$_SERVER['SERVER_ADDR']."/home/controller/share/login.php";
        $this->email = new SendEmail($this->user_email, $title, $content);
        return $this->email->sendEmail();
    }
}


