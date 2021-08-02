<?php
session_start();
session_regenerate_id();

include 'amaarsi_connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['vname'];
    $email = $_POST['email'];
    $text = $_POST['message'];

    $insert = "INSERT INTO volunteer_details VALUES('$name','$email','$text');";
    $result = mysqli_query($connect,$insert);
    if($result){
        echo"<script> alert('Thank you, our herd will get back to you soon!')
        window.location.replace('indexpro.html');</script>";
    }

    else{
        echo"<script> alert('ERROR try again!');</script>";
    }
}
?>