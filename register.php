<?php
include_once('connect.php');

$fname=$_POST["f_name"];
$lname=$_POST["l_name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$repass=$_POST["re_password"];
$mob=$_POST["mobile"];
$add1=$_POST["address_1"];
$add2=$_POST["address_2"];
    
$name="/^[A-Z][a-zA-Z ]+$/";
$emailVal="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";

if(empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($repass) || empty($mob) || empty($add1) || empty($add2) )
    {
    echo '<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Wrong!</strong> Please fill all the details!!!.
</div>';
    exit();
    } 
else
{
   if(!preg_match($name,$fname))
   {
       echo "<div class='alert alert-danger alert-dismissable'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Wrong!</strong>$fname is not valid First Name!!!.
</div>";
    exit();
   }
if(!preg_match($name,$lname))
   {
       echo "<div class='alert alert-danger alert-dismissable'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Wrong!</strong>$lname is not valid Last Name!!!.
</div>";
     exit();
   }
if(!preg_match($emailVal,$email))
   {
       echo "<div class='alert alert-danger alert-dismissable'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Wrong!</strong>$email is not valid Email Type!!!.
</div>";
     exit();
   }

if(strlen($pass)<9)
{
     echo "<div class='alert alert-danger alert-dismissable'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Danger!</strong>Password is Weak!!!.
</div>";
     exit();
}

if($pass!=$repass)
{
     echo "<div class='alert alert-danger alert-dismissable'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Error!</strong>Password Doesn't Match!!!.
</div>";
     exit();
}
if(strlen($mob)==10)
{
   $check="select * from user_info where email='$email'";
   $res=mysqli_query($connect,$check);
   $count=mysqli_num_rows($res);
   if($count>0)
   {
       echo "<div class='alert alert-danger alert-dismissable'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Error!</strong>Please Add Another Email Address!!!.
</div>";
   }
    else
    {
        $hashpass=password_hash($pass,PASSWORD_DEFAULT);
        $cmd="insert into user_info (first_name,last_name,email,password,mobile,address1,address2) values('$fname','$lname','$email','$hashpass','$mob','$add1','$add2')";
        $res=mysqli_query($connect,$cmd);
        
        echo "<div class='alert alert-success alert-dismissable'>
             <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
             <strong>Success!</strong>You Are Successfully Registered!!!.
             </div>";
    }
    
}
else
{
     echo "<div class='alert alert-danger alert-dismissable'>
     <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
     <strong>Error!</strong>Mobile No is Not Valid!!!.
     </div>";
     exit();
} 
}

    
?>