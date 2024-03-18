<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Câp nhật sản phẩm</h2>
    <form action="index.php?action=cap_nhat_san_pham" method="post" enctype="multipart/form-data">
      <?php
        if(is_array($mot_san_pham)) {
          $hinh_anh = $mot_san_pham['hinh_anh'];
          $id_sp = $mot_san_pham['id_sp'];
          $hinh_path = "../assets/uploads/" . $hinh_anh;
          if (is_file($hinh_path)){
            $hinh = "<img src='" . $hinh_path . "' height='80'>";
          } else {
            $hinh = "Không có hình ảnh!";
          }
          ?>
          <div class="mb-3">
          <select class="form-select" aria-label="Default select example" name="id_dm">
            <?php
            foreach ($danh_sach_danh_muc as $dsdm) {
              $id_dm = $dsdm['id_dm'];
              $ten_dm = $dsdm['ten_dm'];
              if ($id_dm == hien_thi_iddm_by_idsp($id_sp)) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
            <option value="<?=$id_dm?>"<?php echo $selected ?>><?=$ten_dm?></option>
            <?php
            }
            ?>
          </select>  
          </div>
          <div class="mb-3">
          <select class="form-select" aria-label="Default select example" name="id_ms">
            <?php
            foreach ($danh_sach_mau_sac as $dsms) {
              $id_ms = $dsms['id_ms'];
              $ten_ms = $dsms['ten_ms'];
              if ($id_ms == hien_thi_idms_by_idsp($id_sp)) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
            <option value="<?=$id_ms?>"<?php echo $selected ?>><?=$ten_ms?></option>
            <?php
            }
            ?>
          </select>  
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="ten_sp" placeholder="Tên sản phẩm" value="<?=$mot_san_pham['ten_sp']?>" required>
            <label for="floatingInput">Tên sản phẩm</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="gia_sp" placeholder="Giá sản phẩm" value="<?=$mot_san_pham['gia_sp']?>" required>
            <label for="floatingInput">Giá sản phẩm</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="xuat_xu" placeholder="Xuất xứ" value="<?=$mot_san_pham['xuat_xu']?>" required>
            <label for="floatingInput">Xuất xứ</label>
          </div>
          <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" name="hinh_anh" placeholder="Hình ảnh" value="<?=$hinh_path?>" required>
            <label for="floatingInput">Hình ảnh</label>
            <img width="200" height="200" src="<?= $hinh_path ?>" alt="">
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="so_luong" placeholder="Số lượng" value="<?=$mot_san_pham['so_luong']?>" required>
            <label for="floatingInput">Số lượng</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="kich_co" placeholder="Kích cỡ" value="<?=$mot_san_pham['kich_co']?>" required>
            <label for="floatingInput">Kích cỡ</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="ghi_chu" placeholder="Ghi chú" value="<?=$mot_san_pham['ghi_chu']?>">
            <label for="floatingInput">Ghi chú</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" name="ngay_cap_nhat" placeholder="Ngày cập nhật" value="<?=$mot_san_pham['ngay_cap_nhat']?>" required>
            <label for="floatingInput">Ngày cập nhật</label>
          </div>
        <?php
        }
        ?>
      <div class="form-floating">
        <input type="hidden" name="id_sp" value="<?=$id_sp?>">
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