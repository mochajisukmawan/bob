<?php
	$koneksi=mysqli_connect('localhost','root','','bob');

	if (mysqli_connect_error())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
?>
