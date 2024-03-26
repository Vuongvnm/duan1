<?php
require_once "model/san_pham.php";
require_once "view/san_pham/them_kho_anh.php";
if (isset($_POST['them_moi'])) {
  $totalFiles = count($_FILES['hinh_anh']['name']);
  $filesArray = array();
  for ($i = 0; $i < $totalFiles; $i++) {
    $imagesName = $_FILES['hinh_anh']['name'][$i];
    $tmpName = $_FILES['hinh_anh']['tmp_name'][$i];

    $imagesExtension = explode('.', $imagesName);
    $imagesExtension = strtolower(end($imagesExtension));

    $newImageName = uniqid() . '.' . $imagesExtension;
    move_uploaded_file($tmpName, '../assets/uploads/' . $newImageName);
    $filesArray[] = $newImageName;
  }
  // $filesArray = json_encode($filesArray);
  $query = "INSERT INTO kho_anh VALUES ('', '$name', '$filesArray')";
  mysqli_query($conn, $query);
}
?>

<!-- echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
error_reporting(E_ERROR | E_PARSE);
  header('Location: index.php?action=danh_sach_san_pham'); -->