<?php
session_start();
include "dbConn.php"; 
if(isset($_POST['submit']))
{		
    $name = $_POST['username'];
        $pwd = $_POST['pwd'];
		//$t=" insert into login (uname,pwd) values ('$name', '$pwd')";
		//mysqli_query($db, $t);

	$sql=mysqli_query($db,"SELECT * FROM login where uname='$name' and pwd='$pwd'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["name"]=$row['name'];
        $_SESSION["pwd"]=$row['pwd'];
        header("Location: http://localhost/mp/tables.html"); 
    }
    else
    {
		//$_SESSION['message']="Incorrect Username or Password."; 
        //header("Location:http://localhost/mp/login.html");
        echo '<h3>Invalid username or password</h3>';
        //echo "Invalid Email ID/Password";
		//header("Location:http://localhost/mp/login.html");
		
    }
}
?>
