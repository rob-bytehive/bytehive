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
		$email_address = $_POST['inputEmail'];
		$message = $_POST['message'];

		mysqli_query($link,"INSERT INTO enquiries SET first_name = '$firstName', last_name = '$lastName', email = '$email_address', enquiry = '$message'") or die(mysqli_error());

		//send confirmation email

		$query = "SELECT email_content FROM emails WHERE id = 1";
		$result = mysqli_query($link, $query);
		$email = mysqli_fetch_assoc($result);
		$content = $email['email_content'];

		$this_html = str_replace(
			array(
				"%NAME%"
			),
			array(
				$firstName
			),
			$content
		);

		$to      = $email_address;
		$subject = 'Thank you for your enquiry';
		$message = $this_html;
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		$headers .= 'From: info@bytehive.co.uk' . "\r\n" .
		    'Reply-To: info@bytehive.co.uk' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);

		// $return_mail = new htmlMimeMail();
		// $return_mail->setHTML($this_html);
		// $return_mail->setReturnPath("info@bytehive.co.uk");
		// $return_mail->setFrom("info@bytehive.co.uk");
		// $return_mail->setSubject("Thank you for your enquiry");

		// $result = $return_mail->send(array("info@bytehive.co.uk"));

		mysqli_close($link);
		header("Location: /thanks.php");
		exit();
		

	} else {
		echo 'oooppps';
	}
}

?>