<?php
//echo "userindex1";


include('../../public/MysqlDB.php');
//include 'add_after.php';
//
//echo "userindex2";
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


$link = $db->link;
$sql="select * from product limit 0,6";
$result=mysql_query($sql,$link);



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




<div class="content_main">
<div class="content_main_nav">
    <ul class="navList">
        <li  class="list_itemContainer">
            <a  id="navList_itemSort" class="navList_item" href="#">
                <p>商品分类</p>
            </a>
            <ul id="showSort" style="display:none">
                <li id="goodsSort" >
                    <ul class="goodsSort_list">
                        <a href="#"><li class="goodsSort_item"><td> 女装 /内衣</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td> 男装 /运动户外</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td> 女鞋 /男鞋 /箱包</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td> 化妆品 /个人护理</td></li> </a>

                        <a href="#"><li class="goodsSort_item"><td>腕表 /珠宝饰品 /眼镜</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td>手机 /数码 /电脑办公</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td>母婴玩具</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td>零食 /进口食品 /茶酒</td></li> </a>

                        <a href="#"><li class="goodsSort_item"><td>生鲜水果</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td>大家电 /生活电器场</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td> 家具建材</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td>汽车 /配件 /用品场</td></li> </a>

                        <a href="#"><li class="goodsSort_item"><td>家纺 /家饰 /鲜花</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td> 医药保健</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td> 厨具 /收纳 /宠物场</td></li> </a>
                        <a href="#"><li class="goodsSort_item"><td>图书音像</td></li> </a>
                    </ul>
                </li>
            </ul>  	 <!-- 商品分类的 item -->
        </li>
        <li  class="list_itemContainer ">
            <a id="navList_itemSuper"  class="navList_item selectedSuper" href="#">
                超级运动会
            </a>
            <ul id="showSuper" style="display:block">
                <li id="superSport" >
                    <ul class="superSport_list">
                        <a href="#"><li class="superSport_item"><td>☽</td><td>女装会场</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>☼ </td><td> 运动户外</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>✲ </td><td>男装会场</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>❈ </td><td>女鞋会场</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>✎ </td><td>美妆会场</td></li> </a>

                        <a href="#"><li class="superSport_item"><td>♬&nbsp;</td><td>手机会场</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>♀ </td><td>母婴童装</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>♧ </td><td>家装会场</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>◈&nbsp;</td><td>家纺会场</td></li> </a>
                        <a href="#"><li class="superSport_item"><td>۞&nbsp;&nbsp;&nbsp;</td><td>车品会场</td></li> </a>
                    </ul>
                </li>

            </ul>	 	 <!-- 超级运动会的 item -->
        </li>
        <li class="list_itemContainer"><a class="navList_item" href="#">天猫超市</a><img src="index img/slideHeader.png"   /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">天猫国际</a><img src="index img/slideHeader.png" /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">天猫会员</a><img src="index img/slideHeader.png"  /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">品牌街</a><img src="index img/slideHeader.png" /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">电器城</a><img src="index img/slideHeader.png" /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">喵鲜生</a><img src="index img/slideHeader.png" /></li>

        <li class="list_itemContainer"><a class="navList_item" href="#">医药馆</a><img src="index img/slideHeader.png"  /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">营业厅</a><img src="index img/slideHeader.png" /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">魅力惠</a><img src="index img/slideHeader.png" /></li>
        <li class="list_itemContainer"><a class="navList_item" href="#">阿里旅行</a><img src="index img/slideHeader.png" /></li>    			 <!-- 导航栏中其他的 li -->
    </ul>
