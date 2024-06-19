<?php
session_start();

if (!isset($_SESSION['mytype'])=='clinic')
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"><!--Responsive page-->

  <title>Register Staff Usage - Reka&Bina IBS Panel Clinic System</title>
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
      <a href="dashboard-klinik.php" class="logo d-flex align-items-center">
        <img src="img/logo%20ibs.jpg" alt="">
        <span class="d-none d-lg-block">PANEL CLINIC</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/admin.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Clinic</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a></li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul></nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard-klinik.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" href="add-usage.php">
                <i class="bi bi-journal-text"></i>
                <span>Add Usage</span>
            </a>
        </li>
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Register Staff Usage</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard-klinik.php">Main</a></li>
          <li class="breadcrumb-item">Register staff usage</li>
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
<?php

	// Connect to database
	$con = mysqli_connect("localhost","root","","ibsNew");

	// Get all the categories from klinik table
	$sql = "SELECT * FROM `klinik`";
    $all_categories = mysqli_query($con,$sql);
?>
	<form method="post" action="process-add.php">

        <!--dropdown year-->
         <div class="row mb-3">
            <label class="col-sm-4 col-form-label">Year <i class="fa fa-asterisk text-danger">*</i></label>
            <div class="col-sm-6">
        <select name="tahun" class="form-select" required>
            <option selected>--Please choose year--</option>
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
        
        <!--nama pekerja-->
           <div class="row mb-3"> 
            <label class="col-sm-4 col-form-cont">Staff Name <i class="fa fa-asterisk text-danger">*</i></label>
            <div class="col-sm-6">
            <input type='text' name="nama" id='nama' class='form-control' onkeyup="GetDetail(this.value)" value="" required>
				</div>
		      </div>

        <!--nombor pekerja-->
		  <div class="row mb-3">
					<label for="inputText" class="col-sm-4 col-form-label">Visa/IC Number <i class="fa fa-asterisk text-danger">*</i></label>
                    <div class="col-sm-6"> 
					<input type="text" name="no_visa" id="no_visa" class="form-control" value="" required>
				</div>
			</div>
    
        <!--nombor kp-->
		<div class="row mb-3">
					<label for="inputText" class="col-sm-4 col-form-label">Phone Number <i class="fa fa-asterisk text-danger">*</i></label>
                    <div class="col-sm-6">   
					<input type="text" name="notelefon" id="notelefon" class="form-control" value="" required>
				</div>
			</div>        
        
        <!--nama klinik-->
        <div class="row mb-3">
        <label class="col-sm-4 col-form-label">Clinic Name <i class="fa fa-asterisk text-danger">*</i></label>
            <div class="col-sm-6">
		<select name="bil_klinik" class="form-select" required>
            <option selected>--Choose clinic name--</option>
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

        <!--tarikh rawatan-->
        <div class="row mb-3">
        <label for="inputText" class="col-sm-4 col-form-label">Treatment Date <i class="fa fa-asterisk text-danger">*</i></label>
        <div class="col-sm-6"> 
        <input type="date" name="tarikh_rawatan" class="form-control" required>
        </div>
        </div>
        
        <!--jumlah rawatan-->
        <div class="row mb-3">
        <label for="inputText" class="col-sm-4 col-form-label">Total Treatment (RM) <i class="fa fa-asterisk text-danger">*</i></label>
        <div class="col-sm-6"> 
        <input type="text" name="jum_rawatan" class="form-control" required>
        </div>
        </div>
        
        <!--button daftar-->
        <div class="form-group row mb-3">
		<label class="col-sm-4 col-form-label"></label>
            <div class="col-sm-2">
            <input type="submit" class="btn btn-primary" name="save" value="Add">
            </div>  
        </div> 
	</form>
</div></div></div></div></div>
</section>
</main><!-- End #main -->
 <?php include ('include/footer.php');?>
  <script>

		function GetDetail(str) {
			if (str.length == 0) {
				document.getElementById("no_visa").value = "";
				document.getElementById("notelefon").value = "";
				return;
			}
			else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {
					if (this.readyState == 4 &&
							this.status == 200) {
						var myObj = JSON.parse(this.responseText);
						
						document.getElementById
							("no_visa").value = myObj[0];
                        
						document.getElementById(
							"notelefon").value = myObj[1];

					}
				};

				xmlhttp.open("GET", "gfg-bujang.php?nama=" + str, true);

				xmlhttp.send();
			}
		}
	</script>
</body>
</html>