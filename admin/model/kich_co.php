<?php
  require_once "../models/pdo.php";

  function hien_thi_kich_co() {
    $sql = "SELECT * FROM kich_co ORDER BY id_kc ASC";
    return pdo_query($sql);
  }
?>