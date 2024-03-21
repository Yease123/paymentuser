
<html>
    <head>
    <link rel="stylesheet" href="routes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>YATAYAT routes</title>
</head>
  <?php
     include 'navbar.php';
     ?>
<body >
   <?php include 'signupform.php';?>
        <?php include 'loginform.php';?>
        <div id="routesbody">
<?php require 'routesbody.php'; ?>
<select id='sortby'style='height:5%;width:5%;' onInput='myfunction();'>
          <option value='0'>SortBY</option>
          <option value='1'>Available seat</option>
          <option value='2'>price</option>
</select>
<br>
<div id="overflow"></div>
<?php


try
{
  require 'databaseconnect.php';
  $sql="SELECT * from busroutes";
  $result=$conn->query($sql);
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

?>
</div>


</body>

<script src="index.js">

   </script>
   
       <?php include 'footer.php';?>
       <script >
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
</html>
