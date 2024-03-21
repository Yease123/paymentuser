<html>
    <head>
        <style>
      *
{
margin:0;
padding:0;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
        </style>
          <link rel="stylesheet" href="routes.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
    
    <body>
</html>




<?php
require 'navbar.php';?>

<div id="routesbody">
    <?php
require 'routesbody.php';?>
 <select id='sortby'style='height:5%;width:5%;' onInput='myfunction();'>
          <option value='0'>SortBY</option>
          <option value='1'>Available seat</option>
          <option value='2'selected>price</option>
</select>
<?php


try
{
  require 'databaseconnect.php';
  $sql="SELECT * from busroutes ORDER BY fare";
  $result=$conn->query($sql);
  $rowcount=mysqli_num_rows($result);
  
  if($result->num_rows>0)
  {
  require 'routesindex.php';
    while($row = $result->fetch_assoc())
    {
       
require 'businfo.php';
    }   
  } 
}
finally
{

}

?>
</div>
<?php
require 'footer.php';

?>
<script>
    
    function myfunction()
    {
      var nam=document.getElementById("sortby").value
      if(nam==1)
      {
        window.location.href='availableseat.php';
      }
      if(nam==2)
      {
        window.location.href='price.php';
      }
      if(nam==0)
      {
        window.location.href='routes.php';
      }
    }
    
  
</script>

