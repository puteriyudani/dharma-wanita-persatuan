@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Arsip</h1>

        <a href="{{ route('suratkeluar.index') }}"><p>Surat Keluar</p></a>
        <a href="{{ route('suratmasuk.index') }}"><p>Surat Masuk</p></a>
        <a href="{{ route('undanganmasuk.index') }}"><p>Undangan Masuk</p></a>
        <a href="{{ route('undangankeluar.index') }}"><p>Undangan Keluar</p></a>
        <a href="{{ route('absensi.index') }}"><p>Absensi</p></a>
        <a href="{{ route('laporankeuangan.index') }}"><p>Laporan Keuangan</p></a>
        <a href="{{ route('suratkeputusan.index') }}"><p>Surat Keputusan</p></a>
        <a href="{{ route('suratperintahtugas.index') }}"><p>Surat Perintah Tugas</p></a>
        <a href="{{ route('beritaacara.index') }}"><p>Berita Acara</p></a>

    </div>
@endsection
