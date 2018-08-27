
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="jasny-bootstrap/css/jasny-bootstrap.min.css">
<link rel="stylesheet" href="shopping.css">
    <title>Ayush Store</title>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navabr-header">
                <span class="navbar-brand"><i class="fa fa-cart-arrow-down"></i>&nbsp;Ayush Store</span>
            </div>
        <ul class="nav navbar-nav">
            <li>
            <a href="#"><i class="fa fa-home"></i>&nbsp;Home</a>
            </li>
            <li>
            <a href="#"><span class="glyphicon glyphicon-modal-window "></span>&nbsp;Product</a>
            </li>
        </ul>
            <form method="post" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" name="search_data"/>
                </div>
                 <input type="submit" class="btn btn-primary" name="search_btn"/>
            </form>
            
           <ul class="nav navbar-nav navbar-right">
            <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Cart&nbsp;<span class="badge">0</span></a>
                <div class="dropdown-menu" style="width:400px">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3">Sr No.</div>
                                <div class="col-md-3">Product Image</div>
                                <div class="col-md-3">Product Name</div>
                                <div class="col-md-3">Price in Rs.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;Sign-In</a>
                <div class="dropdown-menu">
                    <div style="width:300px;margin:0px;" class="panel panel-primary">
                        <div class="panel-heading">Log  In</div>
                        <div style="border-top:1px solid white" class="panel-heading">
                         
                            <form method="post">
                                <div class="form-group">
                                    <label for="log_in_email">Email</label>
                                    <input type="email" class="form-control" name="log_in_email" id="log_in_email">
                                </div>
                                <div class="form-group">
                                    <label for="log_in_password">Password</label>
                                    <input type="password" class="form-control" name="log_in_password" id="log_in_password">
                                </div>
                                <button type="submit" name="login_form_submit" class="btn btn-success btn-md">Log In</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <span class="float:right"><a  class="float:right" href="#">Forgot Password</a>&nbsp;<i class="fa fa-question"></i></span>
                            </div>
                    </div>
                    
                </div>
            </li>
             <li>
            <a href="customer_registration_page.php"><i class="fa fa-user"></i>&nbsp;Sign-Up</a>
            </li>
            </ul>
            </div>
    </div>
    <p><br></p>
    <div class="container">
      <?php
        include("sign_in.php");
            ?>
    </div>
    <p><br></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <?php 
                include("categories.php");
                ?>
                <p><br></p>
            <?php 
                include("brand.php");
                ?>  
                
            </div>
            <div class="col-lg-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Products.</h3>
                    </div>
                    <div class="panel-body">
                        
                 
                           
                   <?php     
                  include("get_product.php");
                        ?>
                        
                        </div>
                    <div class="panel-footer">&copy;&nbsp;2017</div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
        
    </div>
    
</body>




<?php
include_once("script.php");
?>
