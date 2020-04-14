<?php

include '../../../public/header.php';


?>

<div class="col-sm-9   col-md-8 col-md-offset-3  main">

    <h3 class="sub-header">当前位置：<strong>订单管理</strong></h3>

    <br/>


    <form   class="navbar-form"  action="downExceluser.php" method="post">

        <h2 class="sub-header" ><strong>导出所有用户</strong>
        </h2>
        <table class="table   table-striped table-hover  " border="0" cellpadding="8" cellspacing="0" >
            <div>

                <input type="submit"  value="确定" class="btn btn-default  btn-primary">
            </div>
        </table>
    </form>
    <form   class="navbar-form"  action="downExceltrader.php" method="post">

        <h2 class="sub-header" ><strong>导出所有商家</strong>
        </h2>
        <table class="table   table-striped table-hover  " border="0" cellpadding="8" cellspacing="0" >
            <div>

                <input type="submit"  value="确定" class="btn btn-default  btn-primary">
            </div>
        </table>
    </form>
    <form   class="navbar-form"  action="downExcelorder.php" method="post">

        <h2 class="sub-header" ><strong>导出所有订单</strong>
        </h2>
        <table class="table   table-striped table-hover  " border="0" cellpadding="8" cellspacing="0" >
            <div>

                <input type="submit"  value="确定" class="btn btn-default  btn-primary">
            </div>
        </table>
    </form>

</div>

<?php

include '../../../public/bottom.php';

?>

