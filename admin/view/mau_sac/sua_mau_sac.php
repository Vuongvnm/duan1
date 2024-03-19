<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật mau_sac</h2>
    <form action="index.php?action=cap_nhat_mau_sac" method="post">
      <?php
        if(is_array($mot_mau_sac)) {
      ?>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="ten_ms" placeholder="Tên màu sắc" value="<?=$mot_mau_sac['ten_ms']?>" required>
      <label for="floatingInput">Tên màu sắc</label>
      </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_ms" value="<?=$mot_mau_sac['id_ms']?>">
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