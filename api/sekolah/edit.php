<?php

  //Import file
  include '../../config/functions.php';

  // header('Content-Type: text/xml');

  // Get Data from Form
  $id_sekolah     = $_POST['id_sekolah'];
  $nama_sekolah    = $_POST['nama_sekolah'];
  $jenjang_sekolah    = $_POST['jenjang_sekolah'];

  if(!$nama_sekolah || !$id_sekolah){
    $response['success'] = 0;
    $response['message'] = "Data kosong";

    echo json_encode($response);
    return false; 
  } 

  $hasil  = $db->query(" UPDATE sekolah SET nama_sekolah = '$nama_sekolah', jenjang_sekolah = '$jenjang_sekolah', log_datetime = NOW() 
                         WHERE id_sekolah='$id_sekolah' ");
  
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
