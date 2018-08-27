<?php
if(isset($_POST["search_btn"]))
{
    $search=$_POST["search_data"];
    $connection=mysqli_connect("localhost","root","vertrigo");
    $isError=mysqli_connect_error($connection);
    mysqli_select_db($connection,"shopping");
    $cmd="select * from products where product_brand like '%$search%' or product_title like '%$search%' or  product_price like '%$search%'"; 
    $res=mysqli_query($connection,$cmd);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
         while($rows=mysqli_fetch_assoc($res))
        {
         $prod_id=$rows["product_id"];
                 $prod_name=$rows["product_title"];
                 $prod_image=$rows["product_image"];
                 $prod_cost=$rows["product_price"];
         
                 echo   "<div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'>$prod_name</div>
                            <div class='panel-body'><img style='height:230px;width:220px' src='images/$prod_image'/></div>
                            <div class='panel-heading'>Cost&nbsp;&nbsp;<i class='fa fa-inr'></i>&nbsp;$prod_cost
                                <button  style='float:right' type='button' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
                            </div>
                        </div>
                        </div>";
       }
        
    }
}
else
{
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
    $cmd="select * from products order by rand() limit 0,18";
    $run_query=mysqli_query($connection,$cmd);
    $error=mysqli_error($connection);
    
     while($rows=mysqli_fetch_assoc($run_query))
        {
         $prod_id=$rows["product_id"];
                 $prod_name=$rows["product_title"];
                 $prod_image=$rows["product_image"];
                 $prod_cost=$rows["product_price"];
         
                 echo   "<div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'>$prod_name</div>
                            <div class='panel-body'><img style='height:230px;width:220px' src='images/$prod_image'/></div>
                            <div class='panel-heading'>Cost&nbsp;&nbsp;<i class='fa fa-inr'></i>&nbsp;$prod_cost
                                <button  style='float:right' type='button' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
                            </div>
                        </div>
                        </div>";
       }
    
}
}
?>