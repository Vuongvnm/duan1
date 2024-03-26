<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Danh sách màu sắc</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã màu sắc</th>
          <th>Tên màu sắc</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_mau_sac as $dsms) {
            $id_ms = $dsms['id_ms'];
            $ten_ms = $dsms['ten_ms'];
        ?>
        <tr>  
          <td><?=$id_ms?></td>
          <td><?=$ten_ms?></td>
          <td class="warning"><a href="index.php?action=sua_ms&id_ms=<?=$id_ms?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_ms&id_ms=<?=$id_ms?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_mau_sac&id_ms=<?=$id_ms?>">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
    <a href="index.php?action=them_mau_sac">Thêm mới</a>
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