<html>
    <head><title>OBTRS.Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
    <body>
        <?php require 'navbar.php'
        ?>
        <div id="logo">
            <?php
          if(isset($_SESSION["username"])) ;
          {
            $username=$_SESSION["username"];
          }
          include 'databaseconnect.php';
        $sql3="SELECT * from ticket where name='$username'";
            
            $result4= $conn->query($sql3);
              if($result4->num_rows)
              {
               while($row=$result4->fetch_assoc())
                  {
               echo"
                
               <div id='ticketbody' class='block'>
               <center>
               <i class='fa fa-user-circle-o' style='font-size:75px;color:white;'></i><br>
               </center>
                  <label for >name:</label>
                  ".$row["name"]."
                  <br>
               
                  <label>source:</label>
                  ".$row["source"]."<br>
                  <label>destination:</label>
                  ".$row["destination"]."<br>
                  <label>date:</label>
                  ".$row["date"]."<br>
                  <label>departure at:</label>
                ".$row["time"]."<br>
                  <label>bus number:</label>
                 ".$row["busnumber"]."<br>
                  <label>seats:</label>
                ".$row["seat"]."<br>
                <label>bookdate:</label>
                ".$row["bookondate"]."<br>
                <form method='post'>
                  <input type='hidden' name='ticketid' value='".$row["ticketid"]."'>
                  <center>
                  <input type='submit' name='deleteticket' value='Cancel' class='buttonclass'>
                  <input type='button' name='printticket' value='PrintTicket' class='buttonclass' onclick='print();'>
                  </form>
                  </center>
               
                  
               </div>
               ";
                  }}
                 
            ?>
            <?php
            
            if(isset($_POST["deleteticket"]))
            {
              $ticketid=$_POST["ticketid"];
              include 'databaseconnect.php';
            $sql2="DELETE FROM ticket where ticketid='$ticketid'";
            
            if ($conn->query($sql2) === TRUE) {
              echo"<script>window.location.href='profile.php'</script>";
              
            } 
            else 
            {
              
            }
            
            }
            ?>
            <script>
                function print()
                {
                  

var div = document.getElementById("ticketbody");
  var content = div.innerHTML;
var printWindow = window.open("", "", "width=800,height=600");
  printWindow.document.write(content);
  printWindow.document.close();
  printWindow.focus();
  printWindow.print();
  printWindow.close();

                }
                </script>
           


        </div>
        <?php require 'footer.php'?>
    </body>
</html>