</div>
<div class="content_main_logo">
    <div class="showLogo_container">
        <ul class="showLogo_list">

            <li class="showLogo_item" ><a href="#"><img src="index img/advertisement1.jpg" /></a></a></li>
            <li class="showLogo_item" style="display:none"><a href="#"><img src="index img/advertisement2.jpg" /></a></a></li>
            <li class="showLogo_item" style="display:none"><a href="#"><img src="index img/advertisement9.jpg" /></a></a></li>


            <li class="showLogo_item"  style="display:none"><a href="#"><img src="index img/advertisement4.jpg" /></a></a></li>
            <li class="showLogo_item" style="display:none"><a href="#"><img src="index img/advertisement5.jpg" /></a></a></li>
            <li class="showLogo_item" style="display:none"><a href="#"><img src="index img/advertisement7.png" /></a></a></li>
        </ul>  <!-- 自动切换的logo-->
        <div class="logoButton_container" >
            <a href="#" class="logoButton"><img src="index img/btngray.png" /></a>
            <a href="#" class="logoButton"><img src="index img/btnwhite.png" /></a>
            <a href="#" class="logoButton"><img src="index img/btnwhite.png" /></a>

            <a href="#" class="logoButton"><img src="index img/btnwhite.png" /></a>
            <a href="#" class="logoButton"><img src="index img/btnwhite.png" /></a>
            <a href="#" class="logoButton"><img src="index img/btnwhite.png" /></a>
        </div> <!-- 自动切换的logo的按钮-->

        <div class="logo_rightNav" >
            <div class="rightNav_logo">
                <img src="index img/logo_rightNavHeader.png" />
            </div>
            <div class="rightNav_hello">
                <p>Hi~你好!</p>
                <a href="user_login.php" >&nbsp;请登录&nbsp;</a>
                <a href="user_add.php">&nbsp;免费注册&nbsp;</a>
            </div>
            <div class="rightNav_privileges">
                <span>退货保障</span><br />
                <span>花呗分期</span><br />
                <span>极速退款</span><br />
                <a href="#">更多特权 ></a>
            </div>
            <div class="rightNav_activity">
                <span>推荐活动</span><img src="index img/rightNav_activity.jpg" />
                <p>洁厕宝20颗</p><p>990积分</p>
            </div>

        </div>

    </div>
</div>		<!--logo_main over-->

<div class="content_goods">
<div class="goods_activity">
    <div class="goods_activityHeader" style="width:600px; height:40px; margin:25px auto"><img src="index img/superSport.png" /></div>
    <div class="goods_activityLogo" style="width:1423px; height:269px; margin:0 auto; background:url(index%20img/Bg_goods_activityContent.jpg.png)  ">
        <div class="activityLogo_container">
            <a href="#"><img src="index img/goods1.jpg" /></a>
            <a href="#"><img src="index img/goods2.jpg" /></a>
            <a href="#"><img src="index img/goods3.jpg" /></a>
            <a href="#"><img src="index img/goods4.jpg" /></a>
        </div>
    </div>
</div>													<!--goods_activity content_goods over-->

<div class="goods_hotBrands ">
    <div class="brand_today "></div>
    <div class="brand_list ">
        <ul class="brand_listShow">

            <li><img src="index img/hot brands img/brand1.jpg" /><span><br /><br />关注人数 6879<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand2.jpg" /><span><br /><br />优惠券 ￥100<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand3.jpg" /><span><br /><br />关注人数 244.5万<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand4.jpg" /><span><br /><br />关注人数 56.8万<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand5.jpg" /><span><br /><br />优惠券 ￥10<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand6.jpg" /><span><br /><br />关注人数 6879<br /><a href="#">点击进入</a></span></li>

            <li><img src="index img/hot brands img/brand7.jpg" /><span><br /><br />优惠券 ￥100<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand8.jpg" /><span><br /><br />关注人数 9908<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand9.jpg" /><span><br /><br />关注人数 56.8万<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand10.jpg" /><span><br /><br />关注人数 6879<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand11.jpg" /><span><br /><br />优惠券 ￥30<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand12.jpg" /><span><br /><br />关注人数 6879<br /><a href="#">点击进入</a></span></li>

            <li><img src="index img/hot brands img/brand13.jpg" /><span><br /><br />关注人数 9908<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand14.jpg" /><span><br /><br />优惠券 ￥30<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand15.jpg" /><span><br /><br />优惠券 ￥100<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand16.jpg" /><span><br /><br />关注人数 56.8万<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand17.jpg" /><span><br /><br />优惠券 ￥30<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand18.jpg" /><span><br /><br />关注人数 6879<br /><a href="#">点击进入</a></span></li>

            <li><img src="index img/hot brands img/brand19.jpg" /><span><br /><br />优惠券 ￥30<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand20.jpg" /><span><br /><br />关注人数 6879<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand21.jpg" /><span><br /><br />关注人数 56.8万<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand22.jpg" /><span><br /><br />关注人数 9908<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand23.jpg" /><span><br /><br />关注人数 6879<br /><a href="#">点击进入</a></span></li>
            <li><img src="index img/hot brands img/brand24.jpg" /><span><br /><br />优惠券 ￥30<br /><a href="#">点击进入</a></span></li>

        </ul>
    </div>												<!--brand_list over!! -->
    <div class="recommend_list ">
        <ul>
            <li class="recommend_item">
                <a href="#"  >
                    <img src="index img/hot brands img/recommend2.jpg" style="  " />
                    <br />
                    <p style=" ">秋季萌宝爱新欢</p>
                    <p style=" ">低至5.9元起</p>
                </a>
            </li>
            <li class="recommend_item">
                <a href="#" >
                    <img src="index img/hot brands img/recommend3.jpg" style="  " />
                    <br />
                    <p style=" ">时光女神</p>
                    <p style=" ">下单立减60元</p>
                </a>
            </li>
            <li class="recommend_item">
                <a href="#"  >
                    <img src="index img/hot brands img/recommend4.jpg" style="  " />
                    <br />
                    <p style=" ">美式全铜套餐</p>
                    <p style=" ">整套购买劲省37</p>
                </a>
            </li>
            <li class="recommend_item">
                <a href="#" >
                    <img src="index img/hot brands img/recommend1.jpg" style="  " />
                    <br />
                    <p style=" ">86年初心未变</p>
                    <p style=" ">买就送,抽免单</p>
                </a>
            </li>
        </ul>
    </div>

