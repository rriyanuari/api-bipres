<?php

  include '../../config/functions.php';
  
  // header('Content-Type: text/xml');

  $namaTabel = "kategori_stats";

  // Get Data from Form 
  $nama_kategori_stats     = $_POST['nama_kategori_stats'];
  $deskripsi_kategori_stats     = $_POST['deskripsi_kategori_stats'];

  if(!$nama_kategori_stats){
    $response['success'] = 0;
    $response['message'] = "Data kosong";
    echo json_encode($response);
    return die(); 
  } 

  $cek = $db->get_results("SELECT * FROM `$namaTabel` WHERE `nama_kategori_stats` = '$nama_kategori_stats'");

  // Cek data sudah ada?
  if($cek){
    $response['success'] = 0;
    $response['message'] = "Data sudah ada";
    echo json_encode($response);
    return die(); 
  }

  // Insert data
  $sql = $db->query("INSERT INTO $namaTabel VALUES(NULL,'$nama_kategori_stats', '$deskripsi_kategori_stats', NOW())");

  if($sql){
    $response['success'] = 1;
    $response['message'] = "Berhasil Tambah Data";
    echo json_encode($response);
  }else{
    $response['success'] = 0;
    $response['message'] = "Data Gagal Disimpan";
    echo json_encode($response);
  }

?>