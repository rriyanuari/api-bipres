<?php

  //Import file
  include '../../config/functions.php';

  // header('Content-Type: text/xml');

  // Get Data from Form
  $id_kategori_stats     = $_POST['id_kategori_stats'];
  $nama_kategori_stats    = $_POST['nama_kategori_stats'];
  $deskripsi_kategori_stats	    = $_POST['deskripsi_kategori_stats'];

  if(!$nama_kategori_stats || !$id_kategori_stats){
    $response['success'] = 0;
    $response['message'] = "Data kosong";

    echo json_encode($response);
    return false; 
  } 

  $hasil  = $db->query(" UPDATE kategori_stats SET nama_kategori_stats = '$nama_kategori_stats', deskripsi_kategori_stats	 = '$deskripsi_kategori_stats	', log_datetime = NOW() 
                         WHERE id_kategori_stats='$id_kategori_stats' ");
  
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
