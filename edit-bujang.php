<?php
session_start();

if (!isset($_SESSION['mytype'])=='admin')
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"><!--Responsive page-->

  <title>Edit Staff Information - Reka&Bina IBS Panel Clinic System</title>
 <?php include('include/header.php');?>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
     <li class="nav-item">
        <a class="nav-link " href="maklumat-kakitangan.php">
          <i class="bi bi-menu-button-wide"></i>
          <span>Staff List</span>
        </a>
      </li><!-- End staff list Nav -->
        
    <li class="nav-item">
        <a class="nav-link collapsed" href="laporan-maklumat-kakitangan.php">
          <i class="bi bi-journal-text"></i>
          <span>Report</span>
        </a>
      </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="tutorial2.php">
          <i class="bi bi-camera-video"></i>
          <span>Tutorial</span>
        </a>
      </li><!-- End Tutorial Nav -->
    </ul>
  </aside><!-- End Sidebar-->

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Staff Information</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Main</li>
          <li class="breadcrumb-item"><a href="maklumat-kakitangan.php">Staff List</a></li>
          <li class="breadcrumb-item active">Edit Staff Information</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
   <div class="col-lg-12">
          <div class="row">
          <div class="card" >
          <div class="card-body"><br>
          <div class="col-12">

              <?php include 'fetch-kakitangan.php'; ?>
            <form action="update-maklumat.php" method="POST">
                
              <input type="hidden" name="nama" value="<?php echo $_GET["nama"]; ?>" class="form-control">

        <div class="row mb-3">
        <label for="inputText" class="col-sm-4 col-form-label">Visa/IC Number</label>
        <div class="col-sm-6"> 
        <input type="text" name="no_visa" class="form-control" value="<?php echo $maklumat_staf['no_visa']; ?>">
        </div>
        </div>
        
        <div class="row mb-3">
        <label for="inputText" class="col-sm-4 col-form-label">Phone Number</label>
        <div class="col-sm-6"> 
        <input type="text" name="notelefon" class="form-control" value="<?php echo $maklumat_staf['notelefon']; ?>">
        </div>
        </div>    
      
        <!--peruntukan-->
        <div class="form-group row mb-3">
		<label for="inputText" class="col-sm-4 col-form-label">Allocation</label>
            <div class="col-sm-6">
            <input type="text" name="peruntukan" class="form-control" value="<?php echo $maklumat_staf['peruntukan']; ?>" disabled>
            </div>  
        </div>
                
        <div class="form-group row mb-3">
            <div class="col-sm-4">
            </div>  
            <div class="col-sm-2">
            <button type="submit" class="btn btn-primary" value="submit">Update</button>
            </div>  
        </div>      
        </form>       
        </div></div></div></div></div>
        </section>
    </main><!-- End #main -->
</body>
<?php include ('include/footer.php');?>
</html>