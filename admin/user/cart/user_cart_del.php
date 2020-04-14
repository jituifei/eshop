<?php

include '../../../public/MysqlDB.php';
//引用后/MysqlDB类 自动创建$db对象 并且连接到数据库

$id=isset($_GET['id']) ? $_GET['id'] : "";



$sql = "delete from cart  where id=$id ";
$link = $db->link;


if($result=mysql_query($sql,$link))
{
    // echo "更新成功！";
    echo <<<HTML
                <HTML>
                 <HEAD>
                  <TITLE> 提示：更新成功 </TITLE>
                  <META HTTP-EQUIV="Content-Type" CONTENT="text/html ;charset=utf-8">
                  <META HTTP-EQUIV="Refresh" CONTENT="3.5; url=../user_cart_manager.php">
                 </HEAD>
                 <BODY>
                      提示：删除成功 3秒后自动跳转管理界面

                 </BODY>
                </HTML>
HTML;


}
else
{
    echo "更新失败";
}

?>