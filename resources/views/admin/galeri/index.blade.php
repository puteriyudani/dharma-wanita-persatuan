@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Galeri</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('galeri.create') }}">
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
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 2019 -->
                            <tr>
                                <td style="color: green">2019</td>
                            </tr>
                            @foreach ($galeri19 as $galeri)
                                <tr>
                                    <td>{{ $galeri->judul }}</td>
                                    <td>{{ $galeri->tahun }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-thumbnail"
                                            style="width:200px" />
                                    </td>
                                    <td>
                                        <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                            <a href="{{ route('galeri.edit', $galeri->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn mb-1" type="submit" style="color: red">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- 2020 -->
                            <tr>
                                <td style="color: green">2020</td>
                            </tr>
                            @foreach ($galeri20 as $galeri)
                                <tr>
                                    <td>{{ $galeri->judul }}</td>
                                    <td>{{ $galeri->tahun }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-thumbnail"
                                            style="width:200px" />
                                    </td>
                                    <td>
                                        <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                            <a href="{{ route('galeri.edit', $galeri->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn mb-1" type="submit" style="color: red">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- 2021 -->
                            <tr>
                                <td style="color: green">2021</td>
                            </tr>
                            @foreach ($galeri21 as $galeri)
                                <tr>
                                    <td>{{ $galeri->judul }}</td>
                                    <td>{{ $galeri->tahun }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-thumbnail"
                                            style="width:200px" />
                                    </td>
                                    <td>
                                        <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                            <a href="{{ route('galeri.edit', $galeri->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

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
                            @foreach ($galeri22 as $galeri)
                                <tr>
                                    <td>{{ $galeri->judul }}</td>
                                    <td>{{ $galeri->tahun }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-thumbnail"
                                            style="width:200px" />
                                    </td>
                                    <td>
                                        <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                            <a href="{{ route('galeri.edit', $galeri->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

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
                            @foreach ($galeri23 as $galeri)
                                <tr>
                                    <td>{{ $galeri->judul }}</td>
                                    <td>{{ $galeri->tahun }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-thumbnail"
                                            style="width:200px" />
                                    </td>
                                    <td>
                                        <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                            <a href="{{ route('galeri.edit', $galeri->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

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
