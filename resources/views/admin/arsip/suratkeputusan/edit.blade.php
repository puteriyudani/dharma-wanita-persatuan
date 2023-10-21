@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Surat Keputusan</h1>
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
                <form action="{{ route('suratkeputusan.update', $suratkeputusan->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            aria-describedby="judulHelp" value="{{ $suratkeputusan->judul }}">
                    </div>
                    <div class="mb-3">
                        <label for="periode" class="form-label">Periode</label>
                        <input type="text" class="form-control" id="periode" name="periode"
                            aria-describedby="periodeHelp" value="{{ $suratkeputusan->periode }}">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Pilih file:</label>
                        <input type="file" id="file" name="file">
                    </div>
                    <div class="mb-3">
                        <label for="currentFile" class="form-label">File saat ini:</label>
                        <input type="text" id="currentFile" name="currentFile" value="{{ $suratkeputusan->file }}" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
