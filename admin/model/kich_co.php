<?php
  require_once "../model/pdo.php";

  function hien_thi_kich_co() {
    $sql = "SELECT * FROM kich_co ORDER BY id_kc ASC";
    return pdo_query($sql);
  }

  function hien_thi_idkc_by_idsp($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = '$id_sp'";
    return pdo_query_one($sql)['id_kc'];
  }
?>