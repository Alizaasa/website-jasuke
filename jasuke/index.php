<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasuke In Love</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            scroll-behavior: smooth;
            padding-top: 56px;
            background-color: #ffeef5; /* Warna dasar */
        }
        section {
            padding: 100px 0;
        }
        footer {
            background-color: #ffcce6;
            color: #4a3c31;
            text-align: center;
            padding: 20px 0;
        }
        .footer-links a {
            color: #4a3c31;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        .navbar {
            background-color: #ff99cc;
        }
        .navbar-brand, .nav-link {
            color: #4a3c31 !important;
        }
        #home {
            background: url('assets/bg.jpg') no-repeat center center / cover;
            color: #fff;
            height: 100vh; /* Mengatur tinggi agar layar penuh */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        #home .section-content {
            background: rgba(0, 0, 0, 0.6); /* Transparansi hitam untuk teks */
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            color: #fff;
        }
        .btn-submit {
            background-color: #ff99cc;
            color: #4a3c31;
            border: none;
        }
        .btn-submit:hover {
            background-color: #ff6699;
        }
        .product-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .product-card {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Jasuke In Love</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Beranda -->
    <section id="home">
        <div class="section-content">
            <h1>Selamat Datang di Jasuke In Love</h1>
            <p>Temukan rasa manis, keju, dan krim yang khas dari Jasuke kami!</p>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about" class="text-center">
        <div class="container">
            <h1>Tentang Kami</h1>
            <p>Jasuke In Love berkomitmen menyajikan Jasuke terbaik yang terbuat dari bahan-bahan segar. Resep rahasia kami mengombinasikan jagung manis, keju creamy, dan susu kental manis untuk menciptakan pengalaman rasa yang tak terlupakan. Cocok untuk segala acara!</p>
        </div>
    </section>

 <!-- Produk -->
<section id="products" class="text-center">
    <div class="container">
        <h1>Produk Kami</h1>
        <div class="row mt-4">
            <!-- Produk 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/matcha.png" class="card-img-top" alt="Jasuke Matcha">
                    <div class="card-body">
                        <h5 class="card-title">Jasuke Matcha</h5>
                        <p class="card-text">Rasa asli dengan jagung segar, keju creamy, dan susu kental manis.</p>
                    </div>
                </div>
            </div>
            <!-- Produk 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/oreo.png" class="card-img-top" alt="Jasuke Oreo">
                    <div class="card-body">
                        <h5 class="card-title">Jasuke Oreo</h5>
                        <p class="card-text">Variasi manis dengan tambahan sirup cokelat pada resep klasik kami.</p>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/tiramisu.png" class="card-img-top" alt="Jasuke Tiramisu">
                    <div class="card-body">
                        <h5 class="card-title">Jasuke Tiramisu</h5>
                        <p class="card-text">Rasakan sensasi tiramisu yang kaya pada Jasuke favorit Anda.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Produk 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/keju.png" class="card-img-top product-small-img" alt="Jasuke Keju">
                    <div class="card-body">
                        <h5 class="card-title">Jasuke Keju</h5>
                        <p class="card-text">Rasa keju yang melimpah dengan kombinasi jagung manis favorit Anda.</p>
                    </div>
                </div>
            </div>
            <!-- Produk 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/coklat.png" class="card-img-top product-small-img" alt="Jasuke Coklat">
                    <div class="card-body">
                        <h5 class="card-title">Jasuke Coklat</h5>
                        <p class="card-text">Manisnya coklat berpadu sempurna dengan jagung dan keju creamy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Kontak -->
    <section id="contact" class="text-center">
        <div class="container">
            <h1>Kontak Kami</h1>
            <p>Punya pertanyaan atau ingin memesan? Isi formulir di bawah ini, atau hubungi kami melalui Instagram atau WhatsApp!</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No.Telp</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Nomor Anda" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Pesan Anda" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Kirim</button>
            </form>
        </div>
    </section>

    <footer>
        <div>© 2024 Jasuke In Love</div>
        <div class="footer-links mt-2">
            <a href="https://instagram.com/jasuke.inlove" target="_blank">Instagram</a> |
            <a href="https://wa.me/6289608670268" target="_blank">WhatsApp</a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
