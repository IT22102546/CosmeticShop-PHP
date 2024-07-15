<?php
	$conn= mysqli_connect("localhost:3308", "root", "", "cosmetic_shop");
	
	if(!$conn)
	{
	
		die("connection error". mysqli_connect_error());
	}
	
?>