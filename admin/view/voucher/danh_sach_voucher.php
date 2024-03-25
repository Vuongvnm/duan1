<main>
  <?php
    require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Danh sách voucher</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Tên Voucher</th>
          <th>Mã giảm</th>
          <th>Số tiền giảm</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_voucher as $dsvc) {
            $ten_voucher = $dsvc['ten_voucher'];
            // Đang hoàn thiện lại phần voucher
        ?>
        <tr>  
          <td><?=$dsvc['ten_voucher']?></td>
          <td><?=$dsvc['giam_gia']?></td>
          <td><?=$dsvc['ma_giam_gia']?></td>
          <td class="warning"><a href="index.php?action=sua_voucher&id_voucher=<?=$dsvc['id_voucher']?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_voucher&id_voucher=<?=$dsvc['id_voucher']?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_voucher&id_voucher=<?=$dsvc['id_voucher']?>">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
    <a href="index.php?action=them_voucher">Thêm mới</a>
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