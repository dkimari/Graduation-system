<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "login";

//connect to the server
$conn = mysqli_connect($host, $user , $password);
mysqli_select_db($conn, $db) or die(mysqli_error($con));



if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where username='".$uname."' AND password='".$password."' limit 1";

    $result = mysqli_query($conn,$sql);

     if(mysqli_num_rows($result)==1)
    {
        header("Location: form.php");
    }

        if ($_POST['password']=="admin"){
            header("location:admin.php");
        }
    
    else{
        $message = "Incorrect Username or Password";
        echo "<script type='text/javascript'>alert('$message');</script>";

    }
    mysqli_close($conn);
}



?>

<!DOCTYPE html>
<html>
<head>
<title>Graduation sign-up</title>
        <meta name ="viewport" content="width=device-width, initial-scale=1">
  <style>
*
{
    box-sizing: border-box;
}
body
{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('grad3.jpg');
    height: 130vh;
    background-position: center;
    background-size:cover;
    background-repeat:no-repeat;
    margin:0;
    font-family:sans-serif;
}
.navbar
{
overflow:hidden;
background: #0A1172;
border-bottom:1px solid #ffffff;
}
.navbar a
{
    float: left;
    display:block;
    color:#ffffff;
    text-align:center;
    padding: 20px 16px;
    text-decoration:none;
    font-size: 14px;
    text-transform:uppercase;
    font-weight: bold;
}
.navbar a:hover
{
    background: #cccccc;
}
.login-container
{
    float:right; 
    transition: 0.6s ease;
 
}
input 
{
    padding:5px;
    margin-top:15px;
    font-size:14px;
    border:none;
    width:130px;
}
.title{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.title h1{
    color: hsl(48, 97%, 58%);
    font-size: 50px;

}
button 
{
    float: right;
    padding: 5px 10px;
    margin-top:15px;
    margin-right:50px;
    background: none;
    color: #ffffff;
    font-size:14px;
    font-weight: bold;
    border: none;
    cursor: pointer;
    border-radius: 0px 5px 5px 0px;
    transition: 0.6s ease;

}
button:hover 
{
    background: #cccccc;
;
}

@media(max-width:600px)
{
    .login-container 
    {
       float:none; 
       transition: 0.6s ease;

    }
    .navbar a, navbar input, button 
    {
        float: none;
        display:block;
        text-align:left;
        width:100%;
        margin:0;
        padding:14px;
        transition: 0.6s ease;

    }
    input[type=text]
    {
        border:1px solid #cccccc;
    }

}
</style>

<div class = "navbar">
<a href="login1.php">Home</a></li>
<a href = "#"> Contact Us</a>
<a href = "#"> About</a>
<a href = "#"> Help</a>

<div class = "login-container">
<form method = "POST" action = "#">
<input type ="text" placeholder ="username" name="username">
<input type ="password" placeholder ="password" name="password">
<button type ="submit"name="submit" > LOGIN </button>
</form>
</div>

</head>
<body>

<div class="title">
    <h1> USIU GRADUATION VERIFY</h1>
</div>


</body>
</html>