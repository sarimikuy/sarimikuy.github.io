<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unofficial Ferrari | @yield('title')</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/3/36/Prancing_horse.svg" type="image/svg+xml">
    <style>
        /* Tipografi mirip Ferrari */
        @import url('https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Inter:wght@300;400;600&display=swap');

        :root {
            --ferrari-red: #121212; /* Diperbaiki ke warna merah Ferrari sesungguhnya */
            --bg-dark: #121212;
            --text-light: #f5f5f5;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background-color: #000; color: var(--text-light); overflow-x: hidden; }

        /* Loading Screen (Animasi Fade Out) */
        #loader {
            position: fixed; inset: 0; background-color: var(--ferrari-red); z-index: 9999;
            display: flex; align-items: center; justify-content: center;
            transition: opacity 1s ease, visibility 1s ease;
        }
        #loader.hidden { opacity: 0; visibility: hidden; }
        .loader-logo { width: 80px; animation: pulse 1.5s infinite; filter: brightness(0) invert(1); }
        @keyframes pulse { 0%, 100% { opacity: 0.6; transform: scale(0.95); } 50% { opacity: 1; transform: scale(1.05); } }

        /* Navbar dengan Background Hitam Solid */
        nav {
            position: fixed; top: 0; width: 100%; padding: 15px 40px; z-index: 100;
            display: flex; justify-content: space-between; align-items: center;
            background-color: #000; /* Background hitam untuk kontras */
            border-bottom: 1px solid #222;
            transition: background-color 0.4s ease, backdrop-filter 0.4s ease;
        }
        nav.scrolled { background-color: rgba(0, 0, 0, 0.95); backdrop-filter: blur(10px); }
        
        /* Container Kiri untuk Logo dan Links */
        .nav-left { display: flex; align-items: center; gap: 40px; }
        
        /* Ukuran logo diperkecil */
        .brand img { height: 40px; width: auto; display: block; filter: brightness(0) invert(1); }
        
        .nav-links { display: flex; gap: 25px; }
        .nav-links a { color: #fff; text-decoration: none; font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; position: relative; padding-bottom: 5px; }
        
        /* Animasi Garis Bawah Navigasi */
        .nav-links a::after { content: ''; position: absolute; width: 0; height: 2px; bottom: 0; left: 0; background-color: var(--ferrari-red); transition: width 0.3s ease; }
        .nav-links a:hover::after { width: 100%; }

        /* Tombol Search di Kanan */
        .search-btn { background: none; border: none; color: #fff; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: color 0.3s ease; padding: 5px; }
        .search-btn:hover { color: var(--ferrari-red); }
        .search-btn svg { width: 22px; height: 22px; fill: currentColor; }

        /* Global Fade-Up Animation */
        .fade-up { opacity: 0; transform: translateY(40px); transition: opacity 0.8s ease-out, transform 0.8s ease-out; }
        .fade-up.visible { opacity: 1; transform: translateY(0); }

        /* Footer Khas Ferrari */
        footer { background-color: var(--bg-dark); border-top: 1px solid #333; padding: 60px 40px 30px; font-size: 0.85rem; }
        .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; margin-bottom: 40px; }
        .footer-col h4 { font-family: 'Syncopate', sans-serif; font-size: 0.9rem; letter-spacing: 2px; margin-bottom: 20px; color: #fff; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 12px; }
        .footer-col ul li a { color: #888; text-decoration: none; transition: color 0.3s; }
        .footer-col ul li a:hover { color: #fff; }
        .footer-bottom { border-top: 1px solid #333; padding-top: 20px; display: flex; justify-content: space-between; color: #666; font-size: 0.75rem; }
    </style>
</head>
<body>

    <!-- Loading Screen Fade Out -->
    <div id="loader">
        <img src="https://upload.wikimedia.org/wikipedia/en/3/36/Prancing_horse.svg?utm_source=en.wikipedia.org&utm_campaign=index&utm_content=original" class="loader-logo" alt="Loading">
    </div>

    <!-- Navbar -->
    <nav id="navbar">
        <div class="nav-left">
            <a href="/" class="brand">
                <img src="https://upload.wikimedia.org/wikipedia/en/3/36/Prancing_horse.svg?utm_source=en.wikipedia.org&utm_campaign=index&utm_content=original" alt="Ferrari">
            </a>
            <div class="nav-links">
                <a href="/produk">Auto</a>
                <a href="/login">Login</a>
                <a href="/buku">Our Team</a>
            </div>
        </div>

        <div class="nav-right">
            <button class="search-btn" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21.71 20.29l-4.88-4.88a8 8 0 10-1.42 1.42l4.88 4.88a1 1 0 001.42-1.42zM4 10a6 6 0 116 6 6 6 0 01-6-6z"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h4>AUTO</h4>
                <ul>
                    <li><a href="#">Sports Cars</a></li>
                    <li><a href="#">Pre-Owned</a></li>
                    <li><a href="#">Dealers</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>ANJAY</h4>
                <ul>
                    <li><a href="#">F1 Team</a></li>
                    <li><a href="#">Hypercar</a></li>
                    <li><a href="#">Esports</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>COLLECTIONS</h4>
                <ul>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Ferrari S.p.A. - All rights reserved.</p>
            <p>Privacy Policy | Legal | Cookie Policy</p>
        </div>
    </footer>

    <script>
        // Animasi Loading Screen Fade Out
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loader').classList.add('hidden');
            }, 1000);
        });

        // Efek Navbar Background saat Scroll (Jika diperlukan lebih gelap)
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) { nav.classList.add('scrolled'); } 
            else { nav.classList.remove('scrolled'); }
        });

        // Intersection Observer untuk animasi konten (scroll muncul)
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
    </script>
</body>
</html>