@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Absensi</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('absensi.create') }}">
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
                                @foreach ($absensijan21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensifeb21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensimar21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiapr21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensimei21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijun21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijul21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiagu21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensisep21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiokt21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensinov21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensides21 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijan22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensifeb22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensimar22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiapr22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensimei22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijun22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijul22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiagu22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensisep22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiokt22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensinov22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensides22 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijan23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf"/>
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensifeb23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensimar23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiapr23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensimei23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijun23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensijul23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiagu23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensisep23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensiokt23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensinov23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
                                @foreach ($absensides23 as $absensi)
                                    <tr>
                                        <td>{{ $absensi->judul }}</td>
                                        <td>{{ $absensi->tanggal }}</td>
                                        <td>{{ $absensi->bulan }}</td>
                                        <td>{{ $absensi->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('absensi.destroy', $absensi->id) }}"
                                                method="POST">
                                                <a href="{{ route('absensi.edit', $absensi->id) }}"
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
