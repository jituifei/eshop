<?php
include '../header.php';


?>

<div class="col-sm-8   col-md-8 col-md-offset-3  main">

    <h3 class="sub-header">当前位置：<strong>添加商品</strong></h3>



    <table class="table  " border="0" cellpadding="8" cellspacing="0"   >

        <form  name="myForm" class="navbar-form myForm" action="add_after.php"
               method="post"   onsubmit="return formcheck();" >


            <tr>
                <th>商品名称: <input type="text" class="form-control"   placeholder=" "
                                name="name" >     <br/>
                </th>

            </tr>

            <tr>
                <th>价格: <input type="text" class="form-control" placeholder=" "
                               name="price"   >     <br/>
                </th>
            </tr>

            <tr>
                <th>数量: <input type="num" class="form-control" placeholder=" "
                                 name="num"   >     <br/>
                </th>
            </tr>
            <tr>
                <th>

                    图片：
                    <input type="file" class="form-control" id="inputBox"
                           name="pic"   >     <br/>
                    <img src="" id="img" style="width: 50px;height: 50px;">

                </th>

            </tr>

            <tr>

                <th colspan="2"  style="text-align: center;">
                    <input style=" margin: 0 auto;background-color: #428bca;border-color:#428bca"
                           type="submit" value="提交" class="btn btn-primary btn-lg btn-block">
                </th>





            </tr>
            <th><input type="hidden" class="form-control"
                       name="id"    value=" <?php echo $_SESSION["id"]  ?>"></th>


        </form>

        <br/>
    </table>


</div>

<script>
    function formcheck(){




        var n=document.forms["myForm"]["name"].value;
        // alert(n);
        var m=document.forms["myForm"]["num"].value;
        //alert(m);
        var c=document.forms["myForm"]["price"].value;
        // alert(c);
        var s=document.forms["myForm"]["pic"].value;
        // alert(s);

        if (n==null || n=="" || c==null || c=="" || m==null || m==""|| s==null || s==""){
            alert("信息必须填写完整");
            return false;
        }




    }




    var inputBox = document.getElementById("inputBox");
    var img = document.getElementById("img");
    var purl=document.getElementById("picture");
    inputBox.addEventListener("change",function(){
        var reader = new FileReader();
        reader.readAsDataURL(inputBox.files[0]);//发起异步请求
        reader.onload = function(){
            //读取完成后，将结果赋值给img的src
            img.src = this.result
        }
    })








</script>

<?php

include '../bottom.php';

?>
