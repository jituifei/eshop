<?php
include '../../../public/MysqlDB.php';
//引用后/MysqlDB类 自动创建$db对象 并且连接到数据库
session_start();
$link = $db->link;


//获取该次购物所有信息
$cart_id=isset($_GET['id']) ? $_GET['id'] : "";
$sql="select * from cart where id = $cart_id";
$result=mysql_query($sql,$link);
$row=mysql_fetch_assoc($result);

$user_id1=$row['user_id'];
$trader_id=$row['trader_id'];
$product_id=$row['product_id'];
$num=$row['num'];
$price=$row['price'];

//获取用户地址
$user_id=$_SESSION['id'];
$sql="select * from user where id = $user_id";
$result=mysql_query($sql,$link);
$row=mysql_fetch_assoc($result);
$address=$row['address'];



$sql="insert into orderform (user_id,trader_id,product_id,num,address,date,state,price)
 values ('$user_id','$trader_id','$product_id','$num','$address','$nowdate','0','$price')
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
                  <META HTTP-EQUIV="Refresh" CONTENT="3.5; url=../user_cart_manager.php">
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

