<?php
include "connection/db.php"; // Using database connection file here
$bil = $_GET['bil']; // get id through query string
$del = mysqli_query($con,"delete from klinik where bil = '$bil'"); // delete query
if($del)
{
    mysqli_close($con); // Close connection
    echo '<script>alert("Data successfully deleted")</script>';
    echo "<script>setTimeout(\"location.href = 'klinik-list.php';\",1200);</script>";
    exit;	
}
else
{
    echo "Data fail to delete"; // display error message if not delete
}
?>