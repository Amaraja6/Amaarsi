<?php
$connect = mysqli_connect("localhost","root","","amaarsi_database");
if(!$connect){
    echo"<script>alert ('Connection Failed');</script>";
}
/*OR
if(!$connect){
    die('connection failed'.mysql_error());

}*/
?>