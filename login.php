<?php 

$error="";
if(isset($_POST['submit']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $error = "Username or Password is invalid";
    }

$host = "localhost";
$user = "root";
$password = "";
$db = "login";

//connect to the server
$conn = mysqli_connect($host, $user , $password);
mysqli_select_db($conn, $db) or die(mysqli_error($conn));



if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where username='".$uname."' AND password='".$password."' limit 1";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1)
    {
        header("Location: welcome.php");
    }
    else{
        $message = "Incorrect Username or Password";
        echo "<script type='text/javascript'>alert('$message');</script>";

    }
    mysqli_close($conn);
}


}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <title>Graduation sign-up</title>
  <link rel="stylesheet" type="text/css" href="signin.css"/>
  </head>
  <body>

  
            <header>
<div class="main">
    <div class="logo">
    <img src="logo.jpg">
    </div>
<ul>
    <li class="active"><a href="login.php">Home</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Help</a></li>
    
</ul>
</div>
</header>


<body>
    
<div class="title">
    <h1> USIU GRADUATION VERIFY</h1>
</div>


 

<div class="login-box">

<form method = "POST" action = "#">


    <div class ="textbox">
            <i class="fa fa-user white" aria-hidden="true" ></i>

        <input type="text" placeholder="Username" name="username">
    </div>

    <div class ="textbox">
            <i class="fa fa-lock white" aria-hidden="true"></i>

            <input type="Password" placeholder="Password" name="password">
        </div>

        <input class="btn" type="submit" name="submit" value="LOGIN">

    </form>
</div>
</div>
</div>   

  </body>
  </html>