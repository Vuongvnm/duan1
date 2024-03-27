<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <script src="https://kit.fontawesome.com/47e370afdb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
  <div class="wrapper">
    <!-- Đăng nhập -->
    <div class="form-wrapper sign-in">
      <form action="index.php?action=dang_nhap" method="post">
        <h2>Đăng nhập</h2>
        <div class="input-group">
          <input type="text" name="ten_dang_nhap" required>
          <label for="">Tên đăng nhập</label>
        </div>
        <div class="input-group">
          <input type="password" name="mat_khau" required>
          <label for="">Mật khẩu</label>
        </div>
        <div class="remember">
          <label><input type="checkbox">Lưu thông tin</label>
        </div>
        <p id="thong_bao"></p>
        <button type="submit" name="dang_nhap">Đăng nhập</button>
        <div class="signUp-link">
          <p>Chưa có tài khoản? <a href="#" class="signUpBtn-link">Đăng ký</a></p>
        </div>
        <div class="signUp-link">
          <p>Quên mật khẩu? <a href="#" class="changePassBtn-link">Thay đổi mật khẩu</a></p>
        </div>
        <div class="social-platform">
          <p>Hoặc đăng ký qua</p>
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-google"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>
        <div class="signUp-link">
          <p><a href="index.php">Trở lại shop</a></p>
        </div>
      </form>
    </div>

    <!-- Đăng ký -->
    <div class="form-wrapper sign-up">
      <form action="index.php?action=dang_ky" method="post">
        <h2>Đăng ký</h2>
        <div class="input-group">
          <input type="text" name="ten_dang_nhap" required>
          <label for="">Tên đăng nhập</label>
        </div>
        <div class="input-group">
          <input type="email" name="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" name="mat_khau" required>
          <label for="">Mật khẩu</label>
        </div>
        <div class="remember">
          <label><input type="checkbox">Tôi đồng ý với các điều khoản của shop</label>
        </div>
        <button type="submit" name="dang_ky">Đăng ký</button>
        <div class="signUp-link">
          <p>Đã có tài khoản? <a href="#" class="signInBtn-link">Đăng nhập</a></p>
        </div>
        <div class="signUp-link">
          <p>Quên mật khẩu? <a href="#" class="changePassBtn-link">Thay đổi mật khẩu</a></p>
        </div>
        <div class="signUp-link">
          <p><a href="index.php">Trở lại shop</a></p>
        </div>
      </form>
    </div>

    <!-- Quên mật khẩu  -->
    <div class="form-wrapper forget-pass">
      <form action="index.php?action=dang_ky" method="post">
        <h2>Quên mật khẩu</h2>
        <div class="input-group">
          <input type="email" name="email" required>
          <label for="">Email</label>
        </div>
        <div class="remember">
          <label>Nhập email đã dùng để đăng ký!</label>
        </div>
        <p id="thong_bao"></p>
        <button type="submit" name="dang_ky">Nhận mật khẩu</button>
        <div class="signUp-link">
          <p>Đã có tài khoản? <a href="#" class="signInBtn-link">Đăng nhập</a></p>
        </div>
        <div class="signUp-link">
          <p>Chưa có tài khoản? <a href="#" class="signUpBtn-link">Đăng ký</a></p>
        </div>
        <div class="signUp-link">
          <p><a href="index.php">Trở lại shop</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="./assets/js/login.js"></script>
</body>
</html>