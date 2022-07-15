<?php

  //Import file
  include '../../config/functions.php';

  header('Content-Type: text/xml');

  $namaTabel = "sekolah";

  // Get Data from Form
  $id_sekolah     = $_POST['id_sekolah'];

  $hasil = $db->query("DELETE FROM $namaTabel WHERE id_sekolah='$id_sekolah'");

  if($hasil){
    $response['success'] = 1;
    $response['message'] = "Berhasil dihapus";

    echo json_encode($response);
  }else{
    $response['success'] = 0;
    $response['message'] = "Data gagal dihapus";

    echo json_encode($response);
  }
  
?>
