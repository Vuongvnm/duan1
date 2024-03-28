<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Danh sách bình luận</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã bình luận</th>
          <th>Nội dung</th>
          <th>Ngày tạo</th>
          <th>Người tạo</th>
          <th>Ẩn bình luận </th>
          <th colspan="2">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_binh_luan as $dsbl) {
        ?>
        <tr>  
        <td><?=$dsbl['id_bl']?></td>
          <td><?=$dsbl['noi_dung']?></td>
          <td><?=$dsbl['ngay_tao']?></td>
          <td><?=$dsbl['id_tk']?></td>
          <td><input type="checkbox"name="an_bl"id="an_bl"></td>
          <td class="primary"><a href="index.php?action=xoa_binh_luan&id_bl=<?=$dsbl['id_bl']?>">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_bl&id_bl=<?=$dsbl['id_bl']?>">Chi tiết</a></td>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
  </div>
</main>
<!-- End of main -->
<div class="right">
  <?php
    require_once "view/thuoc_tinh/admin.php";
  ?>
  <!-- End of top -->
  <?php
    require_once "view/thuoc_tinh/cap_nhat_moi.php";
  ?>
  <!-- End of recent updates -->
  <?php
    require_once "view/thuoc_tinh/so_lieu.php";
  ?>
</div>
</div>