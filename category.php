<?php
session_start();

if (!isset($_SESSION['mytype'])=='admin')
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Category - Reka&Bina IBS Panel Clinic System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- Favicons -->
    <link href="img/logo%20ibs.jpg" rel="icon">
    <link href="img/logo%20ibs.jpg" rel="apple-touch-icon">
   
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #117DD4;
}
</style>
</head>
<body>
<h1><center> IBS PANEL CLINIC</center></h1>
<h2><center>Choose Category</center></h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Clinic Panel Management</h3>
      <a href="dashboard.php" class="btn" ><img src="img/clinic.png" class="card-img-top" alt="..."></a>  
     <!-- <p>Some text</p>
      <p>Some text</p>-->
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Staff Information</h3>
       <a href="maklumat-kakitangan.php" class="btn" ><img src="img/staff.png" class="card-img-top" alt="..."></a>
    </div>
  </div>

</div>
    <p><center><?php
    include ('include/footer.php');?></center></p>

</body>
</html>
