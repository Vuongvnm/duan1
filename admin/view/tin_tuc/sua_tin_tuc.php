<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật Tin Tức </h2>
    <form action="index.php?action=cap_nhat_tin_tuc" method="post" enctype="multipart/form-data">
      <?php
        if(is_array($mot_bai_viet)) {
          $hinh_anh = $mot_bai_viet['hinh_anh'];
          $id_tt = $mot_bai_viet['id_tt'];
          $hinh_path = "../assets/uploads/" . $hinh_anh;
          if (is_file($hinh_path)){
            $hinh = "<img src='" . $hinh_path . "' height='80'>";
          } else {
            $hinh = "Không có hình ảnh!";
          }
          ?>
          <div class="mb-3">
          <select class="form-select" aria-label="Default select example" name="id_tt_danh_muc">
            <?php
            foreach ($danh_sach_danh_muc_bai_viet as $dsdm) {
              $id_tt_danh_muc = $dsdm['id_tt_danh_muc'];
              $ten_danh_muc = $dsdm['ten_danh_muc'];
              if ($id_tt_danh_muc == hien_thi_iddm_by_idtt($id_tt)) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
            <option value="<?=$id_dm?>"<?php echo $selected ?>><?=$id_tt_danh_muc?></option>
            <?php
            }
            ?>
          </select>  
          </div>
          <div class="mb-3">
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="ten_bai_viet" placeholder="Tên bài viết " value="<?=$mot_bai_viet['ten_bai_viet']?>" required>
            <label for="floatingInput">Tên Bài Viết </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="tom_tat" placeholder="Tóm tắt " value="<?=$mot_bai_viet['tom_tat']?>" required>
            <label for="floatingInput">Tóm Tắt</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="noi_dung" placeholder="Nội dung " value="<?=$mot_bai_viet['noi_dung']?>" required>
            <label for="floatingInput">Nội Dung </label>
          </div>
          <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" name="hinh_anh" placeholder="Hình ảnh" value="<?=$hinh_path?>" required>
            <label for="floatingInput">Hình ảnh</label>
            <img width="200" height="200" src="<?= $hinh_path ?>" alt="">
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