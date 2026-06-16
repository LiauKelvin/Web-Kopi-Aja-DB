<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI ASAL JADI</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"/>
    <link href="<?= base_url('css/style.css') ?>" type="text/css" rel="stylesheet" />
    <!-- feathers icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Slide Show -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- boxicons link  -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
  </head>
  <!-- mystyle -->

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi <span>Jadi</span>.</a>

      <div class="navbar-nav">
        <a href="#">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="/Menu">Menu</a>
        <a href="/Contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="/Produk" id="search"><i data-feather="search"></i></a>
        <a href="/DBKopi" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!--  Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Kopi Enak Sesuai <span>Kebutuhan</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
        <a href="/DBKopi" class="cta">Beli Sekarang</a>
      </main>
    </section>

    <!--  Hero Section End-->

    <!-- Slide show otomatis start -->
    <div class="container">
      <div class="content-slide">
          <div class="imgslide fade">
              <div class="numberslide">1 / 5</div>
              <img src="<?= base_url('img/6.png') ?>" alt="" class="img-slide">
              <div class="text"></div>
          </div>
          <div class="imgslide fade">
              <div class="numberslide">2 / 5</div>
              <img src="<?= base_url('img/7.png') ?>" alt="" class="img-slide">
              <div class="text"></div>
          </div>
          <div class="imgslide fade">
              <div class="numberslide">3 / 5</div>
              <img src="<?= base_url('img/8.png') ?>" alt="" class="img-slide">
              <div class="text"></div>
          </div>
          <div class="imgslide fade">
            <div class="numberslide">4 / 5</div>
            <img src="<?= base_url('img/9.png') ?>" alt="" class="img-slide">
            <div class="text"></div>
          </div>
          <div class="imgslide fade">
            <div class="numberslide">5 / 5</div>
            <img src="<?= base_url('img/10.png') ?>" alt="" class="img-slide">
            <div class="text"></div>
           </div>
          <a class="prev" onClick="nextslide(-1)">&#10094;</a>
          <a class="next" onClick="nextslide(1)">&#10095;</a> 
       </div>
       <div class="page">
          <span class="dot" onClick="dotslide(1)"></span>
          <span class="dot" onClick="dotslide(2)"></span>
          <span class="dot" onClick="dotslide(3)"></span>
          <span class="dot" onClick="dotslide(4)"></span>
          <span class="dot" onClick="dotslide(5)"></span>
      </div>
  </div>
    <!-- Slide show otomatis end-->

    <!-- about section Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/iHURA4WCiYo?si=UWM6Fo9XZ_GDu_Jh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              <div class="tentang-kita">
                <h3>Kenapa Harus Kita?</h3>
                  <p>
                    'Kopi Jadi' merupakan toko kopi yang terinspirasi dengan toko-toko kopi di Italia
                    tahun 1980-an yang dapat dibilang merupakan toko kopi dengan tema vintage. 'Kopi Jadi' merupakan
                    perusahaan kopi dengan kualitas biji kopi pilihan dan terverifikasi oleh para peneliti
                    kopi diseluruh penjuru dunia. Dengan para pembuat kopi yang dinominasi oleh ECI (El Cafe Internazionale),
                    Kopi Jadi telah menjadi salah satu perusahaan kopi yang terbaik di Nusantara.<span id="dots"></span><span id="more">
                    
                    Disini, kami menyediakan beberapa minuman kopi dengan kualitas terbaik yang bisa kami dapatkan
                    diseluruh dunia, sehingga kami dapat memastikan bahwa kopi buatan 'Kopi Jadi' merupakan kopi yang
                    dapat dinikmati oleh lidah para pelanggan dan bahkan kritikus kopi yang selalu mencemoohkan 
                    restoran atau perusahaan kopi besar sekaligus diseluruh dunia. <br><br>
      
                    Bahkan kami mencampurkan biji kopi yang telah digiling menjadi bubuk dengan air jernih dan suci dimana
                    air tersebut yang didapatkan di dunia neraka yang kemudian disucikan kembali dari gunung suci dan bahkan
                    air segar dari gunung Fuji, sehingga air tersebut dapat terbilang mahal sekaligus mewah yang bahkan
                    pemerintah benua Afrika tidak bisa merasakan betapa mewahnya air yang didapat oleh perusahaan 'Kopi Jadi'.</span>
                    <button onclick="myFunction()" id="myBtn" class="read">...Read more</button>
                  </p>
                <p></p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about section End-->

    <!-- menu section start -->
    <section id="menu" class="menu">
      <h2><span>Menu</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda possimus, ducimus voluptatibus</p>
        <div class="row">
          <div class="menu-card">
            <img src="<?= base_url('img/menu/1.jpg.png') ?>" alt="Espresso" class="menu-card-img">
            <h3><a href="/Produk#Espresso" class="menu-card-title">- Espresso -</a></h3>
            <p class="menu-card-price">IDR 15K</p>
          </div>
          <div class="menu-card">
            <img src="<?= base_url('img/menu/4.jpeg') ?>" alt="Latte" class="menu-card-img">
            <h3><a href="/Produk#Latte" class="menu-card-title"> - Latte - </a></h3>
            <p class="menu-card-price">IDR 20K</p>
          </div>
          <div class="menu-card">
            <img src="<?= base_url('img/menu/3.jpg') ?>" alt="Americano" class="menu-card-img">
            <h3><a href="/Produk#Americano" class="menu-card-title"> - Americano - </a></h3>
            <p class="menu-card-price">IDR 18K</p>
          </div>
          <div class="menu-card">
            <img src="<?= base_url('img/menu/5.jpg') ?>" alt="Cappucino" class="menu-card-img">
            <h3><a href="/Produk#Cappucino" class="menu-card-title">- Cappucino -</a></h3>
            <p class="menu-card-price">IDR 18K</p>
          </div>
          <div class="menu-card">
            <img src="<?= base_url('img/menu/6.jpeg') ?>" alt="Macchiato" class="menu-card-img">
            <h3> <a href="/Produk#Macchiato" class="menu-card-title">- Macchiato -</a></h3>
            <p class="menu-card-price">IDR 24K</p>
          </div>
          <div class="menu-card">
            <img src="<?= base_url('img/menu/7.jpg') ?>" alt="Mokka" class="menu-card-img">
            <h3><a href="/Produk#Mokka" class="menu-card-title">- Mocha -</a></h3>
            <p class="menu-card-price">IDR 18K</p>
          </div>
          <div class="menu-card">
            <img src="<?= base_url('img/menu/8.jpg') ?>" alt="Affogato" class="menu-card-img">
            <h3><a href="/Produk#Affogato" class="menu-card-title">- Affogato -</a></h3>
            <p class="menu-card-price">IDR 23K</p>
          </div>
          <div class="menu-card">
            <img src="<?= base_url('img/menu/9.jpg') ?>" alt="Cafe Au Laid" class="menu-card-img">
            <h3><a href="/Produk#CafeAuLaid" class="menu-card-title">- Cafe Au Laid -</a></h3>
            <p class="menu-card-price">IDR 21K</p>
          </div>
        </div>
      </section>

    <!-- menu section END -->

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
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#menu">Menu</a></li>
    <li><a href="/Contact">Contact</a></li>
  </div>
  <div class="footer-content">
    <h4>The Best Coffee</h4>
    <li><a href="#menu">Espresso</a></li>
    <li><a href="#menu">Latte</a></li>
    <li><a href="#menu">Cappucino</a></li>
    <li><a href="#menu">Macchiato</a></li>
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
    <script src="<?= base_url('js/script.js') ?>" type="text/javascript"></script>
  </body>
</html>
