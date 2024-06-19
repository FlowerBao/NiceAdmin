<?php

if(count($_POST)>0){

include 'connection/db.php';

$sql = "UPDATE klinik set bil='" . $_POST["bil"] . "', nama_klinik='" . $_POST['nama_klinik'] . "', nama_pemilik='" . $_POST['nama_pemilik'] . "', alamat='" . $_POST['alamat'] . "', notelefon='" . $_POST['notelefon'] . "', pic='" . $_POST['pic'] . "', jenis_bayaran='" . $_POST['jenis_bayaran'] . "', no_acc='" . $_POST['no_acc'] . "', pemilik_acc='" . $_POST['pemilik_acc'] . "' WHERE bil='" . $_POST['bil'] . "'"; // update form data from the database

$result=mysqli_query($con,$sql);

echo '<script>alert("Data successfully updated")</script>';
echo "<script>setTimeout(\"location.href = 'klinik-list.php';\",1200);</script>";

}else{

    echo '<script>alert("Data fail to update")</script>';
    echo "<script>setTimeout(\"location.href = 'klinik-list.php';\",1200);</script>";
}
?>