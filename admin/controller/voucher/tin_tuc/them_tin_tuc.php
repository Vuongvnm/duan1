<?php
  require_once "model/tin_tuc.php";
  require_once "view/tin_tuc/them_tin_tuc.php";
  if(isset($_POST['them_moi'])) {
    $tieu_de = $_POST['tieu_de'];
    them_tin_tuc($tieu_de);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
  error_reporting(E_ERROR | E_PARSE);
  header('Location: index.php?action=danh_sach_tin_tuc');
?>