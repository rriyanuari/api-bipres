<?php
  //Import file
  include '../../config/functions.php';

  header('Content-Type: text/xml');

  // query sql
  $rssql = "SELECT * FROM user WHERE status = '2' ";

  // mendapatkan hasil
  $sql = mysqli_query($con, $rssql);

  // deklarasi array
  $response = array();

  while($a = mysqli_fetch_array($sql)){

    // memasukan data field kedalam variabel
    $b['id_user'] = $a['id_user'];
    $b['username'] = $a['username'];
    $b['password'] = $a['password'];
    $b['email'] = $a['email'];
    $b['status'] = $a['status'];
    $b['nama_lengkap'] = $a['nama_lengkap'];
    $b['jenis_kelamin'] = $a['jenis_kelamin'];
    $b['tanggal_lahir'] = $a['tanggal_lahir'];
    $b['id_sekolah'] = $a['id_sekolah'];
    $b['log_datetime'] = $a['log_datetime'];

    array_push($response, $b);
  }

  echo json_encode($response);

?>
