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

  <title>Add Clinic - Reka&Bina IBS Panel Clinic System</title>
 <?php include ('include/header.php');?>
    
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Panel Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="klinik-list.php" class="active">
              <i class="bi bi-circle"></i><span>Clinic</span>
            </a>
          </li>
         <li>
            <a href="kakitangan-list.php">
              <i class="bi bi-circle"></i><span>Staff Usage</span>
            </a>
          </li>
        </ul>
      </li><!-- End Pengurusan Panel Nav -->
         <!--Start laporan-->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="laporan-klinik.php">
              <i class="bi bi-circle"></i><span>Clinic</span>
            </a>
          </li>
          <li>
            <a href="laporan-kakitangan.php">
              <i class="bi bi-circle"></i><span>Staff Usage</span>
            </a>
          </li>
        </ul>
      </li><!-- End laporan Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Register Clinic Account</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Main</a></li>
          <li class="breadcrumb-item"><a href="register-acc.php">Register Clinic Account</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <section class="section">
     <div class="col-lg-12">
          <div class="row">
          <div class="card" >
          <div class="card-body">
          <h6 class="card-title"></h6>
          <div class="col-12">
              
	<form method="post" action="process-register.php">
        
        <div class="row mb-3">
		<label for="inputText" class="col-sm-4 col-form-label">Username<i class="fa fa-asterisk text-danger">*</i></label>
            <div class="col-sm-6">
            <input type="text" name="username" class="form-control" required>
            </div>  
        </div>
        
        <div class="row mb-3">
		<label for="inputText" class="col-sm-4 col-form-label">Password<i class="fa fa-asterisk text-danger">*</i></label>
            <div class="col-sm-6">
            <input type="text" name="password" class="form-control" required>
            </div>  
        </div>
        
        <div class="row mb-3">
		<label for="inputText" class="col-sm-4 col-form-label">Role</label>
        <div class="col-sm-6">   
		<input type="text" name="role" class="form-control" value="clinic" disabled>
		</div>
        </div>

         <div class="form-group row mb-3">
		<label class="col-sm-4 col-form-label"></label>
            <div class="col-sm-6">
            <input type="submit" class="btn btn-primary" name="save" value="Register">
            </div>  
        </div> 
	</form>
    </div></div></div></div></div>
    </section>
  </main><!-- End #main -->
</body>
<?php include ('include/footer.php');?>
</html>