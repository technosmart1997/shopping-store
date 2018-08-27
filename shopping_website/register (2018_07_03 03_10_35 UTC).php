<?php
if(isset($_POST["signup_button"]))
   {
       $cust_fname=$_POST["f_name"];
       $cust_lname=$_POST["l_name"];
       $cust_email=$_POST["email"];
       $cust_password=$_POST["password"];
       $cust_contact=$_POST["contact"];
       $cust_repassword=$_POST["repassword"];
       $cust_address1=$_POST["address1"];
       $cust_address2=$_POST["address2"];
    $file=$_FILES["profile"];
    $error_code=$file["error"];
    $src=$file["tmp_name"];
    $name=$file["name"];
    $new_name=time()."_$name";
    $dest="uploaded_content/$new_name";
    if($cust_password==$cust_repassword)
    {
    $connection=mysqli_connect("localhost","root","vertrigo");
    $isError=mysqli_connect_error($connection);
    mysqli_select_db($connection,"shopping");
    if($isError)
    {
        echo "Error";
    }
    else
    {
        $sql=("select user_id from user_info where email='$cust_email'");
        $check_query = mysqli_query($connection,$sql);
        $count_query=mysqli_num_rows($check_query);
        if($count_query>0)
        {
            echo "<div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <i class='fa fa-exclamation-triangle'></i>Email Id Already Exists Please Enter Another Email Id!!!! 
            </div>";
        }
        else
        {
            if($error_code!=0)
            {
             $sql="insert into  user_info  (first_name,last_name,email,password,mobile,address1,address2)     values('$cust_fname','$cust_lname','$cust_email','$cust_password','$cust_contact','$cust_address1','$cust_address2')";
             $sql_query=mysqli_query($connection,$sql);
            $sql_error=mysqli_error($connection);
             if($sql_query)
             {
                 echo "<div class='alert alert-success'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <i class='fa fa-check'></i>You are Registerd
            </div>";
             }
            
            else
            {
                echo "Sorry Please Try Again";
            }
        }
        else
        {
             $sql="insert into  user_info  (first_name,last_name,email,password,mobile,address1,address2,user_profile)     values('$cust_fname','$cust_lname','$cust_email','$cust_password','$cust_contact','$cust_address1','$cust_address2','$new_name')";
             $sql_query=mysqli_query($connection,$sql);
             $sql_error=mysqli_error($connection);
             if($sql_query)
             {        
                 move_uploaded_file($src,$dest);
                 echo "<div class='alert alert-success'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                 <i class='fa fa-check'></i>You are Registerd
                 </div>";
             }
            
            else
            {
                echo "Sorry Please Try Again";
            }
            
        }
        }
    }
    }
    else
    {
           echo "<div class='alert alert-danger'>
           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
           <i class='fa fa-exclamation-triangle'></i> Password Doesn't Match
            </div>";
    }
       
  }
?>