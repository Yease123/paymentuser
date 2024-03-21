<html>
    <head>
        <link rel="stylesheet" href="searchbar.css">
       
    </head>
    <body >
        <?php
        $toname=$fromname=$datename="";
        if(isset($_POST["searchsubmit"]))
        {
        $source=$_POST["sourcee"];
        $destination=$_POST["destinatione"];
        $date=$_POST["when"];
        $fromname=$_POST["sourcee"];
        $toname=$_POST["destinatione"];
        $datename=$_POST["when"];
        }
        ?>
<div id="searchbar">
           
           <form method="POSt" action="" >
               
               <label>From</label><br>
               <input type="text" id="fromwhere" value="<?php echo $fromname?>" name="sourcee" list="city" required><br>
               <label>TO</label><br>
               <input type="text" id="towhere" value="<?php echo $toname?>" name="destinatione" list="city"required><br>
<label>Date</label><br>
<input type="date" id="day"  min="<?php echo date('Y-m-d');?>" name="when" required><br>
<input type="submit" id="search" name="searchsubmit" value="search">
<?php include'datalist.php';?>
 </form>
</body>
</div>
<?php
if(isset($_POST["searchsubmit"]))

   {
 echo" <div id='searchresult'>
   ";
   require 'routesindex.php';
require 'databaseconnect.php';

$sql="SELECT * FROM busroutes where source='$source'and destination='$destination'and datee='$date'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
 while($row=$result->fetch_assoc())
    {
    require 'businfo.php';
    }
    }




echo"</div>";


   }
   echo"<script>
  
    document.getElementById('searchresult').innerHTML+='<center><b>NO OTHER MATCH FOUND!!!</center></b>'; 
    
</script>";
?>



   </html>