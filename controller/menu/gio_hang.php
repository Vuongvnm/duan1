<?php
  if(!$_SESSION['tai_khoan']) {
    $_SESSION['tai_khoan'] = 0;
  } else {}
  require_once "view/menu/gio_hang.php";
?>