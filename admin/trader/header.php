<?php

include '../../../public/MysqlDB.php';
//引用后/MysqlDB类 自动创建$db对象 并且连接到数据库
$link = $db->link;

$username=getvalue($username,username);
$password=getvalue($password,password);




session_start();

if($username!="" || $username!=NULL)  //从登陆界面成功跳转本界面进入的流程
{

    $sql = "select * from trader where username ='$username'";

    $result=mysql_query($sql,$link);

    if($num=mysql_num_rows($result))
    {
        $row=mysql_fetch_assoc($result);
        if($password == $row["password"])
        {
            echo "<script>alert('登陆成功')</script>";
            $_SESSION["id"]=$row['id'];
            $_SESSION["username"]=$username;
            $_SESSION["manName"]=$row["m_name"];
            $_SESSION["page"]=1;
            $page=1;

        }
        else
        {
            echo "<script>alert('密码不正确');window.location.href= '../trader_login.php'; </script>";
        }
    }
    else
    {
        echo "<script>alert('用户不存在');window.location.href= '../trader_login.php'; </script>";
    }


}

if($_SESSION) //SESSION存在说明登陆成功
{


}
else
{
    echo "<script>alert('请先登陆');window.location.href= '../trader_login.php'; </script>";
    //echo $_SESSION["username"]."------";
}

echo $trader_id;
$id=isset($_GET['id']) ? $_GET['id'] : "";


if($db->connect_error){
    die("连接失败: " . $db->connect_error);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>商家管理界面</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../public/css/bootstrap1.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../public/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/../ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../../public/js/html5shiv.js"></script>
    <script src="../../../public/js/respond.min.js"></script>

    <![endif]-->

    <style>
        *{margin: 0px;padding: 0px;}

    </style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top " style="margin:0 8.3% 0 8.3% ;color: #999999   " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">电子商城管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome &nbsp <?php echo $_SESSION["username"] ?> </a></li>
                <li><a href="../trader_login.php">注销</a></li>

            </ul>

        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2  col-md-2 col-md-offset-1 sidebar" id="sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">首页</a></li>
            </ul>

            <ul class="nav nav-sidebar">
                <li><a href="../product/trader_product_manager.php">商品信息管理</a></li>
                <li><a href="../product/trader_product_add.php">商品信息添加</a></li>
                <li><a href="../product/trader_product_update.php">商品信息更新</a></li>
            </ul>

            <ul class="nav nav-sidebar">
                <li><a href="../order/trader_order_check.php">订单信息管理</a></li>
            </ul>


        </div>

        <br/><br/><br/>