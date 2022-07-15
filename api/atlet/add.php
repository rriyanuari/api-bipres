<?php

  include '../../config/functions.php';
  
  // header('Content-Type: text/xml');

  $namaTabel = "user";

  // Get Data from Form 
  $username       = trim(strtolower($_POST['nama_lengkap']));
  $password       = "atlet";
  $email          = strtolower($username."@gmail.com");
  $nama_lengkap   = $_POST['nama_lengkap'];
  $jenis_kelamin  = $_POST['jenis_kelamin'];
  $tanggal_lahir  = $_POST['tanggal_lahir'];
  $id_sekolah     = $_POST['id_sekolah'];

  if(!$nama_lengkap){
    $response['success'] = 0;
    $response['message'] = "Data kosong";
    echo json_encode($response);
    return die(); 
  } 

  $cek = $db->get_results("SELECT * FROM `$namaTabel` WHERE `nama_lengkap` = '$nama_lengkap'");

  // Cek data sudah ada?
  if($cek){
    $response['success'] = 0;
    $response['message'] = "Data sudah ada";
    echo json_encode($response);
    return die(); 
  }

  // Insert data
  $sql = $db->query("INSERT INTO $namaTabel VALUES(NULL, '$username', '$password', '$email', 2, '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir', '$id_sekolah', NOW())");

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