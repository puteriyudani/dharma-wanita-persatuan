@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Laporan Keuangan</h1>
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
                <form action="{{ route('laporankeuangan.update', $laporankeuangan->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            aria-describedby="judulHelp" value="{{ $laporankeuangan->judul }}">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select id="kategori" name="kategori" class="form-select"
                            aria-label="Default select example">
                            <option value="{{ $laporankeuangan->kategori }}" selected>{{ $laporankeuangan->kategori }}</option>
                            <option value="bukuarisan">Buku Arisan</option>
                            <option value="bukukas">Buku Kas</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <select id="tahun" name="tahun" class="form-select" aria-label="Default select example">
                            <option value="{{ $laporankeuangan->tahun }}" selected>{{ $laporankeuangan->tahun }}</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Pilih file:</label>
                        <input type="file" id="file" name="file">
                    </div>
                    <div class="mb-3">
                        <label for="currentFile" class="form-label">File saat ini:</label>
                        <input type="text" id="currentFile" name="currentFile" value="{{ $laporankeuangan->file }}" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
