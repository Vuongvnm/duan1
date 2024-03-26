<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Câp nhật mau_sac</h2>
    <form action="index.php?action=cap_nhat_mau_sac" method="post">
      <?php
        if(is_array($mot_mau_sac)) {
          $id_ms = $mot_mau_sac['id_ms'];
          $ten_ms = $mot_mau_sac['ten_ms'];
      ?>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="ten_ms" placeholder="Tên màu sắc" value="<?=$ten_ms?>" required>
      <label for="floatingInput">Tên màu sắc</label>
      </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_ms" value="<?=$id_ms?>">
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
<?
  require_once "view/footer.php"
?>