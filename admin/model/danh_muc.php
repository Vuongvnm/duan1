<?php
  require_once "../model/pdo.php";
  
  function hien_thi_danh_muc() {
    $sql = "SELECT * FROM danh_muc ORDER BY id_dm DESC";
    return pdo_query($sql);
  }

  function xoa_danh_muc($id_dm) {
    $sql = "DELETE FROM danh_muc WHERE id_dm = $id_dm";
    pdo_execute($sql);
  }
?>