<?php
include 'header.php';





$id=isset($_GET['id']) ? $_GET['id'] : "";

//echo($id);

$link = $db->link;
$sql = "select * from product where id=$id";
$result=mysql_query($sql,$link);

$row=mysql_fetch_assoc($result)
//
//print("<pre>");/*格式化输出*/
//print_r($row);
//print("</pre>");
//
//


?>


<div style="width: 850px; height: 500px; border-left: 2px solid #f9f2f4;border-right: 2px solid #f9f2f4;; margin: auto">
    <div>

        <div style="float: left">
            <img style="width: 350px; height: 350px; " src="../../<?php echo $row['picture'] ?>" />
            <a href="product_detail.php?id=<?php echo $row['id'] ?>" class="channel_item"></a>

        </div>


        <div>
            <br/><br/>

            <h2>商品名称：<?php echo $row['name'] ?></h2>
           <br/><br/>

            <h4>价格<?php echo $row['price'] ?>￥</h4>
            <br/>

            <div style="width: 80%; text-align: left;border: 1px dotted #c9c9c9; border-width: 1px 0;   margin: -1px 20px 0 0;  padding: 10px 0;">
                <span>月销量3650</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>累计评价1929</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>送积分249</span>
            </div>



            <br/>

            <h4> 库存&nbsp;<?php echo $row['num'] ?>&nbsp;件</h4>
            <br/>

            <h4>购买：</h4>
        </div>


        <div style="float:right;border:  px #000000 solid;margin:  px;" width=" %">
                <table class="table" border="0" cellpadding="8" cellspacing="0"   >

                    <form  name="myForm" class="navbar-form myForm" action="cart/add_after.php"
                           method="post"  onsubmit="return formcheck1();" >
                        <tr>
                            <th>
                                <input type="hidden" name="num" min="1" max="<?php echo $row['num'] ?>"/>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>"/>
                            </th>
                            <th colspan="2"  style="text-align: center;">
                                <input  class="btn   btn-default"
                                        style="width:180px;    color: #fff;background-color: #ff0036;border-color: #ff0036;"
                                        type="submit" value="加入购物车" >
                            </th>

                        </tr>
                    </form>

                    <br/>
                </table>

        </div>
        <div style="float:right;border: px #000000 solid" width=" %">
                <table class="table" border="0" cellpadding="8" cellspacing="0"   >

                    <form  name="myForm1" class="navbar-form myForm" action="order/add_after.php"
                           method="post"  onsubmit="return formcheck();" >
                        <tr>
                            <th>
                                  <input type="number" name="num" min="1" max="<?php echo $row['num'] ?>"/>&nbsp;&nbsp;件
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>"/>
                            </th>
                            <th colspan="2"  style="text-align: center;">
                                <input  class="btn   btn-default"
                                        style="width:180px; color: #FF0036;background-color: #ffeded;border-color: #ff0036;"
                                        type="submit" value="立即购买" >
                            </th>

                        </tr>
                    </form>

                    <br/>
                </table>


        </div>





    </div>




</div>





<script>

    //立即购买 验证
    function formcheck(){

        var n=document.forms["myForm1"]["num"].value;

        var m=document.forms["myForm1"]["address"].value;

        //被同步更新的购买数量;
        var c=document.forms["myForm"]["num"].value=n;
        alert(c);

        if (n==null || n=="" || c==null || c=="" || m==null || m==""|| s==null || s==""){
            alert("信息必须填写完整");
            return false;
        }
x
    }

    //加入购物车 验证
    function formcheck1(){

        var n=document.forms["myForm1"]["num"].value;
        //被同步更新的购买数量;
        var c=document.forms["myForm"]["num"].value=n;
        alert(c);

        if (n==null || n=="" || c==null || c=="" || m==null || m==""|| s==null || s==""){
            alert("信息必须填写完整");
            return false;
        }

    }





</script>

<?php
include 'bottom.php';


?>

