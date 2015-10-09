<?php
/**
 * Created by PhpStorm.
 * User: huzhiming
 * Date: 2015/10/8
 * Time: 21:47
 */

error_reporting(E_ALL);
date_default_timezone_set('Europe/London');
require_once "../../plugins/PHPExcel/PHPExcel.php";

class ExcelExport
{
    private $objPHPExcel;
    private $start = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N',
        'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    private $title;
    private $size;

    function __construct()
    {
        $this->objPHPExcel = new PHPExcel();
        $this->objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
            ->setLastModifiedBy("Maarten Balliauw")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");
    }

    public function setCellTitle($cellvalue, $title/*表格名称*/, $sheetindex = 0)
    {
        $this->title = $title;
        $this->size=count($cellvalue);
        $start = 'A';
        $end =$start;
        for($i=0;$i<$this->size;$i++)
                $end++;
        //设置当前的sheet
        $this->objPHPExcel->setActiveSheetIndex($sheetindex);
        //设置sheet名称
        $this->objPHPExcel->getActiveSheet()->setTitle($title);
        //合并单元格
        $this->objPHPExcel->getActiveSheet()->mergeCells('A1:' . $end . '1');
        $this->objPHPExcel->getActiveSheet()->setCellValue('A1', $title);
        //设置标题垂直居中
        $this->objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);;
        //设置左右居中
        $this->objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->objPHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight(25);
        $this->objPHPExcel->getActiveSheet()->getRowDimension(2)->setRowHeight(20);
        //设置单元格标题
        for ($i = 0; $i < count($cellvalue); $i++)
        {
            //设置垂直居中
            $this->objPHPExcel->getActiveSheet()->getStyle($start . '2')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
            //设置左右居中
            $this->objPHPExcel->getActiveSheet()->getStyle($start. '2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //设置宽度
            $this->objPHPExcel->getActiveSheet()->getColumnDimension($start)->setWidth(20);
            //设置填充颜色
            $this->objPHPExcel->getActiveSheet()->getStyle($start . '2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $this->objPHPExcel->getActiveSheet()->getStyle($start . '2')->getFill()->getStartColor()->setARGB('FFC0C0C0');
            //设置字体
            $this->objPHPExcel->getActiveSheet()->getStyle($start. '2')->getFont()->setSize(11);
            $this->objPHPExcel->getActiveSheet()->getStyle($start . '2')->getFont()->setBold(true);
            //填充数据
            $this->objPHPExcel->getActiveSheet()->setCellValue($start. '2', $cellvalue[$i]);
            $start++;
        }
    }

    public function setCellValue($context)
    {
        $start = 'A';
        for ($i = 0; $i < count($context); $i++)
        {
            for ($j = 0; $j < $this->size; $j++)
            {
                $this->objPHPExcel->getActiveSheet()->setCellValueExplicit($start.($i+3), strip_tags($context[$i][$j]), PHPExcel_Cell_DataType::TYPE_STRING);
                $start++;
            }
            $start='A';
        }
    }

    public function export()
    {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename=' . "$this->title" . ".xls");
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }
}