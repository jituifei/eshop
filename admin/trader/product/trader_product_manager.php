<?php

include '../header.php';

/*
 * 分页功能
 */

$trader_id=$_SESSION['id'];
$link = $db->link;
$sql = "select * from product where del=0 and trader_id=$trader_id";
//echo $sql;
$result=mysql_query($sql,$link);
$resNum=mysql_num_rows($result);              //获取表中数据总数
$everyNum=5;                            //设置每页显示条目数目
//echo $sql;
if($resNum%$everyNum == 0)     //如果能被整除 总页码数不用+1
{
    $allPages=$resNum/$everyNum;
}
else                            //如果有余数 页码+1
{
    $allPages=$resNum/$everyNum+1;
}
$allPages=(int)$allPages;
$btn=isset($_GET["btn"]) ? $_GET["btn"] : "";


$page_post=isset($_POST['page'])?$_POST['page']:"";
if($page_post)
{ //指定跳转
    $_SESSION['page'] = $page_post;
}


//按钮跳转

if($btn==-1 && $_SESSION["page"] !=1 )//跳转上一页
{
    $_SESSION["page"]=(int)$_SESSION["page"]-1;       //把SESSION的值通过page计算再重新赋值给SESSION；



}
if($btn==1 && $_SESSION["page"] < $allPages )//跳转下一页
{
    $_SESSION["page"]=(int)$_SESSION["page"]+1;       //把SESSION的值通过page计算再重新赋值给SESSION；


}


$currentPageFirst=(int)$everyNum*(int)$_SESSION["page"]-(int)$everyNum; //获取每页第一条数据序号

$sql = "select *FROM product
WHERE del=0
and trader_id=$trader_id
LIMIT $currentPageFirst,$everyNum";
$page=$_SESSION["page"];


$result=mysql_query($sql,$link);

?>


<div class="col-sm-9   col-md-8 col-md-offset-3  main">

    <h3 class="sub-header">当前位置：<strong>商品管理</strong></h3>




    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
            <tr>
                <th>id</th>
                <th>名称</th>
                <th>库存</th>
                <th>价格</th>
                <th>商家</th>
                <th>缩略图</th>
                <th>操作</th>



            </tr>
            </tr>
            </thead>
            <tbody>

            <?php while($row=mysql_fetch_assoc($result)){ ?>
                <tr >
                    <th ><?php echo $row['id'] ?> </th>
                    <th ><?php echo $row['name'] ?> </th>
                    <th ><?php echo $row['num'] ?> </th>
                    <th ><?php echo $row['price'] ?> </th>
                    <th ><?php echo $row['trader_id'] ?> </th>
                    <th >
                        <img src="../../../<?php echo $row['picture'] ?> " id="img" style="width: 30px;height: 30px;">


                    </th>

                    <th><a href="trader_product_update.php?id=<?php echo $row["id"]?>">修改/详情</a></th>
                    <th><a href="trader_product_del.php?id=<?php echo $row["id"]?> ">删 除</a></th>
                            </tr>
            <?php } ?>


            </tbody>
        </table>


        <form   class="navbar-form"  style="float: right" action="trader_product_manager.php" method="post">
            <table class="table   " border="0" cellpadding="8" cellspacing="0" >

                <div>跳转到：<input type="text" name="page"  class="form-control">
                    <input type="submit"  value="提交" class="btn  btn-primary btn-default">
                </div>
                <div>当前页为：<?php echo $page ?>页
                    共有<?php echo $allPages ?>页
                </div>

            </table>
        </form>

        <input disabled=""  id="btn_prep" type="button"  class="btn btn-default  btn-primary"
               value="上一页" onclick="javascrtpt:window.location.href='trader_product_manager.php?btn=-1'">
        <input disabled=""  id="btn_next" type="button" class="btn btn-default  btn-primary"
               value="下一页" onclick="javascrtpt:window.location.href='trader_product_manager.php?btn=1'">


        <input type="hidden" id="input_page" value="<?php echo $page ?>" >
        <input type="hidden" id="input_all" value="<?php echo $allPages ?>" >


    </div>
</div>



<?php
include '../bottom.php';
?>





<script>
    /**
     *     该方法控制 按钮 可用性
     */
    function myfunction()

    {

        var $page =document.getElementById("input_page").value
        var $allPage =document.getElementById("input_all").value


        var btn_prep=document.getElementById("btn_prep").disabled;
        var btn_next=document.getElementById("btn_next").disabled;

        if($page == 1)
        {
            document.getElementById("btn_prep").disabled = true;
            document.getElementById("btn_next").disabled = false;
            //如果在第一页  设置上一页按钮不可用   下一页按钮可用
        }
        else if($page ==  $allPage)
        {
            document.getElementById("btn_prep").disabled = false;
            document.getElementById("btn_next").disabled = true;
            //如果在最后一页 下一页不可用
        }
        else
        {
            document.getElementById("btn_prep").disabled = false;
            document.getElementById("btn_next").disabled = false;
        }


    }
    window.onload=  myfunction;
</script>
