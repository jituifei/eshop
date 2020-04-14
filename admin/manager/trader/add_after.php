<?php
include '../../../public/MysqlDB.php';
//引用后/MysqlDB类 自动创建$db对象 并且连接到数据库
$link = $db->link;

$username=getvalue($username,username);
$password=getvalue($password,password);
$phone_num=getvalue($phone_num,phone_num);

date_default_timezone_set('PRC');
//date_default_timezone_set(Asia/Chongqing ,Asia/Shanghai ,Asia/Urumqi);
$nowdate = (string)date("Ymd");

//检查该用户名是否已被注册
$sql = "select * from trader";
if($result = mysql_query($sql,$link))
{
    while($row = mysql_fetch_assoc($result))
    {
        if($row["username"] == $username)
        {
            //说明 用户名 已经注册过  不能二次注册  跳转提示页面
            echo "<script>alert('该用户名已经注测 不能重复注册');window.location.href= 'trader_add.php'; </script>";
        }
    }
}


//顺利通过说明没有注册 继续添加

$sql="insert into trader (username,password,phone_num,del)
 values ('$username','$password','$phone_num','0')
 ";



if(mysql_query($sql,$link))
{
    // echo "更新成功！";
    echo <<<HTML
                <HTML>
                 <HEAD>
                  <TITLE> 提示：添加成功 </TITLE>
                  <META HTTP-EQUIV="Content-Type" CONTENT="text/html ;charset=utf-8">
                  <META HTTP-EQUIV="Refresh" CONTENT="3.5; url=trader_manager.php">
                 </HEAD>
                 <BODY>
                      提示：注册成功..5s后自动跳转到管理页面

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

