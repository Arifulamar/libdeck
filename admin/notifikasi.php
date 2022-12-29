<?php 
include ('../conf/config.php');

$find_notifications = "Select * from kunjungan where active = 1";
$result = mysqli_query($koneksi, $find_notifications);
$count_active = '';
$notifications_data = array(); 
$deactive_notifications_dump = array();
 while($rows = mysqli_fetch_assoc($result)){
         $count_active = mysqli_num_rows($result);
         $notifications_data[] = array(
                     "n_id" => $rows['id'],
                     "notifications_name"=>$rows['nama'],
                     "message"=>$rows['tujuan']
         );
 }

 ?>