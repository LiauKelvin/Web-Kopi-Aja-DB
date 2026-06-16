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
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
    <!-- feathers icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Slide Show -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  </head>
  <!-- mystyle -->

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kopi <span>Jadi</span>.</a>

      <div class="navbar-nav">
        <a href="/#home">Home</a>
        <a href="/#about">Tentang Kami</a>
        <a href="/#menu">Menu</a>
        <a href="/Contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="/DBKopi" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Kopi Enak Sesuai <span>Kebutuhan</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>

    <!-- Hero Section End-->

<!-- Menu Explanation start -->
<section id="about" class="about">
  <!-- Menu Espresso -->
  
  <h1>Menu Produk <span>Kami</span></h1>
    <div style="line-height: 3rem; margin:3rem;">
      <h2 style="line-height: 0;" id="Espresso"><span>Kopi</span> Espresso</h2>
      <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  15K</34>
      <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Espresso?</span></h2></div>
    <div class="profile-menu">
      <div class="profile-img">
        <img
          src="<?= base_url('img/menu/1.jpg.png') ?>"
          alt="Tentang Kami"
          class="desc desc-menu"/>
      </div>
      <div class="profile-content">
        <div style="text-align: justify;">
          <p class="description"><b>
            'Espresso' merupakan kopi yang dihasilkan dari proses penyeduhan kopi dengan tekanan dan suhu tinggi. 
            Kopi espresso dibuat dengan menggiling kopi hingga halus, lalu dipadatkan atau biasa disebut “tamping”, 
            kemudian kopi diseduh dengan tekanan tinggi dengan suhu yang tinggi, sehingga menghasilkan ekstrak kopi yang kental. 
            Rasanya yang tebal dan teksturnya yang kental itu menjadikannya base atau dasar untuk pembuatan berbagai menu kopi, 
            seperti cappuccino, americano dan juga caffé latte.
            
            Dalam bahasa Italia, espresso berarti “kopi yang ditekan”. Kopi hitam espresso pertama kali ditemukan oleh Luigi Bezzera. 
            Awalnya, kopi dibuat dengan cara diseduh air panas, namun Bezzera menemukan cara yang lebih cepat untuk mendapatkan 
            secangkir kopi hitam kecil dengan rasa yang kuat, yaitu dengan tekanan uap.<span id="dots"></span><span id="more"><br><br>

            Setelah espresso semakin dikenal, Achille Gaggia, seorang mantan barista Milan menemukan sebuah mesin yang bisa 
            menghasilkan tekanan lebih yang bisa didapatkan dalam waktu 15 detik.Menurut cerita, Gaggia terinspirasi dari 
            jeep army Amerika yang menggunakan sistem hidrolik, sehingga lebih cepat dan kuat. Berkat berbagai penemuan dan 
            inovasi tersebut, sekarang kita bisa mendapatkan secangkir espresso yang lezat dalam waktu singkat.</span>
            <button onclick="myFunction()" id="myBtn" class="read">...Read more</button></b>
          </p>
          </div>
          </div>
        <p></p>
      </div>
    </div>
    </div><br><br>
    <!--Menu Latte-->
    <div style="line-height: 3rem; margin: 3rem;">
      <h2 style="line-height: 0;" id="Latte"><span>Kopi</span> Latte</h2>
      <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  20K</34>
      <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Latte?</span></h2></div>
      <div class="profile-menu">
        <div class="profile-img">
          <img
            src="<?= base_url('img/menu/4.jpeg') ?>"
            alt="Tentang Kami"
            class="desc desc-menu"/>
        </div>
        <div class="profile-content">
          <div style="text-align: justify;">
            <p class="description"><b>
              'Latte' Singkatnya Merupakan Kopi susu.
               Dalam bahasa Italia, Caffé artinya “kopi”, dan Latte adalah “susu”, jadi Caffé Latte artinya kopi susu. 
               Caffé latte atau kopi latte ini merupakan salah satu jenis minuman kopi susu yang populer di samping Cappucino.
              Sekilas, kedua jenis minuman ini memang mirip, tapi mereka punya takaran dan rasa yang berbeda, loh. Kopi latte 
              memiliki rasa yang lebih milky, sedangkan cappucino punya rasa kopi yang lebih kuat.
              
              Kopi latte hadir di berbagai coffee shop sejak abad ke-20, namun menurut cerita, kopi latte kemungkinan sudah ada 
              sejak abad ke-17 lalu. Kopi latte berawal di Italia, di mana banyak turis Amerika yang datang dan merasa kurang 
              cocok dengan tingkat kepahitan kopi yang diberikan.<span id="dots1"></span><span id="more1"><br><br>
  
              Akhirnya, ditambahkan susu untuk mengurangi atau menyeimbangkan rasa pahit dalam kopi tersebut. Selanjutnya, 
              takaran susu tersebut dipatenkan dan jadilah menu kopi latte yang lebih bisa diterima banyak orang.
              Dulu, kopi latte hadir sebagai breakfast coffee atau booster di pagi hari karena kandungan kopinya yang 
              cukup intens dan pas untuk memulai hari. Namun sekarang, banyak juga orang yang menikmati kopi latte di sore hari.</span>
              <button onclick="myFunction1()" id="myBtn1" class="read">...Read more</button></b>
            </p>
            </div>
          <p></p>
        </div>
      </div><br><br>
    <!--Menu Americano-->
    <div style="line-height: 3rem; margin: 5rem;">
      <h2 style="line-height: 0;" id="Americano"><span>Kopi</span> Americano</h2>
      <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  18K</34>
      <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Americano?</span></h2></div>
      <div class="profile-menu">
        <div class="profile-img">
          <img
            src="<?= base_url('img/menu/3.jpg') ?>"
            alt="Tentang Kami"
            class="desc desc-menu"/>
        </div>
        <div class="profile-content">
          <div style="text-align: justify;">
            <p class="description"><b>
              'Americano' adalah espresso yang ditambahkan air panas. Soal rasa, tentunya Americano lebih ringan dibandingkan espresso. 
              Menurut cerita, kopi Americano ini hadir berkat para tentara Amerika yang datang ke Italia. Kala itu, kopi espresso 
              terasa kurang familiar dan terlalu pahit bagi mereka. Oleh karena itu, untuk membuatnya pas di lidah dengan mudah, 
              para tentara menambahkan air ke dalam kopi espresso-nya. Singkat cerita, kopi Americano jadi minuman yang mendunia, 
              tidak hanya di Amerika saja.
    
              Salah satu penanda kualitas espresso ada pada krema-nya, yaitu busa keemasan yang ada pada lapisan atas. 
              Nah, karena dalam pembuatan kopi Americano ini dibuat dengan menuangkan air panas setelah espresso, 
              oleh karena itu sudah tidak ada lagi krema dalam kopi Americano, sekalipun Americano disajikan dalam kondisi panas.
              <span id="dots2"></span><span id="more2"><br><br>
    
              Kopi Americano dan Long Black memiliki kandungan yang sama, namun berbeda teknik penyajiannya. Dalam pembuatan kopi Americano, 
              espresso dituangkan terlebih dahulu baru kemudian air panas, sedangkan Long Black sebaliknya, menuangkan air panas terlebih 
              dahulu baru kemudian espresso. Perbedaan teknik inilah yang membuat Long Black masih memiliki krema. Soal rasa, 
              tentunya keduanya terbilang sama.</span>
              <button onclick="myFunction2()" id="myBtn2" class="read">...Read more</button></b>
            </p>
            </div>
          <p></p>
        </div>
       </div><br><br>
      <!--Menu Cappucino-->
      <div style="line-height: 3rem; margin: 5rem;">
        <h2 style="line-height: 0;" id="Cappucino"><span>Kopi</span> Cappucino</h2>
        <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  18K</34>
        <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Cappucino?</span></h2></div>
        <div class="profile-menu">
          <div class="profile-img">
            <img
              src="<?= base_url('img/menu/5.jpg') ?>"
              alt="Tentang Kami"
              class="desc desc-menu"/>
          </div>
          <div class="profile-content">
            <div style="text-align: justify;">
              <p class="description"><b>
                'Cappuccino' adalah secangkir kopi susu yang berasal dari Italia dan mulai hadir di Eropa dan Amerika sejak tahun 1980-an.
                Secangkir kopi cappuccino memiliki perbandingan espresso, steamed milk dan busa yang sama. Rasa kopi cappuccino 
                umumnya sangat rich, walaupun sudah dicampur susu, rasa kopinya tetap kuat.<br>

                Nama “cappuccino” itu terinspirasi dari jubah Capuchin. Kombinasi warna perpaduan antara espresso dan susu yang 
                dihasilkan dalam secangkir cappuccino mirip dengan jubah Capuchin, yaitu jubah cokelat panjang dengan tudung. Akhirnya, 
                segelas kopi susu ini dinamakan cappuccino deh.<span id="dots3"></span><span id="more3"><br><br>
      
                Yes, konsep latte dan cappuccino sebenarnya sama, yaitu sama-sama kopi susu, tapi keduanya punya takaran yang berbeda.
                Secangkir cappuccino berisi 1/3 espresso, 1/3 steamed milk dan 1/3 foamed milk, sedangkan secangkir kopi latte 
                mengandung 1 shot espresso, 175 ml - 235 ml steamed milk dan sedikit foamed milk di atasnya.</span>
                <button onclick="myFunction3()" id="myBtn3" class="read">...Read more</button></b>
              </p>
              </div>
            <p></p>
          </div>
         </div><br><br>
      <!--Menu Macchiato-->
      <div style="line-height: 3rem; margin: 5rem;">
        <h2 style="line-height: 0;" id="Macchiato"><span>Kopi</span> Macchiato</h2>
        <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  24K</34>
        <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Macchiato?</span></h2></div>
        <div class="profile-menu">
          <div class="profile-img">
            <img
              src="<?= base_url('img/menu/6.jpeg') ?>"
              alt="Tentang Kami"
              class="desc desc-menu"/>
          </div>
          <div class="profile-content">
            <div style="text-align: justify;">
              <p class="description"><b>
                'Macchiato' merupakan minuman campuran espresso dan susu. Dari jenisnya sendiri, ada 2 jenis macchiato, antara lain 
                caffé macchiato dan latte macchiato. Latte macchiato memiliki komposisi yaitu susu yang di-steam, espresso, dan foam 
                dengan perbandingan 2:1:1. Sedangkan caffé atau kopi macchiato merupakan minuman berukuran kecil yang terdiri dari 
                campuran espresso dan foam susu pada permukaannya.<br>

                Dalam bahasa Italia, Macchiato berarti “tanda,” dengan kata lain, minuman ini merupakan minuman yang sudah mempunyai 
                tanda atau terdapat bercak. Adapun untuk versi latte, bercak yang dimaksud adalah espresso, sedangkan untuk versi caffé, 
                yang bermakna “kopi,” bercak tersebut adalah foam susu.<span id="dots4"></span><span id="more4"><br><br>
      
                Komposisi dari latte macchiato adalah susu yang di-steam, espresso, dan foam. Adapun ukuran rasio ideal antara susu, 
                espresso, dan foam yaitu 2:1:1. Langkah pertama yang dapat Anda lakukan dalam meracik minuman ini adalah dengan 
                memasukkan susu yang sudah di steam ke dalam gelas yang tinggi, selanjutnya dengan memasukkan espresso, dan terakhir 
                dengan menambahkan foam di atasnya. Beberapa cafe menambahkan variasi menu dengan menyertakan karamel pada foam-nya.</span>
                <button onclick="myFunction4()" id="myBtn4" class="read">...Read more</button></b>
              </p>
              </div>
            <p></p>
          </div>
         </div><br><br>  
         <!--Menu Mocha-->
         <div style="line-height: 3rem; margin: 5rem;">
          <h2 style="line-height: 0;" id="Mocha"><span>Kopi</span> Mocha</h2>
          <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  18K</34>
          <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Mocha?</span></h2></div>
          <div class="profile-menu">
            <div class="profile-img">
              <img
                src="<?= base_url('img/menu/7.jpg') ?>"
                alt="Tentang Kami"
                class="desc desc-menu"/>
            </div>
            <div class="profile-content">
              <div style="text-align: justify;">
                <p class="description"><b>
                  'Mocha' berasal dari biji kopi bernama mocha yang dikirim dari pelabuhan Al Mokka di Yaman. Biji kopi tersebut 
                  terkenal dengan rasanya yang kecokelat-cokelatan. Dengan perkembangan zaman, sekarang nama “mocha” tidak terlalu 
                  berhubungan dengan biji kopinya, namun kehadiran rasa cokelat ke dalam minuman kopi.<br>
  
                  Ada banyak kombinasi resep membuat kopi moka, namun dasarnya yang paling terkenal adalah satu atau dua shot 
                  espresso yang dikombinasikan dengan perasa cokelat kemudian ditambahkan dengan susu atau krim yang kemudian dihias 
                  dengan bubuk cokelat atau cokelat parut di atasnya.<span id="dots5"></span><span id="more5"><br><br>
        
                  Bisa dibilang, kopi moka tergolong varian minuman cokelat, tapi juga tergolong minuman kopi. Soal rasa, 
                  kopi mocha terasa manis seperti cokelat, tapi juga memiliki sentuhan rasa roasty seperti kopi. Bagi sebagian orang, 
                  cita rasa kopi dalam secangkir kopi mocha hampir tidak terasa, tapi balik lagi, tergantung dengan kandungan kopi, 
                  kandungan cokelat, dan juga sensitivitas lidah setiap orang. Biasanya, kopi moka juga menjadi winter drink di negara 
                  barat sana.</span>
                  <button onclick="myFunction5()" id="myBtn5" class="read">...Read more</button></b>
                </p>
                </div>
              <p></p>
            </div>
          </div><br><br>  
        <!--Menu Affogato-->
        <div style="line-height: 3rem; margin: 5rem;">
          <h2 style="line-height: 0;" id="Affogato"><span>Kopi</span> Affogato</h2>
          <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  23K</34>
          <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Affogato?</span></h2></div>
          <div class="profile-menu">
            <div class="profile-img">
              <img
                src="<?= base_url('img/menu/8.jpg') ?>"
                alt="Tentang Kami"
                class="desc desc-menu"/>
            </div>
            <div class="profile-content">
              <div style="text-align: justify;">
                <p class="description"><b>
                  'Affogato' adalah kelezatan panas dan dingin yang tersedia di banyak menu kedai kopi spesial, serta di restoran.
                  Affogato adalah makanan penutup yang dibuat dengan dua bahan utama: es krim vanilla dan espresso. Awalnya ditemukan 
                  di Italia, kata “affogato” secara harfiah diterjemahkan menjadi “tenggelam” dalam bahasa Inggris. Ini pas, karena 
                  affogato tidak lebih dari satu sendok es krim yang “tenggelam” dalam espresso. <br>
  
                  Keiko Sato adalah barista dan pembeli kopi bersertifikat SCA. Ia juga menjabat sebagai Kepala Pelatihan di ,
                  sebuah jaringan kafe dan pemanggang kopi asal Brasil. Menurutnya, informasi mengenai sejarah affogato sulit ditemukan. 
                  “Sulit untuk menemukan tanggal pasti penemuan affogato,” kata Keiko. “Saya membayangkan hal ini muncul setelah penemuan 
                  mesin espresso, namun baru mulai menyebar pada akhir tahun 1900an.” <span id="dots6"></span><span id="more6"><br><br>
        
                  Meskipun sebagian besar dianggap sebagai makanan penutup, beberapa restoran dan kafe di Italia masih mengkategorikan 
                  affogato sebagai minuman. Ini adalah masalah perdebatan yang terus berlanjut. Emerson Nascimento adalah pemilik di Rio 
                  de Janeiro dan dua kali juara kopi Brasil di Good Spirits Championship. Dia percaya bahwa affogato jelas merupakan makanan 
                  penutup. <br><br>

                  “Ini pada dasarnya terdiri dari satu sendok besar es krim dan satu gelas espresso. Volume terbesar adalah padat. 
                  Anda bahkan harus menggunakan sendok untuk memakannya.”</span>
                  <button onclick="myFunction6()" id="myBtn6" class="read">...Read more</button></b>
                </p>
                </div>
              <p></p>
            </div>
          </div><br><br>  
        <!--Menu Cafe Au Laid-->
        <div style="line-height: 3rem; margin: 5rem;">
          <h2 style="line-height: 0;" id="CafeAuLaid"><span>Kopi</span> Cafe Au Laid</h2>
          <h3 class="price-tag"><span style="color: #CD853F;">IDR</span>  21K</34>
          <h2 style="text-align: center; font-size: 2rem;">Kenapa Harus <span>Kopi Cafe Au Laid?</span></h2></div>
          <div class="profile-menu">
            <div class="profile-img">
              <img
                src="<?= base_url('img/menu/9.jpg') ?>"
                alt="Tentang Kami"
                class="desc desc-menu"/>
            </div>
            <div class="profile-content">
              <div style="text-align: justify;">
                <p class="description"><b>
                  'Cafe au lait' adalah segelas espresso yang ditambahkan dengan susu steam dengan perbandingan 1:1. Cafe au lait memiliki 
                  sedikit busa di atasnya, bahkan terkadang tidak memiliki busa sama sekali. Di Amerika, cafe au lait merupakan sajian 
                  kopi saring pekat yang ditambahkan kopi steam hangat. Sedangkan latte adalah espresso dengan dua lapisan susu steam dan 
                  susu berbusa yang berbeda dan lebih tebal.<br>
  
                  Cafe au lait adalah kopi susu yang menggunakan kopi yang diseduh manual, sedangkan latte dibuat dengan espresso yang 
                  kuat sebagai dasarnya. Dengan teknik penyeduhan yang berbeda ini, tentunya keduanya menghasilkan rasa yang berbeda pula. 
                  Bagian terbaik dari cafe au lait adalah rasanya yang selalu cocok dengan segala jenis kopi.<span id="dots7"></span>
                  <span id="more7"><br><br>
        
                  Kopi susu cafe au lait adalah campuran susu dan kopi dengan perbandingan 1:1. Hal ini memberikan sajian kopi susu 
                  cafe au lait memiliki kalori yang lebih sedikit dibandingkan dengan kopi susu latte. Biasanya latte menggunakan lebih 
                  banyak susu dan hal ini berbanding lurus dengan kalori yang akan kamu konsumsi. Perlu diingat bahwa jumlah kalori pada 
                  setiap gelas latte akan berbeda di setiap sajiannya tergantung pada jenis susu yang digunakan.<br><br>

                  Cafe au lait dianggap lebih kuat dalam rasa dibandingkan dengan kopi susu latte. Walaupun latte memakai espresso yang kuat, 
                  namun kopi susu latte memiliki kandungan susu yang cukup banyak yang membuat rasanya menjadi lebih lembut. Segelas cafe au lait 
                  memiliki kandungan kopi dua kali lipat lebih banyak dibandingkan dengan latte dengan kandungan susu yang lebih sedikit pula. 
                  Komposisi ini membuat kopi susu cafe au lait memiliki rasa yang lebih kuat.</span>
                  <button onclick="myFunction7()" id="myBtn7" class="read">...Read more</button></b>
                </p>
                </div>
              <p></p>
            </div>
          </div><br><br>  
<!-- Menu Explanation end -->
</section>

<!-- contact section start -->
<section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, debitis!</p>
     
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.6073949256606!2d106.79803272098192!3d-6.606423665742853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c191f0a555%3A0xe6e757cf32829f41!2sIBI%20KESATUAN%20BOGOR!5e0!3m2!1sid!2sid!4v1699354992190!5m2!1sid!2sid" 
         allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      
         <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama">
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email">
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp">
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
         </form>
        </div>

</section>
<!-- contact section end -->

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="<?= base_url('js/script.js') ?>"></script>
  </body>
</html>