<?php

if(count($_POST)>0){
include 'connection/db.php';

$sql = "UPDATE penggunaan_staf set bil='" . $_POST['bil'] . "', tahun='" . $_POST['tahun'] . "', nama='" . $_POST['nama'] . "', no_visa='" . $_POST['no_visa'] . "', notelefon='" . $_POST['notelefon'] . "', bil_klinik='" . $_POST['bil_klinik'] . "', tarikh_rawatan='" . $_POST['tarikh_rawatan'] . "', jum_rawatan='" . $_POST['jum_rawatan'] . "' WHERE bil='" . $_POST['bil'] . "'";

$result=mysqli_query($con,$sql);
echo '<script>alert("Data successfully updated")</script>';
echo "<script>setTimeout(\"location.href = 'kakitangan-list.php';\",1200);</script>";

}else{
    echo '<script>alert("Data fail to update")</script>';
        echo "<script>setTimeout(\"location.href = 'kakitangan-list.php';\",1200);</script>";
}
?>