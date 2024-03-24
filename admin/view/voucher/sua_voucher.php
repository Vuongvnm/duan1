<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật Voucher</h2>
    <form action="index.php?action=cap_nhat_voucher" method="post">
      <?php
        if(is_array($mot_voucher)) {
      ?>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="ten_voucher" placeholder="Tên Voucher" value="<?=$mot_voucher['ten_voucher']?>" required>
      <label for="floatingInput">Tên Voucher</label>
      </div>
      <div class="form-floating mb-3">
      <input type="date" class="form-control" id="floatingInput" name="ngay_bat_dau" placeholder="Ngày bắt đầu" value="<?=$mot_voucher['ngay_bat_dau']?>" required>
      <label for="floatingInput">Ngày bắt đầu</label>
      </div>
      <div class="form-floating mb-3">
      <input type="date" class="form-control" id="floatingInput" name="ngay_ket_thuc" placeholder="Ngày kết thúc" value="<?=$mot_voucher['ngay_ket_thuc']?>" required>
      <label for="floatingInput">Ngày kết thúc</label>
      </div>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="giam_gia" placeholder="Giảm giá" value="<?=$mot_voucher['giam_gia']?>" required>
      <label for="floatingInput">Giảm giá</label>
      </div>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="ghi_chu" placeholder="Ghi chú" value="<?=$mot_voucher['ghi_chu']?>" required>
      <label for="floatingInput">Ghi chú</label>
      </div>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="ma_giam_gia" placeholder="Mã giảm giá" value="<?=$mot_voucher['ma_giam_gia']?>" required>
      <label for="floatingInput">Mã giảm giá</label>
      </div>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="dieu_kien" placeholder="Điều kiện" value="<?=$mot_voucher['dieu_kien']?>" required>
      <label for="floatingInput">Điều kiện</label>
      </div>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="giam_toi_da" placeholder="Giảm tối đa" value="<?=$mot_voucher['giam_toi_da']?>" required>
      <label for="floatingInput">Giảm tối đa</label>
      </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_voucher" value="<?=$mot_voucher['id_voucher']?>">
        <button type="submit" class="btn btn-primary" name="cap_nhat">Cập nhật</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
      </div>
    </form>
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