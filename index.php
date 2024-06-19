<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"><!--Responsive page-->

  <title>Log In - Reka&Bina IBS Panel Clinic System</title>
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
</head>
<body class="bg-primary">
  <main>

    <div class="container">
<div class="unix-login">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">

                <div class="card-body">

                    <div class="d-flex justify-content-center py-4">
                      <img src="img/logo%20ibs.jpg" alt="">
                    </div>
                    
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">REKA & BINA IBS PANEL CLINIC SYSTEM</h5>
                  </div>

                 <div align="center" class="style1">
                    <marquee  loop="-1" scrollamount="5">
		              <span class="style11"><strong>WELCOME</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style20 style42">
		              </span>
		            </marquee>
		          </div><br>
                    
                  <form class="row g-3 needs-validation"  action="#" method="post">
                      
                    <div class="col-12">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <label for="username" class="form-label">Username</label>
                        <div class="textbox">
                        <input type="text" placeholder="username" name="username" id="username" class="form-control" required>
                    </div>
                    </div>
                    <div class="col-12">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <label for="password" class="form-label">Password</label>
                    <div class="textbox">
                        <input type="password" placeholder="password" name="password" id="password" class="form-control" required>
                    </div>
                    </div>  

                    <div class="col-12">
                    </div>
                      
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit" id="submit">Log In</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

        </div></div>
  </main><!-- End #main -->
</body>
</html>