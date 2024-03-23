<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Danh sách tin tức</h2>
    <table class="table_danhmuc">
      <thead>
        <tr class="col">
          <th class="col-2">Mã tin tức </th>
          <th class="col-2">Tên bài viết </th>
          <th class="col-3">Tóm tắt</th>
          <th class="col-3">Hình ảnh</th>
          <th class="col-2">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($danh_sach_tin_tuc as $dstt) {
          $hinh_anh = $dstt['hinh_anh'];
          $hinh_path = "/DUAN1/assets/uploads/" . $hinh_anh;
          if (is_file($hinh_path)) {
            $hinh = "<img src='" . $hinh_path . "' height='80'>";
          } else {
            $hinh = "Không có hình ảnh!";
          }
        ?>
          <tr>
            <td><?= $dstt['id_tt'] ?></td>
            <td><?= $dstt['ten_bai_viet'] ?></td>
            <td><?= $dstt['tom_tat'] ?></td>
            <td><img src="<?= $hinh_path ?>" width="50" height="50"></td>
            <td class="warning">
              <a class="btn btn-warning" href="index.php?action=sua_tt&id_tt=<?= $dstt['id_tt'] ?>">Sửa</a>
              <a class="btn btn-warning" href="index.php?action=chi_tiet_tin_tuc&id_tt=<?= $dstt['id_tt'] ?>">Chi tiết</a>
              <a class="btn btn-warning" href="index.php?action=xoa_tt&id_tt=<?= $dstt['id_tt'] ?>">Xóa</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a>
    <a href="index.php?action=them_bai_viet">Thêm mới</a>
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