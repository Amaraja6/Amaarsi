<?php
session_start();
session_regenerate_id();

include 'amaarsi_connect.php';

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    $email_check_query = mysqli_query($connect,"SELECT * FROM signup_details WHERE s_email = '{$email}' ");
    $rowCount = mysqli_num_rows($email_check_query);
    
    if(!empty($fname) && !empty($lname) && !empty($username) 
    && !empty($email) && !empty($password) && !empty($cpassword)){
        if($rowCount>0){
            echo"<script> alert('Email alredy in use')
            window.location.replace('signup.html');</script>";
        }

    else{
    
    $insert="INSERT INTO signup_details VALUES('$fname','$lname','$username','$email',
    '$password','$cpassword');";
    $result = mysqli_query($connect,$insert);
    if($result){
        echo"<script> alert('Thank You For Signing In With Us')
        window.location.replace('indexpro.html');</script>";
    }
    else{
        echo"<script> alert('username is invalid');</script>";
    }
        }
    }
}
?>
