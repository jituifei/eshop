<?php

include 'MysqlDB.php';
$link = $db->link;

$username=getvalue($username,username);
$password=getvalue($password,password);

session_start();

if($username!="" || $username!=NULL)  //从登陆界面成功跳转本界面进入的流程
{

    $sql = "select * from lea_managers where username ='$username'";


    if($result=mysql_query($sql,$link))
    {
        $row=mysql_fetch_assoc($result);
        if($password == $row["password"])
        {
            echo "<script>alert('登陆成功')</script>";

            $_SESSION["username"]=$username;
            $_SESSION["manName"]=$row["m_name"];
            $_SESSION["page"]=1;
            $page=1;

        }
        else
        {
            echo "<script>alert('密码不正确');window.location.href= '../public/loginPage.php'; </script>";
        }
    }
    else
    {
        echo "<script>alert('用户不存在');window.location.href= '../public/loginPage.php'; </script>";
    }


}

if($_SESSION) //SESSION存在说明登陆成功
{


}
else
{
    echo "<script>alert('请先登陆');window.location.href= '../public/loginPage.php'; </script>";
    //echo $_SESSION["username"]."------";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../public/js/html5shiv.js"></script>
    <script src="../public/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top " style="   " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">毕业生就业管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="# maybe可以链接到管理员个人资料界面">Welcome &nbsp <?php echo $_SESSION["manName"] ?></a></li>
                <li><a href="../public/loginPage.php">注销</a></li>

            </ul>

        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2  col-md-2 col-md-offset-0 sidebar  ">
            <ul class="nav nav-sidebar">
                <li class="active">
                    <a href="../stuInfoManage/stuInfoManage.php">团员信息管理</a>
                </li>
                <li>
                    <a href="../stuInfoAdd/stuInfoAdd.php">团员信息添加</a>
                </li>
            </ul>


            <ul class="nav nav-sidebar">
                <li>
                    <a href="../stuInfoSearch/SearchByNum.php">通过学号查找</a>
                </li>
                <li>
                    <a href="../stuInfoSearch/SearchByDep.php">通过学院查找</a>
                </li>
                <li>
                    <a href="../stuInfoSearch/SearchByTerm.php">通过学期查找</a>
                </li>
            </ul>

            <ul class="nav nav-sidebar">
                <li>
                    <a href="../stuInfoExcel/downloadPage.php">导出团员信息</a>
                </li>
            </ul>

        </div>
        <br/>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../public/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17-5-18
 * Time: 上午10:38
 */ 