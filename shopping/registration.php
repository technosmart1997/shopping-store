<head>
<?php    include_once('header.php') ?>
<style>
    body
    {
        background-image: url(images/shop_back.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size:auto;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">PVR</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li> <a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                <li> <a href="#"><i class="fa fa-product-hunt"></i>&nbsp;Product</a></li>
            </ul>
        </div>
    </nav>
    <p><br></p>
    <p><br></p>
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="signup_msg">
                </div>
            </div>
        </div>
          <div class="row">
              
              <div class="col-md-6 col-md-offset-3">
                 <h1 align="center" style="font-weight:bold;color:white;font-size:40px">User Registration Form</h1>
                  <hr>
                  <form method="post" action="#">
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="f_name" class="form-control" placeholder="First Name"/>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" placeholder="Last Name" name="l_name" class="form-control"/>
                      </div>    
                  </div>
                      </div>
                      <br>
                      <div class="form-group">
                          <input type="email" placeholder="Email" name="email" class="form-control"/>
                      </div> 
                      <br>
                       <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Password"/>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="password" placeholder="Re-Password" name="re_password" class="form-control"/>
                      </div>    
                  </div>
                      </div>
                      <br>
                       <div class="form-group">
                          <input type="tel" placeholder="Contact No." name="mobile" class="form-control"/>
                      </div> 
                      <br>
                       <div class="form-group">
                          <input type="text" placeholder="Address 1" name="address_1" class="form-control"/>
                      </div> 
                      <br>
                       <div class="form-group">
                          <input type="text" placeholder="Address 2" name="address_2" class="form-control"/>
                      </div>    
                      <br>
                      <div class="form-group">
                          <input type="submit" name="signup_btn" id="signup_btn" class="btn btn-success btn-lg" value="Sign In"/>
                           <input type="reset"  style="margin-left:50px;" class="btn btn-info btn-lg" value="Reset"/>
                      </div>    
                      
                  </form>
              </div>
          </div>
    </div>
    <?php    include_once('scripts.php') ?>
</body>