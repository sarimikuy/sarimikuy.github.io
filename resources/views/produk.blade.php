@extends('layouts.master')

@section('title', 'Auto - Models')

@section('content')
<div style="padding: 120px 50px; min-height: 100vh; background-color: #000;">
    <h1 style="font-family: 'Syncopate', sans-serif; text-align: center; margin-bottom: 50px; font-size: 2.5rem; letter-spacing: 2px; color: #fff;">SPORTS CARS</h1>
    
    <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
        <!-- Kartu Produk 1 -->
        <div style="width: 350px; background: #111; overflow: hidden; transition: transform 0.3s; border-bottom: 3px solid #e32636;">
            <div style="height: 200px; background: #222; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                <!-- Ganti link src di bawah dengan link gambar SF90 Stradale -->
                <img src="https://asset.kompas.com/crops/Vp_MUfwOTd8i4DAIb6VBD7mG7GU=/44x94:1275x914/1200x800/data/photo/2021/03/28/606010c3979de.jpeg" alt="SF90 STRADALE" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 25px; text-align: center;">
                <h3 style="font-family: 'Syncopate', sans-serif; font-size: 1.2rem; margin-bottom: 10px; color: #fff;">SF90 STRADALE</h3>
                <p style="color: #888; font-size: 0.9rem; font-weight: 300;">The new series-production supercar.</p>
            </div>
        </div>

        <!-- Kartu Produk 2 -->
        <div style="width: 350px; background: #111; overflow: hidden; transition: transform 0.3s; border-bottom: 3px solid #e32636;">
            <div style="height: 200px; background: #222; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                <!-- Ganti link src di bawah dengan link gambar 296 GTB -->
                <img src="https://thumb.wikimedia.org/wikipedia/commons/thumb/4/46/2022_Ferrari_296_%28cropped%29.jpg/1920px-2022_Ferrari_296_%28cropped%29.jpg?utm_source=en.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail" alt="296 GTB" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 25px; text-align: center;">
                <h3 style="font-family: 'Syncopate', sans-serif; font-size: 1.2rem; margin-bottom: 10px; color: #fff;">296 GTB</h3>
                <p style="color: #888; font-size: 0.9rem; font-weight: 300;">Defining fun to drive.</p>
            </div>
        </div>
    </div>
</div>
@endsection