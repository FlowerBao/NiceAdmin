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

  <title>Tutorial - Reka&Bina IBS Panel Clinic System</title>
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
  <link rel="stylesheet" href="style_video.css">    
    
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
            <a class="nav-link collapsed" href="maklumat-kakitangan.php">
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
        <a class="nav-link" href="tutorial2.php">
          <i class="bi bi-camera-video"></i>
          <span>Tutorial</span>
        </a>
      </li><!-- End Tutorial Nav -->
    </ul>
  </aside>
<!-- ====End Sidebar===== -->
    
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tutorial</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="maklumat-kakitangan.php">Main</a></li>
          <li class="breadcrumb-item active">Tutorial</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
          <section>
    <div class="container">
      <div class="main-video">
          <video src="videos/button.mp4" autoplay muted controls></video>
          <i class='bx bx-x close'></i>
      </div>
        
      <div class="videos"> <!--video intro-->
        <video src="img/introVideo.mp4"></video>
        <i class='bx bx-play-circle'></i>
      </div>
        
      <div class="videos"> <!--video tutorial-->
        <video src="img/tutorialVideo.mp4"></video>
        <i class='bx bx-play-circle'></i>
      </div>
        
      <div>
        <p style="text-align:center"><strong>Introduction video</strong></p>
      </div>
        
      <div>
        <p style="text-align:center"><strong>Tutorial video</strong></p>
      </div>
        
    </div>
  </section>
          
    <script>
    const section = document.querySelector("section"),
    mainVideo = document.querySelector(".main-video video"),
     videos = document.querySelectorAll(".videos"),
     close = document.querySelector(".close");

     for (var i = 0; i < videos.length; i++) {
       videos[i].addEventListener("click", (e)=>{
         const target = e.target;
         section.classList.add("active");
         target.classList.add("active");
         let src = document.querySelector(".videos.active video").src;
         mainVideo.src = src;

         close.addEventListener("click", ()=>{
           section.classList.remove("active");
           target.classList.remove("active");
           mainVideo.src = "";
         });
       });
     };
  </script>
        </div>
      </section>
  </main><!-- End #main -->
 <?php
    include ('include/footer.php');?>
</body>
</html>