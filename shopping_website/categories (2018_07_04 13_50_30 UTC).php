
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<?php
$connection=mysqli_connect("localhost","root","vertrigo");
$isError=mysqli_connect_error($connection);
if($isError)
    {
        echo "Error";
    }
else
{
     $cmd="use shopping";
    $run_query=mysqli_query($connection,$cmd);
    $error=mysqli_error($connection);
    $cmd="select * from categories";
    $run_query=mysqli_query($connection,$cmd);
    $error=mysqli_error($connection);
    
     echo "<ul class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Categories</h4></a></li>";
        while($rows=mysqli_fetch_assoc($run_query))
        {
            $cat_name=$rows['cat_title'];
            echo "<li><a href='#' class='category' id='category' style='font-family:verdana'>$cat_name</a></li>";
       }
    echo "</ul>";
}


?>