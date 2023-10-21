@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Undangan Keluar</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('undangankeluar.create') }}">
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
                                @foreach ($undangankeluarjan20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarfeb20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmar20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarapr20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmei20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjun20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjul20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluaragu20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarsep20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarokt20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarnov20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluardes20 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjan21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarfeb21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmar21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarapr21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmei21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjun21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjul21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluaragu21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarsep21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarokt21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarnov21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluardes21 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjan22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarfeb22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmar22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarapr22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmei22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjun22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjul22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluaragu22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarsep22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarokt22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarnov22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluardes22 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjan23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf"/>
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarfeb23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmar23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarapr23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarmei23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjun23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarjul23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluaragu23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarsep23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarokt23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluarnov23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
                                @foreach ($undangankeluardes23 as $undangankeluar)
                                    <tr>
                                        <td>{{ $undangankeluar->judul }}</td>
                                        <td>{{ $undangankeluar->tanggal }}</td>
                                        <td>{{ $undangankeluar->bulan }}</td>
                                        <td>{{ $undangankeluar->tahun }}</td>
                                        <td>
                                            <embed src="{{ asset('/storage/file/' . $undangankeluar->file) }}"
                                                type="application/pdf" width="400" height="300" />
                                        </td>
                                        <td>
                                            <form action="{{ route('undangankeluar.destroy', $undangankeluar->id) }}"
                                                method="POST">
                                                <a href="{{ route('undangankeluar.edit', $undangankeluar->id) }}"
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
