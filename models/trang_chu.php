<?php
  require_once "pdo.php";

  function danh_sach_san_pham() {
    $sql = "SELECT * FROM san_pham ORDER BY luot_xem DESC LIMIT 0,8";
    return pdo_query($sql);
  }
?>