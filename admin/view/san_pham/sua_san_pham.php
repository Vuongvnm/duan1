<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Câp nhật sản phẩm</h2>
    <form action="index.php?action=cap_nhat_san_pham" method="post" enctype="multipart/form-data">
      <?php
        if(is_array($mot_san_pham)) {
          $id_sp = $mot_san_pham['id_sp'];
          $ten_sp = $mot_san_pham['ten_sp'];
          $gia_sp = $mot_san_pham['gia_sp'];
          $xuat_xu = $mot_san_pham['xuat_xu'];
          $so_luong = $mot_san_pham['so_luong'];
          $ghi_chu = $mot_san_pham['ghi_chu'];
          $ngay_cap_nhat = $mot_san_pham['ngay_cap_nhat'];
          $hinh_anh = $mot_san_pham['hinh_anh'];
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
            <option value="<?=$id_dm?>"<?=$selected?>><?=$ten_dm?></option>
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
            <option value="<?=$id_ms?>"<?=$selected?>><?=$ten_ms?></option>
            <?php
            }
            ?>
          </select>  
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="ten_sp" placeholder="Tên sản phẩm" value="<?=$ten_sp?>" required>
            <label for="floatingInput">Tên sản phẩm</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="gia_sp" placeholder="Giá sản phẩm" value="<?=$gia_sp?>" required>
            <label for="floatingInput">Giá sản phẩm</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="xuat_xu" placeholder="Xuất xứ" value="<?=$xuat_xu?>" required>
            <label for="floatingInput">Xuất xứ</label>
          </div>
          <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" name="hinh_anh" placeholder="Hình ảnh" value="<?=$hinh_path?>" required>
            <label for="floatingInput">Hình ảnh</label>
            <img src="<?$hinh_path?>" class="img-fluid">
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" name="so_luong" placeholder="Số lượng" value="<?=$so_luong?>" required>
            <label for="floatingInput">Số lượng</label>
          </div>
          <div class="mb-3">
          <select class="form-select" aria-label="Default select example" name="id_ms">
            <?php
            foreach ($danh_sach_kich_co as $dskc) {
              $id_kc = $dskc['id_kc'];
              $kich_co = $dskc['kich_co'];
              if ($id_kc == hien_thi_idkc_by_idsp($id_sp)) {
                $selected = "selected";
              } else {
                $selected = "";
              }
            ?>
            <option value="<?=$id_ms?>"<?=$selected?>><?=$kich_co?></option>
            <?php
            }
            ?>
          </select>  
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="ghi_chu" placeholder="Ghi chú" value="<?=$ghi_chu?>">
            <label for="floatingInput">Ghi chú</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" name="ngay_cap_nhat" placeholder="Ngày cập nhật" value="<?=$ngay_cap_nhat?>" required>
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
    require_once "view/thuoc_tinh/cap_nhat_moi.php";
    require_once "view/thuoc_tinh/so_lieu.php";
  ?>
</div>
<?
  require_once "view/footer.php"
?>