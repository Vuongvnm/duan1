<?php
  require_once "model/mau_sac.php";
  if(isset($_GET['id_ms'])) {
    $id_ms = $_GET['id_ms'];
    xoa_mau_sac($id_ms);
  }
  header('Location: index.php?action=danh_sach_mau_sac');
?>