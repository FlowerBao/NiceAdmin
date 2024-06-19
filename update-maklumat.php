<?php

if(count($_POST)>0){

include 'connection/db.php';
    
$sql = "UPDATE maklumat_staf set nama='" . $_POST['nama'] . "', no_visa='" . $_POST['no_visa'] . "', notelefon='" . $_POST['notelefon'] . "' WHERE nama='" . $_POST['nama'] . "'"; // update form data from the database

$result=mysqli_query($con,$sql);

echo '<script>alert("Data successfully updated")</script>';
        echo "<script>setTimeout(\"location.href = 'maklumat-kakitangan.php';\",1200);</script>";
}else{
    echo '<script>alert("Data fail to update")</script>';
        echo "<script>setTimeout(\"location.href = 'maklumat-kakitangan.php';\",1200);</script>";
}

?>