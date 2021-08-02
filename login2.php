<?php
session_start();
include 'amaarsi_connect.php';
if(isset($_POST['submit']))
    {
  $name = mysqli_real_escape_string($con,$_POST['username']);
  $pass = mysqli_real_escape_string($con,$_POST['password']);
  $sql = "select * from signup_details where s_username = '$name' and s_pass='$pass';";
  $res = mysqli_query($con,$sql);
  if(mysqli_num_rows($res)){
    $_SESSION['username'] = $name;
    echo "<SCRIPT> 
     alert('logged in successfully')
     window.location.replace('indexpro.php');
     </SCRIPT>";
  }
  else{
    echo"<script> alert('try again');
    window.location.replace('login.php');
    </script>;";
}
}
?>
<!DOCTYPE html>
<html>
    <title>Amaarsi Elelphant Transit Home | Login</title>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Orphange for baby elephants">
        <meta name="keywords" content="elephant,orphange,baby">
        <meta name="author" content="Amaraja Vijayakumar">
        <link rel="stylesheet" href="./css/amaarsi.css">
   
    </head>  
        <body>
            <div class="wrapper">
              
           
                   
            <nav>
                <img src="amaarsi2.PNG" class="logo" align="left" margin-left="0px">
                <div class="menudropdown1">
            <ul>
                <li><a href="indexpro.php" target="_blank">Home</a></li>
                <li>About Us
                <ul>
                <li><a href="misvis.html"  target="_blank">Mission & Vision</a></li>
                <li><a href="boardd.html"target="_blank">Board Members</a></li>
                </ul>
              
                <li>Get Involved
                 <ul>
                <li><a href="volunteer.html"target="_blank">Volunteer</a></li>
                <li><a href="adoptelly.html"target="_blank">Adopt now</a></li>
                <li><a href="donate.html"target="_blank">Donate now</a></li>
                </ul>
                <li><a href="abtelly.html"target="_blank">About Elephants</a></li>
                <li><a href="login.php"target="_blank">Login</a></li>
                <li><a href="contact.html"target="_blank">Contact Us</a></li>  
                <li><a href="logout.php"target="_blank">Logout</a></li> 
              
                
        </ul>            
        </li>
        </div>
        </nav>
        </div>
                <section class="bod">
                <div class="container1" >
                    <div class="header">
                        <img src="amaarsibandw.png" class="logo2">
                        <h2>LOGIN</h2>
                    </div>
                    <form class="form" id="form" action="validate.php" method="POST">
                        <div class="form-control">
                            <label>Username: </label>
                            <input type="text" placeholder="username" id="username" name="username" required>

                        </div>
                        
                        <div class="form-control">
                            <label>Password: </label>
                            <input type="password" placeholder="password" id="password" name="password" required>
                            
                        </div>
                        <div >
                            <input type="checkbox" id="remember" name="remember" >
                            <label>Remember Me </label><br><br>    
                        </div>
                     <button  class="but1" style="width:100%;" name="login"><span>Login</span></button>
                    
                    </form>
                    <a style="margin-left:4%;" href="signup.html" target="_blank">Dont have an account ? Click here</a>
                    <?php if(isset($_COOKIE['member_user']) && isset($_COOKIE['member_pass'])){
                    $user = $_COOKIE['member_user'];
                    $pwd = $_COOKIE['member_pass'];
                    echo"<script> document.getElementById('username').value = '$user';
                    document.getElementById('password').value = '$pwd';</script>";
                }  ?>                  
                </div>
                <aside>
                    <img src="loginimg.jpg">
                </aside>
            </section>
            <footer>
                <img src="amaarsibandw.png" class="logo1">
                 
               <div class="container">
                <form action="subsform.html" target="_blank">
                    <button  class="but1"><span>Subscribe To Our Newsletter! &#128024;</span></button>
                  </form>
                    <p style="margin-top: 0.5rem;">Amaarsi Elephant Transit Home,Copyright&copy;2021 </p><hr style="margin-top: 0.5rem;">
                   <div class="foot">
                    
                        <div class="footer-heading">
                            <h2> <a href="indexpro.html" target="_blank">HOME</a></h2>
                         </div>
                         <div class="footer-heading ">
                        <h2>ABOUT US</h2>
                        <a href="misvis.html"target="_blank">MISSION & VISION</a>
                        <a href="boardd.html"target="_blank">BOARD MEMBERS</a>
                      </div>
                        <div class="footer-heading ">
                          <h2>GET INVOLVED</h2>
                          <a href="volunteer.html"target="_blank">volunteer</a>
                          <a href="adoptelly.html"target="_blank">adopt an elephant</a>
                          <a href="donate.html"target="_blank">donate now</a>
                        </div>
                        <div class="footer-heading">
                            <h2><a href="abtelly.html"target="_blank">About Elephants</a></h2>
                          </div>
                        <div class="footer-heading">
                          <h2> <a href="contact.html"target="_blank">contact us</a></h2>
                       </div>
                       <div class="footer-heading">
                        <h2><a href="login.html"target="_blank">Login</a></h2>
                      </div>
                     </div>
                </div> 
             </footer> 
        </body>    
</html>
