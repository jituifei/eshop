<?php

include '../../public/MysqlDB.php';

$link = $db->link;

$username=getvalue($username,username);
$password=getvalue($password,password);

session_start();

if($username!="" || $username!=NULL)  //从登陆界面成功跳转本界面进入的流程
{

    $sql = "select * from user where username ='$username'";
    $result=mysql_query($sql,$link);

    if($num=mysql_num_rows($result))
    {
        $row=mysql_fetch_assoc($result);
        if($password == $row["password"])
        {
            echo "<script>alert('登陆成功')</script>";
            $_SESSION["id"]=$row["id"];
            $_SESSION["username"]=$username;
            $_SESSION["manName"]=$row["m_name"];
            $_SESSION["page"]=1;
            $page=1;

        }
        else
        {
            echo "<script>alert('密码不正确');window.location.href= 'user_login.php'; </script>";
        }
    }
    else
    {
        echo "<script>alert('用户不存在');window.location.href= 'user_login.php'; </script>";
    }


}

if($_SESSION) //SESSION存在说明登陆成功
{


}
else
{
    echo "<script>alert('请先登陆');window.location.href= 'user_login.php'; </script>";
    //echo $_SESSION["username"]."------";
}


$id=isset($_GET['id']) ? $_GET['id'] : "";


if($db->connect_error){
    die("连接失败: " . $db->connect_error);
}


//print("<pre>");/*格式化输出*/
//print_r($row);
//print("</pre>");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>  M  A  F</title>
    <link href="../../index/index css/index.css" rel="stylesheet" type="text/css" />
    <link href="../../index/index css/content.css" rel="stylesheet" type="text/css" />
    <link href="../../index/index css/goods.css" rel="stylesheet" type="text/css" />
    <link href="../../index/index css/bottom.css" rel="stylesheet" type="text/css" />
    <link href="../../index/index css/suspend_part.css" rel="stylesheet" type="text/css" />
    <link href="../../index/login css/login.css" rel="stylesheet" type="text/css" />
    <link href="../../public/css/bootstrap1.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../public/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../public/js/html5shiv.js"></script>
    <script src="../../public/js/respond.min.js"></script>

    <![endif]-->
    <script src="../../index/index js/jquery-1.9.1.js"></script>
    <script src="../../index/index js/index.js"></script>


</head>


<body>
<div class="suspend_part">
    <div class="suspend_search">
        <div>
            <img src="../../index/index img/searchTIM.png" />
            <input type="text" value="" id="suspend_searchText"  />
            <a href="#" id="suspend_searchText_button">搜&nbsp;索</a>
        </div>
    </div>

    <div class="suspend_nav"  >
        <span id="suspend_navBtn">导航</span>
        <ul>
            <li id="suspend_itemBtn1">亲子时光</li>
            <li id="suspend_itemBtn2">户外出行</li>
            <li id="suspend_itemBtn3">居家生活</li>
            <li id="suspend_itemBtn4">潮电酷玩</li>
            <li id="suspend_itemBtn5">美丽人生</li>
        </ul>
        <span id="suspend_navBack">∧<br />顶部 </span>
    </div>
    <div class="suspend_login" >
        <ul>
            <li><img src="index img/suspend_login_TIM.png" /></li>
            <li id="suspend_login_buyCar">
                <a href="user_cart_manager.php" style="color: white">
                    <img src="index img/suspend_login_buyCarRed.png"/>
                    购<br />物<br />车<br /><br />
                </a>

            </li>
            <li><img src="index img/suspend_login_asset.png" /></li>
            <li><img src="index img/suspend_login_consider.png" /></li>

            <li><img src="index img/suspend_login_collect.png" /></li>
            <li><img src="index img/suspend_login_saw.png" /></li>
            <li><img src="index img/suspend_login_recharge.png" /></li>
            <li id="suspend_navBack2"><img src="index img/suspend_login_back.png" /></li>

        </ul>
    </div>
</div>		<!--suspend_partover-->


<div class="header_mostTop">
    <div class="mostTop_container">
        <a class="container_welcome" href="user_index.php" id="nav_welcome">Hi,欢迎来到天猫</a>
        <?php if($_SESSION["id"]){?>

            <a class="" href="user_cart_manager.php">你好！  <?php echo $_SESSION["username"] ?></a>
        <?php }else { ?>
            <a class="container_welcome" href="user_login.php">请登录</a>
        <?php } ?>

        <a class="container_welcome" href="user_add.php"></a>

        <ul class="mostTop_nav">

              <li class="mostTop_navItem"><a href="user_order_manager.php">我的淘宝</a></li>
            <li class="mostTop_navItem" id="nav_consider"><a href="#"> 我关注的品牌</a></li>
            <li class="mostTop_navItem" id="nav_showCar"><a href="user_cart_manager.php"> 购物车 </a></li>
            <li class="mostTop_navItem"><a href="#">收藏夹</a></li>
            <li class="mostTop_navItem" id="nav_phone"><a href="#"> 手机版</a></li>
            <li class="mostTop_navItem"><a href="#">淘宝网</a></li>
            <li class="mostTop_navItem"><a href="#">企业采购</a></li>
            <li class="mostTop_navItem"><a href="#">商家支持</a></li>
            <li class="mostTop_navItem" id="nav_webNav"><a href="#"> 网站导航</a></li>
        </ul>
    </div>
    <div class="tim_gif" style="position:absolute; z-index:-999" ><img src="index img/TMALL COM.gif" /></div>
</div>     <!--header_mostTop over-->

<div class="header_searchText">
    <div class="searchText_container">

        <input  value="" id="searchText_area" type="text"/>
        <a href="#" id="searchText_button">搜&nbsp;索</a>
        <ul class="searchText_push">
            <li><a class="pushItem" href="#">棉麻连衣裙</a>丨</li>
            <li><a class="pushItem" id="hotItem" href="#">男衬衫</a>丨</li>
            <li><a class="pushItem" href="#" >女鞋</a>丨</li>
            <li><a class="pushItem" href="#"  >男鞋</a>丨</li>
            <li><a class="pushItem" id="hotItem" href="#"  >休闲运动装</a>丨</li>
            <li><a class="pushItem" href="#"  >运动鞋</a>丨</li>
            <li><a class="pushItem" id="hotItem"  href="#">拉杆箱</a>丨</li>
            <li><a class="pushItem" href="#" >运动内衣</a></li>
        </ul>

    </div>
</div> 		<!--header_searchText over-->
