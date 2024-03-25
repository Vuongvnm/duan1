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
          <th>Mã tin tức</th>
          <th>Tiêu đề</th>
          <th colspan="3">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($danh_sach_tin_tuc as $dstt) {
        ?>
          <tr>
            <td><?=$dstt['id_tt']?></td>
            <td><?= $dstt['tieu_de'] ?></td>
            <td class="warning"><a href="index.php?action=sua_tt&id_tt=<?=$dstt['id_tt']?>">Sửa</a></td>
            <td class="primary"><a href="index.php?action=xoa_tt&id_tt=<?=$dstt['id_tt']?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
            <td class="primary"><a href="index.php?action=chi_tiet_tin_tuc&id_tt=<?=$dstt['id_tt']?>">Chi tiết</a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a>
    <a href="index.php?action=them_tin_tuc">Thêm mới</a>
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