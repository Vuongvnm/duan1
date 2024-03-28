<?php
  if($_GET == []) {
    require_once "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {
        /* START DANH MỤC */
        case 'danh_sach_danh_muc':
          require_once "controller/danh_muc/danh_sach_danh_muc.php";
          break;
        case 'chi_tiet_danh_muc':
          require_once "controller/danh_muc/chi_tiet_danh_muc.php";
          break;
        case 'them_danh_muc':
          require_once "controller/danh_muc/them_danh_muc.php";
          break;
        case 'xoa_dm':
          require_once "controller/danh_muc/xoa_danh_muc.php";
          break;
        case 'sua_dm':
          require_once "controller/danh_muc/sua_danh_muc.php";
          break;
        case 'cap_nhat_danh_muc':
          require_once "controller/danh_muc/cap_nhat_danh_muc.php";
        /* END DANH MỤC */

        /* START SẢN PHẨM */
        case 'danh_sach_san_pham':
          require_once "controller/san_pham/danh_sach_san_pham.php";
          break;
        case 'chi_tiet_san_pham':
          require_once "controller/san_pham/chi_tiet_san_pham.php";
          break;  
        case 'them_san_pham':
          require_once "controller/san_pham/them_san_pham.php";
          break;
        case 'xoa_sp':
          require_once "controller/san_pham/xoa_san_pham.php";
          break;
        case 'sua_sp':
          require_once "controller/san_pham/sua_san_pham.php";
          break; 
        case 'cap_nhat_san_pham':
          require_once "controller/san_pham/cap_nhat_san_pham.php";
          break;
        case 'kho_anh':
          require_once "controller/san_pham/kho_anh.php";
          break;  
        case 'them_kho_anh':
          require_once "controller/san_pham/them_kho_anh.php";
          break;
        /* END SẢN PHẨM */

        /* START MÀU SẮC */
        case 'danh_sach_mau_sac':
          require_once "controller/mau_sac/danh_sach_mau_sac.php";
          break;
        case 'chi_tiet_mau_sac':
          require_once "controller/mau_sac/chi_tiet_mau_sac.php";
          break;
        case 'them_mau_sac':
          require_once "controller/mau_sac/them_mau_sac.php";
          break;
        case 'xoa_ms':
          require_once "controller/mau_sac/xoa_mau_sac.php";
          break;
        case 'sua_ms':
          require_once "controller/mau_sac/sua_mau_sac.php";
          break;
        case 'cap_nhat_mau_sac':
          require_once "controller/mau_sac/cap_nhat_mau_sac.php";
        /* END MÀU SẮC */

        /* START TIN TỨC */
        case 'danh_sach_tin_tuc':
          require_once "controller/tin_tuc/danh_sach_tin_tuc.php";
          break;
        case 'chi_tiet_tin_tuc':
          require_once "controller/tin_tuc/chi_tiet_tin_tuc.php";
          break;  
        case 'them_tin_tuc':
          require_once "controller/tin_tuc/them_tin_tuc.php";
          break;  
        case 'xoa_tt':
          require_once "controller/tin_tuc/xoa_tin_tuc.php";
          break;
        case 'sua_tt':
          require_once "controller/tin_tuc/sua_tin_tuc.php";
          break; 
        case 'cap_nhat_tin_tuc':
          require_once "controller/tin_tuc/cap_nhat_tin_tuc.php";
          break;
        /* END TIN TỨC */

        /* START BÀI VIẾT */
        case 'danh_sach_bai_viet':
          require_once "controller/bai_viet/danh_sach_bai_viet.php";
          break;
        case 'chi_tiet_bai_viet':
          require_once "controller/bai_viet/chi_tiet_bai_viet.php";
          break;  
        case 'them_bai_viet':
          require_once "controller/bai_viet/them_bai_viet.php";
          break;  
        case 'xoa_bv':
          require_once "controller/bai_viet/xoa_bai_viet.php";
          break;
        case 'sua_bv':
          require_once "controller/bai_viet/sua_bai_viet.php";
          break; 
        case 'cap_nhat_bai_viet':
          require_once "controller/bai_viet/cap_nhat_bai_viet.php";
          break;
        /* END BÀI VIẾT */

        /* START VOUCHER */
        case 'danh_sach_voucher':
          require_once "controller/voucher/danh_sach_voucher.php";
          break;
        case 'chi_tiet_voucher':
          require_once "controller/voucher/chi_tiet_voucher.php";
          break;
        case 'them_voucher':
          require_once "controller/voucher/them_voucher.php";
          break;
        case 'xoa_voucher':
          require_once "controller/voucher/xoa_voucher.php";
          break; 
        case 'sua_voucher':
          require_once "controller/voucher/sua_voucher.php";
          break;
        case 'cap_nhat_voucher':
          require_once "controller/voucher/cap_nhat_voucher.php";   
          break;        
        /* END VOUCHER */
        
        /* START HÓA ĐƠN */
        case 'danh_sach_hoa_don':
          require_once "controller/hoa_don/danh_sach_hoa_don.php";
          break;
        case 'sua_hoa_don':
          require_once "controller/hoa_don/sua_hoa_don.php";
          break;
        case 'xoa_hoa_don':
          require_once "controller/hoa_don/xoa_hoa_don.php";
          break; 
        case 'cap_nhat_hoa_don':
          require_once "controller/hoa_don/cap_nhat_hoa_don.php";   
          break;
        /* END HÓA ĐƠN */

        /* START BÌNH LUẬN */
        case 'danh_sach_binh_luan':
          require_once "controller/binh_luan/danh_sach_binh_luan.php";
          break;
        case 'xoa_binh_luan':
          require_once "controller/binh_luan/xoa_binh_luan.php";
          break; 
        case 'an_binh_luan':
          require_once "controller/binh_luan/an_binh_luan.php";   
          break;
        /* END BÌNH LUẬN */
        default:
          require_once "view/content.php";
          break;  
      }
    }
  }
?>