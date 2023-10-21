@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Surat Masuk</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('suratmasuk.create') }}">
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
                                @foreach ($suratmasukjan20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukfeb20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmar20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukapr20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmei20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjun20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjul20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukagu20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuksep20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukokt20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuknov20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukdes20 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjan21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukfeb21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmar21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukapr21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmei21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjun21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjul21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukagu21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuksep21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukokt21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuknov21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukdes21 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjan22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukfeb22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmar22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukapr22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmei22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjun22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjul22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukagu22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuksep22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukokt22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuknov22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukdes22 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjan23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf"/>
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukfeb23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmar23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukapr23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukmei23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjun23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukjul23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukagu23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuksep23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukokt23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasuknov23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
                                @foreach ($suratmasukdes23 as $suratmasuk)
                                    <tr>
                                        <td>{{ $suratmasuk->judul }}</td>
                                        <td>{{ $suratmasuk->tanggal }}</td>
                                        <td>{{ $suratmasuk->bulan }}</td>
                                        <td>{{ $suratmasuk->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratmasuk.destroy', $suratmasuk->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratmasuk.edit', $suratmasuk->id) }}"
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
