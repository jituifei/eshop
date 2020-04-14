<?php

include '../../../public/MysqlDB.php';

$id=getvalue($id,id);
$username=getvalue($username,username);
$password=getvalue($password,password);
$phone_num=getvalue($phone_num,phone_num);


$regi_date=getvalue($regi_date,regi_date);
$del=(int)getvalue($del,del);
$account=(int)getvalue($account,account);



$sql="update user set username='$username',
password='$password',
phone_num='$phone_num',
regi_date='$regi_date',
del='$del',
account='$account'
where id=$id";


$link=$db->link;

if(mysql_query($sql,$link))
{
    // echo "更新成功！";
    echo <<<HTML
                <HTML>
                 <HEAD>
                  <TITLE> 提示：更新成功 </TITLE>
                  <META HTTP-EQUIV="Content-Type" CONTENT="text/html ;charset=utf-8">
                  <META HTTP-EQUIV="Refresh" CONTENT="3.5; url=user_manager.php">
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


