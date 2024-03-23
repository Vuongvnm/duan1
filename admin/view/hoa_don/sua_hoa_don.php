<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật tình trạng</h2>
    <form action="index.php?action=cap_nhat_hoa_don" method="post">
      <?php
        if(is_array($tinhtrang)) {
      ?>
      <div>
    <select class="form-select" name="tinh_trang_thanh_toan" id="">
      <option value="1">Chưa thanh toán</option>
      <option value="2">Đã thanh toán</option>
    </select>
     </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_hd" value="<?=$tinhtrang['id_hd']?>">
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