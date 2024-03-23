<?php
;
  require_once "model/danh_muc_bai_viet.php";
  require_once "model/tin_tuc.php";
  $danh_sach_danh_muc_bai_viet = hien_thi_danh_muc_bai_viet();

  if(isset($_GET['id_tt']) && ($_GET['id_tt'] > 0)) {
    $mot_bai_viet = mot_bai_viet($_GET['id_tt']);
    require_once "view/tin_tuc/sua_tin_tuc.php";
  } 
?>