<?php

class Tree
{
    //将数组转换成树形数组
    public function getTree($data, $pId)
    {
        $tree = '';
        foreach ($data as $k => $v) {
            if ($v['parent_id'] == $pId) {         //父亲找到儿子
                $v['parent_id'] = $this->getTree($data, $v['id']);
                $tree[] = $v;
            }
        }
        return $tree;
    }

    //将数组转换成HTML代码
    public function DepartprocHtml($tree)
    {
        $html = '';
        foreach ($tree as $t) {
            if ($t['parent_id'] == '') {
                $hr = '/itildemo/home/service/depart_ser.php?id=' . $t['id'];
                $html .= "<li><span>" . $t['name'] . "&nbsp;&nbsp;&nbsp;&nbsp;"
                    . "<a href='#' onclick='openModal({$t['id']}, \"{$t['name']}\")' titile='添加' style='font-size: 11px;line-height: 25px;color: #999999'>+</a>&nbsp;&nbsp;"
                    . "<a href='" . $hr
                    . " 'onclick='deleteDepart()' title='删除' style='font-size: 11px;line-height: 25px;color: #999999'>-</a>
                </span></li>";
            } else {
                $html .= "<li><span>" . $t['name'] . "&nbsp;&nbsp;
                 &nbsp;&nbsp;<a href='#' onclick='openModal({$t['id']}, \"{$t['name']}\")' title='添加' style='font-size: 11px;line-height: 25px;color: #999999'>+</a>
                 </span>";
                $html .= $this->DepartprocHtml($t['parent_id']);
                $html = $html . "</li>";
            }
        }
        return $html ? '<ul>' . $html . '</ul>' : $html;
    }

    public function staffDepartprocHtml($tree)
    {
        $html = '';
        foreach ($tree as $t)
        {
            $click = "onclick= \" changeValue('".$t['name']."',".$t['id'].")\">";
            if ($t['parent_id'] == '') {
                $html .= "<li><span><a href='javascript:void(0);'".$click. $t['name']."</a></span></li>";
            } else {
                $html .= "<li><span><a href='javascript:void(0);'".$click. $t['name']."</a></span>";
                $html .= $this->staffDepartprocHtml($t['parent_id']);
                $html = $html . "</li>";
            }
        }
        return $html ? '<ul>' . $html . '</ul>' : $html;
    }
}
?>
<script language="javascript" src="/itildemo/static/js/ajax.js"></script>
<script>
    function openModal(id,name) {
        //document.getElementById('parent_name').value = name;
        document.getElementById('depart_parent_id').value = id;
        document.getElementById('depart_parent_name').value = name;
        $('#myModal').modal();
    }

    function deleteDepart() {
        if (!confirm("确定要删除该部门删除？")) {
            window.event.returnValue = false;
        }
    }

    function changeValue(name,id)
    {
        document.getElementById('depart_name').value = name;
        document.getElementById('depart_id').value=id;
        AJAX("/itildemo/home/controller/admin/user_list.php?flag=3&depart_id="+id+"",'box');
    }
</script>