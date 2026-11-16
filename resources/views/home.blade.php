@extends('layouts.master')

@section('title', 'Unofficial Website')

@section('content')
<style>
    /* Hero Slider Container */
    .hero-slider { position: relative; width: 100vw; height: 100vh; overflow: hidden; background-color: #000; }
    
    /* Individual Slide */
    .slide { position: absolute; inset: 0; opacity: 0; transition: opacity 1s ease-in-out; display: flex; align-items: flex-end; justify-content: center; padding-bottom: 80px; z-index: 1; }
    .slide.active { opacity: 1; z-index: 2; }
    
    /* Video Setup */
    .slide video { position: absolute; top: 50%; left: 50%; min-width: 100%; min-height: 100%; object-fit: cover; transform: translate(-50%, -50%); z-index: -2; }
    .hero-gradient { position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 40%); z-index: -1; }
    
    /* Content Animation (Muncul setelah slide aktif) */
    .hero-content { text-align: center; color: #fff; z-index: 10; opacity: 0; transform: translateY(30px); transition: opacity 0.8s ease-out 0.5s, transform 0.8s ease-out 0.5s; }
    .slide.active .hero-content { opacity: 1; transform: translateY(0); }
    
    .hero-content h1 { font-family: 'Syncopate', sans-serif; font-size: 3.5rem; text-transform: uppercase; letter-spacing: 4px; margin-bottom: 15px; }
    .hero-content p { font-size: 1rem; font-weight: 300; letter-spacing: 1px; margin-bottom: 25px; color: #ccc; }
    
    .btn { display: inline-block; padding: 15px 40px; border: 1px solid #fff; color: #fff; text-decoration: none; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 2px; transition: all 0.3s ease; }
    .btn:hover { background-color: #fff; color: #000; }

    /* Slider Controls (Panah Kiri Kanan) */
    .slider-btn { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(0,0,0,0.2); color: white; border: none; padding: 15px 20px; cursor: pointer; font-size: 1.5rem; z-index: 10; transition: background 0.3s, color 0.3s; }
    .slider-btn:hover { background: var(--ferrari-red); }
    .prev-btn { left: 20px; }
    .next-btn { right: 20px; }

    /* Slider Indicators (Garis di bawah) */
    .slider-dots { position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); z-index: 10; display: flex; gap: 12px; }
    .dot { width: 50px; height: 2px; background: rgba(255,255,255,0.3); cursor: pointer; transition: background 0.3s; }
    .dot.active, .dot:hover { background: #fff; }

    /* Section Sekunder (Berita/Model) */
    .section-dark { background-color: #000; padding: 100px 40px; }
    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 1400px; margin: 0 auto; }
    .card { position: relative; height: 600px; overflow: hidden; cursor: pointer; }
    .card img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.7s ease; }
    .card:hover img { transform: scale(1.05); }
    .card-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); display: flex; align-items: flex-end; padding: 40px; }
    .card-title { font-family: 'Syncopate', sans-serif; font-size: 1.5rem; color: #fff; text-transform: uppercase; letter-spacing: 2px; }
</style>

<!-- Hero Slider Section -->
<section class="hero-slider">
    
    <!-- Slide 1 -->
    <div class="slide active">
        <!-- Ganti src ini dengan URL Video Ferrari Anda -->
        <video autoplay loop muted playsinline>
            <source src="https://ferrari.scene7.com/is/content/ferrari/gateway-scuderia-ferrari-2026-main-launch-desk" type="video/mp4">
        </video>
        <div class="hero-gradient"></div>
        <div class="hero-content">
            <h1>Scuderia Ferrari HP</h1>
            <p>Racing</p>
            <a href="/produk" class="btn">Discover</a>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide">
        <video autoplay loop muted playsinline>
            <source src="https://ferrari.scene7.com/is/content/ferrari/GT-Cover_Auto_Gamma" type="video/mp4">
        </video>
        <div class="hero-gradient"></div>
        <div class="hero-content">
            <h1>Start Your Engine</h1>
            <p>Sports Cars</p>
            <a href="/produk" class="btn">Discover</a>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="slide">
        <video autoplay loop muted playsinline>
            <source src="https://ferrari.scene7.com/is/content/ferrari/FERRARI_FW26_60_16X9_NO+LOGO+OPENING" type="video/mp4">
        </video>
        <div class="hero-gradient"></div>
        <div class="hero-content">
            <h1>FW 26 RUNWAY</h1>
            <p>Collection</p>
            <a href="/produk" class="btn">Discover</a>
        </div>
    </div>

    <!-- Navigasi Manual (Panah) -->
    <button class="slider-btn prev-btn">&#10094;</button>
    <button class="slider-btn next-btn">&#10095;</button>

    <!-- Indikator Manual (Garis Bawah) -->
    <div class="slider-dots">
        <span class="dot active" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
</section>

<!-- Section Sekunder -->
<section class="section-dark">
    <div class="grid-2">
        <div class="card fade-up">
            <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?q=80&w=800&auto=format&fit=crop" alt="Scuderia">
            <div class="card-overlay">
                <div class="card-title">Scuderia Ferrari</div>
            </div>
        </div>
        <div class="card fade-up" style="transition-delay: 0.2s;">
            <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?q=80&w=800&auto=format&fit=crop" alt="Collections">
            <div class="card-overlay">
                <div class="card-title">Lifestyle Collection</div>
            </div>
        </div>
    </div>
</section>

<!-- Skrip Logika Slider -->
<script>
    let slideIndex = 0;
    let slideInterval;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');

    // Fungsi Utama Mengganti Slide
    function showSlide(n) {
        // Hapus kelas active dari semua slide dan dot
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Looping index jika melewati batas
        slideIndex = (n + slides.length) % slides.length;
        
        // Tambahkan active pada index saat ini
        slides[slideIndex].classList.add('active');
        dots[slideIndex].classList.add('active');
    }

    // Fungsi Lanjut & Mundur
    function nextSlide() { showSlide(slideIndex + 1); }
    function prevSlide() { showSlide(slideIndex - 1); }

    // Fungsi Klik pada Garis Indikator
    function currentSlide(n) { 
        showSlide(n); 
        resetInterval(); // Reset timer saat user klik manual
    }

    // Fungsi Slider Otomatis (Setiap 7 Detik)
    function startInterval() {
        slideInterval = setInterval(nextSlide, 10000); 
    }
    
    // Reset Timer (agar tidak ganda transisinya saat di klik user)
    function resetInterval() {
        clearInterval(slideInterval);
        startInterval();
    }

    // Event Listener untuk Tombol Kiri Kanan
    document.querySelector('.next-btn').addEventListener('click', () => { 
        nextSlide(); 
        resetInterval(); 
    });
    
    document.querySelector('.prev-btn').addEventListener('click', () => { 
        prevSlide(); 
        resetInterval(); 
    });

    // Mulai animasi otomatis saat halaman dimuat
    startInterval();
</script>
@endsection