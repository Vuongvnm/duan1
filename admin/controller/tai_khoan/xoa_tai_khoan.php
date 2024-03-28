<?php
  require_once "model/tai_khoan.php";
  if(isset($_GET['id_tk'])) {
    $id_tk = $_GET['id_tk'];
    xoa_tai_khoan($id_tk);
  }
  header('Location: index.php?action=danh_sach_tai_khoan');
?>