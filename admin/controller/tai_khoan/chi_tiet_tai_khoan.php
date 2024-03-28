<?php
  require_once "model/tai_khoan.php";
  if(isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)) {
    $id_tk = $_GET['id_tk'];
    $chi_tiet_tai_khoan = chi_tiet_tai_khoan($id_tk);
    
  }
  require_once "view/tai_khoan/chi_tiet_tai_khoan.php";
?>