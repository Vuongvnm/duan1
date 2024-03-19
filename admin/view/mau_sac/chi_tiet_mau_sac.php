<main>
  <?php
    require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <?php
    if(is_array($danh_sach_mau_sac)) {
    ?>
    <h2><?=$danh_sach_mau_sac['ten_ms']?></h2>
    <?php
    }
    ?>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_san_pham as $dssp) {
        ?>
        <tr>  
          <td><?=$dssp['id_sp']?></td>
          <td><?=$dssp['ten_sp']?></td>
          <td class="warning"><a href="index.php?action=sua_sp&id_sp=<?=$dssp['id_sp']?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_sp&id_sp=<?=$dssp['id_sp']?>">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_san_pham&id_sp=<?=$dssp['id_sp']?>">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
    <a href="index.php?action=them_san_pham">Thêm mới</a>
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