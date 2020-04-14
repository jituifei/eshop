<?php
/**
 * Created by PhpStorm.
 * User: JTF
 * Date: 19-5-6
 * Time: 下午4:35
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>商家登录界面</title>

    <link href="../../index/login css/login.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div  class="login_header">
    <div class="header_container">
        <a href="../../index.php"> <img src="../../index/login img/TIM.png" />&nbsp;&nbsp;前往首页</a>
    </div>
</div>
<div class="login_mid">
    <div class="mid_container">
        <div class="login_container" >

            <form class="container" action="product/trader_product_manager.php" method="post"
                  onsubmit="return formcheck();">
                <br />
                <h2>商家登录</h2>
                <div><img src="../../index/login img/admin.png" />
                    <input type="text" name="username">
                </div> <br /><br />


                <div ><img src="../../index/login img/password.png"  />
                    <input type="password" name="password"  />
                </div><br/><br /><br />


                <input type="submit" value="登 录" id="loginButton"   />

                <br/>
                <div>
                    <a  href="trader_add.php" >免费注册</a>&nbsp;&nbsp;
                    <a style="float: left" href="#">忘记密码</a>&nbsp;&nbsp;

                </div>

            </form>

        </div>
    </div>
</div>



<div class="bottom">

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
        </div>
    </div>
</div>		<!--bottom over-->

<script>





    function formcheck(){




        var n=document.forms["myForm"]["username"].value;
        // alert(n);
        var m=document.forms["myForm"]["password"].value;
        //alert(m);
        var c=document.forms["myForm"]["password2"].value;
        // alert(c);
        var s=document.forms["myForm"]["phone_num"].value;
        // alert(s);

        if (n==null || n==""  ||   m==null || m==""   ){
            alert("信息必须填写完整");
            return false;
        }





    }




</script>


</body>
</html>


