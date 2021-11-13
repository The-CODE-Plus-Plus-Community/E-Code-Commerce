<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <center>
            <img src="customer_images/download.jpg" class="img-responsive">
        </center>
        <br>
        <h3 align="centre" class="panel-title">Name:Brock Lesnar</h3>
    </div>
    <div class"panal-body">
        <ul class="nav nav-pills nav-stacked">
            <li class="<?php if(isset($_GET['my_orders'])) {echo "active";}?>">
                <a href="my_account.php?my_orders"><i class="fa fa-list"></i>My orders
            </a>
            </li>
            <li class="<?php if(isset($_GET['pay_offline'])) {echo "active";}?>">
                <a href="my_account.php?pay_offline"><i class="fa fa-bolt"></i>pay offline
            </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])) {echo "active";}?>">
                <a href="my_account.php?pay_offline"><i class="fa fa-pencil"></i>Edit Account
            </a>
            </li>
            <li class="<?php if(isset($_GET['change_pass'])) {echo "active";}?>">
                <a href="my_account.php?pay_offline"><i class="fa fa-user"></i>change password
            </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])) {echo "active";}?>">
                <a href="my_account.php?delete_account"><i class="fa fa-trash-o"></i>Delete Account
            </a>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-sign-out"></i>logout
            </a>
            </li>
        </ul>

    </div>
</div>