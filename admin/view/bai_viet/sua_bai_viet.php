<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật bài viết</h2>
    <form action="index.php?action=cap_nhat_bai_viet" method="post" enctype="multipart/form-data">
      <?php
        if(is_array($mot_bai_viet)) {
          $hinh_anh = $mot_bai_viet['hinh_anh'];
          $id_bv = $mot_bai_viet['id_bv'];
          $hinh_path = "../assets/uploads/" . $hinh_anh;
          if (is_file($hinh_path)){
            $hinh = "<img src='" . $hinh_path . "' height='80'>";
          } else {
            $hinh = "Không có hình ảnh!";
          }
          ?>
          <div class="mb-3">
          <select class="form-select" aria-label="Default select example" name="id_tt">
            <?php
            foreach ($danh_sach_tin_tuc as $dstt) {
              $id_tt = $dstt['id_tt'];
              $tieu_de = $dstt['tieu_de'];
              if ($id_tt == hien_thi_idtt_by_idbv($id_bv)) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
            <option value="<?=$id_tt?>"<?php echo $selected ?>><?=$tieu_de?></option>
            <?php
            }
            ?>
          </select>  
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="ten_bai_viet" placeholder="Tên bài viết" value="<?=$mot_bai_viet['ten_bai_viet']?>" required>
            <label for="floatingInput">Tên bài viết</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingInput" name="tom_tat" placeholder="Tóm tắt" cols="30" rows="10"><?=$mot_bai_viet['tom_tat']?></textarea>
            <label for="floatingInput">Tóm tắt</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingInput" name="noi_dung" placeholder="Nội dung" cols="30" rows="10"><?=$mot_bai_viet['noi_dung']?></textarea>
            <label for="floatingInput">Nội dung</label>
          </div>
          <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" name="hinh_anh" placeholder="Hình ảnh" value="<?=$hinh_path?>" required>
            <label for="floatingInput">Hình ảnh</label>
            <img src="<?$hinh_path?>" class="img-fluid">
          </div>
        <?php
        }
        ?>
      <div class="form-floating">
        <input type="hidden" name="id_bv" value="<?=$id_bv?>">
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