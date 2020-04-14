<?php

date_default_timezone_set("PRC");
include "../../../public/MysqlDB.php";
include "../../../public/PHPExcel-1.8/Classes/PHPExcel.php";

$excel=new PHPExcel();
//$letter = array('A','B','C','D','E','F','F','G');
//表头数组24
$letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O');
$tableheader = array('id','用户名','密码','手机号码','删除标识符');
//填充表头信息
for($i = 0;$i < count($tableheader);$i++) {
    $excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
}


$link = $db->link;
$sql="select * from trader";
$result = mysql_query($sql,$link);
$array = array();
//$query = mysql_query("select * from tb_sort");
//遍历数据表;

while($rows = mysql_fetch_assoc($result))
{
//可以直接把读取到的数据赋值给数组或者通过字段名的形式赋值也可以
    $array[] = $rows;
}

//echo "<pre>";
//print_r($array);
//echo "</pre>";
//表格数组
$data =  $array;

for ($i = 2;$i <= count($data) + 1;$i++) {
    $j = 0;
    foreach ($data[$i - 2] as $key=>$value) {
        $excel->getActiveSheet()->setCellValue("$letter[$j]$i","$value");
        $j++;
    }
}


//
//创建Excel输入对象
$write = new PHPExcel_Writer_Excel5($excel);
ob_end_clean();//清除缓冲区,避免乱码
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");;
header('Content-Disposition:attachment;filename="testdata.xls"');
header("Content-Transfer-Encoding:binary");
$write->save('php://output');
?>