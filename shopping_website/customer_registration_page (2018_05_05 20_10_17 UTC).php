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
        <ul class="nav navbar-nav navbar-right">
            <li>
            <a href="shopping.php"><i class="fa fa-home"></i>&nbsp;Home</a>
            </li>
            <li>
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
            </ul>
        </div>
    </div>
    <p><br></p>
    <p><br></p>
     <?php
     include("sign_in.php");
     ?>
    <p><br></p>
    <div class="container">
        <?php include_once("register.php") ?>
    </div>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-sign-up"></i><h3 class="panel-title">Customer Registeration Form</h3>
            </div>
            <div class="panel-body">
                <form  method="post" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-5">
                            <div class="form-group">
                                <label for="f_name">First Name</label>
                                <input type="text" id="f_name" name="f_name" class="form-control" placeholder="Enter First Name..." required>
                            </div>
                    </div>
                    
                    <div class="col-md-5">
                            <div class="form-group">
                                <label for="l_name">Last Name</label>
                                <input type="text" placeholder="Enter Last Name..." id="l_name" name="l_name" class="form-control" required>
                            </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-5">
                             <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter You Email..." id="email" name="email" class="form-control" required >
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5">
                             <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter You Password..." id="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                              <div class="form-group">
                                <label for="repassword">ReEnter Password</label>
                                <input type="password" placeholder="Enter You Password..." id="repassword" name="repassword" class="form-control" required>
                            </div>
                    </div>
                        </div>
                    
                      <div class="row">
                        <div class="col-md-5">
                             <div class="form-group">
                                <label for="contact">Contact No</label>
                                <input type="tel" placeholder="Enter You Contact No..." id="contact" name="contact" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                  <div class="row">
                    <div class="col-md-10"> 
                    <label for="profile">Profile Image</label>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                     <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>                                                              <span class="fileinput-filename"></span></div>
                     <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Upload Image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="profile" id="profile"></span>
                     <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-5">
                             <div class="form-group">
                                <label for="address1">Address 1</label>
                                <input type="text" placeholder="Enter You Address..." id="address1" name="address1" class="form-control" required>
                            </div>
                        </div>
                         <div class="col-md-5">
                             <div class="form-group">
                                <label for="address2">Address 2</label>
                                <input type="text" placeholder="Enter You Address..." id="address2" name="address2" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <p><br></p>
                      <div class="form-group">
                          <button  type="submit" name="signup_button" class="btn btn-success"><i class="fa fa-sign-in"></i>&nbsp;Sign In</button>
                          <input type="reset" class="btn btn-info" value="Reset">
                    </div>                           
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
</body>