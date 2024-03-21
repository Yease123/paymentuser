<html>
  <head>
    
  <link rel="stylesheet" href="loginform.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php

$pass=$mail="";
$lemailerr="";

?>

<?php


if(isset($_POST["loginbtn"]))
{


$pass=$_POST["lpassword"];
$mail=$_POST["lemail"];
 
include 'databaseconnect.php';
  $sql="SELECT  *from signupform where email='$mail' and password='$pass'";
 
  $result=$conn->query($sql);
  
  if($result->num_rows>0)
  {
      while($row = $result->fetch_assoc())
      {
  
        $dlname=$row["name"];
      
        
break;
  
      }
      session_start();
      $_SESSION["username"]=$dlname;
      $_SESSION["email"]=$_POST["lemail"];
      $_SESSION["password"]=$_POST["lpassword"];
      $_SESSION["id"]=$userid;
        
      
        echo"<script>window.location.href='main.php'</script>";
  }
  else
  {
    $lemailerr="email or password doesnt match";
  
  }

if($lemailerr!="")
{
  echo "<style>#login{display:block;}</style>";
  $pass=$_POST["lpassword"];
  $mail=$_POST["lemail"];

}
  }
 if(isset($_POST["reset"]))
 {
  $lemailerr="";
  $name="";
  $pass="";
  $_POST["lpassword"]="";
  $_POST["lemail"]="hi";

 }
?>
<body>
 
<div id="login">
  
               
<input type="reset"  id="closelogin" value="x" name="reset">
                <div id="usericon"><i class="fa fa-user" style="font-size:500%;"></i></div>
    <form method="POST" action="" >
        <center><div id="s11" style="height:1%;color:red;font-size:smaller;margin-bottom:3%;margin-top:0%;"><?php echo $lemailerr ?></div></center>
                    <div>
                    <i class="fa fa-envelope" style="margin-left:7%;font-size:150%;color:white;"></i>
                  <input type='email'  name="lemail" placeholder='enter your email' required style="margin-right:5%;"value="<?php echo $mail?>" id="lemail"> </div>
                  <br>
                  <div>
                   <i class='fa fa-key icon'style="margin-left:7%;font-size:150%;color:white;"></i>
                  <input type='password'  name="lpassword" placeholder='enter password' required style="margin-right:5%;"value="<?php echo $pass?>" id="password">
                  </div>
                  <br>
                  <input type='submit' value='LOGIN' id="loginbtn" name="loginbtn" style="background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);padding-left:20%;padding-right: 20%;margin-left:23%;padding-top:2%;padding-bottom:2%;margin-bottom: 7%;">
                  <br>
                   </form>
                  <p style="text-align: center;text-transform:uppercase;color:red;">don't have account?
                    <button id="signbtn">signup</button>
                     </p>
                              
                 



            </div>

</body>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
          

