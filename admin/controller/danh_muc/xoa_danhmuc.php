<?php
  include "model/danh_muc.php";
  if(isset($_GET['id_dm'])) {
    xoa_danh_muc($_GET['id_dm']);
  }
  header('Location: index.php?action=danh_sach_danh_muc.php');
?>