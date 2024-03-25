<main>
  <?php
    require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <?php
    if(is_array($danh_sach_tin_tuc)) {
    ?>
    <h2><?=$danh_sach_tin_tuc['tieu_de']?></h2>
    <?php
    }
    ?>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã bài viết</th>
          <th>Tên bài viết</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_bai_viet as $dsbv) {
        ?>
        <tr>  
          <td><?=$dsbv['id_bv']?></td>
          <td><?=$dsbv['ten_bai_viet']?></td>
          <td class="warning"><a href="index.php?action=sua_bv&id_bv=<?=$dsbv['id_bv']?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_bv&id_bv=<?=$dsbv['id_bv']?>">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_bai_viet&id_bv=<?=$dsbv['id_bv']?>">Chi tiết</a></td>
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