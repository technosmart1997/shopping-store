<?php
session_start();
if(isset($_POST["login_form_submit"]))
{
    if(!empty($_POST["log_in_email"]) and !empty($_POST["log_in_password"]))
    {
    $user_email=$_POST["log_in_email"];
    $user_password=$_POST["log_in_password"];
        
    $connection=mysqli_connect("localhost","root","vertrigo");
    $isError=mysqli_connect_error($connection);
    if($isError)
    {
        echo "Error";
    }
    else
    {
        mysqli_select_db($connection,"shopping");
        $cmd="Select * from user_info where email='$user_email' AND password='$user_password' ";
        $run_query=mysqli_query($connection,$cmd);
        $error=mysqli_error($connection);
        $count=mysqli_num_rows($run_query);
            if($count==0)
            {
             echo "<div class='alert alert-danger'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <i class='fa fa-exclamation-triangle'></i> Username or Password is Wrong...
            </div>";
        }
        else
        {
            $rows=mysqli_fetch_assoc($run_query);
            header("location:user_page.php?Logged_In=".$rows['user_id']."");
        }
    }
}
}

?>