@extends('layouts.app')

@section('title','Certificates')

@section('content')

<h1>Sertifikat</h1>

<div class="cert-grid">

    <div class="cert-card">
        <img src="{{ asset('images/certificates/sertifikat1.png') }}" onclick="openModal(this)">

        <h3>LKMM Pra-TD</h3>
        <p>2024</p>

        <button class="btn-read" onclick="openDesc(
            'LKMM Pra-TD',
            'Personal Branding: Mengukir Citra Diri untuk Sukses Akademis dan Karier Gemilang',
            '2024'
        )">Detail</button>
    </div>

    <div class="cert-card">
        <img src="{{ asset('images/certificates/sertifikat2.png') }}" onclick="openModal(this)">

        <h3>Study Club UI/UX</h3>
        <p>2025</p>

        <button class="btn-read" onclick="openDesc(
            'Study Club UI/UX',
            'Diselenggarakan oleh Teknik Informatika PSDKU Kampus 3 Politeknik Negeri Jember Kab. Nganjuk',
            '2025'
        )">Detail</button>
    </div>

    <div class="cert-card">
        <img src="{{ asset('images/certificates/sertifikat3.png') }}" onclick="openModal(this)">

        <h3>Bootcamp UI/UX</h3>
        <p>2025</p>

        <button class="btn-read" onclick="openDesc(
            'Bootcamp UI/UX',
            'Interactive Thinking: UI/UX in Action',
            '2025'
        )">Detail</button>
    </div>

</div>

<!-- MODAL GAMBAR -->
<div id="imgModal" class="modal" onclick="closeModal()">
    <img id="modalImg">
</div>

<!-- MODAL DESKRIPSI -->
<div id="descModal" class="modal" onclick="closeDesc()">
    <div class="desc-box" onclick="event.stopPropagation()">
        <h2 id="descTitle"></h2>
        <p id="descText"></p>
        <span id="descYear"></span>
    </div>
</div>

@endsection