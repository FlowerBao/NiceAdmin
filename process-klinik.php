<?php
include_once 'connection/db.php';

if(isset($_POST['save']))
{	 
	 $nama_klinik = $_POST['nama_klinik'];
	 $nama_pemilik = $_POST['nama_pemilik'];
	 $alamat = $_POST['alamat'];
	 $notelefon = $_POST['notelefon'];
	 $pic = $_POST['pic'];
     $jenis_bayaran = $_POST['jenis_bayaran'];
	 $no_acc = $_POST['no_acc'];	 
	 $pemilik_acc = $_POST['pemilik_acc'];
    
	 $sql = "INSERT INTO klinik (nama_klinik, nama_pemilik, alamat, notelefon, pic, jenis_bayaran, no_acc, pemilik_acc)
	 VALUES ('$nama_klinik','$nama_pemilik','$alamat','$notelefon','$pic','$jenis_bayaran','$no_acc','$pemilik_acc')";
    
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