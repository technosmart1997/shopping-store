<?php
if(isset($_REQUEST["logged-In"]))
{
    $customer_name=$_REQUEST["logged-In"];
?>   
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
        <ul class="nav navbar-nav navbar-left">
            <li>
            <a href="#"><i class="fa fa-home"></i>&nbsp;Home</a>
            </li>
            </ul>
            
            <ul  class="nav navbar-nav navbar-right">
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
            <a href="#"><span class="glyphicon glyphicon-modal-window "></span>&nbsp;Product</a>
            </li>
            <li><a href='#'><?php echo "Welcome&nbsp; $customer_name"?></a></li>
            </ul>
    
    </div>
    </div>
    <p><br></p>
    <p><br></p>
    <p><br></p>
</body>







<?php  
}
else
{
  header("location:shopping.php");
}
?>














<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="shopping.js"></script>