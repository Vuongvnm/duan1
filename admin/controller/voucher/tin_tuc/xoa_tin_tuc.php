<?php
  require_once "model/tin_tuc.php";
  if(isset($_GET['id_tt'])) {
    xoa_tin_tuc($_GET['id_tt']);
  }
  header('Location: index.php?action=danh_sach_tin_tuc');
?>