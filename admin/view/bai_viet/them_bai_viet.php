<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Thêm bài viết</h2>
    <form action="index.php?action=them_bai_viet" method="post" enctype="multipart/form-data">
      <select class="form-select" aria-label="Multiple select example" name="id_tt" required>
        <option selected>Tin tức</option>
        <?php
        foreach ($danh_sach_tin_tuc as $dstt) {
          $id_tt = $dstt['id_tt'];
          $tieu_de = $dstt['tieu_de'];
        ?>
          <option value="<?=$id_tt?>"><?=$tieu_de?></option>
        <?php
        }
        ?>
      </select>
      <br>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ten_bai_viet" placeholder="Tên bài viết" required>
        <label for="floatingInput">Tên bài viết</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" id="floatingInput" name="tom_tat" placeholder="Tóm tắt" cols="30" rows="30"></textarea>
        <label for="floatingInput">Tóm tắt</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" id="floatingInput" name="noi_dung" placeholder="Nội dung" cols="30" rows="30"></textarea>
        <label for="floatingInput">Nội dung</label>
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput" name="hinh_anh" placeholder="Hình ảnh" required>
        <label for="floatingInput">Hình ảnh</label>
      </div>
      <div class="form-floating">
        <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?action=danh_sach_bai_viet"><button type="submit" class="btn btn-success" name="them_moi">Danh sách bài viết</button></a>
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