<?php
    require_once "model/san_pham.php";
    require_once "view/san_pham/them_san_pham.php";
    if(isset($_POST['them_moi'])) {
      $totalFiles = count($_FILES['hinh_anh_phu']['name']);
      $filesArray = array();
      for($i = 0; $i < $totalFiles; $i++) {
        $imagesName = $_FILES['hinh_anh_phu']['name'][$i];
        $tmpName = $_FILES['hinh_anh_phu']['tmp_name'][$i];

        $imagesExtension = explode('.', $imagesName);
        $imagesExtension = strtolower(end($imagesExtension));

        $newImageName = uniqid() . '.' . $imagesExtension;
        move_uploaded_file($tmpName, '../assets/uploads/' . $newImageName);
        $filesArray[] = $newImageName;
      }
      $filesArray = json_encode($filesArray);
      $query = "INSERT INTO hinh_anh VALUES ('', '$name', '$filesArray')";
      mysqli_query($conn, $query);
    }
  ?>
?>