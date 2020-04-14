<?php
include '../../../public/header.php';

$id=$_SESSION['id'];

$link = $db->link;

$sql="SELECT orderform.*,product.name,product.picture,trader.username
FROM orderform,trader,product
where   orderform.trader_id=trader.id
and orderform.product_id=product.id
 ";


$result=mysql_query($sql,$link);



//print("<pre>");/*格式化输出*/
//print_r($row=mysql_fetch_assoc($result));
//print("</pre>");
//

?>



<div class="col-sm-9   col-md-8 col-md-offset-3  main">

    <h3 class="sub-header">当前位置：<strong>订单管理</strong></h3>



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




            </tr>
            </tr>
            </thead>
            <tbody>

            <?php while($row=mysql_fetch_assoc($result)){ ?>
                <tr >
                    <th ><?php echo $row['id'] ?> </th>

                    <th ><img style="height: 50px;width: 50px;" src="../../../<?php echo $row['picture'] ?>" /> </th>

                    <th ><?php echo $row['name'] ?> </th>
                    <th ><?php echo $row['num'] ?> </th>
                    <th ><?php echo $row['price'] ?> </th>
                    <th ><?php echo $row['username'] ?> </th>
                    <th ><?php echo $row['address'] ?> </th>
                    <th ><?php echo $row['date'] ?> </th>
                    <th ><?php echo $row['state'] ?> </th>



                </tr>
            <?php } ?>


            </tbody>
        </table>




    </div>









</div>






<?php

include '../../../public/bottom.php';

?>

