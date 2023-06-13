<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jelajah Nusantara</title>
    <link rel="shortcut icon" href="images/travel.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <h1 class="logo"><i class="fas fa-hiking"></i>Jelajah<span>Nusantara</span></h1>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="#home">Beranda</a>
            <a href="#category">petualangan</a>
            <a href="#packages">paket</a>
            <a href="#contact">form</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div> 
            <div id="search-btn" class="fas fa-search"></div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

    </header>

    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>

    <section class="home" id="home">
   
        <div class="wrapper">
           
                <div class="box" style="background: url(images/home1.jpg) no-repeat;">
                <div class="content">
                    <span>don't stop your</span>
                    <h3>exploring</h3>
                    <p>Jelajah Nusantara menawarkan penawaran terbaik untuk Paket Wisata di Indonesia</p>
                    <a href="#category" class="btn">get started</a>
                </div>
                </div>  
        </div>
    </section>

    <section class="category" id="category">

        <h1 class="heading">Ide Petualangan!</h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="images/category-1.jpg" alt="">
                <h3>bungee jump</h3>
                <p>Bungge jump ialah aktivitas yang melibatkan seseorang melompat dari ketinggian dan terhubung ke tali elastis yang besar</p>
                <a href="https://en.wikipedia.org/wiki/Bungee_jumping" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="images/category-2.jpg" alt="">
                <h3>zip lines</h3>
                <p>Zip-line, zip line, zip-wire, atau flying fox adalah katrol yang digantung pada kabel, biasanya terbuat dari baja tahan karat, dipasang di lereng.</p>
                <a href="https://en.wikipedia.org/wiki/Zip_line" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="images/category-3.jpg" alt="">
                <h3>Canoeing</h3>
                <p>Canoeing adalah kegiatan yang melibatkan mengayuh Perahu kano dengan dayung berbilah tunggal sebagai alat transportasi diatas air</p>
                <a href="https://en.wikipedia.org/wiki/Canoeing" class="btn">read more</a>
            </div>
        </div>

    </section>

    <section class="packages" id="packages">

        <h1 class="heading">paket populer</h1>
    
        <div class="box-container">
    
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paket Bali</h3>
                    <p>Kuta adalah sebuah kawasan pariwisata yang terletak di Kabupaten Badung, Provinsi Bali. Kawasan ini terkenal dengan pantai-pantainya yang indah dan menjadi pusat aktivitas wisata di Bali. Di Kuta, wisatawan dapat menikmati keindahan pantai, berselancar, berbelanja, & menikmati kuliner khas Bali</p>
                    <div class="price">Rp 2.000.000 - Rp 4.000.000</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paket Sumatera Utara</h3>
                    <p>Danau Toba dan Pulau Samosir menjadi salah satu objek wisata utama di Sumatera Utara & menjadi tujuan wisata populer di Indonesia. Beberapa kegiatan wisata yang dapat dilakukan di Danau Toba antara lain berenang, berperahu, menjelajahi Pulau Samosir, bersepeda, & menikmati kuliner khas Batak.</p>
                    <div class="price">Rp 1.000.000 - Rp 4.000.000</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paket Bunaken</h3>
                    <p>Jelajahi keindahan bawah laut Taman Nasional Bunaken dengan menyaksikan keindahan alam bawah laut yang tiada duanya serta eksplorasi keanekaragaman hayati. Dapatkan pengalaman berenang dengan ikan-ikan yang cantik dan menjelajahi terumbu karang yang menakjubkan.</p>
                    <div class="price">Rp 1.500.000 - Rp 3.000.000</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paket Bandung</h3>
                    <p>Nikmati keindahan alam yang menakjubkan di Kawah Putih Ciwidey dan saksikan keindahan alam yang menakjubkan, air danau yang berwarna putih kehijauan dan suasana yang menenangkan yang membuat Anda rileks dan santai</p>
                    <div class="price">Rp 500.000 - Rp 1.000.000</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/img-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paket Zoo Adventure</h3>
                    <p>Ragunan Zoo menawarkan kesempatan bagi Anda untuk mempelajari lebih banyak tentang kehidupan binatang dan habitat mereka. Jangan lewatkan kesempatan untuk mengunjungi tempat ini dan mengeksplorasi kehidupan binatang di Indonesia</p>
                    <div class="price">Rp 300.000 - Rp 650.000</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Paket Wisata Lombok</h3>
                    <p>Jangan lewatkan kesempatan untuk merasakan petualangan dan keindahan serta Panorama alam di Gunung Rinjani! Dengan paket trekking kami, Anda akan mendapatkan pengalaman tak terlupakan dalam menaklukkan gunung tertinggi kedua di Indonesia</p>
                    <div class="price">Rp. 1.500.000 - Rp. 2.000.000</div>
                    <a href="#contact" class="btn">explore now</a>
                </div>
            </div>
    
        </div>
    </section>

    <section class="contact" id="contact">
    
    <div class="wrapper1">
        <div class="title1">
          <h1>Formulir Hubungi Kami</h1>
        </div>
        <div class="contact-form">
            <form action = "hubungi_kami.php" method="POST">
          <div class="input-fields">
            
            <input type="text" class="input" placeholder="Nama" name="nama">
            <input type="email" class="input" placeholder="Alamat Email" name="email">
            <input type="phone" class="input" placeholder="Nomor Telepon" name="no_telepon">
            <input type="text" class="input" placeholder="Pilihan Paket" name="pilihan_paket">
          </div>
          <div class="msg">
            <textarea placeholder="Tulis Pesan disini ya.." name="pesan"></textarea>
            <button type="submit" class="btn1">Kirim</button>
        </form>
          </div>
        </div>
        </div>
    
    </section>
    <section class="footer">
        <div class="credit">created by <span>JelajahNusantara © 2023 | All rights reserved</span></div>
    </section>

    <script src="js/script.js"></script>
</body>
</html>