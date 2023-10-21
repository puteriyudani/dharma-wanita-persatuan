@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Berita Acara</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('beritaacara.create') }}">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </a>
            </div>
            <div class="card-body">
                {{-- 2021 --}}
                <div class="tahun text-center">
                    <h3>2021</h3>
                </div>

                <div class="bulan">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Januari -->
                                <tr>
                                    <td style="color: green">Januari</td>
                                </tr>
                                @foreach ($beritaacarajan21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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
                                
                                <!-- Februari -->
                                <tr>
                                    <td style="color: green">Februari</td>
                                </tr>
                                @foreach ($beritaacarafeb21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Maret -->
                                <tr>
                                    <td style="color: green">Maret</td>
                                </tr>
                                @foreach ($beritaacaramar21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- April -->
                                <tr>
                                    <td style="color: green">April</td>
                                </tr>
                                @foreach ($beritaacaraapr21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Mei -->
                                <tr>
                                    <td style="color: green">Mei</td>
                                </tr>
                                @foreach ($beritaacaramei21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Juni -->
                                <tr>
                                    <td style="color: green">Juni</td>
                                </tr>
                                @foreach ($beritaacarajun21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Juli -->
                                <tr>
                                    <td style="color: green">Juli</td>
                                </tr>
                                @foreach ($beritaacarajul21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Agustus -->
                                <tr>
                                    <td style="color: green">Agustus</td>
                                </tr>
                                @foreach ($beritaacaraagu21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- September -->
                                <tr>
                                    <td style="color: green">September</td>
                                </tr>
                                @foreach ($beritaacarasep21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Oktober -->
                                <tr>
                                    <td style="color: green">Oktober</td>
                                </tr>
                                @foreach ($beritaacaraokt21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- November -->
                                <tr>
                                    <td style="color: green">November</td>
                                </tr>
                                @foreach ($beritaacaranov21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Desember -->
                                <tr>
                                    <td style="color: green">Desember</td>
                                </tr>
                                @foreach ($beritaacarades21 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                {{-- 2022 --}}
                <div class="tahun text-center">
                    <h3>2022</h3>
                </div>

                <div class="bulan">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Januari -->
                                <tr>
                                    <td style="color: green">Januari</td>
                                </tr>
                                @foreach ($beritaacarajan22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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
                                
                                <!-- Februari -->
                                <tr>
                                    <td style="color: green">Februari</td>
                                </tr>
                                @foreach ($beritaacarafeb22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Maret -->
                                <tr>
                                    <td style="color: green">Maret</td>
                                </tr>
                                @foreach ($beritaacaramar22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- April -->
                                <tr>
                                    <td style="color: green">April</td>
                                </tr>
                                @foreach ($beritaacaraapr22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Mei -->
                                <tr>
                                    <td style="color: green">Mei</td>
                                </tr>
                                @foreach ($beritaacaramei22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Juni -->
                                <tr>
                                    <td style="color: green">Juni</td>
                                </tr>
                                @foreach ($beritaacarajun22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Juli -->
                                <tr>
                                    <td style="color: green">Juli</td>
                                </tr>
                                @foreach ($beritaacarajul22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Agustus -->
                                <tr>
                                    <td style="color: green">Agustus</td>
                                </tr>
                                @foreach ($beritaacaraagu22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- September -->
                                <tr>
                                    <td style="color: green">September</td>
                                </tr>
                                @foreach ($beritaacarasep22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Oktober -->
                                <tr>
                                    <td style="color: green">Oktober</td>
                                </tr>
                                @foreach ($beritaacaraokt22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- November -->
                                <tr>
                                    <td style="color: green">November</td>
                                </tr>
                                @foreach ($beritaacaranov22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Desember -->
                                <tr>
                                    <td style="color: green">Desember</td>
                                </tr>
                                @foreach ($beritaacarades22 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                {{-- 2023 --}}
                <div class="tahun text-center">
                    <h3>2023</h3>
                </div>

                <div class="bulan">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Januari -->
                                <tr>
                                    <td style="color: green">Januari</td>
                                </tr>
                                @foreach ($beritaacarajan23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $beritaacara->file) }}"
                                                type="application/pdf"/>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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
                                
                                <!-- Februari -->
                                <tr>
                                    <td style="color: green">Februari</td>
                                </tr>
                                @foreach ($beritaacarafeb23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Maret -->
                                <tr>
                                    <td style="color: green">Maret</td>
                                </tr>
                                @foreach ($beritaacaramar23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- April -->
                                <tr>
                                    <td style="color: green">April</td>
                                </tr>
                                @foreach ($beritaacaraapr23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Mei -->
                                <tr>
                                    <td style="color: green">Mei</td>
                                </tr>
                                @foreach ($beritaacaramei23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Juni -->
                                <tr>
                                    <td style="color: green">Juni</td>
                                </tr>
                                @foreach ($beritaacarajun23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Juli -->
                                <tr>
                                    <td style="color: green">Juli</td>
                                </tr>
                                @foreach ($beritaacarajul23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Agustus -->
                                <tr>
                                    <td style="color: green">Agustus</td>
                                </tr>
                                @foreach ($beritaacaraagu23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- September -->
                                <tr>
                                    <td style="color: green">September</td>
                                </tr>
                                @foreach ($beritaacarasep23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Oktober -->
                                <tr>
                                    <td style="color: green">Oktober</td>
                                </tr>
                                @foreach ($beritaacaraokt23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- November -->
                                <tr>
                                    <td style="color: green">November</td>
                                </tr>
                                @foreach ($beritaacaranov23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

                                <!-- Desember -->
                                <tr>
                                    <td style="color: green">Desember</td>
                                </tr>
                                @foreach ($beritaacarades23 as $beritaacara)
                                    <tr>
                                        <td>{{ $beritaacara->judul }}</td>
                                        <td>{{ $beritaacara->tanggal }}</td>
                                        <td>{{ $beritaacara->bulan }}</td>
                                        <td>{{ $beritaacara->tahun }}</td>
                                        <td>
                                            <a href="{{ asset('/storage/file/' . $beritaacara->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('beritaacara.destroy', $beritaacara->id) }}"
                                                method="POST">
                                                <a href="{{ route('beritaacara.edit', $beritaacara->id) }}"
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

    </div>
@endsection
