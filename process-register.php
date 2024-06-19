<?php
include_once 'connection/db.php';

if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $password = md5($_POST['password']);
    
	 $sql = "INSERT INTO user (username, password)
	 VALUES ('$username','$password')";
    
	 if (mysqli_query($con, $sql)) {
        echo '<script>alert("Data successfully registered")</script>';
        echo "<script>setTimeout(\"location.href = 'klinik-list.php';\",1200);</script>";
	 } else {
        echo '<script><strong>alert("Data fail to register")</strong></script>';
		echo "Error: " . $sql . "
        
" . mysqli_error($con);
	 }
	 mysqli_close($con);
    echo "<script>setTimeout(\"location.href = 'klinik-list.php';\",1200);</script>";
}
?>