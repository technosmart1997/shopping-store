<?php
include_once('connect.php');
session_start();
if(isset($_POST["category"]))
{
    $cat="select * from categories";
    $res=mysqli_query($connect,$cat);
    echo '<div class="nav nav-pills nav-stacked">
    <li class="active"><a href="#"><h4>Categories</h4></a></li>';
    
    $count = mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $cid=$row['cat_id'];
            $ctit=$row['cat_title'];
            echo "<li><a href='#' class='category' cid='$cid'>$ctit</a></li>";
        }
    }
}
if(isset($_POST["brand"]))
{
    $brand="select * from brands";
    $res=mysqli_query($connect,$brand);
    echo '<div class="nav nav-pills nav-stacked">
    <li class="active"><a href="#"><h4>Brands</h4></a></li>';
    
    $count = mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $bid=$row['brand_id'];
            $btit=$row['brand_title'];
            echo "<li><a href='#' class='brand' bid='$bid'>$btit</a></li>";
        }
    }
}
if(isset($_POST["product"]))
{
    $product="select * from products order by rand() limit 0,9";
    $res=mysqli_query($connect,$product);
    $count = mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $pid=$row['product_id'];
            $pcat=$row['product_cat'];
            $pbra=$row['product_brand'];
            $ptit=$row['product_title'];
            $pp=$row['product_price'];
            $pimg=$row['product_image'];
            $pdesc=$row['product_desc'];
            
            
            echo "<div class='col-md-4'>
                                <div class='panel panel-primary'>
                                    <div class='panel-heading'>$ptit</div>
                                    <div class='panel-body'><img style='height:160px; width:180px' src='images/$pimg.jpg'>
                                    </div>
                                    <div class='panel-heading'>
                                        Rs&nbsp;$pp
                                        <button type='button' id='product_add' pid='$pid' class='pull-right btn btn-success btn-xs '>Add To Cart</button>
                                    </div>
                                </div>
            </div>";
                                
           
        }
    }
}

if(isset($_POST["sel_cat"]))
{
    $cid=$_POST["cid"];
    $product="select * from products where product_cat='$cid'";
    $res=mysqli_query($connect,$product);
    $count = mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $pid=$row['product_id'];
            $pcat=$row['product_cat'];
            $pbra=$row['product_brand'];
            $ptit=$row['product_title'];  
            $pp=$row['product_price'];
            $pimg=$row['product_image'];
            $pdesc=$row['product_desc'];
            
            
            echo "<div class='col-md-4'>
                                <div class='panel panel-primary'>
                                    <div class='panel-heading'>$ptit</div>
                                    <div class='panel-body'><img style='height:160px; width:180px' src='images/$pimg.jpg'>
                                    </div>
                                    <div class='panel-heading'>
                                        Rs&nbsp;$pp
                                        <button type='button' id='product_add' pid='$pid' class='pull-right btn btn-success btn-xs'>Add To Cart</button>
                                    </div>
                                </div>
            </div>";
                                
           
        }
    }
}


if(isset($_POST["sel_brand"]))
{
    $bid=$_POST["bid"];
    $product="select * from products where product_brand='$bid'";
    $res=mysqli_query($connect,$product);
    $count = mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $pid=$row['product_id'];
            $pcat=$row['product_cat'];
            $pbra=$row['product_brand'];
            $ptit=$row['product_title'];  
            $pp=$row['product_price'];
            $pimg=$row['product_image'];
            $pdesc=$row['product_desc'];
            
            
            echo "<div class='col-md-4'>
                                <div class='panel panel-primary'>
                                    <div class='panel-heading'>$ptit</div>
                                    <div class='panel-body'><img style='height:160px; width:180px' src='images/$pimg.jpg'>
                                    </div>
                                    <div class='panel-heading'>
                                        Rs&nbsp;$pp
                                        <button type='button' pid='$pid' class='pull-right btn btn-success btn-xs id='product_add'>Add To Cart</button>
                                    </div>
                                </div>
            </div>";
                                
           
        }
    }
}


if(isset($_POST["d"]))
{
    $d=$_POST["d"];
    $search="select * from products where product_title like '%$d%'";
    $res=mysqli_query($connect,$search);
    $count = mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $pid=$row['product_id'];
            $pcat=$row['product_cat'];
            $pbra=$row['product_brand'];
            $ptit=$row['product_title'];  
            $pp=$row['product_price'];
            $pimg=$row['product_image'];
            $pdesc=$row['product_desc'];
            
            
            echo "<div class='col-md-4'>
                                <div class='panel panel-primary'>
                                    <div class='panel-heading'>$ptit</div>
                                    <div class='panel-body'><img style='height:160px; width:180px' src='images/$pimg.jpg'>
                                    </div>
                                    <div class='panel-heading'>
                                        Rs&nbsp;$pp
                                        <button type='button' pid='$pid' class='pull-right btn btn-success btn-xs id='product_add'>Add To Cart</button>
                                    </div>
                                </div>
            </div>";
                                
           
        }
    }
}

if(isset($_POST['addproduct']))
{
    $pid=$_POST['pid'];
    $user_id=$_SESSION['uid'];
    
    $cmd="select * from cart where p_id = '$pid' and user_id = '$user_id'";
    $res=mysqli_query($connect,$cmd);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
        echo "<div class='alert alert-info alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Danger</strong>'This Item Is Already Inserted In Your Cart'!!!.
            </div>";
    }
    else
    {
        $sql="select * from products where product_id='$pid'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_assoc($result);
            $pid=$row['product_id'];
            $ptit=$row['product_title'];  
            $pp=$row['product_price'];
            $pimg=$row['product_image'];
        
        $ins="insert into cart(p_id,user_id,product_title,product_image,qty,price,total_amount)       value('$pid','$user_id','$ptit','$pimg',1,'$pp','$pp')";
        $res=mysqli_query($connect,$ins);
         
        if($res)
        {
        echo "<div class='alert alert-success alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Thanks!!</strong>The Item Is Successfully Added In Your Cart!!!.
            </div>";
        }
    }
}


if(isset($_POST['user_cart']))
{
    $uid=$_SESSION['uid'];
    $cmd="select * from cart where user_id='$uid'";
    
    $res=mysqli_query($connect,$cmd);
    $count=mysqli_num_rows($res);
    
    if($count>0)
    {
        $no=1;
         while($row=mysqli_fetch_assoc($res))
         {
             $id=$row['id'];
             $pro_id=$row['p_id'];
             $p_title=$row['product_title'];
             $p_image=$row['product_image'];
                $pprice=$row['price'];
             
              echo "
              <div class='row'>
              <div class='col-md-3'>$no</div>
              <div class='col-md-3'><img src='images/$p_image.jpg'></div>
              <div class='col-md-3'>$p_title</div>
              <div class='col-md-3'>$pprice</div>
              </div>";
             $no=$no+1;
         }
    }
    else
    {
           echo "<div class='alert alert-info alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Sorry!!</strong>No Product Available In The Cart!!!.
            </div>";
    }
}


?>
