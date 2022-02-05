<?php

	$conn = mysqli_connect('localhost','reid1','','reid');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>