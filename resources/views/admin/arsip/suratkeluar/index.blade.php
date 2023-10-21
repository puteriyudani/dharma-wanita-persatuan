@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Surat Keluar</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('suratkeluar.create') }}">
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
                                @foreach ($suratkeluarjan21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarfeb21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarmar21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarapr21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarmei21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjun21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjul21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluaragu21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarsep21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarokt21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarnov21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluardes21 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjan22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarfeb22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarmar22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarapr22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarmei22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjun22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjul22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluaragu22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarsep22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarokt22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarnov22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluardes22 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjan23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf"/>
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarfeb23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarmar23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarapr23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarmei23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjun23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarjul23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluaragu23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarsep23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarokt23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluarnov23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
                                @foreach ($suratkeluardes23 as $suratkeluar)
                                    <tr>
                                        <td>{{ $suratkeluar->judul }}</td>
                                        <td>{{ $suratkeluar->tanggal }}</td>
                                        <td>{{ $suratkeluar->bulan }}</td>
                                        <td>{{ $suratkeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $suratkeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('suratkeluar.destroy', $suratkeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('suratkeluar.edit', $suratkeluar->id) }}"
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
