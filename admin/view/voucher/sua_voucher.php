<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Câp nhật Voucher</h2>
    <form action="index.php?action=cap_nhat_voucher" method="post">
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
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="ten_voucher" placeholder="Tên Voucher" value="<?=$ten_voucher?>" required>
          <label for="floatingInput">Tên Voucher</label>
        </div>
        <div class="form-floating mb-3">
          <input type="date" class="form-control" id="floatingInput" name="ngay_bat_dau" placeholder="Ngày bắt đầu" value="<?=$ngay_bat_dau?>" required>
          <label for="floatingInput">Ngày bắt đầu</label>
        </div>
        <div class="form-floating mb-3">
          <input type="date" class="form-control" id="floatingInput" name="ngay_ket_thuc" placeholder="Ngày kết thúc" value="<?=$ngay_ket_thuc?>" required>
          <label for="floatingInput">Ngày kết thúc</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="so_tien_giam" placeholder="Số tiền giảm" value="<?=$so_tien_giam?>" required>
          <label for="floatingInput">Số tiền giảm</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="ghi_chu" placeholder="Ghi chú" value="<?=$ghi_chu?>" required>
          <label for="floatingInput">Ghi chú</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="ma_giam_gia" placeholder="Mã giảm giá" value="<?=$ma_giam_gia?>" required>
          <label for="floatingInput">Mã giảm giá</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="dieu_kien" placeholder="Điều kiện" value="<?=$dieu_kien?>" required>
          <label for="floatingInput">Điều kiện</label>
        </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_voucher" value="<?=$id_voucher?>">
        <button type="submit" class="btn btn-primary" name="cap_nhat">Cập nhật</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
      </div>
    </form>
  </div>
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