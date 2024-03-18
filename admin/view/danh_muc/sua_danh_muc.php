<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật danh mục</h2>
    <form action="index.php?action=cap_nhat_danh_muc" method="post">
      <?php
        if(is_array($mot_danh_muc)) {
      ?>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="ten_dm" placeholder="Tên danh mục" value="<?=$mot_danh_muc['ten_dm']?>" required>
      <label for="floatingInput">Tên danh mục</label>
      </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_dm" value="<?=$mot_danh_muc['id_dm']?>">
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