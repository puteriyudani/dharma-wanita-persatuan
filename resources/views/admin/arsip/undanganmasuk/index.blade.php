@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Undangan Masuk</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('undanganmasuk.create') }}">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </a>
            </div>
            <div class="card-body">
                {{-- 2020 --}}
                <div class="tahun text-center">
                    <h3>2020</h3>
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
                                @foreach ($undanganmasukjan20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukfeb20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmar20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukapr20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmei20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjun20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjul20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukagu20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuksep20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukokt20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuknov20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukdes20 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjan21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukfeb21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmar21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukapr21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmei21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjun21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjul21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukagu21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuksep21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukokt21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuknov21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukdes21 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjan22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukfeb22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmar22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukapr22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmei22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjun22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjul22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukagu22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuksep22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukokt22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuknov22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukdes22 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjan23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf"/>
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukfeb23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmar23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukapr23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukmei23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjun23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukjul23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukagu23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuksep23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukokt23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasuknov23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
                                @foreach ($undanganmasukdes23 as $undanganmasuk)
                                    <tr>
                                        <td>{{ $undanganmasuk->judul }}</td>
                                        <td>{{ $undanganmasuk->tanggal }}</td>
                                        <td>{{ $undanganmasuk->bulan }}</td>
                                        <td>{{ $undanganmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undanganmasuk.destroy', $undanganmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('undanganmasuk.edit', $undanganmasuk->id) }}"
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
