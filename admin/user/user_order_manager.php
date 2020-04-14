<?php
include 'header.php';

$id=$_SESSION['id'];

$link = $db->link;

$sql="SELECT orderform.*,product.name,product.picture,trader.username
FROM orderform,trader,product
where  orderform.user_id=$id
AND orderform.trader_id=trader.id
and orderform.product_id=product.id
and  (orderform.state=0 or orderform.state=1)
 ";


$result=mysql_query($sql,$link);



//print("<pre>");/*格式化输出*/
//print_r($row=mysql_fetch_assoc($result));
//print("</pre>");
//

?>





<div style="width: 1000px; height: 500px; border-left: 2px solid #f9f2f4;border-right: 2px solid #f9f2f4;; margin: auto">

    <h2>我的订单&nbsp;>>> <a href="user_cart_manager.php">购物车</a></h2>


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

                <th>地址</th>
                <th>日期</th>
                <th>状态</th>

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
                    <th ><?php echo $row['address'] ?> </th>
                    <th ><?php echo $row['date'] ?> </th>
                    <th ><?php echo $row['state'] ?> </th>

                    <?php if($row['state']==0){  ?>
                    <th><a href="order/user_order_del.php?id=<?php echo $row["id"]?> ">申请取消订单</a></th>
                    <?php } else{ ?>
                    <th> 等待取消订单 </th>
                    <?php } ?>
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

