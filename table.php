<?php
session_start();
include "dbConn.php"; 
if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $date = $_POST['date'];
        $mail = $_POST['mail'];
        $time = $_POST['time'];
        $people = $_POST['people'];
		$review=$_POST['ta'];
	$s=" select * from reserve where mail = '$mail' ";
	$result=mysqli_query($db,$s);
	$n=mysqli_num_rows($result);
	if($n>1){
	echo "user already exists";
	}
	else{
		$t=" insert into reserve (name,phoneno,date,mail,time,people,review) values ('$name', '$phoneno', '$date', '$mail', '$time', '$people', '$review')";
		mysqli_query($db, $t);
		header("Location: http://localhost/mp/menu.html"); 
	}
}
 // Close connection
?>
