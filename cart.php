<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Code-Commerce</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/cart.css">
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
                    <a href="customer_register.php">
                        Register
                    </a>
                </li>
                <li>
                    <a href="checkout.php">
                        My Account
                    </a>
                </li>
                <li>
                    <a href="cart.php">
                        Go to Cart
                    </a>
                </li>
                <li>
                    <a href="checkout.php">
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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li class="active">
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
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
                <li>Cart</li>
            </ul><!-- breadcrumb Ends -->
        </div><!-- col-md-12 Ends -->
        <div class="col-md-9" id="cart">
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart-form-data">
                    <h1>Shopping Cart</h1>
                    <p class="text-muted">You currently have 3 item(s) in your cart</p>
                    <div class="table-responsive"><!-- table-responsive Starts -->
                        <table class="table"><!-- table Starts -->
                            <thead><!-- thead Starts -->
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Size</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2">Sub-Total</th>
                                </tr>
                            </thead><!-- thead Ends -->
                            <tbody><!-- tbody Starts -->
                                <tr>
                                    <td>
                                        <img src="admin_area/product_images/product.jpg" alt="Product 1" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="#">MARVEL Black Kids POLO T-Shirt</a>
                                    </td>
                                    <td>
                                        <input type="text" name="qty" value="1" class="form-control">
                                    </td>
                                    <td>$100.00</td>
                                    <td>Large</td>
                                    <td>
                                        <input type="checkbox" name="remove[]">
                                    </td>
                                    <td>$100.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="admin_area/product_images/product.jpg" alt="Product 1" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="#">MARVEL Black Kids POLO T-Shirt</a>
                                    </td>
                                    <td>
                                        <input type="text" name="qty" value="1" class="form-control">
                                    </td>
                                    <td>$100.00</td>
                                    <td>Large</td>
                                    <td>
                                        <input type="checkbox" name="remove[]">
                                    </td>
                                    <td>$100.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="admin_area/product_images/product.jpg" alt="Product 1" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="#">MARVEL Black Kids POLO T-Shirt</a>
                                    </td>
                                    <td>
                                        <input type="text" name="qty" value="1" class="form-control">
                                    </td>
                                    <td>$100.00</td>
                                    <td>Large</td>
                                    <td>
                                        <input type="checkbox" name="remove[]">
                                    </td>
                                    <td>$100.00</td>
                                </tr>
                            </tbody><!-- tbody Ends -->
                            <tfoot><!-- tfoot Starts -->
                                <tr>
                                    <th colspan="5">Total</th>
                                    <th colspan="2">$100.00</th>
                                </tr>
                            </tfoot><!-- tfoot Ends -->
                        </table><!-- table Ends -->
                    </div><!-- table-responsive Ends -->
                    <div class="box-footer"><!-- box-footer Starts -->
                        <div class="pull-left"><!-- pull-left Starts -->
                            <a href="index.php" class="btn btn-default">
                                <i class="fa fa-chevron-left"></i> Continue Shopping
                            </a>
                        </div><!-- pull-left Ends -->
                        <div class="pull-right"><!-- pull-right Starts -->
                            <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                <i class="fa fa-refresh"></i> Update Cart
                            </button>
                            <a href="checkout.php" class="btn btn-primary">
                                Proceed Checkout <i class="fa fa-chevron-right"></i>
                            </a>
                        </div><!-- pull-right Ends -->
                    </div><!-- box-footer Ends -->
                </form>
            </div>
            <div id="row same-height-row"><!-- row same-height-row Starts -->
                <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->
                    <div class="box same-height headline"><!-- box same-height headline Starts -->
                        <h3 class="text-center">Products You Maybe Like</h3>
                    </div><!-- box same-height headline Ends -->
                </div><!-- col-md-3 col-sm-6 Ends -->
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 Starts -->
                    <div class="product same-height"><!-- product same-height Starts -->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product.jpg" alt="Product 1">
                        </a>
                        <div class="text"><!-- text Starts -->
                            <h3>
                                <a href="details.php">
                                    MARVEL Black Kids POLO T-Shirt
                                </a>
                            </h3>
                            <p class="price">$100.00</p>
                        </div><!-- text Ends -->
                    </div><!-- product same-height Ends -->
                </div><!-- col-md-3 col-sm-6 Ends -->
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 Starts -->
                    <div class="product same-height"><!-- product same-height Starts -->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product.jpg" alt="Product 1">
                        </a>
                        <div class="text"><!-- text Starts -->
                            <h3>
                                <a href="details.php">
                                    MARVEL Black Kids POLO T-Shirt
                                </a>
                            </h3>
                            <p class="price">$100.00</p>
                        </div><!-- text Ends -->
                    </div><!-- product same-height Ends -->
                </div><!-- col-md-3 col-sm-6 Ends -->
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 Starts -->
                    <div class="product same-height"><!-- product same-height Starts -->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/product.jpg" alt="Product 1">
                        </a>
                        <div class="text"><!-- text Starts -->
                            <h3>
                                <a href="details.php">
                                    MARVEL Black Kids POLO T-Shirt
                                </a>
                            </h3>
                            <p class="price">$100.00</p>
                        </div><!-- text Ends -->
                    </div><!-- product same-height Ends -->
                </div><!-- col-md-3 col-sm-6 Ends -->
            </div><!-- row same-height-row Ends -->
        </div><!-- col-md-9 Ends -->
        <div class="col-md-3">
        <div class="box" id="order-summary">
            <div class="box-header"><!-- box-header Starts -->
                <h3>Order Summary</h3>
            </div><!-- box-header Ends -->
            <p class="text-muted">
                Shipping and additional costs are calculated based on value you have entered
            </p>
            <div class="table-responsive"><!-- table-responsive Starts -->
                <table class="table"><!-- table Starts -->
                    <tbody><!-- tbody Starts -->
                        <tr>
                            <td>Order Subtotal</td>
                            <th>$446.00</th>
                        </tr>
                        <tr>
                            <td>Shipping and Handling</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <th>$0.00</th>
                        </tr>
                        <tr class="total">
                            <td>Total</td>
                            <th>$446.00</th>
                        </tr>
                    </tbody><!-- tbody Ends -->
                </table><!-- table Ends -->
            </div><!-- table-responsive Ends -->
        </div><!-- box Ends -->
        </div>
    </div><!-- container Ends -->
</div><!-- content Ends -->





<?php
include("includes/footer.php");
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>