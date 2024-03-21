<?php
  require_once "view/header.php";
  if($_GET == []) {
    require_once "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {
        /* BEGIN SẢN PHẨM */
        case 'danh_sach_san_pham':
          require_once "controller/san_pham/danh_sach_san_pham.php";
          break;
        /* END SẢN PHẨM */
        /* START MENU */
        case 'bai_viet':
          require_once "view/menu/bai_viet.php";
          break;
        case 'gioi_thieu':
          require_once "view/menu/gioi_thieu.php";
          break;
        case 'lien_he':
          require_once "view/menu/lien_he.php";
          break;
        /* END MENU */
        default:
          require_once "view/content.php";
          break;  
      }
    }
  }
  require_once "view/footer.php";
?>