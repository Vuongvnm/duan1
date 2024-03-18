<?php
  require_once "../model/pdo.php";
  
  function danh_sach_mau_sac() {
    $sql = "SELECT * FROM mau_sac ORDER BY id_ms ASC";
    return pdo_query($sql);
  }

  function hien_thi_idms_by_idsp($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = '$id_sp'";
    return pdo_query_one($sql)['id_ms'];
  }
?>