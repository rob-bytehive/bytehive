<?php

include('../incl/db.php');

$firstName = $_POST['inputFirstName'];
$lastName = $_POST['inputLastName'];
$email = $_POST['inputEmail'];
$message = $_POST['message'];

mysql_query("INSERT INTO enquiries SET first_name = '$firstName', last_name = '$lastName', email = '$email', message = '$message'",$db_conn) or die(mysql_error());


?>