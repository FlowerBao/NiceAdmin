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

  <title>Edit Staff Usage - Reka&Bina IBS Panel Clinic System</title>
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
            <a href="klinik-list.php">
              <i class="bi bi-circle"></i><span>Clinic</span>
            </a>
          </li>
        <li>
            <a href="kakitangan-list.php"  class="active">
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
      <h1>Edit Staff Usage</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Main</a></li>
          <li class="breadcrumb-item">Panel Management</li>
            <li class="breadcrumb-item"><a href="kakitangan-list.php">Staff List</a></li>
          <li class="breadcrumb-item active">Edit Staff usage</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        <div class="row">
          <div class="card">
            <div class="card-body" >
              <h5 class="card-title"></h5>
                <div class="col-12">

              <?php include 'fetch-data-kakitangan.php'; ?>
<?php              
	$con = mysqli_connect("localhost","root","","ibsNew");

	$sql = "SELECT * FROM `klinik`";
	$all_categories = mysqli_query($con,$sql);
?>
            <form action="update-kakitangan.php" method="POST">

              <input type="hidden" name="bil" value="<?php echo $_GET["bil"]; ?>" class="form-control">

       <div class="row mb-3">
            <label class="col-sm-4 col-form-label">Year</label>
            <div class="col-sm-6">
        <select name='tahun' class="form-select">
            <option selected><?php echo $penggunaan_staf['tahun']; ?></option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            <option value="2031">2031</option>
            <option value="2032">2032</option>
        </select>
            </div>
        </div>
                
                <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Staff Name</label>
                   <div class="col-sm-6">
                <input type="text" name="nama" class="form-control" value="<?php echo $penggunaan_staf['nama']; ?>">
              </div>  
                </div>
                
              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Visa/IC Number</label>
                   <div class="col-sm-6">
                <input type="text" name="no_visa" class="form-control" value="<?php echo $penggunaan_staf['no_visa']; ?>">
              </div>  
                </div>

              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Phone Number</label>
                   <div class="col-sm-6">
                <input type="text" name="notelefon" class="form-control" value="<?php echo $penggunaan_staf['notelefon']; ?>" placeholder="Example: 01043566781">
                  </div> </div>                                
                
                
                <div class="form-group row mb-3">
                <label for="exampleInputEmail" class="col-sm-4 col-form-label">Clinic Name</label>
                    <div class="col-sm-6">
                <select name="bil_klinik" class="form-select">
                    <?php
                        while ($try = mysqli_fetch_array(
                                $all_categories,MYSQLI_ASSOC)):;
                    ?>
                        <option value="<?php echo $try["bil"];
                        ?>">
                            <?php echo $try["nama_klinik"];
                            ?>
                        </option>
                    <?php
                        endwhile;
                    ?>
                </select>
                    </div>
                </div>
   
              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Treatment Date</label>
                   <div class="col-sm-6">
                <input type="date" name="tarikh_rawatan" class="form-control" value="<?php echo $penggunaan_staf['tarikh_rawatan']; ?>">
                  </div></div>
            
              <div class="form-group row mb-3">
                <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Total Treatment (RM)</label>
                   <div class="col-sm-6">
                <input type="text" name="jum_rawatan" class="form-control" value="<?php echo $penggunaan_staf['jum_rawatan']; ?>">
                  </div>  </div>

                <!--button kemaskini-->
                <div class="form-group row mb-3">
            <div class="col-sm-4">
            </div>  
            <div class="col-sm-4">
            <button type="submit" class="btn btn-primary" value="submit">Update</button>
            </div>  
        </div>   
            </form>
        </div></div></div></div></div></div>
    </section>
    </main><!-- End #main -->

 <?php include('include/footer.php');?>
</body>
</html>