</div>
<!-- goods_hotBrands  content_goods over-->



<div class="goods_channel"> 					<!--	BABY AND KIDS  	goods_channelbegin-->
    <div class="channel_header">
        <ul>
            <li><a href="#">童装</a></li>
            <li><a href="#">玩具</a></li>
            <li><a href="#">待产用品</a></li>

            <li><a href="#">文教用品</a></li>
            <li><a href="#">宝宝用品</a></li>
            <li><a href="#">儿童用品</a></li>

            <li><a href="#">奶粉</a></li>
            <li><a href="#">童书</a></li>
            <li><a href="#">纸尿裤</a></li>
        </ul>
        <div class="channel_briefword">
            <i class="channel" id="channelStripe1"  ></i>
            <span class="briefword_title" >亲子时光</span>
            <span class="briefword_title_sub">KIDS & BABY</span>

        </div>
        <div style="clear:both"></div>
    </div>										   			<!--channel_header over-->

    <div class="channel_logo1">
        <img src="index img/KIDS & BABY img/KIDS AND BABY.jpg"/>
        <div class="channel_ad">
            <p>动漫背包新品发售</p>
            <p class="channel_ad_two">动漫宅品抢鲜购</p>
            <p class="channel_ad_three"> 动漫开学用品3折开售</p>
        </div>
        <div class="channel_logo2" id="channel_bottomLogo">

        </div>
    </div>													<!--channel_left over-->


    <!--    循环输出商品-->
    <div class="channel_list ">
        <ul class="channel_listShow">
            <?php while($row=mysql_fetch_assoc($result)){ ?>
                <li>
                    <a href="product_detail.php?id=<?php echo $row['id'] ?>" class="channel_item">
                        <p class="channel_itemTitle"> <?php echo $row['name'] ?></p>
                        <p class="channel_itemTitle_sub " id="kidsAbaby"><?php echo $row['price'] ?>￥</p>
                        <img src="../../<?php echo $row['picture'] ?>" />
                    </a>
                </li>


            <?php } ?>



        </ul>
    </div>								  						<!--channel_mid over-->
    <div class="channel_recommend_list ">
        <ul>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd7.jpg" />
                    <br />
                    <p class="channel_itemTitle">不凡文具购乐趣</p>
                    <p class="channel_itemTitle_sub" id="kidsAbaby">每天有惊喜</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#" >
                    <img src="index img/KIDS & BABY img/channel_itemAd8.jpg" />
                    <br />
                    <p class="channel_itemTitle">假日出游背包</p>
                    <p class="channel_itemTitle_sub" id="kidsAbaby">妈妈背也好看</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd9.jpg" />
                    <br />
                    <p class="channel_itemTitle">秋时尚</p>
                    <p class="channel_itemTitle_sub" id="kidsAbaby">好货上新/今日必备</p>
                </a>
            </li>

        </ul>
    </div>										<!--channel_right over-->

