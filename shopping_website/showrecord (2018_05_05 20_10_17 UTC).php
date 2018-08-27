<?php
include("header.php");
?>

<?php
$limit=2;
$offset=0;
if(isset($_REQUEST["offset"]))
{
    $offset=$_REQUEST["offset"];
}
$connection=mysqli_connect("localhost","root","vertrigo");
$db_connect=mysqli_select_db($connection,"shopping");
if($db_connect)
{
    $sql="select user_id,first_name,mobile,user_profile from user_info limit $limit offset $offset";
    $run_query=mysqli_query($connection,$sql);
    $query_error=mysqli_error($connection);
   if(!$query_error)
   {
    $count=mysqli_num_rows($run_query);
       if($count>0)
    {
           ?>
<div class="container">
           <div class="panel panel-primary">
            <div class="panel-heading">
                Records
               </div>
               <div class="panel-body">
            
<?php
           echo "<div class='well'>";
           echo "<table class='table table-bordered'>";
        while($rows=mysqli_fetch_assoc($run_query))
        { 
            echo "<tr>";
            foreach($rows as $k=>$value)
            {
                if($k=="user_profile")
                {
                 $img_src=$value;   
                }
                else
                {
                    echo "<td>$value</td>";
                }
            }
            echo "<td><img style='width:80px;height:80px' class='img img-circle' src='uploaded_content/$img_src'/></td>";          
            echo "<td><a href='profile.php?id=".$rows['user_id']."'><button class='btn btn-success'> View Profile</button></a></td>";

             echo "</tr>";
            
        }
           echo "</table>";
           echo "</div>";
           ?>
               </div>
               <div class="panel-footer">
        <ul class="pager">.
            <li class="previous"><a href="showrecord.php?offset=<?= $offset-$limit ?>" >Previous</a></li>
            <li>
                <?php
               $sql="select count(*) as records from user_info";
               $run_query=mysqli_query($connection,$sql);
            $records=mysqli_fetch_assoc($run_query);
           $record=$records["records"];
                  if($record%$limit==0)
                  {
              $nooflinks=$record/$limit;
                  }
           else
           {
               $nooflinks=$record/$limit;
               $nooflinks++;
            }
           
           echo "<ul class='pagination'>";
           for($count=1;$count<=$nooflinks;$count++)
               {
               $newoffset=($count-1)*$limit;
               echo "<li><a href='showrecord.php?offset=$newoffset'>$count</a><li>";
               }
           echo "</ul>";
           ?>
            </li>
            
            <li class="next"><a href="showrecord.php?offset=<?= $offset+$limit ?>">Next</a></li>
        </ul>
    </div>
</div>
</div>                 
      <?php             
    }
   }
    else
    {
        
    }
}
?>












<?php
include("script.php");
?>
