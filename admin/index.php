<?php
  include "view/header.php";
  if($_GET == []) {
    include "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {
        case 'danh_sach_danh_muc':
          include "controller/danh_muc/danh_sach_danh_muc.php";
          break;
        case 'them_danh_muc':
          include "controller/danh_muc/them_danh_muc.php";
          break;
        case 'xoa_dm':
          include "controller/danh_muc/xoa_danh_muc.php";
          break;
        default:
          break;  
      }
    }
  }
  include "view/footer.php"
?>