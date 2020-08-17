<!DOCTYPE html>
<html>
<head>
<title>Admin View Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("usiu2.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
    alignment:center;
    text-align: center;
    color:white;
}

}
</style>
</head>

<body>
<H1> STUDENTS REPORTS </H1>

<div class =  "container">
<form action="#" method="POST">
<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-bordered bg-primary">
<tr>
<th>FULL NAME</th>
<th>SCHOOL ID</th>
<th>EMAIL ADDRESS</th>
<th>PHONE NUMBER</th>
<th>SEMESTER</th>
<th>DEGREE</th>
<th>CONCENTRATION</th>
<th>DATE OF REGISTRATION</th>
</tr>
</div>
<input type="submit" class="btn btn-warning" name="view" value="VIEW STUDENTS">
<br><br>
</form>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "register";


$conn=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['view']))
{
    $query = "SELECT * FROM `register`";
    $result= mysqli_query($conn,$query) or die( mysqli_error($conn));
    ;

    while ($row = mysqli_fetch_array($result))
    {
        ?>
       <tr>
           <td><?php echo $row ['fullname'] ?></td>
           <td><?php echo $row ['id'] ?></td>
           <td><?php echo $row ['email'] ?></td>
           <td><?php echo $row ['phone'] ?></td>
           <td><?php echo $row ['semester'] ?></td>
           <td><?php echo $row ['degree'] ?></td>
           <td><?php echo $row ['concentration'] ?></td>
           <td><?php echo $row ['dor'] ?></td>

    </tr>
<?php
    }
}


?>
</div>
</body>
</html>