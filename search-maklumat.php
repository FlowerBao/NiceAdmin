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
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!--Responsive page-->

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
            <form class="search-form d-flex align-items-center" method="POST" action="search-maklumat.php">
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
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->

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
            <h1>Staff Information</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Main</li>
                    <li class="breadcrumb-item"><a href="maklumat-kakitangan.php">Staff List</a></li>
                    <li class="breadcrumb-item active">Search List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="card">
                            <div class="card-body"><br>
                                <div class="col-12">
                                    <form action="daftar-kakitangan.php" method="post">
                                        <input type="submit" name="submit3" id="submit3" class="btn btn-primary" value="+ Register Staff">
                                    </form>
                                    <h3></h3><br>
                                    <table class='table table-bordered table-striped'>
                                        <tr style="text-align:center;background-color:rgb(155, 190, 255);">
                                            <td style="width:10%"><strong>Staff Name</strong></td>
                                            <td style="width:10%"><strong>Visa/IC Number</strong></td>
                                            <td style="width:10%"><strong>Phone Number</strong></td>
                                            <td style="width:5%"><strong>Allocation (RM)</strong></td>
                                            <td style="width:5%"><strong>Action</strong></td>
                                        </tr>
                                        <?php
                        $search = $_POST['search'];
                    
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $db = "ibsNew";
                    
                        $conn = new mysqli($servername, $username, $password, $db);
                        
                        if ($conn->connect_error){
                            die("Connection failed: ". $conn->connect_error);
                        }
                        $sql = "select * from maklumat_staf where nama like '%$search%'";

                         $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc() ){
                            ?>
                                        <tr>
                                            <td><?php echo $row["nama"]; ?></td>
                                            <td><?php echo $row["no_visa"]; ?></td>
                                            <td><?php echo $row["notelefon"]; ?></td>
                                            <td><?php echo $row["peruntukan"]; ?></td>
                                            <td>
                                                <a href="edit-bujang.php?nama=<?php echo $row['nama']; ?>" class="btn btn-success">Edit</a><br><br>
                                                <a href="delete-staf.php?nama=<?php echo $row['nama']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                }
                            } else {
                            echo "No records";
                            }
                            $conn->close();
                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
</body>
<?php include ('include/footer.php');?>

</html>
