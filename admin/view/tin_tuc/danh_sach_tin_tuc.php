<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
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
          $id_tt = $dstt['id_tt'];
          $tieu_de = $dstt['tieu_de'];
        ?>
          <tr>
            <td><?=$id_tt?></td>
            <td><?= $tieu_de?></td>
            <td class="warning"><a href="index.php?action=sua_tt&id_tt=<?=$id_tt?>">Sửa</a></td>
            <td class="primary"><a href="index.php?action=xoa_tt&id_tt=<?=$id_tt?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
            <td class="primary"><a href="index.php?action=chi_tiet_tin_tuc&id_tt=<?=$id_tt?>">Chi tiết</a></td>
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
<div class="right">
  <?php
    require_once "view/thuoc_tinh/admin.php";
    require_once "view/thuoc_tinh/cap_nhat_moi.php";
    require_once "view/thuoc_tinh/so_lieu.php";
  ?>
</div>
<?php
  require_once "view/footer.php";
?>