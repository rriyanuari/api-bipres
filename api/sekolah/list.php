<?php

  //Import file
  include '../../config/functions.php';

  header('Content-Type: text/xml');

  // query sql
  $rssql = "SELECT * FROM sekolah";

  // mendapatkan hasil
  $sql = mysqli_query($con, $rssql);

  // deklarasi array
  $response = array();

  while($a = mysqli_fetch_array($sql)){

    // memasukan data field kedalam variabel
    $b['id_sekolah'] = $a['id_sekolah'];
    $b['nama_sekolah'] = $a['nama_sekolah'];
    $b['jenjang_sekolah'] = $a['jenjang_sekolah'];
    $b['log_datetime'] = $a['log_datetime'];

    array_push($response, $b);
  }

  echo json_encode($response);

?>
