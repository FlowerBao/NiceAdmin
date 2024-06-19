<?php
include 'connection/db.php';
$sql = "SELECT * FROM klinik WHERE bil='" . $_GET["bil"] . "'"; // Fetch data from the table customers using id
$result=mysqli_query($con,$sql);
$try = mysqli_fetch_assoc($result);
?>