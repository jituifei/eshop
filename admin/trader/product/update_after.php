<?php

include '../../../public/MysqlDB.php';

$id=getvalue($id,id);

$name=getvalue($name,name);
$num=getvalue($num,num);
$price=getvalue($price,price);
$file=getvalue($file,pic);
$del=getvalue($del,del);


//给图片名称增加路径
$file="index/index%20img/".$file;

$sql="update product set name='$name',
num='$num',
price='$price',
picture='$file',
del='$del'
where id=$id";

//echo $sql;
$link=$db->link;

if(mysql_query($sql,$link))
{
    // echo "更新成功！";
    echo <<<HTML
                <HTML>
                 <HEAD>
                  <TITLE> 提示：更新成功 </TITLE>
                  <META HTTP-EQUIV="Content-Type" CONTENT="text/html ;charset=utf-8">
                  <META HTTP-EQUIV="Refresh" CONTENT="3.5; url=trader_product_manager.php">
                 </HEAD>
                 <BODY>
                      提示：信息更新成功..3.5s后自动跳转至管理页面

                 </BODY>
                </HTML>
HTML;


}
else
{

    echo $sql;
    echo "更新失败";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


</body>
</html>


