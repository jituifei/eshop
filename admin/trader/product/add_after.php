<?php
include '../../../public/MysqlDB.php';
//引用后/MysqlDB类 自动创建$db对象 并且连接到数据库
$link = $db->link;



$name=getvalue($name,name);
$num=getvalue($num,num);
$price=getvalue($price,price);
$file=getvalue($file,pic);
$trader_id=getvalue($id,id);

//给图片名称增加路径
$file="index/index%20img/".$file;

$sql="insert into product (name,num,price,trader_id,del,picture)
 values ('$name','$num','$price','$trader_id','0','$file')
 ";

//echo $sql;

if(mysql_query($sql,$link))
{
    // echo "更新成功！";
    echo <<<HTML
                <HTML>
                 <HEAD>
                  <TITLE> 提示：添加成功 </TITLE>
                  <META HTTP-EQUIV="Content-Type" CONTENT="text/html ;charset=utf-8">
                  <META HTTP-EQUIV="Refresh" CONTENT="3.5; url=trader_product_manager.php">
                 </HEAD>
                 <BODY>
                      提示：添加成功..3s后自动跳转到管理页面

                 </BODY>
                </HTML>
HTML;


}
else
{
    //用于测试
    //echo $sql;
    echo "更新失败";
}



?>

