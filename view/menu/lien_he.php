<?php
  require_once "view/header.php";
?>
  <!--hero-->
  <section id="page-header" style="background-image: url('./assets/images/about/banner.png')">
    <h2>LIÊN HỆ</h2>
    <p>Hãy để lại lời nhắn cho chúng tôi!</p>
  </section>
  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>THÔNG TIN LIÊN HỆ</span>
      <h2>Hãy ghé thăm một trong số những cửa hàng của chúng tôi hoặc gọi vào số điện thoại dưới đây!</h2>
      <h3>Cơ sở chính</h3>
      <div>
        <li>
          <i class="fa-regular fa-map"></i>
          <p>123 Đường A số B, thành phố C</p>
        </li>
        <li>
          <i class="fa-regular fa-envelope"></i>
          <p>vuongvnmpp03059@gmail.com</p>
        </li>
        <li>
          <i class="fa-solid fa-phone"></i>
          <p>+01 111 2222 333</p>
        </li>
        <li>
          <i class="fa-regular fa-clock"></i>
          <p>Thứ 2 đến thứ 7: 9.00am đến 4.00pm</p>
        </li>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59658.04449124462!2d106.65754688667565!3d20.846731923659824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7af39e3f1ad3%3A0xa5ffc85ff87a07e8!2sHaiphong%2C%20Hai%20Phong%2C%20Vietnam!5e0!3m2!1sen!2s!4v1709701362076!5m2!1sen!2s" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <section id="form-details">
    <form action="#">
      <span>ĐỂ LẠI LỜI NHẮN</span>
      <h2>CHÚNG TÔI RẤT MUỐN NGHE TỪ BẠN</h2>
      <input type="text" placeholder="Họ tên">
      <input type="email" placeholder="Email">
      <input type="text" placeholder="Chủ đề">
      <textarea name="" cols="30" rows="10" placeholder="Nội dung"></textarea>
      <button class="normal">Gửi</button>
    </form>
    <div class="people">
      <img src="./assets/images/people/1.png">
      <p><span>John Doe</span> Senior Marketing Manager <br> Phone: + 012 3456 789 <br> Email: contact@example.com</p>
    </div>
    <div class="people">
      <img src="./assets/images/people/2.png">
      <p><span>William Smith</span> Senior Marketing Manager <br> Phone: + 012 3456 789 <br> Email: contact@example.com</p>
    </div>
    <div class="people">
      <img src="./assets/images/people/3.png">
      <p><span>Emma Stone</span> Senior Marketing Manager <br> Phone: + 012 3456 789 <br> Email: contact@example.com</p>
    </div>
  </section>
  <?php
  require_once "./view/dang_ky_thanh_vien/dang_ky_thanh_vien.php"
  ?>
  <?php
  require_once "view/footer.php";
?>