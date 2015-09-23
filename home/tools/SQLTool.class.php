<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/1
 * Time: 11:25
 */
$dir = dirname(dirname(__FILE__));
require_once($dir . "/smarty_include.php");
$smarty->configLoad("config.ini", "db");


class SQLTool
{
    //属性
    private $conn;
    private $host;
    private $user;
    private $password;
    private $db;

    function SQLTool()
    {
        global $smarty;
        $this->host = $smarty->getConfigVars("host");
        $this->user = $smarty->getConfigVars("user");
        $this->password = $smarty->getConfigVars("password");
        $this->db = $smarty->getConfigVars("db");
        $this->conn = mysql_connect($this->host, $this->user, $this->password);
        if (!$this->conn) {
            die("连接数据库失败" . mysql_error());
        }
        mysql_select_db($this->db, $this->conn);
        mysql_query("set names utf8");
    }
    //方法..
    // 完成数据的查询
    public function dbQuery($sql)
    {
        $res = mysql_query($sql, $this->conn) or die(mysql_error());
        $arr = array();
        while ($row = mysql_fetch_array($res)) {
            $arr[] = $row;
        }
        //释放数据集
        mysql_free_result($res);
        return $arr;
    }

    //完成 update,delete ,insert dml 数据的更新
    public function dbUpdate($sql)
    {
        $b = mysql_query($sql, $this->conn);
        //echo "添加的id=".mysql_insert_id($this->conn);
        if (!$b) {
            return 0;//失败
        } else {
            if (mysql_affected_rows($this->conn) > 0) {
                return 1;//表示成功
            } else {
                return 2;//表示没有行数影响.
            }
        }
    }

    //关闭数据库连接
    public function dbCloseConnection()
    {
        mysql_close($this->conn);
    }
}