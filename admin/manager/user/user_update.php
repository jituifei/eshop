<?php
include '../../../public/header.php';


$id=isset($_GET['id']) ? $_GET['id'] : "";

$sql = "select * from user where id = $id ";
$link = $db->link;
$result=mysql_query($sql,$link);
$row=mysql_fetch_assoc($result);

?>

<div class="col-sm-8   col-md-8 col-md-offset-3  main">

    <h3 class="sub-header">当前位置：<strong>用户更新</strong></h3>



    <table class="table  " border="0" cellpadding="8" cellspacing="0"   >

        <form class="navbar-form" action="update_after.php" method="post">

            <tr>
                <th>用户名: <input type="text" class="form-control" placeholder="学号.."
                               name="username"  value=" <?php echo $row["username"]  ?>"></th>
                <th>密码: <input type="text" class="form-control" placeholder="姓名.."
                               name="password"  value=" <?php echo $row["password"]  ?>"></th>

            </tr>





            <tr>
                <th>手机号码: <input type="text" class="form-control" placeholder="性别.."
                                 name="phone_num"  value=" <?php echo $row["phone_num"] ?>"> </th>
                <th>注册时间: <input type="text" class="form-control" placeholder="学号.."
                                 name="regi_date"  value=" <?php echo $row["regi_date"]  ?>"></th>
            </tr>

            <tr>


                <th>账户余额: <input type="text" class="form-control"
                                  name="account"  value=" <?php echo $row["account"]  ?>"></th>
                <th>删除标记符: <input type="text" class="form-control"
                                  name="del"  value=" <?php echo $row["del"]  ?>"></th>



                <th><input type="hidden" class="form-control"
                           name="id"    value=" <?php echo $row["id"]  ?>"></th>



            </tr>

            <tr>

                <th colspan="2"  style="text-align: center;">
                    <input style=" margin: 0 auto;background-color: #428bca;border-color:#428bca"
                           type="submit" value="提交" class="btn btn-primary btn-lg btn-block">
                </th>

            </tr>

        </form>
    </table>


</div>



<?php

include '../../../public/bottom.php';

?>
