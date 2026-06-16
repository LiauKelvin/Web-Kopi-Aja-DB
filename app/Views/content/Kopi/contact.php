<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact us</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"/>
    <!-- feathers icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Slide Show -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- boxicons link  -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi <span>Jadi</span>.</a>

      <div class="navbar-nav">
        <a href="/">Home</a>
        <a href="/#about">Tentang Kami</a>
        <a href="/Menu">Menu</a>
        <a href="#">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="/Product" id="search"><i data-feather="search"></i></a>
        <a href="/DBKopi" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

<!--contact section start -->
<section id="contact.html" class="contact">
  <h2><span>Kontak</span> Kami</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, debitis!</p>

  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.6073949256606!2d106.79803272098192!3d-6.606423665742853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c191f0a555%3A0xe6e757cf32829f41!2sIBI%20KESATUAN%2+BOGOR!5e0!3m2!1sid!2sid!4v1699354992190!5m2!1sid!2sid" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            
            <form action="https://formspree.io/f/xrbzggag" method="POST">
              <div>
                  <div class="input-group">
                      <i data-feather="user"></i>
                      <label for="user"></label>
                      <input type="text" id="user" name="nama" placeholder="Nama Anda" required>
                  </div>
                  <div class="input-group">
                      <i data-feather="mail"></i>
                      <label for="email"></label>
                      <input type="email" id="email" name="email" placeholder="Email Anda" required>
                  </div>
                  <div class="input-group">
                      <i data-feather="send"></i>
                      <label for="message"></label>
                      <input type="text" id="message" name="message" placeholder="Ketik pesan" required>
                  </div>
                  <button type="submit" class="btn">Kirim Pesan</button>
              </div>
          </form>
  </div>
</section>
<!-- contact section end -->
 <!-- footer section start -->
<section class="footer">
  <div class="footer-content">
    <img src="<?= base_url('img/logo Kopijadi.png') ?>" alt="logo kopijadi" width="200px" height="150px">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, debitis!</p>

    <div class="icons">
      <a href="#"><i class='bx bxl-facebook-circle'></i></a>
      <a href="#"><i class='bx bxl-twitter'></i></a>
      <a href="#"><i class='bx bxl-instagram-alt'></i></a>
      <a href="#"><i class='bx bxl-youtube'></i></a>
    </div>
  </div>

  <div class="footer-content">
    <h4>Menu Bar</h4>
    <li><a href="/#home">Home</a></li>
    <li><a href="/#about">About</a></li>
    <li><a href="/#menu">Menu</a></li>
    <li><a href="/Contact">Contact</a></li>
  </div>
  <div class="footer-content">
    <h4>The Best Coffee</h4>
    <li><a href="/#menu">Espresso</a></li>
    <li><a href="/#menu">Latte</a></li>
    <li><a href="/#menu">Cappucino</a></li>
    <li><a href="/#menu">Macchiato</a></li>
  </div>
  <div class="footer-content">
    <h4>Contact Us </h4>
    <li><a href="/Contact">Location</a></li>
    <li><a href="/Contact">Phone Number</a></li>
    <li><a href="/Contact">Email</a></li>
    <li><a href="/Contact">Search Us</a></li>
  </div>
</section>
 <!-- footer section end -->


    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="<?= base_url('js/script.js') ?>"></script>
  </body>
</html>