</div>
</div>

<div class="goods_channel"> 					<!--  OUTDOOR   goods_channelbegin-->
    <div class="channel_header">
        <ul>
            <li><a href="#">童装</a></li>
            <li><a href="#">玩具</a></li>
            <li><a href="#">待产用品</a></li>

            <li><a href="#">文教用品</a></li>
            <li><a href="#">宝宝用品</a></li>
            <li><a href="#">儿童用品</a></li>

            <li><a href="#">奶粉</a></li>
            <li><a href="#">童书</a></li>
            <li><a href="#">纸尿裤</a></li>
        </ul>
        <div class="channel_briefword">
            <i class="channel" id="channelStripe12"  ></i>
            <span class="briefword_title" >户外出行</span>
            <span class="briefword_title_sub">OUTDOORS & AUTOMOTIVE</span>

        </div>
        <div style="clear:both"></div>
    </div>										   			<!--channel_header over-->

    <div class="channel_logo1">
        <img src="index img/othersChannleLogo img/OUTDOOR.jpg" style="width:246px; height:330px;" />
        <div class="channel_ad">
            <p>大牌聚会</p>
            <p class="channel_ad_two">夏日防晒必贴膜</p>
            <p class="channel_ad_three"> 买膜送保险</p>
        </div>
        <div id="channel_bottomLogo2" class="channel_logo2" >

        </div>
    </div>													<!--channel_left over-->

    <div class="channel_list ">
        <ul class="channel_listShow">
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">有爱亲子装</p>
                    <p class="channel_itemTitle_sub " id="outdoor">精明麻麻的选择</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd1.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">得利办公生活</p>
                    <p class="channel_itemTitle_sub" id="outdoor">办公新时尚</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd2.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">紫外线怎么破</p>
                    <p class="channel_itemTitle_sub" id="outdoor">专注婴儿车85年</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd3.jpg" />
                </a>
            </li>

            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">七巧板画板年促</p>
                    <p class="channel_itemTitle_sub" id="outdoor">亲子互动好礼物</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd4.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">进口棉羊奶粉</p>
                    <p class="channel_itemTitle_sub" id="outdoor">天然免疫不上火</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd5.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">卡通纯棉儿童内裤</p>
                    <p class="channel_itemTitle_sub" id="outdoor">精美礼盒4条装</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd6.jpg" />
                </a>
            </li>


        </ul>
    </div>								  						<!--channel_mid over-->
    <div class="channel_recommend_list ">
        <ul>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd7.jpg" />
                    <br />
                    <p class="channel_itemTitle">不凡文具购乐趣</p>
                    <p class="channel_itemTitle_sub" id="outdoor">每天有惊喜</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#" >
                    <img src="index img/KIDS & BABY img/channel_itemAd8.jpg" />
                    <br />
                    <p class="channel_itemTitle">假日出游背包</p>
                    <p class="channel_itemTitle_sub" id="outdoor">妈妈背也好看</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd9.jpg" />
                    <br />
                    <p class="channel_itemTitle">秋时尚</p>
                    <p class="channel_itemTitle_sub" id="outdoor">好货上新/今日必备</p>
                </a>
            </li>

        </ul>
    </div>											<!--channel_right over-->

</div>
</div>

