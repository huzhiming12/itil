<?php

/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/9/23
 * Time: 19:18
 */

require_once "email.class.php";

class SendEmail
{
    var $smtpserver = "smtp.163.com";//SMTP服务器
    var $smtpserverport = 25;//SMTP服务器端口
    var $smtpusermail = "hzm4225060@163.com";//SMTP服务器的用户邮箱
    var $smtpuser = "hzm4225060";//SMTP服务器的用户帐号
    var $smtppass = "ecnszqbsbycthuap";//SMTP服务器的用户密码
    var $smtpemailto = "";//发送给谁
    var $mailtitle = "";//邮件主题
    var $mailcontent = "";//邮件内容
    var $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件

    function __construct($user_email, $title, $content)
    {
        $this->smtpemailto = $user_email;
        $this->mailtitle = $title;
        $this->mailcontent = $content;
    }

    function sendEmail()
    {
        $smtp = new smtp($this->smtpserver, $this->smtpserverport, true, $this->smtpuser, $this->smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
        $smtp->debug = false;//是否显示发送的调试信息
        $state = $smtp->sendmail($this->smtpemailto, $this->smtpusermail, $this->mailtitle, $this->mailcontent, $this->mailtype);
        echo "<div style='width:300px; margin:36px auto;'>";
        if ($state == "")
            return false;
        else
            return true;
    }
}