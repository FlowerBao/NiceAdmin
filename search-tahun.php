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
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"> <!--Responsive page-->

  <title>Staff Usage Report - Reka&Bina IBS Panel Clinic System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.1/flatly/bootstrap.min.css">

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
      <form class="search-form d-flex align-items-center" method="POST" action="search-tahun.php">
        <input type="text" name="search" placeholder="Year Treatment" title="Enter search keyword">
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
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pengurusanPanel-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Panel Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengurusanPanel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="klinik-list.php">
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
        
        <li class="nav-item">
        <a class="nav-link " data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="laporan-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        
      
          <li>
            <a href="laporan-klinik.php">
              <i class="bi bi-circle"></i><span>Clinic</span>
            </a>
          </li>
          <li>
            <a href="laporan-kakitangan.php" class="active">
              <i class="bi bi-circle"></i><span>Staff Usage</span>
            </a>
          </li>
        </ul>
      </li><!-- End Laporan Nav -->
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
      <h1>Staff Usage Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Main</a></li>
          <li class="breadcrumb-item">Report</li>
          <li class="breadcrumb-item"><a href="laporan-kakitangan.php">Staff Usage</a></li>
          <li class="breadcrumb-item active">Year Search</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
         <div class="col-lg-13">
          <div class="row">
            <div class="card" >
            <div class="card-body">
              <div class="col-13">
              <button onclick="createPDF()" class="btn btn-primary rounded-pill" type="button" id="btPrint">Print / PDF</button>
              <a class="btn btn-success rounded-pill login-submit-cs" href="#" id="test" onClick="javascript:fnExcelReport();">Excel</a><br><br>
               
            <div id="tab">
            <table id="data" class="table table-bordered">
            <thead class="thead-dark">
                <tr  style="text-align:center;background-color:rgb(155, 190, 255);">
                    <td><strong>Staff Name</strong></td>
                    <td><strong>Visa/IC Number</strong></td>
                    <td><strong>Phone Number</strong></td>
                    <td><strong>Year</strong></td>
                    <td><strong>Clinic Name</strong></td>
                    <td><strong>Treatment Date</strong></td>
                    <!--<td><strong>Total Treatment</strong></td>-->
                    <td><strong>Total</strong></td>
                    <td><strong>Balance</strong></td>
                </tr>
           </thead>
           <tbody>
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
           
                             $sql = "SELECT
                                    t1.nama, t1.no_visa, t1.notelefon, t1.tahun, 
                                    nama_klinik,
                                    t1.tarikh_rawatan,
                                    SUM(jum_rawatan) total,
                                    200-SUM(jum_rawatan) baki
                                FROM
                                    penggunaan_staf t1
                                INNER JOIN klinik t2 
                                    ON t1.bil_klinik = t2.bil
                                WHERE
                                    t1.tahun like '%$search%'";

                            $result = $conn->query($sql);
                        if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc() ){
                    ?>
                        <tr>
                           <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["no_visa"]; ?></td>
                            <td><?php echo $row["notelefon"]; ?></td>
                            <td><?php echo $row["tahun"]; ?></td>
                            <td><?php echo $row["nama_klinik"]; ?></td>
                            <td><?php echo $row["tarikh_rawatan"]; ?></td>
                           <!-- <td><?php echo $row["jum_rawatan"]; ?></td>-->
                            <td><?php echo $row["total"]; ?></td>
                            <td><?php echo $row["baki"]; ?></td>
                        </tr>
                        <?php
                            }
                        }else{
                            echo"No records";
                        }
                            $conn->close();
                        ?>
            </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="jquery.tableToExcel.js"></script>
                  </div></div></div></div></div></div></div>
    </section>
  </main><!-- End #main -->
    
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
                  
<!--===Excel script===-->
<script type="text/javascript">
    
    const table = document.querySelector('table');

				let headerCell = null;

				for (let row of table.rows) {
				  const firstCell = row.cells[0];
				  
				  if (headerCell === null || firstCell.innerText !== headerCell.innerText) {
					headerCell = firstCell;
				  } else {
					headerCell.rowSpan++;
					firstCell.remove();
				  }
				}
    
				function printDiv(divID) {
					var divElements = document.getElementById(divID).innerHTML;
					var oldPage = document.body.innerHTML;
					document.body.innerHTML = 
					  "<html><head><title></title></head><body>" + 
					  divElements + "</body>";
					window.print();
					document.body.innerHTML = oldPage;
				}
			</script>
	<script>
	  	function fnExcelReport() {
			var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
			tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

			tab_text = tab_text + '<x:Name>Test Sheet</x:Name>';

			tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
			tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

			tab_text = tab_text + "<table border='1px'>";
			tab_text = tab_text + $('#data').html();
			tab_text = tab_text + '</table></body></html>';

			var data_type = 'data:application/vnd.ms-excel';
			
			var ua = window.navigator.userAgent;
			var msie = ua.indexOf("MSIE ");
			
			if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
				if (window.navigator.msSaveBlob) {
					var blob = new Blob([tab_text], {
						type: "application/csv;charset=utf-8;"
					});
					navigator.msSaveBlob(blob, 'Test file.xls');
				}
			} else {
				$('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
				$('#test').attr('download', 'Staff Usage Report (Year).xls');
			}

		} 
	</script><!--===End excel script===-->
    
      <!--Export to pdf-->
<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>
</body>
<?php
    include ('include/footer.php');?>
</html>