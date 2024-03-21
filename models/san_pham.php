<?
  require_once "pdo.php";

  function danh_sach_san_pham() {
    $sql = "SELECT * FROM san_pham ORDER BY id_dm DESC";
    return pdo_query($sql);
  }
?>