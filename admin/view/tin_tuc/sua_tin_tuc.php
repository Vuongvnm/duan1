<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Câp nhật Tin Tức</h2>
    <form action="index.php?action=cap_nhat_tin_tuc" method="post">
      <?php
        if(is_array($mot_tin_tuc)) {
          $id_tt = $mot_tin_tuc['id_tt'];
          $tieu_de = $mot_tin_tuc['tieu_de'];
          ?>
          <div class="mb-3">
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="tieu_de" placeholder="Tiêu đề" value="<?=$tieu_de?>" required>
            <label for="floatingInput">Tiêu đề</label>
          </div>
        <?php
        }
        ?>
      <div class="form-floating">
        <input type="hidden" name="id_tt" value="<?=$id_tt?>">
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