<?php 
   $username = $_POST['user'];
   $password = $_POST['pass'];

   $username = stripcslashes($username);
   $password = stripcslashes($password);
   //$username = mysql_real_escape_string($username);
   //$password = mysql_real_escape_string($password);


   //connect to the server
   mysql_connect("localhost", "root", "", "login");
   

   $result = mysql_query("select * from users where username = '$username' and password = '$password'")
                   or die("failed to query database ".mysql_error());

    $row = mysql_fetch_array($result);
    if($row['username'] == $username && row['password'] == $password)
    {
        echo "log-in was successful!! Welcome...".$row['username'];
    }
    else
    {
        echo "Failed to log-in!";
    }


?>