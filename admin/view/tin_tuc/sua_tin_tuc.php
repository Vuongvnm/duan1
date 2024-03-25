<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật Tin Tức</h2>
    <form action="index.php?action=cap_nhat_tin_tuc" method="post">
      <?php
        if(is_array($mot_tin_tuc)) {
          ?>
          <div class="mb-3">
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="tieu_de" placeholder="Tiêu đề" value="<?=$mot_tin_tuc['tieu_de']?>" required>
            <label for="floatingInput">Tiêu đề</label>
          </div>
        <?php
        }
        ?>
      <div class="form-floating">
        <input type="hidden" name="id_tt" value="<?=$mot_tin_tuc['id_tt']?>">
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