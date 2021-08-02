<?php
session_start();
session_regenerate_id();

include 'amaarsi_connect.php';

if (isset($_POST['login'])){

    $user = $_POST['username'];
    $pwd = $_POST['password'];

   $auth = "SELECT * FROM signup_details WHERE s_username = '$user' AND s_pass = '$pwd'; ";
$result = mysqli_query($connect,$auth);
$count = mysqli_num_rows($result);
if($count == 1){
    if(isset($_POST['remember'])){
        setcookie('member_user',$user,time()+2592000);
        setcookie('member_pass',$pwd,time()+2592000);
    }
    $_SESSION['username']=$user;
    echo"<script> alert('WELCOME TO AMAARSI');
    window.location.replace('indexpro.php');</script>";
}
else{
    echo"<script> alert('Invalid Username OR password ! ');
    window.location.replace('login.php');</script>";
}
}
?>
    












?>