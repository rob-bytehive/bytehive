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

	$context = stream_context_create($options);
	$response = file_get_contents($recaptcha_url,false,$context);

	$res = json_decode($response, true);


	if ($res['success'] == true) {

		include('../incl/db.php');

		$firstName = $_POST['inputFirstName'];
		$lastName = $_POST['inputLastName'];
		$email = $_POST['inputEmail'];
		$message = $_POST['message'];

		// echo "INSERT INTO enquiries SET first_name = '$firstName', last_name = '$lastName', email = '$email', enquiry = '$message'";
		// exit;

		mysqli_query($link,"INSERT INTO enquiries SET first_name = '$firstName', last_name = '$lastName', email = '$email', enquiry = '$message'") or die(mysqli_error());
		mysqli_close($link);
		header("Location: /index.php");

	} else {
		echo 'oooppps';
	}
}

?>