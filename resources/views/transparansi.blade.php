@extends('layouts.app')

@section('title', 'Transparansi')

@section('content')
    <h4 class="blue-text text-darken-2 mb-40">🧾 Transparansi Gloriabank</h4>
    <div class="container">
        <h5 class="center-align">💰 Transparansi Donasi & Pengeluaran</h5>

        <div class="card-panel teal lighten-5 mb-40">
            <marquee behavior="scroll" direction="left" scrollamount="5">
                🙏 Donatur Terbaru: Budi Santoso - Rp 500.000 | Siti Aisyah - Rp 200.000 | Pengeluaran: Server - Rp 120.000
                | Domain - Rp 150.000 | Total Pemasukan: Rp 12.750.000 | Total Pengeluaran: 1.570.000 || Sisa Saldo Total :
                Rp
                15.000.000 ||
            </marquee>
        </div>
    </div>

    <p>Semua aliran dana, kontribusi, zakat, sedekah, dan investasi kolektif ditampilkan secara terbuka.</p>

    <ul class="collection with-header">
        <li class="collection-header">
            <h5>📊 Ringkasan</h5>
        </li>
        <li class="collection-item">Dana Kolektif: Rp 125.000.000,-</li>
        <li class="collection-item">Zakat & Sedekah Tersalurkan: Rp 31.250.000,-</li>
        <li class="collection-item">Donasi Terkini: Rp 500.000,- dari user #G147</li>
        <li class="collection-item">Jumlah Rekening Aktif: 932</li>
    </ul>

    <a href="{{ route('laporan-tahunan') }}" class="btn blue darken-2 mb-40">
        Lihat Laporan Tahunan
    </a>


@endsection
