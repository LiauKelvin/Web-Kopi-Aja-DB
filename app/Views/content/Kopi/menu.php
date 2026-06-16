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
    <link rel="stylesheet" href="<?= base_url('css/style1.css') ?>" />
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
        <a href="/Contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="/Produk" id="search"><i data-feather="search"></i></a>
        <a href="/DBKopi" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
<!-- Navbar end -->

<!-- Products Section start -->
  <section class="products" id="products">
    <!--Start jenis product filter --> 
    <div class="containerslide">
      <!--filter buttons-->
      <div class="filter-buttons">
      <a href="#minuman"><button class="button2" data-name="minuman">Minuman</button></a>
      <a href="#biji"><button class="button2" data-name="biji">Biji Kopi</button></a>
    </div>
    <!--End jenis product filter -->
    <!--Start product minuman -->
    <div class="products-container" id="minuman">
      <h2><span>Menu Kopi</span> Kami</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>
    </div>
    <div class="row">
      <!-- Ekspresso -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#Ekspresso" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/1.jpg.png') ?>" alt="Ekspresso">
        </div>
        <div class="product-content">
          <h3>- Ekspresso -</h3>
          <div class="product-price">IDR 15K <span>IDR 30K</span></div>
        </div>
      </div>
      <!-- Latte -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#Latte" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/4.jpeg') ?>" alt="Latte">
        </div>
        <div class="product-content">
          <h3>- Latte -</h3>
          <div class="product-price">IDR 20K <span>IDR 35K</span></div>
        </div>
      </div>
      <!-- Americano -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/3.jpg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Americano -</h3>
          <div class="product-price">IDR 18K <span>IDR 25K</span></div>
        </div>
      </div>
      <!-- Cappucino -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/5.jpg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Cappucino -</h3>
          <div class="product-price">IDR 18K <span>IDR 28K</span></div>
        </div>
      </div>
      <!-- Macchiato -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/6.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Macchiato -</h3>
          <div class="product-price">IDR 24K <span>IDR 35K</span></div>
        </div>
      </div>
      <!-- Mocha -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/7.jpg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Mocha -</h3>
          <div class="product-price">IDR 18K <span>IDR 32K</span></div>
        </div>
      </div>
      <!-- Affogato -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/8.jpg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Affogato -</h3>
          <div class="product-price">IDR 23K <span>IDR 35K</span></div>
        </div>
      </div>
      <!-- Cafe Au Laid -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/menu/9.jpg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Cafe Au Laid -</h3>
          <div class="product-price">IDR 21K <span>IDR 3K</span></div>
        </div>
      </div>
    </div>
    <!-- end product minuman--> 
    <!--Start product biji -->
    <br><br>
    <div class="products-container" id="biji">
      <h2>Menu <span>Biji Kopi</span> Kami </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>
    </div>
    <div class="row">
      <!-- Arabica -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#Arabica" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/arabica2.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Arabica -</h3>
          <div class="product-price">IDR 50K <span>IDR 650K</span></div>
        </div>
      </div>
      <!-- Robusta Jawa -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#Robustajawa" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/robusta2.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Robusta Jawa -</h3>
          <div class="product-price">IDR 50K <span>IDR 65K</span></div>
        </div>
      </div>
      <!-- Robusta Bali -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/Robustabali2.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Robusta Bali -</h3>
          <div class="product-price">IDR 45K <span>IDR 65K</span></div>
        </div>
      </div>
      <!-- kopi Luwak -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/luwak2.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Luwak -</h3>
          <div class="product-price">IDR 70K <span>IDR 80K</span></div>
        </div>
      </div>
      <!-- Mandheling -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/Mandheling2.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Mandheling -</h3>
          <div class="product-price">IDR 70K <span>IDR 80K</span></div>
        </div>
      </div>
      <!-- Ethiiopia -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/Ethiopia2.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- Ethiiopia -</h3>
          <div class="product-price">IDR 45K <span>IDR 60K</span></div>
        </div>
      </div>
      <!-- kona -->
      <div class="product-card">
        <div class="product-icons">
          <a href="/DBKopi"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="<?= base_url('img/kona2.jpeg') ?>" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>- kona -</h3>
          <div class="product-price">IDR 60K <span>IDR 80K</span></div>
        </div>
      </div>
    </div>
    <!-- end product biji--> 
    </section>
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
<!-- Modal Box Item Detail start -->
 <!-- Ekspresso -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x-circle"></i></a>
      <div class="modal-content" id="Ekspresso">
        <img src="<?= base_url('img/menu/1.jpg.png') ?>" alt="Ekspresso">
        <div class="product-content">
          <h3>Ekspresso</h3>
          <p>'Espresso' merupakan kopi yang dihasilkan dari proses penyeduhan kopi dengan tekanan dan suhu tinggi. 
            Kopi espresso dibuat dengan menggiling kopi hingga halus, lalu dipadatkan atau biasa disebut “tamping”, 
            kemudian kopi diseduh dengan tekanan tinggi dengan suhu yang tinggi, sehingga menghasilkan ekstrak kopi yang kental.</p>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="/DBKopi"><i data-feather="chevrons-right"></i> <span>add to cart</span></a>
        </div>
      </div>
  </div>
  <!-- Latte -->

<!-- Modal Box Item Detail end -->

<!--Price Total
<div style="position: -webkit-sticky; position: sticky; background-color: #b6895b;border: 2px solid black; padding: 5px;">
    <h4 class="Total">Total Harga adalah <span>Rp18.000</span></h4>
</div>
Products Section end-->
   
<!--Javascript-->
<script>
    // Modal Box
const itemDetailModal = document.querySelector('#item-detail-modal');
const itemDetailButtons = document.querySelectorAll('.item-detail-button');

itemDetailButtons.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModal.style.display = 'flex';
    e.preventDefault();
  };
});

// klik tombol close modal
document.querySelector('.modal .close-icon').onclick = (e) => {
  itemDetailModal.style.display = 'none';
  e.preventDefault();
};

// klik di luar modal
window.onclick = (e) => {
  if (e.target === itemDetailModal) {
    itemDetailModal.style.display = 'none';
  }
};
  feather.replace()
</script>
  </body>
</html>