
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navabr-header">
                <span class="navbar-brand"><i class="fa fa-cart-arrow-down"></i>&nbsp;Ayush Store</span>
            </div>
        <ul class="nav navbar-nav navbar-left">
            <li>
            <a href="shopping.php"><i class="fa fa-home"></i>&nbsp;Home</a>
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
            <li><a href="#"  class="dropdown-toggle" data-toggle="dropdown"><?php echo "Welcome,&nbsp; <i class='fa fa-user'></i> $f_name" ?></a>
                <ul style="background-color:lightblue" class="dropdown-menu">
                    <li><a href="#" style="color:navy;font-weight:bold"><span class="fa fa-cart-arrow-down "></span></a> </li>
                    <li class="divider"></li>
                    <li><a href="#" style="color:navy;font-weight:bold">Change Password</a> </li>
                    <li class="divider"></li>
                    <li><a href="shopping.php" style="color:navy;font-weight:bold">Log Out</a> </li>
                </ul>
            </li>
            </ul>
    </div>
    </div>
    <p><br></p>
    <p><br></p>
</body>
