<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_KATALALUAN', '');
define('DB_NAMA', 'ibsNew');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_KATALALUAN, DB_NAMA);
$db = mysqli_select_db($con, "ibsNew");
session_start();
$user_check = $_SESSION['login_user'];
$ses = "select * from user where username='$user_check'";
$ses_sql=mysqli_query($con, $ses);
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session =$row['username'];
if(!isset($login_session)){
$con->close();// Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>