<div class="goods_channel"> 					<!--  GROCERY & HEALTH   goods_channelbegin-->
    <div class="channel_header">
        <ul>
            <li><a href="#">童装</a></li>
            <li><a href="#">玩具</a></li>
            <li><a href="#">待产用品</a></li>

            <li><a href="#">文教用品</a></li>
            <li><a href="#">宝宝用品</a></li>
            <li><a href="#">儿童用品</a></li>

            <li><a href="#">奶粉</a></li>
            <li><a href="#">童书</a></li>
            <li><a href="#">纸尿裤</a></li>
        </ul>
        <div class="channel_briefword">
            <i class="channel" id="channelStripe13"  ></i>
            <span class="briefword_title" >居家生活</span>
            <span class="briefword_title_sub">GROCERY & HEALTH</span>

        </div>
        <div style="clear:both"></div>
    </div>										   			<!--channel_header over-->

    <div class="channel_logo1">
        <img src="index img/othersChannleLogo img/HOMELIFE.jpg" style="width:246px; height:330px;" />
        <div class="channel_ad">
            <p>美心新品独家发售</p>
            <p class="channel_ad_two">天猫中秋月预售</p>
            <p class="channel_ad_three"> 抢百万赠品先到先得</p>
        </div>
        <div id="channel_bottomLogo3" class="channel_logo2" >

        </div>
    </div>													<!--channel_left over-->

    <div class="channel_list ">
        <ul class="channel_listShow">
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">有爱亲子装</p>
                    <p class="channel_itemTitle_sub " id="homeLife">精明麻麻的选择</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd1.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">得利办公生活</p>
                    <p class="channel_itemTitle_sub" id="homeLife">办公新时尚</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd2.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">紫外线怎么破</p>
                    <p class="channel_itemTitle_sub" id="homeLife">专注婴儿车85年</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd3.jpg" />
                </a>
            </li>

            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">七巧板画板年促</p>
                    <p class="channel_itemTitle_sub" id="homeLife">亲子互动好礼物</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd4.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">进口棉羊奶粉</p>
                    <p class="channel_itemTitle_sub" id="homeLife">天然免疫不上火</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd5.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">卡通纯棉儿童内裤</p>
                    <p class="channel_itemTitle_sub" id="homeLife">精美礼盒4条装</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd6.jpg" />
                </a>
            </li>


        </ul>
    </div>								  						<!--channel_mid over-->
    <div class="channel_recommend_list ">
        <ul>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd7.jpg" />
                    <br />
                    <p class="channel_itemTitle">不凡文具购乐趣</p>
                    <p class="channel_itemTitle_sub" id="homeLife">每天有惊喜</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#" >
                    <img src="index img/KIDS & BABY img/channel_itemAd8.jpg" />
                    <br />
                    <p class="channel_itemTitle">假日出游背包</p>
                    <p class="channel_itemTitle_sub" id="homeLife">妈妈背也好看</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd9.jpg" />
                    <br />
                    <p class="channel_itemTitle">秋时尚</p>
                    <p class="channel_itemTitle_sub" id="homeLife">好货上新/今日必备</p>
                </a>
            </li>

        </ul>
    </div>											<!--channel_right over-->

</div>
</div>

<div class="goods_channel"> 					<!--  ELECTRONICS   goods_channelbegin-->
    <div class="channel_header">
        <ul>
            <li><a href="#">童装</a></li>
            <li><a href="#">玩具</a></li>
            <li><a href="#">待产用品</a></li>

            <li><a href="#">文教用品</a></li>
            <li><a href="#">宝宝用品</a></li>
            <li><a href="#">儿童用品</a></li>

            <li><a href="#">奶粉</a></li>
            <li><a href="#">童书</a></li>
            <li><a href="#">纸尿裤</a></li>
        </ul>
        <div class="channel_briefword">
            <i class="channel" id="channelStripe14"  ></i>
            <span class="briefword_title" >潮电酷玩</span>
            <span class="briefword_title_sub">ELECTRONICS</span>

        </div>
        <div style="clear:both"></div>
    </div>										   			<!--channel_header over-->

    <div class="channel_logo1">
        <img src="index img/othersChannleLogo img/ELECTRONICS.jpg" style="width:246px; height:330px;" />
        <div class="channel_ad">
            <p>1060独家新发售</p>
            <p class="channel_ad_two">微星10系本首发</p>
            <p class="channel_ad_three"> 媲美台机傲人性能</p>
        </div>
        <div id="channel_bottomLogo4" class="channel_logo2" >

        </div>
    </div>													<!--channel_left over-->

    <div class="channel_list ">
        <ul class="channel_listShow">
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">有爱亲子装</p>
                    <p class="channel_itemTitle_sub " id="electronics">精明麻麻的选择</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd1.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">得利办公生活</p>
                    <p class="channel_itemTitle_sub" id="electronics">办公新时尚</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd2.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">紫外线怎么破</p>
                    <p class="channel_itemTitle_sub" id="electronics">专注婴儿车85年</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd3.jpg" />
                </a>
            </li>

            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">七巧板画板年促</p>
                    <p class="channel_itemTitle_sub" id="electronics">亲子互动好礼物</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd4.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">进口棉羊奶粉</p>
                    <p class="channel_itemTitle_sub" id="electronics">天然免疫不上火</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd5.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">卡通纯棉儿童内裤</p>
                    <p class="channel_itemTitle_sub" id="electronics">精美礼盒4条装</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd6.jpg" />
                </a>
            </li>


        </ul>
    </div>								  						<!--channel_mid over-->
    <div class="channel_recommend_list ">
        <ul>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd7.jpg" />
                    <br />
                    <p class="channel_itemTitle">不凡文具购乐趣</p>
                    <p class="channel_itemTitle_sub" id="electronics">每天有惊喜</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#" >
                    <img src="index img/KIDS & BABY img/channel_itemAd8.jpg" />
                    <br />
                    <p class="channel_itemTitle">假日出游背包</p>
                    <p class="channel_itemTitle_sub" id="electronics">妈妈背也好看</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd9.jpg" />
                    <br />
                    <p class="channel_itemTitle">秋时尚</p>
                    <p class="channel_itemTitle_sub" id="electronics">好货上新/今日必备</p>
                </a>
            </li>

        </ul>
    </div>											<!--channel_right over-->

