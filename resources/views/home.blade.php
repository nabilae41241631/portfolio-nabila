@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="hero">

    <!-- FOTO -->
    <div class="hero-img">
        <img src="{{ asset('images/profile/profil.jpeg') }}" alt="profile">
    </div>

    <!-- TEXT -->
    <div class="hero-text">
        <h1>Nabila Istiya Arum Zahfa</h1>
        <p class="role">QA Tester & UI/UX Enthusiast</p>

        <p class="desc">
            Mahasiswa Teknik Informatika dengan fokus pada Quality Assurance,
            pengujian aplikasi web, serta desain UI/UX sederhana.
        </p>

        <a href="/contact" class="btn">Hubungi Saya</a>
    </div>

</div>

@endsection