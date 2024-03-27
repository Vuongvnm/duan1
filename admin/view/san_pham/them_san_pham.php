<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Thêm sản phẩm</h2>
    <form action="index.php?action=them_san_pham" method="post" enctype="multipart/form-data">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ten_sp" placeholder="Tên sản phẩm" required>
        <label for="floatingInput">Tên sản phẩm</label>
      </div>
      <select class="form-select" aria-label="Multiple select example" name="kich_co" required>
        <option value="0" selected>Kích cỡ</option>
        <option value="1">S</option>
        <option value="2">M</option>
        <option value="3">L</option>
        <option value="4">XL</option>
        <option value="5">XXL</option>
      </select>
      <br>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="hang" placeholder="Hãng" required>
        <label for="floatingInput">Hãng</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" name="gia_sp" placeholder="Giá sản phẩm (VNĐ)" required>
        <label for="floatingInput">Giá sản phẩm (VNĐ)</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="xuat_xu" placeholder="Xuất xứ" required>
        <label for="floatingInput">Xuất xứ</label>
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput" name="hinh_anh" placeholder="Hình ảnh" required>
        <label for="floatingInput">Hình ảnh</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" name="so_luong" placeholder="Số lượng" required>
        <label for="floatingInput">Số lượng</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ghi_chu" placeholder="Ghi chú" required>
        <label for="floatingInput">Ghi chú</label>
      </div>
      <select class="form-select" aria-label="Multiple select example" name="id_dm" required>
        <option selected>Danh mục</option>
        <?php
        foreach ($danh_sach_danh_muc as $dsdm) {
          $id_dm = $dsdm['id_dm'];
          $ten_dm = $dsdm['ten_dm'];
        ?>
          <option value="<?=$id_dm?>"><?=$ten_dm?></option>
        <?php
        }
        ?>
      </select>
      <br>
      <select class="form-select" aria-label="Multiple select example" name="id_ms" required>
        <option selected>Màu sắc</option>
        <?php
        foreach ($danh_sach_mau_sac as $dsms) {
          $id_ms = $dsms['id_ms'];
          $ten_ms = $dsms['ten_ms'];
        ?>
          <option value="<?=$id_ms?>"><?=$ten_ms?></option>
        <?php
        }
        ?>
      </select>
      <br>
      <div class="form-floating">
        <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?action=danh_sach_san_pham"><button type="submit" class="btn btn-success" name="them_moi">Danh sách sản phẩm</button></a>
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