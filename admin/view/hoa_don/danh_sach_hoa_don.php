<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Danh sách hóa đơn</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã Hóa Đơn</th>
          <th>PT Thanh Toán</th>
          <th>Tình Trạng</th>
          <th>Tổng Tiền</th>
          <th>Mã Khách hàng</th>
          <th>Voucher</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_hd as $dshd) {
            $id_hd = $dshd['id_hd'];
            $hinh_thuc_thanh_toan = $dshd['hinh_thuc_thanh_toan'];
            $tinh_trang_thanh_toan = $dshd['tinh_trang_thanh_toan'];
            $tong_tien = $dshd['tong_tien'];
            $id_tk = $dshd['id_tk'];
        ?>
        <tr>  
          <td><?=$id_hd?></td>
          <td>
            <?php
              if ($hinh_thuc_thanh_toan == 1) {
                echo "Thanh toán khi nhận hàng";
              } elseif ($hinh_thuc_thanh_toan == 2) {
                echo "Chuyển khoản ngân hàng";
              } elseif ($hinh_thuc_thanh_toan == 3) {
                echo "Zalo Pay";
              } elseif ($hinh_thuc_thanh_toan == 4) {
                echo "Tiền mặt";
              } 
            ?>
          </td>
          <td>
            <?php
              if ($tinh_trang_thanh_toan == 1) {
                echo "Đang xử lý";
              } elseif ($tinh_trang_thanh_toan == 2) {
                echo "Thanh toán thành công";
              }
            ?>
          </td>
          <td><?=$tong_tien?></td>
          <td><?=$id_tk?></td>
          
          <?php
          foreach ($danh_sach_voucher as $dsvc) {
            $id_voucher = $dsvc['id_voucher'];
            $ten_voucher = $dsvc['ten_voucher'];
            if ($id_voucher == hien_thi_idvc_by_idhd($id_hd)) {
          ?>
              <td><?=$ten_voucher?></td>
            <?php
            }
            ?>
        <?php
        }
        ?>
        
          <td class="primary"><a href="index.php?action=xoa_hoa_don&id_hd=<?=$id_hd?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="warning"><a href="index.php?action=sua_hoa_don&id_hd=<?=$id_hd?>">Sửa</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
  </div>
</main>
<div class="right">
  <?php
    require_once "view/thuoc_tinh/admin.php";
    require_once "view/thuoc_tinh/cap_nhat_moi.php";
    require_once "view/thuoc_tinh/so_lieu.php";
  ?>
</div>
<?
  require_once "view/footer.php"
?>