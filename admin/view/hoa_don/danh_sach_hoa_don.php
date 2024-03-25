<main>
  <?php
    require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
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
        ?>
        <tr>  
          <td><?=$dshd['id_hd']?></td>
          <td><?php
              if ($dshd['hinh_thuc_thanh_toan'] == 1) {
                echo "Chuyển khoản";
              } elseif ($dshd['hinh_thuc_thanh_toan'] == 2) {
                echo "Tiền mặt";
              }
          ?>
          </td>
          <td><?php
              if ($dshd['tinh_trang_thanh_toan'] == 1) {
                echo "Chưa thanh toán";
              } elseif ($dshd['tinh_trang_thanh_toan'] == 2) {
                echo "Đã thanh toán";
              }
          ?>
          </td>
          <td><?=$dshd['tong_tien']?></td>
          <td><?=$dshd['id_tk']?></td>
          
          <?php
          foreach ($danh_sach_voucher as $dsvc) {
            $id_voucher = $dsvc['id_voucher'];
            $ten_voucher = $dsvc['ten_voucher'];
            if ($id_voucher == hien_thi_idvc_by_idhd($dshd['id_hd'])) {
          ?>
              <td><?= $ten_voucher ?></td>
            <?php
            }
            ?>
        <?php
        }
        ?>
        
          <td class="primary"><a href="index.php?action=xoa_hoa_don&id_hd=<?=$dshd['id_hd']?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="warning"><a href="index.php?action=sua_hoa_don&id_hd=<?=$dshd['id_hd']?>">Sửa</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
    
  </div>
</main>
<!-- End of main -->
<div class="right">
  <?php
    require_once "view/thuoc_tinh/admin.php";
  ?>
  <!-- End of top -->
  <?php
    require_once "view/thuoc_tinh/recent_updates.php";
  ?>
  <!-- End of recent updates -->
  <?php
    require_once "view/thuoc_tinh/sales_analytics.php";
  ?>
</div>
</div>