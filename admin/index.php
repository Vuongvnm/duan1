<?php
  include "view/header.php";
  if($_GET == []) {
    include "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {
        case 'danhsach_danhmuc':
          include "controller/danhmuc/danhsach_danhmuc.php";
          break;
        case 'them_danhmuc':
          include "controller/danhmuc/them_danhmuc.php";
          break;
        case 'xoa_dm':
          include "controller/danhmuc/xoa_danhmuc.php";
          break;
        default:
          break;  
      }
    }
  }
  include "view/footer.php"
?>