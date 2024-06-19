<?php

include "connection/db.php"; 

$bil = $_GET['bil'];

$del = mysqli_query($con,"delete from penggunaan_staf where bil = '$bil'");

if($del)
{
    mysqli_close($con); // Close connection
    echo '<script>alert("Data successfully deleted")</script>';
    echo "<script>setTimeout(\"location.href = 'kakitangan-list.php';\",1200);</script>";
    exit;	
}
else
{
    echo '<script>alert("Data fail to delete")</script>';
    echo "<script>setTimeout(\"location.href = 'kakitangan-list.php';\",1200);</script>";
}
?>