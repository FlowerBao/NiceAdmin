<?php
session_start();

if (!isset($_SESSION['mytype'])=='admin')
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php include('connection/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"><!--Responsive page-->

  <title>Staff List - Reka&Bina IBS Panel Clinic System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo%20ibs.jpg" rel="icon">
  <link href="img/logo%20ibs.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="category.php" class="logo d-flex align-items-center">
        <img src="img/logo%20ibs.jpg" alt="">
        <span class="d-none d-lg-block">PANEL CLINIC</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="search-kakitangan.php">
        <input type="text" name="search" placeholder="Staff Name" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/admin.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li></ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
        </ul></nav><!-- End Icons Navigation -->
        </header><!-- End Header -->

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
        <a class="nav-link" data-bs-target="#pengurusanPanel-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Panel Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengurusanPanel-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="klinik-list.php">
              <i class="bi bi-circle"></i><span>Clinic</span>
            </a>
          </li>
          <li>
            <a href="kakitangan-list.php" class="active">
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
      <h1>List Staff Usage</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Main</a></li>
          <li class="breadcrumb-item">Panel Management</li>
          <li class="breadcrumb-item active">Staff Usage</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <div class="card" >
            <div class="card-body">
            <div class="col-12">
           
                <form action="add-kakitangan.php" method="post">
                    <input type="submit" name="submit3" id="submit3" class="btn btn-primary" value="+ Register Staff">
                </form>
    
                <strong>Enter name for detail list</strong><br><br>

                <table class='table table-bordered table-striped'>
                    <tr style="text-align:center;background-color:rgb(155, 190, 255);">
                    <td><strong>Num.</strong></td>
                    <td><strong>Year</strong></td>
                    <td><strong>Staff Name</strong></td>
                    <td><strong>Visa/IC Number</strong></td>
                    <td><strong>Phone Number</strong></td>
                    <td><strong>Clinic Name</strong></td>
                    <td><strong>Treatment Date</strong></td>
                    <td><strong>Total Treatment</strong></td>
                    <td><strong>Action</strong></td>
                    </tr>
                    <?php
                        if (isset($_GET['pageno'])) 
                                {
                                    $pageno = $_GET['pageno'];
                                } else 
                                {
                                    $pageno = 1;
                                }
                                $no_of_records_per_page = 10;
                                $offset = ($pageno-1) * $no_of_records_per_page;
                                
                                $num=1;
                                $total_pages_sql = "SELECT COUNT(*) FROM penggunaan_staf";
                                $result = mysqli_query($con,$total_pages_sql);
                                $total_rows = mysqli_fetch_array($result)[0];
                                $total_pages = ceil($total_rows / $no_of_records_per_page);

                                $sql = "SELECT K.bil, K.tahun, K.nama, K.no_visa, K.notelefon, T.nama_klinik, K.tarikh_rawatan, K.jum_rawatan FROM penggunaan_staf K, klinik T WHERE K.bil_klinik = T.bil
                                LIMIT $offset, $no_of_records_per_page";
                                $res_data = mysqli_query($con,$sql);
        
                                if (mysqli_num_rows($res_data) > 0) 
                                {
                                    while($row = mysqli_fetch_assoc($res_data)) 
                                    {

                                ?>
                        <tr>
                            <td><?php echo $row["bil"]; ?></td>
                            <td><?php echo $row["tahun"]; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["no_visa"]; ?></td>
                            <td><?php echo $row["notelefon"]; ?></td>
                            <td><?php echo $row["nama_klinik"]; ?></td>
                            <td><?php echo $row["tarikh_rawatan"]; ?></td>
                            <td><?php echo $row["jum_rawatan"]; ?></td>
                            <td>
                                 <a href="edit-kakitangan.php?bil=<?php echo $row['bil']; ?>" class="btn btn-success" >Edit</a><br><br>
                                <a href="delete-kakitangan.php?bil=<?php echo $row['bil']; ?>" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                        <?php
                            }
                        }   else {
                            echo "No records";
                        }
                            $con->close();
                        ?>
                </table>
                <p class="m-0"></p>
                        <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item" class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                                <a class="page-link" href="
                                                <?php 
                                                if($pageno <= 1)
                                                { echo '#'; } 
                                                else { echo "?pageno=".($pageno - 1); } 
                                                ?>
                                                " aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="?pageno=1">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="?pageno=2">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="?pageno=3">3</a>
                                            </li>
                                            <li class="page-item" class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                                <a class="page-link" href="<?php if($pageno >= $total_pages){ echo "?pageno=".($pageno + 1); } else { echo "?pageno=".($pageno + 1); } ?>" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                            </div>
                </div></div></div></div></div></div></div>
      </section>
  </main><!-- End #main -->
<?php include ('include/footer.php');?>
</body>
</html>