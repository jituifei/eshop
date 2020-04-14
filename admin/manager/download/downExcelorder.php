<?php

date_default_timezone_set("PRC");
include "../../../public/MysqlDB.php";
include "../../../public/PHPexcel-1.8/Classes/PHPExcel.php";

$excel=new PHPExcel();
//$letter = array('A','B','C','D','E','F','F','G');
//表头数组24
$letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O');
$tableheader = array('id','用户','商品名称','数量','总计','地址','日期','状态','图片');
//填充表头信息
for($i = 0;$i < count($tableheader);$i++) {
    $excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
}


$link = $db->link;
$sql="SELECT orderform.id,user.username,product.name,
orderform.num,orderform.price,orderform.address,orderform.date,orderform.state,
product.picture
FROM orderform,product,user
where  orderform.product_id=product.id
and orderform.user_id=user.id

 ";
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