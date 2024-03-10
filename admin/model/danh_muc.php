<?php
  include "pdo.php";
  
  function hienthi_danhmuc() {
    $sql = "SELECT * FROM danh_muc ORDER BY id_dm DESC";
    return pdo_query($sql);
  }

  function xoa_danhmuc($id_dm) {
    $sql = "DELETE FROM danh_muc WHERE id_dm = $id_dm";
    pdo_execute($sql);
  }
?>