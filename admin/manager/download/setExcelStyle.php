<?php

//set width
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(13);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('k')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('l')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('m')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('n')->setWidth(9);
$excel->getActiveSheet()->getColumnDimension('o')->setWidth(17);

//设置行高度
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(15);

$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(15);

//set font size bold
$excel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(11);

//设置水平居中
$excel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('c')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('D')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('F')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('G')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('H')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('I')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('j')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('k')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('l')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('m')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('n')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('o')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);







?>