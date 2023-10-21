@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Program Kerja</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('programkerja.create') }}">
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
                            <!-- 2021 -->
                            <tr>
                                <td style="color: green">2021</td>
                            </tr>
                            @foreach ($programkerja21 as $programkerja)
                                <tr>
                                    <td>{{ $programkerja->judul }}</td>
                                    <td>{{ $programkerja->tahun }}</td>
                                    <td>
                                        <a href="{{ asset('/storage/file/' . $programkerja->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('programkerja.destroy', $programkerja->id) }}" method="POST">
                                            <a href="{{ route('programkerja.edit', $programkerja->id) }}"
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

                            <!-- 2022 -->
                            <tr>
                                <td style="color: green">2022</td>
                            </tr>
                            @foreach ($programkerja22 as $programkerja)
                                <tr>
                                    <td>{{ $programkerja->judul }}</td>
                                    <td>{{ $programkerja->tahun }}</td>
                                    <td>
                                        <a href="{{ asset('/storage/file/' . $programkerja->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('programkerja.destroy', $programkerja->id) }}" method="POST">
                                            <a href="{{ route('programkerja.edit', $programkerja->id) }}"
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
                            @foreach ($programkerja23 as $programkerja)
                                <tr>
                                    <td>{{ $programkerja->judul }}</td>
                                    <td>{{ $programkerja->tahun }}</td>
                                    <td>
                                        <a href="{{ asset('/storage/file/' . $programkerja->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('programkerja.destroy', $programkerja->id) }}" method="POST">
                                            <a href="{{ route('programkerja.edit', $programkerja->id) }}"
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

                            <!-- 2024 -->
                            <tr>
                                <td style="color: green">2024</td>
                            </tr>
                            @foreach ($programkerja24 as $programkerja)
                                <tr>
                                    <td>{{ $programkerja->judul }}</td>
                                    <td>{{ $programkerja->tahun }}</td>
                                    <td>
                                        <a href="{{ asset('/storage/file/' . $programkerja->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('programkerja.destroy', $programkerja->id) }}" method="POST">
                                            <a href="{{ route('programkerja.edit', $programkerja->id) }}"
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
