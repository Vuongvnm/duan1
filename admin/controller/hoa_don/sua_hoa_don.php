<?php
  require_once "model/hoa_don.php";
  if(isset($_GET['id_hd']) && ($_GET['id_hd'] > 0)) {
    $tinhtrang = tinhtrang($_GET['id_hd']);
    require_once "view/hoa_don/sua_hoa_don.php";
  } 
  
?>