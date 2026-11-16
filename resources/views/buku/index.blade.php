@extends('layouts.master')

@section('title', 'Our Team')

@section('content')
<style>
    /* Styling Khusus Halaman Tim */
    .team-section {
        padding: 150px 50px 100px;
        min-height: 100vh;
        background-color: #000;
        background-image: radial-gradient(circle at top right, #1a0505 0%, #000 60%);
    }

    .team-header {
        text-align: center;
        margin-bottom: 70px;
    }

    .team-header h1 {
        font-family: 'Syncopate', sans-serif;
        font-size: 2.5rem;
        letter-spacing: 3px;
        color: #fff;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .team-header p {
        color: #888;
        font-weight: 300;
        letter-spacing: 1px;
    }

    /* Grid 4 Kolom untuk Anggota Tim */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Kartu Profil Anggota */
    .team-card {
        background: #0a0a0a;
        border: 1px solid #222;
        border-top: 4px solid #333;
        padding: 40px 20px;
        text-align: center;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .team-card:hover {
        border-top-color: var(--ferrari-red);
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(218, 41, 28, 0.1);
    }

    /* Foto Profil (Avatar) dari URL */
    .avatar-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto 25px;
        display: block;
        object-fit: cover; 
        border: 2px solid #333;
        transition: border-color 0.4s ease, transform 0.4s ease;
        background: #111;
    }

    .team-card:hover .avatar-img {
        border-color: var(--ferrari-red);
        transform: scale(1.05);
    }

    .member-name {
        font-family: 'Syncopate', sans-serif;
        font-size: 1.1rem;
        color: #fff;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }

    .member-detail {
        list-style: none;
        padding: 0;
        margin-top: 20px;
        font-size: 0.85rem;
        color: #aaa;
    }

    .member-detail li {
        margin-bottom: 8px;
        padding-bottom: 8px;
        border-bottom: 1px dashed #222;
    }

    .member-detail li:last-child {
        border-bottom: none;
    }
    
    .label {
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #666;
        margin-bottom: 3px;
        letter-spacing: 1px;
    }
</style>

<div class="team-section">
    <div class="team-header">
        <h1>Gotham City</h1>
        <p>Makan bang</p>
    </div>

    <div class="team-grid">
        <!-- Anggota 1 -->
        <div class="team-card fade-up">
            <!-- Ganti URL di bawah dengan link gambar Cetta -->
            <img src="https://cdn.discordapp.com/attachments/803528019133333534/1564097725857931305/IMG-20261026-WA0017.jpg?ex=6ae94185&is=6ae7f005&hm=a3ebcb5b35503d769fcb49c9106f53f114dae5825d5e998ac8c44120cf2cab10&" alt="Foto Cetta" class="avatar-img">
            <h3 class="member-name">Cetta</h3>
            <ul class="member-detail">
                <li>
                    <span class="label">NIM</span>
                    2501010274 <!-- Ganti dengan NIM Asli -->
                </li>
                <li>
                    <span class="label">Hobby</span>
                    Membaca Buku dan Menulis Cerpen
                </li>
            </ul>
        </div>

        <!-- Anggota 2 -->
        <div class="team-card fade-up" style="transition-delay: 0.1s;">
            <!-- Ganti URL di bawah dengan link gambar Zaki -->
            <img src="https://cdn.discordapp.com/attachments/803528019133333534/1564097725522382848/IMG-20261026-WA0010.jpg?ex=6ae94185&is=6ae7f005&hm=78b82e28f298ab2fc6910f0b29307c6104c8a2f799b515c437c3ab45f663af0e&" alt="Foto Zaki" class="avatar-img">
            <h3 class="member-name">Zaki</h3>
            <ul class="member-detail">
                <li>
                    <span class="label">NIM</span>
                    2501010278 <!-- Ganti dengan NIM Asli -->
                </li>
                <li>
                    <span class="label">Hobby</span>
                    Bergitar
                </li>
            </ul>
        </div>

        <!-- Anggota 3 -->
        <div class="team-card fade-up" style="transition-delay: 0.2s;">
            <!-- Ganti URL di bawah dengan link gambar Vincent -->
            <img src="https://cdn.discordapp.com/attachments/803528019133333534/1564097726235283628/IMG-20261026-WA0012.jpg?ex=6ae94185&is=6ae7f005&hm=6f7d468d8504f268fd28c52c803d1dc9f2e75825f79e7cf5c6199de6085b2d74&" alt="Foto Vincent" class="avatar-img">
            <h3 class="member-name">Vincen</h3>
            <ul class="member-detail">
                <li>
                    <span class="label">NIM</span>
                    2501010275 <!-- Ganti dengan NIM Asli -->
                </li>
                <li>
                    <span class="label">Hobby</span>
                    Main Game
                </li>
            </ul>
        </div>

        <!-- Anggota 4 -->
        <div class="team-card fade-up" style="transition-delay: 0.3s;">
            <!-- Ganti URL di bawah dengan link gambar Samsul -->
            <img src="https://cdn.discordapp.com/attachments/803528019133333534/1564097726650515476/IMG-20261026-WA0016.jpg?ex=6ae94185&is=6ae7f005&hm=ec36cbe38514b77c5f046f09392ec6e6f92aa27245a091047f6ff5abc284c827&" alt="Foto Samsul" class="avatar-img">
            <h3 class="member-name">Samsul</h3>
            <ul class="member-detail">
                <li>
                    <span class="label">NIM</span>
                    2501010257<!-- Ganti dengan NIM Asli -->
                </li>
                <li>
                    <span class="label">Hobby</span>
                    Desain Logo & Grafis
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection