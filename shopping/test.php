<?php
session_start();
include_once('connect.php');
if(isset($_POST['user_cart_content']))
{
    $uid=$_SESSION['uid'];
    $cmd="select * from cart where user_id='$uid'";
    
    $res=mysqli_query($connect,$cmd);
    $count=mysqli_num_rows($res);
    
    if($count>0)
    {
         while($row=mysqli_fetch_assoc($res))
         {
             $id=$row['id'];
             $pro_id=$row['p_id'];
             $p_title=$row['product_title'];
             $p_image=$row['product_image'];
             $pprice=$row['price'];
             $qty=$row['qty'];
             $total=$row['total_amount'];         
             
    echo "
    <div class='row'>
    <div class='col-md-2'>
                 <div cLass='btn-group'>
                       <button remove_id='$pro_id' class='btn btn-danger remove' ><i class='fa fa-trash'></i></button>
                       <button update_id='$pro_id' class='btn btn-success update' ><i class='fa fa-check-square'></i></button>
                </div>   
    </div>
    <div class='col-md-2'><img width='60px' height='60px' src='images/$p_image.jpg'></div>
    <div class='col-md-2'>$p_title</div>
    <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pprice' disabled></div>
    <div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty'></div>
    <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled></div>
        </div>
                 </div>";
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

if(isset($_POST['remove_update']))
{
    $pid=$_POST['pid'];
    $uid=$_SESSION['uid'];
    $cmd="delete from cart where p_id='$pid' and user_id='$uid'";
    
    $res=mysqli_query($connect,$cmd);
   
    $newcmd="select * from cart where user_id='$uid'";
    $resn=mysqli_query($connect,$newcmd);
    
    $count=mysqli_num_rows($resn);
    if($count>0)
    {
         while($row=mysqli_fetch_assoc($resn))
         {
             $id=$row['id'];
             $pro_id=$row['p_id'];
             $p_title=$row['product_title'];
             $p_image=$row['product_image'];
             $pprice=$row['price'];
             $qty=$row['qty'];
             $total=$row['total_amount'];         
             
    echo "
    <div class='row'>
    <div class='col-md-2'>
                 <div cLass='btn-group'>
                       <button remove_id='$pro_id' class='btn btn-danger remove' ><i class='fa fa-trash'></i></button>
                       <button update_id='$pro_id' class='btn btn-success update' ><i class='fa fa-check-square'></i></button>
                </div>   
    </div>
    <div class='col-md-2'><img width='60px' height='60px' src='images/$p_image.jpg'></div>
    <div class='col-md-2'>$p_title</div>
    <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pprice' disabled></div>
    <div class='col-md-2'><input type='text' id='qty-$pro_id' class='form-control qty' pid='$pro_id' value='$qty'></div>
    <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled></div>
        </div>
                 </div>";
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


if(isset($_POST['to_update']))
{
    $upid=$_POST['upid'];
    $qty=$_POST['qty'];
    $total=$_POST['total'];
    $uid=$_SESSION['uid'];
    
    $cmd="update cart set qty='$qty', total_amount='$total' where p_id='$upid' and user_id='$uid'";
    
    $res=mysqli_query($connect,$cmd);
    if($res)
    {
           echo "<div class='alert alert-success alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Success!!</strong>Your Cart Has Been Updated Successfully!!!.
          </div>";
    }
}

if(isset($_POST['update_qty']))
{
    $uid=$_SESSION['uid'];
   
    $newcmd="select * from cart where user_id='$uid'";
    $resn=mysqli_query($connect,$newcmd);
    
    $count=mysqli_num_rows($resn);
    if($count>0)
    {
         while($row=mysqli_fetch_assoc($resn))
         {
             $id=$row['id'];
             $pro_id=$row['p_id'];
             $p_title=$row['product_title'];
             $p_image=$row['product_image'];
             $pprice=$row['price'];
             $qty=$row['qty'];
             $total=$row['total_amount'];         
             
    echo "
    <div class='row'>
    <div class='col-md-2'>
                 <div cLass='btn-group'>
                       <button remove_id='$pro_id' class='btn btn-danger remove' ><i class='fa fa-trash'></i></button>
                       <button update_id='$pro_id' class='btn btn-success update' ><i class='fa fa-check-square'></i></button>
                </div>   
    </div>
    <div class='col-md-2'><img width='60px' height='60px' src='images/$p_image.jpg'></div>
    <div class='col-md-2'>$p_title</div>
    <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pprice' disabled></div>
    <div class='col-md-2'><input type='text' id='qty-$pro_id' class='form-control qty' pid='$pro_id' value='$qty'></div>
    <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled></div>
        </div>
                 </div>";
         }
    }
    
}

if(isset($_POST['pro_count']))
{
    $uid=$_SESSION['uid'];
    
    $cmd="select * from cart where user_id='$uid'";
    $res=mysqli_query($connect,$cmd);
    
    $count= mysqli_num_rows($res);
    
    if($count>0)
    {
    echo "$count";
   }
}


?>