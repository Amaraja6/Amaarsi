<?php

session_start();
session_regenerate_id();

include 'amaarsi_connect.php';

if(isset($_POST['donate'])){
    $d_fname = $_POST['fname'];
    $d_lname = $_POST['lname'];
    $d_username = $_POST['duser'];
    $d_email = $_POST['email'];
    $d_phno = $_POST['pno'];
    $d_addr = $_POST['add'];
    $d_dod = $_POST['dod'];
    $d_country = $_POST['country'];
    $d_state = $_POST['state'];
    $d_amt=$_POST['amt'];
    $insert = "INSERT INTO donate_details VALUES ('$d_fname','$d_lname','$d_username','$d_email','$d_phno','$d_addr','$d_dod','$d_country','$d_state','$d_amt');";
    $result = mysqli_query($connect,$insert);
    if($result){
    echo"<script> alert('THANK YOU FOR YOUR DONATION! IT MEANS A LOT')
    window.location.replace('indexpro.html');</script>";   
    }
    else{
        echo"<script> alert('Only Existing Users Can Make A Donation ! Please Sign Up With Us');</script>";
    }
}
?>