<?php

  //Import file
  include '../../config/functions.php';

  // header('Content-Type: text/xml');

  // Get Data from Form
  $id_user        = $_POST['id_user'];
  $username       = trim(strtolower($_POST['nama_lengkap']));
  $password       = "atlet";
  $email          = strtolower($username."@gmail.com");
  $nama_lengkap   = $_POST['nama_lengkap'];
  $jenis_kelamin  = $_POST['jenis_kelamin'];
  $tanggal_lahir  = $_POST['tanggal_lahir'];
  $id_sekolah     = $_POST['id_sekolah'];

  if(!$id_user){
    $response['success'] = 0;
    $response['message'] = "Data kosong";

    echo json_encode($response);
    return false; 
  } 

  $hasil  = $db->query(" UPDATE user SET username = '$username', password = '$password', email = '$email', nama_lengkap = '$nama_lengkap', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir', id_sekolah = '$id_sekolah', log_datetime = NOW() 
                         WHERE id_user='$id_user' ");
  
  if($hasil){
    $response['success'] = 1;
    $response['message'] = "Berhasil diupdate";

    echo json_encode($response);
  }else{
    $response['success'] = 0;
    $response['message'] = "Data gagal diupdate";

    echo json_encode($response);
  }
;?>