</div>
</div>

<div class="goods_channel"> 					<!--  FASHION & BEAUTY goods_channelbegin-->
    <div class="channel_header">
        <ul>
            <li><a href="#">童装</a></li>
            <li><a href="#">玩具</a></li>
            <li><a href="#">待产用品</a></li>

            <li><a href="#">文教用品</a></li>
            <li><a href="#">宝宝用品</a></li>
            <li><a href="#">儿童用品</a></li>

            <li><a href="#">奶粉</a></li>
            <li><a href="#">童书</a></li>
            <li><a href="#">纸尿裤</a></li>
        </ul>
        <div class="channel_briefword">
            <i class="channel" id="channelStripe15"  ></i>
            <span class="briefword_title" >美丽人生</span>
            <span class="briefword_title_sub">FASHION & BEAUTY</span>

        </div>
        <div style="clear:both"></div>
    </div>										   			<!--channel_header over-->

    <div class="channel_logo1">
        <img src="index img/othersChannleLogo img/BEAUTY.jpg" style="width:246px; height:330px;" />
        <div class="channel_ad">
            <p>周末逛好店</p>
            <p class="channel_ad_two">周末青春好店</p>
            <p class="channel_ad_three"> 暑假季好店逛不停</p>
        </div>
        <div id="channel_bottomLogo5" class="channel_logo2" >

        </div>
    </div>													<!--channel_left over-->

    <div class="channel_list ">
        <ul class="channel_listShow">
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">有爱亲子装</p>
                    <p class="channel_itemTitle_sub " id="beauty">精明麻麻的选择</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd1.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">得利办公生活</p>
                    <p class="channel_itemTitle_sub" id="beauty">办公新时尚</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd2.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">紫外线怎么破</p>
                    <p class="channel_itemTitle_sub" id="beauty">专注婴儿车85年</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd3.jpg" />
                </a>
            </li>

            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">七巧板画板年促</p>
                    <p class="channel_itemTitle_sub" id="beauty">亲子互动好礼物</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd4.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">进口棉羊奶粉</p>
                    <p class="channel_itemTitle_sub" id="beauty">天然免疫不上火</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd5.jpg" />
                </a>
            </li>
            <li>
                <a href="#" class="channel_item">
                    <p class="channel_itemTitle">卡通纯棉儿童内裤</p>
                    <p class="channel_itemTitle_sub" id="beauty">精美礼盒4条装</p>
                    <img src="index img/KIDS & BABY img/channel_itemAd6.jpg" />
                </a>
            </li>


        </ul>
    </div>								  						<!--channel_mid over-->
    <div class="channel_recommend_list ">
        <ul>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd7.jpg" />
                    <br />
                    <p class="channel_itemTitle">不凡文具购乐趣</p>
                    <p class="channel_itemTitle_sub" id="beauty">每天有惊喜</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#" >
                    <img src="index img/KIDS & BABY img/channel_itemAd8.jpg" />
                    <br />
                    <p class="channel_itemTitle">假日出游背包</p>
                    <p class="channel_itemTitle_sub" id="beauty">妈妈背也好看</p>
                </a>
            </li>
            <li class="channel_recommend_item">
                <a href="#"  >
                    <img src="index img/KIDS & BABY img/channel_itemAd9.jpg" />
                    <br />
                    <p class="channel_itemTitle">秋时尚</p>
                    <p class="channel_itemTitle_sub" id="beauty">好货上新/今日必备</p>
                </a>
            </li>

        </ul>
    </div>											<!--channel_right over-->

