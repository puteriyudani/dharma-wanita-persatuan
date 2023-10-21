@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Berita Acara</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Content -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('beritaacara.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            aria-describedby="judulHelp">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal"
                            aria-describedby="tanggalHelp">
                    </div>
                    <div class="mb-3">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select id="bulan" name="bulan" class="form-select"
                            aria-label="Default select example">
                            <option selected>- Pilih -</option>
                            <option value="januari">Januari</option>
                            <option value="februari">Februari</option>
                            <option value="maret">Maret</option>
                            <option value="april">April</option>
                            <option value="mei">Mei</option>
                            <option value="juni">Juni</option>
                            <option value="juli">Juli</option>
                            <option value="agustus">Agustus</option>
                            <option value="september">September</option>
                            <option value="oktober">Oktober</option>
                            <option value="november">November</option>
                            <option value="desember">Desember</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <select id="tahun" name="tahun" class="form-select"
                            aria-label="Default select example">
                            <option selected>- Pilih -</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Pilih file:</label>
                        <input type="file" id="file" name="file"
                            class="form-control @error('file') is-invalid @enderror">

                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
