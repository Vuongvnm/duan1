<?php
  include "model/danh_muc.php";
  if(isset($_GET['id_dm'])) {
    xoa_danhmuc($_GET['id_dm']);
  }
  header('Location: index.php?action=danhsach_danhmuc.php');
?>