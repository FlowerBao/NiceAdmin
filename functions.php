<?php
if(isset($_POST['submit'])){
  $mysqli = new mysqli("localhost", "root", "", "ibsNew");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  }
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    
  $res = $mysqli->query("SELECT * FROM user where username='$username' and password='$password'");
  $row = $res->fetch_assoc();
  $user = $row['username'];
  $pass = $row['password'];
  $type = $row['role'];
  if($user==$username && $pass=$password){
    session_start();
    if($type=="admin"){
      $_SESSION['mytype']=$type;
      header("location: category.php");
    } else if($type=="clinic"){
      $_SESSION['mytype']=$type;
      header("location: dashboard-klinik.php");
    } else{
?>

<div class="alert alert-warning alert-dismissible" role="alert">
  <strong>Sorry!</strong> Account is not registered.
</div>
<?php
    }
  } else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <strong>Sorry!</strong> Username and password cannot be identified.
</div>
<?php
  }
}
?>
  