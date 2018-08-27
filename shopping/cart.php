<?php include_once('header.php')?>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">PVR</a>
            </div>
            <ul class="nav navbar-nav navbar-left">
               
                
                <li><form class="navbar-form">
                    <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                    <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Search" id="search_btn">
                    </div>              
                </form>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                  <li> <a href="profile.php"><i class="fa fa-home"></i>&nbsp;Profile</a></li>    
             </ul>
        </div>
    </nav>





<p><br></p>
<p><br></p>
<p><br></p>
<div class="body">
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div id="update_msg"></div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
    <div class="col-md-2">Action</div>
    <div class="col-md-2">Product Image</div>
    <div class="col-md-2">Product Name</div>
    <div class="col-md-2">Product Price</div>
    <div class="col-md-2">Quantity</div>
    <div class="col-md-2">Price in $</div>
        </div>
    </div>
    <div class="panel-body">
        <div id="user_cart">
        </div>
    </div>
    </div>
    </div>
    </div>

</div>
    <?php include_once('scripts.php')?>
</div>