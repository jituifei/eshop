<?php
include 'header.php';

$id=$_SESSION['id'];

$link = $db->link;
//$sql = "select * from cart";
$sql="SELECT cart.*,product.name,product.picture,trader.username
FROM cart,trader,product
where  cart.user_id=$id
AND cart.trader_id=trader.id
and cart.product_id=product.id
 ";
$result=mysql_query($sql,$link);



//print("<pre>");/*格式化输出*/
//print_r($row=mysql_fetch_assoc($result));
//print("</pre>");
//

?>





<div style="width: 1000px; height: 500px; border-left: 2px solid #f9f2f4;border-right: 2px solid #f9f2f4;; margin: auto">

        <h2>购物车&nbsp;>>> <a href="user_order_manager.php">我的订单</a></h2>


        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                <tr>
                    <th>id</th>
                    <th>图片</th>

                    <th>商品名</th>
                    <th>数量</th>
                    <th>总计</th>
                    <th>商家</th>
                    <th>操作</th>



                </tr>
                </tr>
                </thead>
                <tbody>

                <?php while($row=mysql_fetch_assoc($result)){ ?>
                    <tr >
                        <th ><?php echo $row['id'] ?> </th>

                        <th ><img style="height: 50px;width: 50px;" src="../../<?php echo $row['picture'] ?>" /> </th>

                        <th ><?php echo $row['name'] ?> </th>
                        <th ><?php echo $row['num'] ?> </th>
                        <th ><?php echo $row['price'] ?> </th>
                        <th ><?php echo $row['username'] ?> </th>
                        <th><a href="order/add_after.php?id=<?php echo $row["id"]?>">下单</a></th>
                        <th><a href="cart/user_cart_del.php?id=<?php echo $row["id"]?> ">移出购物车</a></th>

                    </tr>
                <?php } ?>


                </tbody>
            </table>




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

