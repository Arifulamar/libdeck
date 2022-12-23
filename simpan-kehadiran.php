<?php 

session_start();
include 'visitor/koneksi.php';

$tanggal=$_POST['tanggal'];
$nama = addslashes ($_POST['nama']);
$asal = $_POST ['asal'];
$tujuan = $_POST['tujuan'];
$waktukunjung = date ('d F Y H:i:s');

$sql="INSERT into kunjungan (tanggal, nama, asal, tujuan, waktu_kunjung) values 
('$tanggal', '$nama', '$asal', '$tujuan', '$waktukunjung')";

$hasil = mysqli_query($kon, $sql);

$_SESSION["sukses"] = 'Silakan Masuk Perpustakaan';
header('location: index.php');

/*if($hasil){
    echo "<script>alert('Silakan Masuk Perpustakaan!');window.location='index.php'</script>";
}
else {
    echo 'Silakan coba lagi!';
    exit;
}*/
?>