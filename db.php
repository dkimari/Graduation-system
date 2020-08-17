<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "register";

//connect to the server
$conn = mysqli_connect($host, $user , $password);
mysqli_select_db($conn, $db) or die(mysqli_error($con));

if($conn){
    //echo "Connected Successfully";
}else{
    echo "Failed to Connect";
}

?>