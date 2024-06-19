<?php
include_once 'connection/db.php';

if(isset($_POST['save']))
{	 
	 $nama = $_POST['nama'];
	 $no_visa = $_POST['no_visa'];
	 $notelefon = $_POST['notelefon'];
    
	 $sql = "INSERT INTO maklumat_staf (nama,no_visa,notelefon)
	 VALUES ('$nama','$no_visa','$notelefon')";
    
	 if (mysqli_query($con, $sql)) {
        echo '<script>alert("Data successfully registered")</script>';
        echo "<script>setTimeout(\"location.href = 'daftar-kakitangan.php';\",1200);</script>";
	 } else {
        echo '<script><strong>alert("Data fail to register")</strong></script>';
		echo "Error: " . $sql . "
        
" . mysqli_error($con);
	 }
	 mysqli_close($con);
    echo "<script>setTimeout(\"location.href = 'daftar-kakitangan.php';\",1200);</script>";
}
?>