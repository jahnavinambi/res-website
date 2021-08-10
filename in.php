<?php
session_start();
include "dbConn.php"; 
if(isset($_POST['save'])){
    if(!empty($_POST['arr'])) {
        foreach($_POST['arr'] as $value){
			$t=" insert into indi (name) values ('$value')";
			mysqli_query($db, $t);
            echo "Chosen  : ".$value.'<br/>';
        }
    }
}
?>