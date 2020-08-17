<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "epay";


$conn=mysqli_connect($host,$user,$password,$db);

if($conn)
{
    $message = "You have been registered";
    echo "<script type='text/javascript'>alert('$message');
    window.location ='login1.php';
    </script>";
   
}

else
{
    echo "Failed to Connect";
}

$name=$_POST['name'];
$card=$_POST['card'];
$date=$_POST['date'];
$expire=$_POST['expire'];
$cvc=$_POST['cvc'];
$amount=$_POST['amount'];

$sql=mysqli_query($conn,"insert into epay(name,card,date,expire,cvc,amount)
values('$name','$card','$date','$expire','$cvc','$amount')");


?>