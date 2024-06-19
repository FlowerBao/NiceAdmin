<?php
include_once 'connection/db.php';

if(isset($_POST['save']))
{	 
	 $tahun = $_POST['tahun'];
	 $nama = $_POST['nama'];
	 $no_visa = $_POST['no_visa'];
	 $notelefon = $_POST['notelefon'];
	 $bil_klinik = $_POST['bil_klinik'];
	 $tarikh_rawatan = $_POST['tarikh_rawatan'];
	 $jum_rawatan = $_POST['jum_rawatan'];
    
    
	 $sql = "INSERT INTO penggunaan_staf (tahun,nama,no_visa,notelefon,bil_klinik,tarikh_rawatan,jum_rawatan)
	 VALUES ('$tahun','$nama','$no_visa','$notelefon','$bil_klinik','$tarikh_rawatan','$jum_rawatan')";
    
	 if (mysqli_query($con, $sql)) {
        echo '<script>alert("Data successfully registered")</script>';
        echo "<script>setTimeout(\"location.href = 'kakitangan-list.php';\",1200);</script>";
	 } else {
        echo '<script><strong>alert("Data failed to register")</strong></script>';
		echo "Error: " . $sql . "
        
" . mysqli_error($con);
	 }
	 mysqli_close($con);
    echo "<script>setTimeout(\"location.href = 'kakitangan-list.php';\",1200);</script>";
}
?>