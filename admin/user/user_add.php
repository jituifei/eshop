<?php



date_default_timezone_set('PRC');
//date_default_timezone_set(Asia/Chongqing ,Asia/Shanghai ,Asia/Urumqi);
$nowdate = (string)date("Ymd");



//print("<pre>");/*格式化输出*/
//print_r($row);
//print("</pre>");


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

    <title>个人注册</title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/css/bootstrap1.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../public/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/../ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../public/js/html5shiv.js"></script>
    <script src="../../public/js/respond.min.js"></script>

    <![endif]-->


    <style>
        *{margin: 0px;padding: 0px;}

    </style>
</head>

<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3 col-md-3 col-md-offset-1 main">
            <img   src="../../index/login img/TIM.png" alt=""/>

        </div>
        <div class="col-sm-3 col-md-3 col-md-offset-5 main"><a href="user_login.php">已注册账号，直接登陆</a></div>

    </div>
    <div class="row" style="border-top:2px solid #e6e6e6 "  >
        <div class="col-sm-4 col-md-4 col-md-offset-4 main"    >
            <table class="table  " border="0" cellpadding="8" cellspacing="0"   >

                <form  name="myForm" class="navbar-form myForm" action="add_after.php"
                        method="post"  onsubmit="return formcheck();" >

                        <th><h3>欢迎注册</h3>   </th>


                    <tr>
                        <th>用户名: <input type="text" class="form-control"   placeholder=" "
                                       name="username" >     <br/>
                        </th>

                    </tr>

                    <tr>
                        <th>密码: <input type="password" class="form-control" placeholder=" "
                                       name="password"   >     <br/>
                        </th>
                    </tr>

                    <tr>
                        <th>确认密码: <input type="password" class="form-control" placeholder=" "
                                       name="password2"   >     <br/>
                        </th>
                    </tr>
                    <tr>
                        <th>手机号：
                            <input type="text" class="form-control" maxlength="12" placeholder=" "
                                   name="phone_num"   >     <br/>
                        </th>

                    </tr>

                    <tr>

                        <th colspan="2"  style="text-align: center;">
                            <input style=" margin: 0 auto;background-color: #e2231a;border-color:#e2231a"
                                   type="submit" value="提交" class="btn btn-primary btn-lg btn-block">
                        </th>

                    </tr>



                </form>

                <br/>
            </table>


        </div>
    </div>
</div>

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

        if (n==null || n=="" || c==null || c=="" || m==null || m==""|| s==null || s==""){
            alert("信息必须填写完整");
            return false;
        }

        if(n.length >=10){
            alert("用户名输入过长");
            return false;
        }
        if(m!=c){
            alert("两次密码不一致");
            return false;
        }

        if(s.length !=11){
            alert("手机号码位数有误");
            return false;
        }



    }




</script>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../public/js/jquery.min.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="../../public/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../public/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>



