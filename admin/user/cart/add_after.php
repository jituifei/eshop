<?php
include '../../../public/MysqlDB.php';
//引用后/MysqlDB类 自动创建$db对象 并且连接到数据库

$link = $db->link;


$product_id=getvalue($id,id);
$num=getvalue($num,num);
$user_id=getvalue($user_id,user_id);


$sql="select * from product where id = $product_id";
$result=mysql_query($sql,$link);
$row=mysql_fetch_assoc($result);

//echo  $sql;
//给购物车所需字段赋值
$trader_id=$row['trader_id'];
$price=$row['price']*$num;


$sql="insert into cart (user_id,trader_id,product_id,num,price)
 values ('$user_id','$trader_id','$product_id','$num','$price')
 ";

$_SESSION['id']=$user_id;

echo $_SESSION['id']."----";




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

