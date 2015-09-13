<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/7/1
 * Time: 11:25
 */
require_once "SQLTool.class.php";

class PageTool
{
    var $pageSize; //每页所含有的条数
    var $rowCount = 0; //数据库中的总行数，需要从数据库中获取
    var $pageNow = 1; //显示的页数，用户指定
    var $pageCount = 0; //标识总的页数
    var $resArr; //用于显示数据
    var $url = ""; //链接
    var $navigate; //导航栏
    var $navigateSize = 10; //导航栏显示的页数下标总数  1 2 3 4 5
    var $sqlTool; //数据查询工具
    var $sql = ""; //存放sql语句
    var $url_arg="a=1"; //url的参数

    function __construct($rowCount, $pageSize = 10)
    {
        $this->rowCount = $rowCount;
        $this->pageSize = $pageSize;
        $this->sqlTool = new SQLTool();
        //计算总页数
        $this->pageCount = ceil($this->rowCount / $pageSize);
    }

    function __destruct()
    {
        $this->sqlTool->dbCloseConnection();
    }


    //获取分页内容
    public function getPageResource()
    {
        //拼接sql语句
        $sql = $this->sql . " limit " . ($this->pageNow - 1) * $this->pageSize . ", " . $this->pageSize;
        $this->resArr = $this->sqlTool->dbQuery($sql);
        return $this->resArr;
    }
    //获取分页导航条
    function getNavigate()
    {
        $res = "";
        if ($this->pageNow > 1) {
            $pageNow = $this->pageNow - 1;
            $res .= "<div class='pages'><a href='$this->url?pageNow=$pageNow&$this->url_arg'>上一页</a>  ";
        } else
            $res = "<div class='pages'><a>上一页</a>  ";
        $temp = ceil($this->pageNow / $this->navigateSize);
        if ($temp > 1) {
            $pageNow = $this->navigateSize * ($temp - 1);
            $res .= "<a href='$this->url?pageNow=$pageNow&$this->url_arg'><<<</a>";
        }
        for ($i = ($temp - 1) * $this->navigateSize + 1; $i <= $temp * $this->navigateSize && $i <= $this->pageCount; $i++) {
            if ($i == $this->pageNow)
                $res .= " <b>$i</b> ";
            else
                $res .= " <a href='$this->url?pageNow=$i&$this->url_arg'>$i</a> ";
        }
        if ($temp * $this->navigateSize < $this->pageCount) {
            $pageNow = $this->navigateSize * $temp + 1;
            $res .= "<a href='$this->url?pageNow=$pageNow&$this->url_arg'>>>></a>";
        }

        if ($this->pageNow < $this->pageCount) {
            $pageNow = $this->pageNow + 1;
            $res .= "  <a href='$this->url?pageNow=$pageNow&$this->url_arg'>下一页</a>  ";
        } else
            $res .= "<a>下一页</a>";
        $res .= "   <span>第<font>" . $this->pageNow . "</font>页/" . "共" . $this->pageCount . "页</span></div>";
        return $res;
    }

}

?>

<style>
    .pages {
        width: 100.5%;
        text-align: left;
        padding: 10px 0;
        clear: both;
    }

    .pages span, .pages a, .pages b {
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0 2px;
    }

    .pages span font {
        color: #f00;
        font-size: 12px;
    }

    .pages a, .pages b {
        border: 1px solid #414DA7;
        background: #fff;
        padding: 2px 6px;
        text-decoration: none
    }

    .pages span {
        padding-right: 10px
    }

    .pages b, .pages a:hover {
        background: #414DA7;
        color: #fff;
    }
</style>