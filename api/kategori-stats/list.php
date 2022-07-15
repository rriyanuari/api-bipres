<?php

  //Import file
  include '../../config/functions.php';

  header('Content-Type: text/xml');

  // query sql
  $rssql = "SELECT * FROM kategori_stats";

  // mendapatkan hasil
  $sql = mysqli_query($con, $rssql);

  // deklarasi array
  $response = array();

  while($a = mysqli_fetch_array($sql)){

    // memasukan data field kedalam variabel
    $b['id_kategori_stats'] = $a['id_kategori_stats'];
    $b['nama_kategori_stats'] = $a['nama_kategori_stats'];
    $b['deskripsi_kategori_stats'] = $a['deskripsi_kategori_stats'];
    $b['log_datetime'] = $a['log_datetime'];

    array_push($response, $b);
  }

  echo json_encode($response);

?>
