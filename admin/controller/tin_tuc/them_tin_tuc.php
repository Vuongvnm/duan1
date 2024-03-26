<?php
  require_once "model/tin_tuc.php";
  if(isset($_POST['them_moi'])) {
    $tieu_de = $_POST['tieu_de'];
    them_tin_tuc($tieu_de);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
  require_once "view/tin_tuc/them_tin_tuc.php";
?>