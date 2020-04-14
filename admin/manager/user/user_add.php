<?php
include '../../../public/header.php';


?>

<div class="col-sm-8   col-md-8 col-md-offset-3  main">

    <h3 class="sub-header">当前位置：<strong>添加用户</strong></h3>



        <table class="table  " border="0" cellpadding="8" cellspacing="0"   >

            <form  name="myForm" class="navbar-form myForm" action="add_after.php"
                   method="post"  onsubmit="return formcheck();" >

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
                        <input style=" margin: 0 auto;background-color: #428bca;border-color:#428bca"
                               type="submit" value="提交" class="btn btn-primary btn-lg btn-block">
                    </th>

                </tr>



            </form>

            <br/>
        </table>


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

<?php

include '../../../public/bottom.php';

?>
