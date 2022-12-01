<?php

if ($_POST) {

	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_data = [
		'secret' => '6LfRgEsjAAAAAGoUI8DARJAbrK5QeyQqz_mnvx-2',
		'response' => $_POST['token']
	];

	$options = array(
		'http' => array(
			'header' => "Content-type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST',
			'content' => http_build_query($recaptcha_data)
		)
	);


	if ($recaptcha['success'] == 1 AND $recaptcha['score'] >= 0.5 AND $recaptcha['action'] == "submit") {

		include('../incl/db.php');

		$firstName = $_POST['inputFirstName'];
		$lastName = $_POST['inputLastName'];
		$email = $_POST['inputEmail'];
		$message = $_POST['message'];

		mysqli_query("INSERT INTO enquiries SET first_name = '$firstName', last_name = '$lastName', email = '$email', enquiry = '$message'",$link) or die(mysqli_error());

	} else {
		echo 'oooppps';
	}
}

?>