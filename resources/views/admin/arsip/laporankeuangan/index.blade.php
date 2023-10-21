@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Laporan Keuangan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('laporankeuangan.create') }}">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </a>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tahun</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Buku Arisan -->
                            <tr>
                                <td style="color: green">Buku Arisan</td>
                            </tr>
                            @foreach ($bukuarisan as $laporankeuangan)
                                <tr>
                                    <td>{{ $laporankeuangan->judul }}</td>
                                    <td>{{ $laporankeuangan->kategori }}</td>
                                    <td>{{ $laporankeuangan->tahun }}</td>
                                    <td>
                                        <embed src="{{ asset('/storage/file/' . $laporankeuangan->file) }}"
                                            type="application/pdf" width="400" height="300" />
                                    </td>
                                    <td>
                                        <form action="{{ route('laporankeuangan.destroy', $laporankeuangan->id) }}" method="POST">
                                            <a href="{{ route('laporankeuangan.edit', $laporankeuangan->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn mb-1" type="submit" style="color: red">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- Buku Kas -->
                            <tr>
                                <td style="color: green">Buku Kas</td>
                            </tr>
                            @foreach ($bukukas as $laporankeuangan)
                                <tr>
                                    <td>{{ $laporankeuangan->judul }}</td>
                                    <td>{{ $laporankeuangan->kategori }}</td>
                                    <td>{{ $laporankeuangan->tahun }}</td>
                                    <td>
                                        <embed src="{{ asset('/storage/file/' . $laporankeuangan->file) }}"
                                            type="application/pdf" width="400" height="300" />
                                    </td>
                                    <td>
                                        <form action="{{ route('laporankeuangan.destroy', $laporankeuangan->id) }}" method="POST">
                                            <a href="{{ route('laporankeuangan.edit', $laporankeuangan->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn mb-1" type="submit" style="color: red">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- Lainnya -->
                            <tr>
                                <td style="color: green">Lainnya</td>
                            </tr>
                            @foreach ($lainnya as $laporankeuangan)
                                <tr>
                                    <td>{{ $laporankeuangan->judul }}</td>
                                    <td>{{ $laporankeuangan->kategori }}</td>
                                    <td>{{ $laporankeuangan->tahun }}</td>
                                    <td>
                                        <a href="{{ asset('/storage/file/' . $laporankeuangan->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('laporankeuangan.destroy', $laporankeuangan->id) }}" method="POST">
                                            <a href="{{ route('laporankeuangan.edit', $laporankeuangan->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn mb-1" type="submit" style="color: red">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection
