<?php
?>
<html>
    <head>
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
    <body><?php
session_start();
if(isset($_SESSION["username"]))
{
  $user=$_SESSION["username"];
echo"
<div id='navbar'>
    <img src='logo.png' style='height:4%;width:7%;'>
    <span style='margin-left:45%;'>
<input type='button' value='HOME' id='homebtn' onclick=\"window.location.href='main.php';\">
<input type='button' value='ROUTES' id='routebtn' onclick=\"window.location.href='routes.php';\">
<input type='button' value='ABOUT' id='aboutbtn'onclick=\"window.location.href='about.php';\">
<span margin-top:100%;'>
<button style='font-size:30px; background-color:transparent;border:none;'><i class='fa fa-user-circle-o'></i></button>
<div class='menu' style='display: none;'>
<input type='text' value='mr.$user'disabled style='color:red;'>
<input type='button' value='signout' id='signoutbtn' onclick=\"window.location.href='signout.php';\"style='color:red;'>
<input type='button' value='Profile' id='profilebtn' onclick=\"window.location.href='profile.php';\"style='color:red;'>
</div>
</span>
    


</span>
              
               
            </div>";

}
else
{
 echo" <div id='navbar'>
    <img src='logo.png' style='height:4%;width:7%;'>
    <span style='margin-left:45%;'>
<input type='button' value='HOME' id='homebtn' onclick=\"window.location.href='main.php';\">
<input type='button' value='ROUTES' id='routebtn' onclick=\"window.location.href='routes.php';\">
<input type='button' value='ABOUT' id='aboutbtn'onclick=\"window.location.href='about.php';\">
<input type='button' id='registerbtn' value='Register'>
</span>
              
               
            </div>";


}
?>
</body>
<script>
    var btn = document.querySelector("button");
    var menu = document.querySelector(".menu");
    btn.onclick = function() {
    menu.style.display = menu.style.display == "none" ? "block" : "none";
  };
  window.onclick = function(event) {
    if (!event.target.matches("button") && !event.target.matches("i")) {
      menu.style.display = "none";
    }
  };
</script>
</html>

           