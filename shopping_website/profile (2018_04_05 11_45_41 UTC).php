<style>
  .navbar
    {
        margin-bottom:0px;
        }
</style>

<?php 
include("header.php");
if(isset($_REQUEST["id"]))
{
    $id=$_REQUEST["id"];
    $connection=mysqli_connect("localhost","root","vertrigo");
    $db_connect=mysqli_select_db($connection,"shopping");
    $sql="select * from user_info where user_id='$id'";
    $run_query=mysqli_query($connection,$sql);
    $count_row=mysqli_num_rows($run_query);
   $row=mysqli_fetch_assoc($run_query);
    $f_name=$row["first_name"];
    $l_name=$row["last_name"];
    $email=$row["email"];
    $mobile=$row["mobile"];
    ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
        <li><a href="#" >Welcome,&nbsp;<?= $f_name ?></a></li>
        <li><a href="pagination+pager.php">Home</a></li>
        </ul>
    <ul class=" nav navbar-nav navbar-right">
        <li><a href="#" >&nbsp;<?= $email ?></a></li>
    </ul>
    </div>
</nav>
<div class="container-fluid">
</div>

<?php
    }
    else
    {
        
    }
include("script.php");        
    
?>