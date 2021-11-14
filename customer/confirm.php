<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Code-Commerce</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/shop.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<div id="top"><!-- top starts-->
    <div class="container">
        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">
                Welcome Guest
            </a>
        </div>
        <div class="col-md-6">
            <ul class="menu">
                <li>
                    <a href=" ../customer_register.php">
                        Register
                    </a>
                </li>
                <li>
                    <a href="my_account.php">
                        My Account
                    </a>
                </li>
                <li>
                    <a href="../cart.php">
                        Go to Cart
                    </a>
                </li>
                <li>
                    <a href="../checkout.php">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="navbar navbar-default" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand home">
            <img src="https://banner2.cleanpng.com/20180907/gsu/kisspng-logo-woocommerce-brand-wordpress-vector-graphics-woocommerce-logo-svg-vector-amp-png-transparent-5b92a1066f88a4.0923923115363361344569.jpg" alt="logo" class="hidden-xs" width="70px" height="55px">
            <img src="https://banner2.cleanpng.com/20180907/gsu/kisspng-logo-woocommerce-brand-wordpress-vector-graphics-woocommerce-logo-svg-vector-amp-png-transparent-5b92a1066f88a4.0923923115363361344569.jpg" alt="logo" class="visible-xs" width="70px" height="55px">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
            <div class="padding-nav">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../shop.php">Shop</a>
                    </li>
                    <li  class="active">
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-primary navbar-btn right" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
                <span>10 Items in Cart</span>
            </a>
            <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->
                <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div><!-- navbar-collapse collapse right Ends -->
            <div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->
                <form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->
                    <div class="input-group"><!-- input-group Starts -->
                        <input class="form-control" type="text" placeholder="Search" name="user_query" required>
                        <span class="input-group-btn"><!-- input-group-btn Starts -->
                        <button type="submit" value="Search" name="search" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                        </span><!-- input-group-btn Ends -->
                    </div><!-- input-group Ends -->
                </form><!-- navbar-form Ends -->
            </div><!-- collapse clearfix Ends -->
        </div> 
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="col-md-12"><!-- col-md-12 Starts -->
            <ul class="breadcrumb"><!-- breadcrumb Starts -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>My Account</li>
            </ul><!-- breadcrumb Ends -->
        </div><!-- col-md-12 Ends -->
        <div class="col-md-3"><!-- col-md-3 Starts -->
            <?php include("includes/sidebar.php"); ?>
        </div><!-- col-md-3 Ends -->
        <div class="col-md-9">
<div class="box">
    <h1 align="centre">please confirm your payment</h1>
    <form action="confirm.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label>Invoice No</label>
    <input type="text" class="form-control" name="invoice_no" required>
</div>


<div class="form-group">
    <label>Amount sent:</label>
    <input type="text" class="form-control" name="amount_sent" required>
</div>


<div class="form-group">
    <label>select payment Mode</label>
    <select name="payment_mode" class="form-control">
        <option>Select payment Mode</option>
        <option>Bank code</option>
        <option>UBL/omni paisa</option>
        <option>Easy paisa</option>
        <option>western union</option>
    </select>
</div>


<div class="form-group">
    <label>Transaction/Reference Id:</label>
    <input type="text" class="form-control" name="ref_no" required>
</div>


<div class="form-group">
    <label>Easy paisa/omni code:</label>
    <input type="text" class="form-control" name="code" required>
</div>


<div class="form-group">
    <label>Payment Date</label>
    <input type="text" class="form-control" name="date" required>
</div>
<div class="text-centre">
    <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
<i class="fa fa-user-md"> </i> confirm payment



    </button>
</div>

    </form>
</div>


        </div>
     


        </div>
</div>




<?php
include("includes/footer.php");
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
