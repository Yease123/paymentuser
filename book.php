<html>
    <head><title>OBTRS</title>
       
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="book.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
        <?php include 'navbar.php';?>
        <body>
             <?php include 'signupform.php';?>
        <?php include 'loginform.php';?>
        <div id="message" style="display:none;height:7%;width:100%;background-color:red;">
 PLEASE SELECT SEAT
</div>

        <div id="bookbody">
          
            <div id="showseat">
            <img src="stee.png" alt="steering" style="height:45px;width: 35px; margin-left:53%;margin-bottom:5px;">
            <?php
           
      $gid=$_GET["hide"];    
include 'databaseconnect.php';
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT seat FROM ticket where id='$gid'";
$result = $conn->query($sql);
$myArray = array(); 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $myArray = array_merge($myArray, explode(",", $row["seat"]));
   
  }}
 
  
  $conn->close();
?>





<?php
if(isset($_SESSION["username"]))
{
$user=$_SESSION["username"];


}


$gsource=$_GET["source"];
$gdestination=$_GET["destination"];
$gtime=$_GET["departuretime"];
$gdate=$_GET["date"];
$gbusnumber=$_GET["busnumber"];
$row=$_GET["row"];
$column=$_GET["column"];
$fare=$_GET["price"];

echo"<center>";
for($i=1;$i<=$row;$i++)
{
for($j=1;$j<=$column;$j++)


{
    echo"<input type='button' value='r{$i}c{$j}' id='r{$i}c{$j}' style='background-color:aqua;' onclick='is(this.id);'>";
    echo"&nbsp;&nbsp;&nbsp;";
    if($j%2==0)
    {
        echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
}
echo"<br>";
}
echo"";

?>
        </div>
        
        <div id="selectedseat">
          <?php 
          if(isset($_SESSION["username"]))
          {
           echo" <form style='margin-top:5%;margin-left:5%; color:red;' method='post' id='formid' onsubmit='return ki();'>
           

         <legend>selected seat</legend>
         <textarea id='txt1' name='txt1'
   rows='5' cols='33' readonly></textarea><br>
         <input type='reset' value='clear'style='margin-top:2%;margin-left:25%;' onclick='hi();'>
<input type='button' value='Pay' id='payment' style='background-color:purple;crusor:pointer; padding:2px'>
<input type='submit' value='book' id='bookbtn' name='book' style='display:none' >
       

           
           ";
          }
          else
          {
            echo" <form style='margin-top:5%;margin-left:5%; color:red;' method='post' onsubmit='return hello();'>


            <legend>selected seat</legend>
            <textarea id='txt1' name='txt1'
      rows='5' cols='33' readonly></textarea><br>
            <input type='reset' value='clear'style='margin-top:3%;margin-left:35%;' onclick='hi();'>
<input type='submit' value='book' name='book'>
          </form>



            ";
          }
            ?>
                
<?php echo"<div style='margin-top:5%;margin-left:5%; color:red;'>
<legend>Total Fare</legend>
<textarea id='txt2' name='txt2'
          rows='5' cols='33' readonly></textarea><br>
</div></form>";
?>
    
</div>

</div>
       <script>
      
      var seats = <?php echo json_encode($myArray); ?>;
   
    
for (var i = 0; i < seats.length; i++) {
  
  var button = document.getElementById(seats[i]);
 
    button.style.backgroundColor="red";
    button.disabled = true;
  
}
       </script>
        <script>
          var array=[];
          var price = "<?php echo $fare; ?>";
          var fare = parseInt(price);
function is(id) {
  
  var button = document.getElementById(id);

  var textarea = document.getElementById("txt1");
 
  if (button.style.backgroundColor == "aqua") {
   
    button.style.backgroundColor = "yellow";
    document.getElementById("txt2").value = Number(document.getElementById("txt2").value) + fare;
  
    array.push(id);
   
    var string = array.join(",");
   
    textarea.value = string;
  } else {
    
    button.style.backgroundColor = "aqua";
    document.getElementById("txt2").value-=fare;
  
    var index = array.indexOf(id);
    
    if (index > -1) {
   
      array.splice(index, 1);
      
      var string = array.join(",");
      
      textarea.value = string;
    }
  }
}
function hi()
{

  for (var i = 0; i < array.length; i++)
   {
  
    var id = array[i];
 
    var button = document.getElementById(id);
    
    button.style.backgroundColor = "aqua";
  }
 
array=[];
document.getElementById("txt2").value="";
  
}
function hello()
{
  var block = document.getElementById("login");

    block.style.display = "block";
  return false;
}





function   ki()
{
 
  if(document.getElementById("txt1").value=="")
  {

    var message = document.getElementById("message");
  
  message.style.display = "block";

  setTimeout(function() {
    message.style.display = "none";
  },1000);
  return false;
  }
  else
  {
  
   



  }
  


}
var config = {
    // Your Khalti public key
    publicKey: 'test_public_key_976d2879a09146299bdc1ce8480fb0de',
    productIdentity: '12345',
    productName: 'Test Product',
    productUrl: 'http://example.com/test',
    eventHandler: {
        onSuccess (payload) {
            console.log(payload);
         
            document.getElementById("bookbtn").click();
           
         
        },
        onError (error) {
            console.log(error);
        },
        onClose () {
            console.log('Widget is closed');
        }
    }
};

var checkout = new   KhaltiCheckout(config);
document.getElementById("payment").addEventListener("click", function () {
    checkout.show({ amount: document.getElementById("txt2").value*100 });
});







  </script>




  <?php
  if(isset($_POST["book"]))
  {
$textarea = $_POST['txt1'];
$array = explode(',', $textarea);
$price=$_POST['txt2'];
foreach($array as $a)
{
  echo"".$a;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "routes";

include 'databaseconnect.php';


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$bookdate=date("Y-m-d") ;
$sql = "INSERT INTO ticket (name,date,time,price,source,destination,busnumber,id,bookondate,seat) VALUES ('$user','$gdate','$gtime','$price','$gsource','$gdestination','$gbusnumber','$gid','$bookdate','" . implode(',', $array) . "')";

if ($conn->query($sql) === TRUE) {
 echo"<script>window.location.href='profile.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
?>
    <?php include 'footer.php';?>
</body>

<script src="index.js">

   </script>
 
</html>



   
