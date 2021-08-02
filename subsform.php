<?php
session_start();
session_regenerate_id();

include 'amaarsi_connect.php';

if(isset($_POST['subs'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];

    $insert="INSERT INTO subsform_details VALUES ('$fname','$lname','$email');";
    $result=mysqli_query($connect,$insert);
    
    if($result){
        echo"<script> alert('Thank You For Subscribing!')
        window.location.replace('indexpro.html');</script>";
    }
    else{
        echo"<script> alert('ERROR, Please Try Again ');</script>";
    }
}
?>