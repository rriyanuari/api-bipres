<?php

  //Import file
  include '../../config/functions.php';

  header('Content-Type: text/xml');

  $namaTabel = "user";

  // Get Data from Form
  $id_user     = $_POST['id_user'];

  $hasil = $db->query("DELETE FROM $namaTabel WHERE id_user='$id_user'");

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
