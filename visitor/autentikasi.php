<?php 

include ('koneksi.php');

$username = $_POST ['username'];
$password = $_POST ['password'];

$query = mysqli_query ($kon, "SELECT * FROM user WHERE username = '$username' AND password= '$password'");
if (mysqli_num_rows($query)==1){
header ('Location:../kunjungan/admin');
}
else {
   header('Location:../kunjungan/login.php?error=1');
}
?>