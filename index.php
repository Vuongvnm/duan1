<?php
  require_once "view/header.php";
  if($_GET == []) {
    require_once "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {
        /* START MENU */
        case 'san_pham':
          require_once "controller/menu/san_pham.php";
          break;
        case 'bai_viet':
          require_once "view/menu/bai_viet.php";
          break;
        case 'gioi_thieu':
          require_once "view/menu/gioi_thieu.php";
          break;
        case 'lien_he':
          require_once "view/menu/lien_he.php";
          break;
        case 'gio_hang':
          require_once "controller/menu/gio_hang.php";
          break;  
        /* END MENU */
        /* START OTHERS */
        case 'san_pham_chi_tiet':
          require_once "controller/thuoc_tinh/san_pham_chi_tiet.php";
          break;
        case 'them_gio_hang':
          require_once "controller/menu/them_gio_hang.php";          
          break;
        /* END OTHERS */
        default:
          require_once "view/content.php";
          break;  
      }
    }
  }
  require_once "view/footer.php";
?>