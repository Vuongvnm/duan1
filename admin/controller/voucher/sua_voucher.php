<?php
require_once "model/voucher.php";
if(isset($_GET['id_voucher']) && ($_GET['id_voucher'] > 0)) {
  $mot_voucher = mot_voucher($_GET['id_voucher']);
  require_once "view/voucher/sua_voucher.php";
} 
?>