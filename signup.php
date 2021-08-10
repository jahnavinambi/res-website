<?php 
session_start();
include "dbConn.php"; 
if(isset($_POST['submit']))
{		
    $name = $_POST['username'];
        $mail = $_POST['email'];
        $contactno = $_POST['contactno'];
		$pwd = $_POST['pwd'];
		$cpwd= $_POST['cpwd'];
		$sql=mysqli_query($db,"SELECT * FROM signup where mail='$mail'");
if(mysqli_num_rows($sql)>0)
{
	
    echo "Email Id Already Exists"; 
	exit;
	header("Location: http://localhost/mp/signup.html");
	
}
else{
		$t=" insert into signup (name,mail,contactno,pwd,cpwd) values ('$name', '$mail', '$contactno','$pwd','$cpwd')";
		mysqli_query($db, $t);
		header("Location: http://localhost/mp/tables.html");
}
}
?>
