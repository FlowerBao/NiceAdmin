<?php

// Get the user id
$nama = $_REQUEST['nama'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "ibsNew");

if ($nama !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT no_visa,
	notelefon FROM maklumat_staf WHERE nama='$nama'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$no_visa = $row["no_visa"];

	// Get the first name
	$notelefon = $row["notelefon"];
}

// Store it in a array
$result = array("$no_visa", "$notelefon");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
