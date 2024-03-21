
   function susb()
   {
    window.alert("SORRY!!This feature is not available yet");
   }

   registerbtn.addEventListener("click",function()
   {
if(login.style.display==="block")
{
   login.style.display="none";

}
else
{
   login.style.display="block";
}


   });
   

   
   closelogin.addEventListener("click",function()
   {
      if(login.style.display==="none")
      {
         login.style.display="block";
      
      }
      else
      {
         login.style.display="none";
      }
var form =document.getElementsById("foorm").value;
form.reset();

   });

    
   signbtn.addEventListener("click",function()
   {
if(signupform.style.display==="block")
{
   signupform.style.display="none";

}
else
{
   signupform.style.display="block";
}

   });

    
   signbtn.addEventListener("click",function()
   {
if(login.style.display==="block")
{
   login.style.display="none";

}


   });

  

   loginfromsignup.addEventListener("click",function()
   {
if(signupform.style.display==="block")
{
   signupform.style.display="none";

}
login.style.display="block";

   });
   closesignup.addEventListener("click",function()
   {
      window.location.href="main.php";


   });

   




       
         

   