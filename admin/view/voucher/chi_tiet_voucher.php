<main>
<style>
.left {
  display: block;
}

.voucher {
  display: block;
  position: relative;
  top: 390px; /* Điều chỉnh khoảng cách này theo ý muốn */
  right: 400px
}
</style>
<?php
    if(is_array($mot_voucher)){
      $id_voucher = $mot_voucher['id_voucher'];
      $ten_voucher = $mot_voucher['ten_voucher'];
      $giam_gia = $mot_voucher['giam_gia'];
      $ma_giam_gia = $mot_voucher['ma_giam_gia'];
      $ngay_bat_dau = $mot_voucher['ngay_bat_dau'];
      $ngay_ket_thuc = $mot_voucher['ngay_ket_thuc'];
      $ghi_chu = $mot_voucher['ghi_chu'];
      $dieu_kien = $mot_voucher['dieu_kien'];
      $giam_toi_da = $mot_voucher['giam_toi_da'];
    ?>
    <div class="recent-orders">
      <h2>Chi tiết Voucher</h2>
    </div>
    <?php
    }
    ?>
    <section>
    <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="../assets/images/products/f6.jpg" class="slide">
        </div>
      </div>
      <div class="voucher">
        <h3>Tên voucher: <?=$ten_voucher?></h3>
        <h4>Giá giảm: <?=$giam_gia?></h4>
        <h4>Mã giảm giá: <?=$ma_giam_gia?></h4>
        <h4>Ngày bắt đầu:</h4><p><?=$ngay_bat_dau?></p>
        <h4>Ngày kết thúc:</h4><p><?=$ngay_ket_thuc?></p>
        <h4>Ghi chú:</h4><p><?=$ghi_chu?></p>
        <h4>Điều kiện: <?=$dieu_kien?></h4>
        <h4>Tối đa: <?=$giam_toi_da?><small>VND</small></h4>
        <div class="list-group">
        
        </div>
      </div>
    </div>
  </section>
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