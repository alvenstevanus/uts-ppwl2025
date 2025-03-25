<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UTS PPWL</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Kopi <span>Keliling</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#menu">Menu</a>
            <a href="#products">Products</a>
            <a href="#contact">Kontak</a>
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        </div>
    </nav>

    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati <span>Kopi Keliling</span></h1>
            <p>
                Temukan pengalaman baru dengan menikmati kopi khas dari Kopi Keliling,
                pilihan terbaik untuk penikmat kopi sejati.
            </p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
    </section>

    <section id="about" class="about">
        <div class="row">
            <div class="about-img">
                <img src="{{ asset('img/tentang-kami.jpg') }}" alt="Tentang kami" />
            </div>
            <div class="content">
                <h2><span>Tentang</span> Kami</h2>

                <h3>Kenapa memilih kopi kami?</h3>
                <p>
                    Kopi Keliling hadir untuk memenuhi kebutuhan pecinta kopi dengan
                    berbagai pilihan biji kopi berkualitas dari seluruh Indonesia.
                </p>
                <p>
                    Kami percaya bahwa setiap tegukan kopi memiliki cerita yang unik.
                    Oleh karena itu, kami mengutamakan kualitas dan pengalaman
                    pelanggan.
                </p>
            </div>
        </div>
    </section>

    <section id="menu" class="menu">
        <h2><span>Menu</span> Kami</h2>
        <p>
            Pilihan menu terbaik kami siap menemani hari Anda, mulai dari kopi
            klasik hingga racikan spesial.
        </p>

        <div class="row">
            <div class="menu-card">
                <img src="{{ asset('img/1.jpg') }}" alt="Espresso" class="menu-card-img" />
                <h3 class="menu-card-title">- Kopling fresh-</h3>
                <p class="menu-card-price">IDR 8k</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/1.jpg') }}" alt="Latte" class="menu-card-img" />
                <h3 class="menu-card-title">- Kopling Latte -</h3>
                <p class="menu-card-price">IDR 15k</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/1.jpg') }}" alt="Cappuccino" class="menu-card-img" />
                <h3 class="menu-card-title">- Kopling Cappucino -</h3>
                <p class="menu-card-price">IDR 12k</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/1.jpg') }}" alt="Americano" class="menu-card-img" />
                <h3 class="menu-card-title">- Kopling Americano -</h3>
                <p class="menu-card-price">IDR 17k</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/1.jpg') }}" alt="Signature Blend" class="menu-card-img" />
                <h3 class="menu-card-title">- Kopling 1 Liter -</h3>
                <p class="menu-card-price">IDR 50k</p>
            </div>
        </div>
    </section>

    <section class="products" id="products">
        <h2><span>Produk Unggulan</span> Kami</h2>
        <p>
            Jelajahi berbagai produk unggulan kami, mulai dari biji kopi premium
            hingga alat penyeduh kopi modern.
        </p>

        <div class="row">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('img/1.jpg') }}" alt="product 1" />
                </div>
                <div class="product-content">
                    <h3>Kopling Fresh</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price"><span>IDR 8k</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('img/1.jpg') }}" alt="product 2" />
                </div>
                <div class="product-content">
                    <h3>Kopling Latte</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price"><span>IDR 15k</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('img/1.jpg') }}" alt="product 3" />
                </div>
                <div class="product-content">
                    <h3>Kopling Cappucino</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price"><span>IDR 12K</span></div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2><span>Contact</span> Kami</h2>
        <p>
            Jangan ragu untuk menghubungi kami! Tim Kopi Keliling siap melayani
            kebutuhan Anda.
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021339.2037966334!2d108.171664678125!3d0.5907283000000237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e3294618daffc3%3A0xb144b0a638e5fff5!2sKOPLING%20(Kopi%20Keliling)!5e0!3m2!1sen!2sid!4v1732086979637!5m2!1sen!2sid"
                width="800"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <div class="input-group">
                    <p data-feather="user"></p>
                    <input type="text" placeholder="nama" />
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email" />
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp" />
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="socials">
            <a href="https://www.instagram.com/ferry.kurniaone/"><i data-feather="instagram"></i></a>
            <a href="https://web.facebook.com/profile.php?id=100095699856513"><i data-feather="facebook"></i></a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Ferry Kurniawan</a>. | &copy; 2024.</p>
        </div>
    </footer>

    <script>
        feather.replace();
    </script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>