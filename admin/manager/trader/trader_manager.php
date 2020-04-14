<?php

include '../../../public/header.php';


/*
 * 分页功能
 */


$link = $db->link;
$sql = "select * from trader";
$result=mysql_query($sql,$link);
$resNum=mysql_num_rows($result);              //获取表中数据总数
$everyNum=5;                            //设置每页显示条目数目

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

$sql = "select *FROM trader WHERE del=0  LIMIT $currentPageFirst,$everyNum";
$page=$_SESSION["page"];

//echo ($sql);
$result=mysql_query($sql,$link);

?>


<div class="col-sm-9   col-md-8 col-md-offset-3  main">

    <h3 class="sub-header">当前位置：<strong>商家管理</strong></h3>




    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
            <tr>
                <th>id</th>
                <th>用户名</th>
                <th>密码</th>
                <th>手机号码</th>

                <th>操作</th>



            </tr>
            </tr>
            </thead>
            <tbody>

            <?php while($row=mysql_fetch_assoc($result)){ ?>
                <tr >
                    <th ><?php echo $row['id'] ?> </th>
                    <th ><?php echo $row['username'] ?> </th>
                    <th ><?php echo $row['password'] ?> </th>
                    <th ><?php echo $row['phone_num'] ?> </th>

                    <th><a href="trader_update.php?id=<?php echo $row["id"]?>">修改/详情</a></th>
                    <th><a href="trader_del.php?id=<?php echo $row["id"]?> ">删 除</a></th>

                </tr>
            <?php } ?>


            </tbody>
        </table>


        <form   class="navbar-form"  style="float: right" action="user_manager.php" method="post">
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
               value="上一页" onclick="javascrtpt:window.location.href='trader_manager.php?btn=-1'">
        <input disabled=""  id="btn_next" type="button" class="btn btn-default  btn-primary"
               value="下一页" onclick="javascrtpt:window.location.href='trader_manager.php?btn=1'">


        <input type="hidden" id="input_page" value="<?php echo $page ?>" >
        <input type="hidden" id="input_all" value="<?php echo $allPages ?>" >


    </div>
</div>



<?php
include '../../public/bottom.php';
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
