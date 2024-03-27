<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Thêm Voucher</h2>
    <form action="index.php?action=them_voucher" method="post">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ten_voucher" placeholder="Tên Voucher" required>
        <label for="floatingInput">Tên Voucher</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="floatingInput" name="ngay_bat_dau" placeholder="Ngày bắt đầu" required>
        <label for="floatingInput">Ngày bắt đầu</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="floatingInput" name="ngay_ket_thuc" placeholder="ngày kết thúc" required>
        <label for="floatingInput">ngày kết thúc</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="so_tien_giam" placeholder="Số tiền giảm" required>
        <label for="floatingInput">Số tiền giảm</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ghi_chu" placeholder="Ghi chú">
        <label for="floatingInput">Ghi chú</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ma_giam_gia" placeholder="Mã giảm giá" required>
        <label for="floatingInput">Mã giảm giá</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="dieu_kien" placeholder="Điều kiện" required>
        <label for="floatingInput">Điều kiện</label>
      </div>
      <div class="form-floating">
        <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
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