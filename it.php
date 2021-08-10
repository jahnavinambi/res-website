<?php
session_start();
include "dbConn.php"; 
if(isset($_POST['save'])){

    if(!empty($_POST['ar'])) {

        foreach($_POST['ar'] as $value){
			$t=" insert into italy (name) values ('$value')";
			mysqli_query($db, $t);
            echo "Chosen  : ".$value.'<br/>';
        }

    }

}
?>