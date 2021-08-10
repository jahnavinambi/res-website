<?php
session_start();
include "dbConn.php"; 
if(isset($_POST['save'])){

    if(!empty($_POST['arr1'])) {

        foreach($_POST['arr1'] as $value){
			$t=" insert into k (name) values ('$value')";
		mysqli_query($db, $t);
            echo "Chosen  : ".$value.'<br/>';
        }

    }

}
?>