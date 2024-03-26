<?php
  require_once "view/header.php";
?>
<main>
  <?php
  if (is_array($mot_voucher)) {
    $id_voucher = $mot_voucher['id_voucher'];
    $ten_voucher = $mot_voucher['ten_voucher'];
    $ngay_bat_dau = $mot_voucher['ngay_bat_dau'];
    $ngay_ket_thuc = $mot_voucher['ngay_ket_thuc'];
    $so_tien_giam = $mot_voucher['so_tien_giam'];
    $ghi_chu = $mot_voucher['ghi_chu'];
    $ma_giam_gia = $mot_voucher['ma_giam_gia'];
    $dieu_kien = $mot_voucher['dieu_kien'];
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
        <h4>Mã voucher: <?=$id_voucher?></h4>
        <h4>Số tiền giảm: <?=$so_tien_giam?></h4>
        <h4>Mã giảm giá: <?=$ma_giam_gia?></h4>
        <h4>Ngày bắt đầu: <?=$ngay_bat_dau?></h4>
        <h4>Ngày kết thúc: <?=$ngay_ket_thuc?></h4>
        <h4>Ghi chú: <?=$ghi_chu?></h4>
        <h4>Điều kiện: <?=$dieu_kien?></h4>
        <div class="list-group">
        </div>
      </div>
    </div>
  </section>
</main>
<div class="right">
  <?php
    require_once "view/thuoc_tinh/admin.php";
    require_once "view/thuoc_tinh/cap_nhat_moi.php";
    require_once "view/thuoc_tinh/so_lieu.php";
  ?>
</div>
<?php
  require_once "view/footer.php";
?>