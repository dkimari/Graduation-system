<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "register";


$conn=mysqli_connect($host,$user,$password,$db);

if($conn)
{
    header("Location: epay.php");
}

else
{
    echo "Failed to Connect";
}

$fullname=$_POST['fullname'];
$id=$_POST['id'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$semester=$_POST['semester'];
$degree=$_POST['degree'];
$concentration=$_POST['concentration'];
$dor=$_POST['dor'];

$sql=mysqli_query($conn,"insert into register(fullname,id,email,phone,semester,degree,concentration,dor)
values('$fullname','$id','$email','$phone','$semester','$degree','$concentration','$dor')");


?>