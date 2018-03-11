<!DOCTYPE HTML> 
<?php
  require_once ('config1.php');
session_start();
$error ="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $myusername=$_POST['user'];
        $mypassword=$_POST['pass'];
 
        $sql="SELECT * FROM ADMIN WHERE USERNAME='$myusername' and PASSWORD='$mypassword'";
        $result=mysqli_query($connection,$sql);
        $count=mysqli_num_rows($result);
 
 
// If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
       

     $_SESSION['user']=$myusername;
      
      
      
       header("location: index.php");
     return true;
     }
     else
{
$error="Invalid username or password";
}
  

}
  
?>


<html>
  <head> 
    <title>Sign-In</title>
   
  </head> 
  <body 
         id="body-color"
    <div id="Sign-In">
        
    <div class = "loginbox">
      
      
              <form method="POST" action=""  class="form-signin">
                <h2 style="border:1px solid Tomato;text-align:center;color:white;background-color:rgba(255, 99, 71, 0.5);"> LOG-IN-HERE</h1>
                <p  style= "color:#0000ff"> Username</p>
          <input style="border:1px width:150px;" type="text"  name="user" size="35px" required>
                <p style= "color:#0000ff"> Password </p>
         <input style="border:1px width:150px;" type="password" name="pass" size="35px" required> <br>   <br>
                
      <br>    <br>
          <input id="button"; type="submit"style="background-color:red;margin-left:auto;margin-right:auto;display:block;" name="submit" value="Submit">
                    
                
        </form>
          <?php echo $error;?>       
</div>
    </div>
  </div>
  </body>
</html> 

 <style>
 body  {
   width:100px; 
   height:100px;
     margin: 0;
     padding:0;
     background : url(https://www.walldevil.com/wallpapers/a46/background-plain-wallpaper-damask-wallpapers-desktop.jpg);
   background-size:100%;
   font-family:sans-serif;
   }
   
   
#body-color
{ background-color:#6699CC;
} 
#Sign-In
{
margin-top:150px; margin-bottom:150px;
margin-right:150px;
margin-left:450px;
border:3px solid #a1a1a1;
padding:9px 35px;
background:#8000CC;
width:400px;
border-radius:20px;
box-shadow: 7px 7px 6px;
}
#button
{
border-radius:20px;
width:100px;
height:40px;
padding 50px;
background:#FF00FF;
font-weight:bold;
font-size:20px;
 
  
  
}
.loginbox
   {
     border:2px solid Tomato;
     margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
       width:300px;
     height:400px;
     padding 40px 80px;
     box-sizing:border-box;
     background:rgba(0,0,0,0.5);
     
 }
   
.button-wrapper{
  width:150px;
  height:40px;
  font-size:16px;
  display:block;
}
.button-wrapper input{
  height:100%;
  width:100%;
}
   
</style>


