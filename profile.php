<?php
session_start();
if(isset($_SESSION['isloggedin']))
{
?>
<head>
    <?php include_once('header.php') ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top register_navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">PVR</a>
            </div>
            <ul  class="nav navbar-nav navbar-right">
                <li> <a href="#" ><i class="fa fa-shopping-cart"></i>&nbsp;Cart&nbsp;<span class="badge badge_value"></span></a></li>
                <li> <a class="dropdown-toggle" data-toggle="dropdown"  href="#"><i class="fa fa-user"></i>&nbsp;<?php echo "Hi, ".$_SESSION["name"] ?><span class="caret"></span></a>
                <ul class="dropdown-menu profile_menu">
                    <li><a href="#" id="my_cart"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Cart</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Log Out</a></li>
                </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li> <a href="#"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                <li> <a href="#"><i class="fa fa-product-hunt"></i>&nbsp;Product</a></li>
                <li><form class="navbar-form">
                    <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                    <div class="form-group">
                <input type="button" class="btn btn-primary" value="Search" id="search_btn">
                    </div>
                    </form></li>              
            </ul>
        </div>
    </nav>
    
    <p><br></p>
    <p><br></p>
    <p><br></p>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <div id="cat_section"></div>
                <p><br></p>
                <div id="brand_section"></div>
                
            </div>
            <div class="col-md-8">
                <div id="item_add_msg">
                
                </div>
                <div class="well">
                    <div class="panel panel-info">
                        <div class="panel-heading">Products</div>
                        <div class="panel-body">
                            <div id="product_section"></div>
                           
                            </div>
                        <div class="panel-footer">
                        &copy;&nbsp;2017
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once('scripts.php') ?>
</body>
<?php
}
else
{
    header('location:index.php');
}
?>