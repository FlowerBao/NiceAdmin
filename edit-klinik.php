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
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"><!--Responsive page-->
    <title>Edit Clinic - Reka&Bina IBS Panel Clinic System</title>
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="tutorial.php">
          <i class="bi bi-camera-video"></i>
          <span>Tutorial</span>
        </a>
      </li><!-- End Tutorial Nav -->
    </ul>
  </aside><!-- End Sidebar-->

      <main id="main" class="main">
          <div class="pagetitle">
      <h1>Edit Clinic Panel</h1>
       <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Main</a></li>
          <li class="breadcrumb-item">Panel Management</li>
            <li class="breadcrumb-item"><a href="klinik-list.php">Clinic</a></li>
          <li class="breadcrumb-item active">Edit Clinic</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
          
        <section class="section">
        <div class="col-lg-12">
         <div class="row">   
            <div class="card">
            <div class="card-body" >
              <h5 class="card-title"></h5>
               <div class="col-12"> 
                
            <?php include 'fetch-data-edit.php'; ?>
            <form action="update-klinik.php" method="POST">

              <input type="hidden" name="bil" value="<?php echo $_GET["bil"]; ?>" class="form-control">

            <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Clinic Name</label>
                   <div class="col-sm-6">
                <input type="text" name="nama_klinik" class="form-control" value="<?php echo $try['nama_klinik']; ?>">
              </div>  
                </div>
                
              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Clinic Owner</label>
                   <div class="col-sm-6">
                <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $try['nama_pemilik']; ?>">
              </div>  
                </div>

              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Address</label>
                   <div class="col-sm-6">
                <input type="text" name="alamat" class="form-control" value="<?php echo $try['alamat']; ?>">
                  </div> </div>
                
              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Phone Number</label>
                   <div class="col-sm-6">
                <input type="text" name="notelefon" class="form-control" value="<?php echo $try['notelefon']; ?>">
                  </div></div>
            
              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">PIC</label>
                   <div class="col-sm-6">
                <input type="text" name="pic" class="form-control" value="<?php echo $try['pic']; ?>">
                  </div>  </div>
                
                <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Payment Type</label>
                <div class="col-sm-6">
                <select name='jenis_bayaran' class="form-select">
                <option selected><?php echo $try['jenis_bayaran']; ?></option>
                <option value='Maybank'>Maybank</option>
                <option value='Public Islamic Bank'>Public Islamic Bank</option>
                <option value='Hong Leong Islamic Bank'>Hong Leong Islamic Bank</option>
                <option value='OCBC'>OCBC</option>
                <option value='Ambank Islamic'>Ambank Islamic</option>
                <option value='RHB Islamic'>RHB Islamic</option>
                <option value='CIMB'>CIMB</option>
                <option value='Check'>Check</option>
                <option value='Cash'>Cash</option>
                </select>
                </div>
                </div>
            
                <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Account Number</label>
                     <div class="col-sm-6">
                <input type="text" name="no_acc" class="form-control" value="<?php echo $try['no_acc']; ?>">
                 </div></div>                    
                
             <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Account Owner</label>
                  <div class="col-sm-6">
                <input type="text" name="pemilik_acc" class="form-control" value="<?php echo $try['pemilik_acc']; ?>">
                 </div> </div>

                <!--button kemaskini-->
                <div class="form-group row mb-3">
                    <div class="col-sm-4">
                    </div>  
                    <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary" value="submit">Edit</button>
                    </div>  
                </div>
                   </form>
        </div></div></div></div></div>
          </section>
    </main>
  <?php
    include ('include/footer.php');?>
</body>
</html>