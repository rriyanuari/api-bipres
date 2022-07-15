<?php

  //Import file
  include '../../config/functions.php';

  header('Content-Type: text/xml');

  $namaTabel = "kategori_stats";

  // Get Data from Form
  $id_kategori_stats     = $_POST['id_kategori_stats'];

  $hasil = $db->query("DELETE FROM $namaTabel WHERE id_kategori_stats='$id_kategori_stats'");

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
