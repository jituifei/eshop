<?php

 
 
?>


<!DOCTYPE html>
<html lang="zh">
<head>
    <title>管理员登陆界面</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <style>
        @import url("css/login-bootstrap.css"); 

        body{
            font-family: 'microsoft yahei',Arial,sans-serif;
            margin:0;
            padding:0;
        }


    </style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">

 
 </script>
    <script>
        function validateForm(){
            var n=document.forms["myForm"]["username"].value;
            var m=document.forms["myForm"]["password"].value;


            if (n==null || n=="" ||   m==null || m==""){
                alert("信息必须填写完整");

                return false;
            }
            if (n.replace(/(^\s*)|(\s*$)/g, "")=="")
            {
                alert("信息必须填写完整");
                return false;
            }

            if (m.replace(/(^\s*)|(\s*$)/g, "")=="")
            {
                alert("信息必须填写完整");
                return false;
            }



        }
    </script>

</head>
<body>
<div id="loginModal" class="modal show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img style="float: right;width: 200px; height:150px;" src="img/gongqingtuan.png" alt=""/>


                <h1 class="text-center text-primary">中国共产主义青年团</h1>

                <h1 class="text-center text-primary">管理员登陆</h1>
            </div>

            <div class="modal-body">
                <form action="../stuInfoManage/stuInfoManage.php" name="myForm"  onsubmit="return validateForm()" method="post" class="form col-md-12 center-block">
                    <div class="form-group">
                        <input type="text"   name="username" class="form-control input-lg" placeholder="用户名">
                    </div>
                    <div class="form-group">
                        <input type="password"   name="password" class="form-control input-lg" placeholder="密码">
                    </div>

                    <div class="form-group">
                        <input   class="btn btn-primary btn-lg btn-block" type="submit" value="确定"/>
                    </div>


                </form>

            </div>

            <div  class="modal-footer"  >
                <div class="bshare-custom">
                    <a title="分享到QQ空间" class="bshare-qzone"></a>
                    <a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
                    <a title="分享到人人网" class="bshare-renren"></a>

                    <a title="分享到腾讯微博" class="bshare-qqmb"></a>
                    <a title="分享到网易微博" class="bshare-neteasemb"></a>
                    <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                    <span class="BSHARE_COUNT bshare-share-count">0</span>
                </div>
                <script type="text/javascript" charset="utf-8"
                        src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;
            lang=zh">
                </script>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js">

                </script>
            </div>
        </div>
    </div>




</div>

</body>
</html>

