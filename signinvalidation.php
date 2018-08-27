<?php
session_start();
include_once('connect.php');

if(isset($_POST['signin_btn']))
   {
       $email=$_POST['login_email'];
       $pass=$_POST['login_pass'];
       
       $email= mysqli_real_escape_string($connect,$email); 
       $cmd="select * from user_info where email='$email'";
       $res=mysqli_query($connect,$cmd);
       $count=mysqli_num_rows($res);
       if($count==1)
       {
        $row=mysqli_fetch_assoc($res);
        $passverify=password_verify($pass,$row["password"]);
        if($passverify)
        {
            session_regenerate_id();
            $_SESSION['uid']=$row['user_id'];
            $_SESSION['name']=$row['first_name'];
            $_SESSION['isloggedin']=true;
            header("location: profile.php");
        }
         else
        {
            echo "<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i>&nbsp; Wrong Password</div>";
        }
       }
       else
       {
           echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Username Already Exist</div>'; 
       }
   }
?>