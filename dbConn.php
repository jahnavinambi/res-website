<?php

$db = mysqli_connect("localhost","root","","res");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>