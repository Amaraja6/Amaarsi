<?php

session_start();
session_regenerate_id();

include 'amaarsi_connect.php';

if (isset($_POST['paynow']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['auser'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $add = $_POST['add'];
    $doa = $_POST['doa'];
    $country = $_POST['country'];
    $state = $_POST['state'];
$insert = "INSERT INTO adopt_details VALUES ('$fname','$lname','$user','$email','$pno','$add','$doa','$country','$state');";
$result = mysqli_query($connect,$insert);
if($result){
    echo"<script> alert('THANK YOU FOR ADOPTING !')
    window.location.replace('indexpro.html');</script>";   
}
else{
    echo"<script> alert('Only Existing Users Can Make Adopt ! Please Sign Up With Us');</script>";
}
}
?>