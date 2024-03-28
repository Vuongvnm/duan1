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
          <th class="col-1">Mã bình luận</th>
          <th class="col-7">Nội dung</th>
          <th class="col-1">Trạng thái</th>
          <th class="col-3" colspan="4">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_binh_luan as $dsbl) {
        ?>
        <tr>  
            <td><?=$dsbl['id_bl']?></td>
            <td><?=$dsbl['noi_dung']?></td>
            <td><?=$dsbl['trang_thai']==0?'Ẩn': 'Hiện'?></td>
            <td class="primary"><a href="index.php?action=xoa_binh_luan&id_bl=<?=$dsbl['id_bl']?>">Xóa</a></td>
            <?php
            if ($dsbl['trang_thai']==0) {
            ?>
                <td class="primary"><a href="index.php?action=hien_binh_luan&id_bl=<?=$dsbl['id_bl']?>">Hiện</a></td>
            <?php
            }else{
            ?>
            <td class="primary"><a href="index.php?action=an_binh_luan&id_bl=<?=$dsbl['id_bl']?>">Ẩn</a></td>
            <?php
            }
            ?>
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