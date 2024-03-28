<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Danh sách tài khoản</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Tên tài khoản</th>
          <th>Mật khẩu</th>
          <th>Email</th>
          
          <th colspan="2">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_tai_khoan as $dstk) {
            $ten_nguoi_dung = $dstk['ten_nguoi_dung'];
            $mat_khau = $dstk['mat_khau'];
            $email = $dstk['email'];
        ?>
        <tr>  
          <td><?=$ten_nguoi_dung?></td>
          <td><?=$mat_khau?></td>
          <td><?=$email?></td>
          
          <td class="primary"><a href="index.php?action=xoa_tai_khoan&id_tk=<?=$dstk['id_tk']?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_tai_khoan&id_tk=<?=$dstk['id_tk']?>">Chi tiết</a></td>
        </tr>
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
    require_once "view/thuoc_tinh/cap_nhat_moi.php";
    require_once "view/thuoc_tinh/so_lieu.php";
  ?>
</div>
<?
  require_once "view/footer.php"
?>
