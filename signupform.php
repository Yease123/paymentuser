<?php
?>
<html>
    <title>is</title>
    <head>

    <link rel="stylesheet" href="signupform.css">
   
    </head>
    <?php
   include 'databaseconnect.php';
    $sql='SELECT*from signupform';
    $result=$conn->query($sql);
    $dname=[];
    $demail=[];

    
    
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
    
    $dname[]=$row["name"];
    $demail[]=$row["email"];
    
        }
    }
    
    
    
    
               $nameerr=$emailerr="";

               $name=$email=$password=$cpassword="";
               function input_data($data)
               {
                   $data=trim($data);
                   $data=stripslashes($data);
                   $data=htmlspecialchars($data);
                   return($data);

               }
               if(isset($_POST["submit"]))
               {
                
                $name= input_data($_POST['name']);
                if(!preg_match("/^[a-zA-Z]*$/",$name))
                {
                    $nameerr="only spaces and alphebet are allowed";
                 
                }
                foreach($dname as $dn)
    {
        if($dn==$name)
        $nameerr="username is already use";
    }
    $email=($_POST['email']);
    foreach($demail as $de)
    {
        if($de==$email)
        $emailerr="email is already use";
    }
   $password=($_POST['password']);
   $cpassword=($_POST['cpassword']);
   if($nameerr!=$emailerr)
   {
    echo "<style>#signupform {display:block;}</style>";
   }

   if($nameerr==$emailerr)
   {
    $sql1="INSERT INTO signupform (name,email,password)values('$name','$email','$password')";
    
if($conn->query($sql1)===true)
{

}
else
{
   
}
    echo"<script>
    window.location.href='main.php';
</script>";
   
  


   }
                
             
               }
               
               
               ?>
    <body>
        
    
<div id="signupform">
   
                <input type="button"  id="closesignup" value="x" style="margin-left:97%;cursor:pointer;">
                <p style="text-align: center;font-size:200%;margin-bottom: 3%;"><b>SIGNUP</b></p>
                <form action="" method="POST">
                    <label>NAME</label><br>
                    <input type="text" name="name" id="name" value="<?php echo $name?>" placeholder="enter the username" required><br>
                    <div id="s1"><?php echo $nameerr;?></div>
                    <label>EMAIl</label><br>
                    <input type="email" name="email" id="email" value="<?php echo $email?>" placeholder="enter email" required><br>
                    <div id="s2"><?php echo $emailerr;?></div>
                    <label>PASSWORD</label><br>
                    <input type="password" name="password" value="<?php echo $password?>" id="pass" placeholder="enter password" required><br>
                    <div id="s3"></div>
                    <label>CONFIRM PASSWORD</label><br>
                    <input type="password" name="cpassword" value="<?php echo $cpassword?>" id="cpass" placeholder="re-enter password" required><br>
                    <div id="s4"></div>
                    <input type="submit" value="signup" name="submit" onclick="return is();">

                </form>
                <p>Already have an account? <button id="loginfromsignup">login</button></p>
                <p id="signupmessageshown"></p>
</body>
              
</div>







               <script>
                function is()
                {
                var name=document.getElementById("name").value;
               if(name.length<8)
               {
                document.getElementById("s1").innerHTML="please enter the name of above 8 digit";
               return false;
            }
               else
               {
                document.getElementById("s1").innerHTML="";
               }
               var email=document.getElementById("email").value;
var emailp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(!emailp.test(email))
{
    document.getElementById("s2").innerHTML="please enter valid email";  
    return false;
}
else
{
    document.getElementById("s2").innerHTML="";  
}
var pass=  document.getElementById("pass").value;
if(pass.length<8)
{
    document.getElementById("s3").innerHTML="password must contain 8 character";
    return false;
}
else
{
    document.getElementById("s3").innerHTML="";  
}
cpass=document.getElementById("cpass").value;
if(cpass==pass)
{
    document.getElementById("s4").innerHTML="";      
}
else
{
    document.getElementById("s4").innerHTML="passwords doesnt match"; 
    return false;
}




                   
                }
           
               </script>

            

             
           </html>