<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <div class="recent-orders">
    <h2>Thêm tin tức </h2>
    <form action="index.php?action=them_bai_viet" method="post" enctype="multipart/form-data">
      <select class="form-select" aria-label="Multiple select example" name="id_tt_danh_muc" required>
        <option selected>Danh mục</option>
        <?php
        foreach ($danh_sach_danh_muc_bai_viet as $dsdm) {
        ?>
          <option value="<?= $dsdm['id_tt_danh_muc'] ?>"><?= $dsdm['ten_danh_muc'] ?></option>
        <?php
        }
        ?>
      </select>
      <br>
     
      <br>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ten_bai_viet" placeholder="Tên bài viết " required>
        <label for="floatingInput">Tên bài viết </label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="noi_dung" placeholder="Nội Dung " required>
        <label for="floatingInput">Nội Dung </label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="tom_tat" placeholder="tóm tắt" required>
        <label for="floatingInput">Tóm Tắt </label>
      </div>
     
      
   
      <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput" name="hinh_anh" placeholder="Hình ảnh" required>
        <label for="floatingInput">Hình ảnh</label>
      </div>
     
      <div class="form-floating">
        <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
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