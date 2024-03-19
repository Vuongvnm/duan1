<main>
  <?php
    require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Danh sách danh mục</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã danh mục</th>
          <th>Tên danh mục</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_danh_muc as $dsdm) {
        ?>
        <tr>  
          <td><?=$dsdm['id_dm']?></td>
          <td><?=$dsdm['ten_dm']?></td>
          <td class="warning"><a href="index.php?action=sua_dm&id_dm=<?=$dsdm['id_dm']?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_dm&id_dm=<?=$dsdm['id_dm']?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_danh_muc&id_dm=<?=$dsdm['id_dm']?>">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
    <a href="index.php?action=them_danh_muc">Thêm mới</a>
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