<?php

include "connection/db.php";

$nama = $_GET['nama']; // get nama through query string

$del = mysqli_query($con,"delete from maklumat_staf where nama = '$nama'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    echo '<script>alert("Data successfully deleted")</script>';
    echo "<script>setTimeout(\"location.href = 'maklumat-kakitangan.php';\",1200);</script>";
    exit;	
}
else
{
    echo '<script>alert("Data fail to delete")</script>';
    echo "<script>setTimeout(\"location.href = 'maklumat-kakitangan.php';\",1200);</script>";
}
?>