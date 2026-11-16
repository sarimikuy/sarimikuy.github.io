@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div style="padding: 120px 50px; min-height: 100vh; display: flex; align-items: center; justify-content: center; background-color: #000; background-image: radial-gradient(circle at center, #222 0%, #000 70%);">
    <form style="background: rgba(17, 17, 17, 0.9); padding: 50px; width: 100%; max-width: 450px; border-top: 4px solid #e32636; box-shadow: 0 10px 30px rgba(0,0,0,0.8);">
        <h2 style="font-family: 'Syncopate', sans-serif; margin-bottom: 30px; text-align: center; letter-spacing: 2px;">MY FERRARI</h2>
        
        <div style="margin-bottom: 25px;">
            <label style="display: block; margin-bottom: 10px; color: #aaa; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">Email Address</label>
            <input type="email" style="width: 100%; padding: 12px; background: #000; border: 1px solid #333; color: #fff; outline: none; transition: border-color 0.3s;" onfocus="this.style.borderColor='#e32636'" onblur="this.style.borderColor='#333'">
        </div>
        
        <div style="margin-bottom: 40px;">
            <label style="display: block; margin-bottom: 10px; color: #aaa; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">Password</label>
            <input type="password" style="width: 100%; padding: 12px; background: #000; border: 1px solid #333; color: #fff; outline: none; transition: border-color 0.3s;" onfocus="this.style.borderColor='#e32636'" onblur="this.style.borderColor='#333'">
        </div>
        
        <button type="submit" style="width: 100%; padding: 16px; background: #e32636; color: #fff; border: none; font-family: 'Syncopate', sans-serif; font-size: 0.9rem; font-weight: bold; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; transition: background 0.3s;" onmouseover="this.style.background='#c91e2b'" onmouseout="this.style.background='#e32636'">Sign In</button>
    </form>
</div>
@endsection