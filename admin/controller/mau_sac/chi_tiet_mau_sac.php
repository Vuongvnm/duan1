<?php
  require_once "model/mau_sac.php";
  if(isset($_GET['id_ms']) && ($_GET['id_ms'] > 0)) {
    $id_ms = $_GET['id_ms'];
    $danh_sach_san_pham = san_pham_id_mau_sac($id_ms);
    $danh_sach_mau_sac = mot_mau_sac($id_ms);
  }
  require_once "view/mau_sac/chi_tiet_mau_sac.php";
?>