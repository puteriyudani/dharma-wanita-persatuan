@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Surat Perintah Tugas</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('suratperintahtugas.create') }}">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </a>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 2022 -->
                            <tr>
                                <td style="color: green">2022</td>
                            </tr>
                            @foreach ($suratperintahtugas22 as $suratperintahtugas)
                                <tr>
                                    <td>{{ $suratperintahtugas->judul }}</td>
                                    <td>{{ $suratperintahtugas->tahun }}</td>
                                    <td>
                                        <embed src="{{ asset('/storage/file/' . $suratperintahtugas->file) }}"
                                            type="application/pdf" width="400" height="300" />
                                    </td>
                                    <td>
                                        <form action="{{ route('suratperintahtugas.destroy', $suratperintahtugas->id) }}" method="POST">
                                            <a href="{{ route('suratperintahtugas.edit', $suratperintahtugas->id) }}"
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

                            <!-- 2023 -->
                            <tr>
                                <td style="color: green">2023</td>
                            </tr>
                            @foreach ($suratperintahtugas23 as $suratperintahtugas)
                                <tr>
                                    <td>{{ $suratperintahtugas->judul }}</td>
                                    <td>{{ $suratperintahtugas->tahun }}</td>
                                    <td>
                                        <embed src="{{ asset('/storage/file/' . $suratperintahtugas->file) }}"
                                            type="application/pdf" width="400" height="300" />
                                    </td>
                                    <td>
                                        <form action="{{ route('suratperintahtugas.destroy', $suratperintahtugas->id) }}" method="POST">
                                            <a href="{{ route('suratperintahtugas.edit', $suratperintahtugas->id) }}"
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
