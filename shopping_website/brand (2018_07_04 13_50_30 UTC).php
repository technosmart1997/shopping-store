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
    $cmd="select * from brands";
    $run_query=mysqli_query($connection,$cmd);
    $error=mysqli_error($connection);
    
     echo "<ul class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Brands</h4></a></li>";
        while($rows=mysqli_fetch_assoc($run_query))
        {
            $brand_name=$rows['brand_title'];
            echo "<li><a href='#' style='font-family:verdana'>$brand_name</a></li>";
       }
    echo "</ul>";
}


?>