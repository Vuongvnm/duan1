<?php
  require_once "model/binh_luan.php";
  $id= $_GET['id_bl'];
  an_binh_luan($id);
  header('location: index.php?action=danh_sach_binh_luan');
?>