</div>
</div>			<!--content_goods goods_channels over-->


</div>		<!--content_goods over-->





<?php
/**
 * Created by PhpStorm.
 * User: JTF
 * Date: 19-5-8
 * Time: 下午5:33
 */ ?>



<div class="bottom">
    <div class="bottom_sever">
        <a href="#"><img src="index img/bottom img/bottom_sever.png" /></a>
        <div>

            <ul class="bottom_wordList">
                <h3>购物指南</h3>
                <li><a href="#>"> 免费注册</a></li>
                <li><a href="#>"> 开通支付宝</a></li>
                <li><a href="#>"> 支付宝充值</a></li>

            </ul>
            <ul class="bottom_wordList">
                <h3>天猫保障</h3>
                <li><a href="#>">发票保障</a></li>
                <li><a href="#>">售后规则</a></li>
                <li><a href="#>">缺货赔偿</a></li>

            </ul>
            <ul class="bottom_wordList">
                <h3>支付方式</h3>
                <li><a href="#>">快捷支付</a></li>
                <li><a href="#>">信用卡</a></li>
                <li><a href="#>">余额宝</a></li>
                <li><a href="#>">蚂蚁花呗</a></li>
                <li><a href="#>">货到付款</a></li>

            </ul>
            <ul class="bottom_wordList">
                <h3>商家服务</h3>
                <li><a href="#>">商家入驻</a></li>
                <li><a href="#>">商家中心</a></li>
                <li><a href="#>">天猫智库</a></li>
                <li><a href="#>">天猫规则</a></li>
                <li><a href="#>">物流服务</a></li>
                <li><a href="#>">喵言喵语</a></li>
                <li><a href="#>">运营服务</a></li>
            </ul>

        </div>
        <div style="clear:both"></div>
    </div>

    <div class="bottom_intruduce">
        <div class="bottom_intruduce_list">
            <ul class="bottom_list1">
                <li>关于天猫</li>
                <li>帮助中心</li>
                <li>开放平台</li>
                <li>诚聘英才</li>
                <li>联系我们</li>
                <li>网站合作</li>
                <li>法律声明</li>
                <li>知识产权</li>
                <li>廉正举报</li>
                <li>规则意见征集</li>
            </ul><br />
            <ul class="bottom_list1">
                <li>阿里巴巴集团 | </li>
                <li>淘宝网 | </li>
                <li>天猫 | </li>
                <li>聚划算 | </li>
                <li>全球速卖通 | </li>
                <li>阿里巴巴国际交易市场 | </li>
                <li>1688 | </li>
                <li>阿里妈妈 | </li>
                <li>阿里去哪 | </li>
                <li>阿里与计算 | </li>
                <li>YunOS | </li>
                <li>阿里通信 | </li>
                <li>万网 | </li>
                <li>高德 | </li>
                <li>优视 | </li>
                <li>友盟 | </li>
                <li>虾米</li>

            </ul>
            <div style="clear:both"></div>
            <p> 增值电信业务经营许可证： 浙B2-20110446网络文化经营许可证：浙网文[2015]0295-065号互联网医疗保健信息服务 审核同意书 浙卫网审【2014】6号 </p>
            <p>互联网药品信息服务资质证书编号：浙-（经营性）-2012-0005 </p> <br />
            <p>© 2003-2016 TMALL.COM 版权所有</p>
            <div><img src="index img/bottom img/net1.jpg" /><img src="index img/bottom img/net2.jpg" /></div>
        </div>
    </div>
</div>		<!--bottom over-->
</body>
</html>

<?php

echo "<script>alert('本项目仅用于测试，非商业用途，侵删');   </script>";


?>



