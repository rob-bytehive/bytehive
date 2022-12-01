<?php
	if($_SERVER['HTTP_HOST'] == 'localhost')
	{
		$dbserver = "localhost";
		$dbuser   = "root";
		$dbpasswd = "";
		$dbName = "bytehive";

		$db_conn = @mysql_connect($dbserver, $dbuser, $dbpasswd);
		if (!$db_conn)
		{
			mysql_close();
			exit('Could not connect to server.');
		}
		$db_open = @mysql_select_db("bytehive", $db_conn);
		if (!$db_open)
		{
			mysql_close();
			exit('Could not connect to table.');
		}
	} else {
		$host_name = 'db5011043780.hosting-data.io';
	  	$database = 'dbs9334469';
	  	$user_name = 'dbu5511877';
	  	$password = 'cFXMUrB3BurTM!a';

	  	$link = new mysqli($host_name, $user_name, $password, $database);

	  	if ($link->connect_error) {
	    	die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
	  	} else {
	    	echo '<p>Connection to MySQL server successfully established.</p>';
	  	}	
	}

	
?>