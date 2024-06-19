<?php
include 'connection/db.php';
$sql = "SELECT * FROM maklumat_staf WHERE nama='" . $_GET["nama"] . "'"; // Fetch data from the table maklumat_bujang using nama
$result=mysqli_query($con,$sql);
$maklumat_staf = mysqli_fetch_assoc($result);
?>