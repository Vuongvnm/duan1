<?php
  require_once "view/header.php";
  if($_GET == []) {
    require_once "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {
        case 'danh_sach_danh_muc':
          require_once "controller/danh_muc/danh_sach_danh_muc.php";
          break;
        case 'them_danh_muc':
          require_once  "controller/danh_muc/them_danh_muc.php";
          break;
        case 'xoa_dm':
          require_once "controller/danh_muc/xoa_danh_muc.php";
          break;
        case 'sua_dm':
          require_once  "controller/danh_muc/sua_danh_muc.php";
          break;
        default:
          break;  
      }
    }
  }
  require_once "view/footer.php"
?>