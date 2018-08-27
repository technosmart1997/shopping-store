<?php
include("header.php");
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        </ul>
    <ul class=" nav navbar-nav navbar-right">
        <li><a href="pagination+pager.php">Register</a></li>
        <li><a href="showrecord.php">ShowRecord</a></li>
    </ul>
    </div>
</nav>
 <div class="container">
     <?php
include("register.php");
?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-sign-up"></i><h3 class="panel-title">Customer Registeration Form</h3>
            </div>
            <div class="panel-body">
                <form action="#" method="post">
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






















<?php
include("script.php");
?>