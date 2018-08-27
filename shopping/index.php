
<?php
session_start();
if(isset($_SESSION['isloggedin']))
{
    header('location:profile.php');
}
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
                <li> <a href="registration.php"><i class="fa fa-user-plus"></i>&nbsp;SignUp</a></li>
                <li> <a href="#" data-toggle="modal" data-target="#modal1"><i class="fa fa-sign-in"></i>&nbsp;SignIn</a></li>
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
     <div class="modal fade" id="modal1">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">SIGNUP HERE</h2>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10">
                             <form method="post" action="signinvalidation.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="login_email" class="form-control" placeholder="Enter Email" required/>
            </div>
            
             <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="login_pass" class="form-control" placeholder="Enter Password" required/>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-success btn-lg" id="login_btn" name="signin_btn" value="Welcome">
                  <input type="reset"  class="btn btn-default btn-lg"/>
            </div>
        </form>
       
                         </div>
                    </div>
                          
                    </div>
                    
                    <div class="modal-footer">
<button class="btn btn-primary" data-dismiss="modal" data-target="#modal1">Close</button>
                        <a style="float:left" href="resetpassword.php">Forgot Password?</a>
                    </div>
                </div>
            </div>
            </div>
            
    
    <?php include_once('scripts.php') ?>
</body>