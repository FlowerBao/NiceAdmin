<?php
include 'connection/db.php';
$sql = "SELECT * FROM penggunaan_staf WHERE bil='" . $_GET["bil"] . "'";
$result=mysqli_query($con,$sql);
$penggunaan_staf = mysqli_fetch_assoc($result);
?>