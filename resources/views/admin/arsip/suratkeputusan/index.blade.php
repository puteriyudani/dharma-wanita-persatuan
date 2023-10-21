@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Surat Keputusan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('suratkeputusan.create') }}">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </a>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Periode</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suratkeputusans as $suratkeputusan)
                                <tr>
                                    <td>{{ $suratkeputusan->judul }}</td>
                                    <td>{{ $suratkeputusan->periode }}</td>
                                    <td>
                                        <embed src="{{ asset('/storage/file/' . $suratkeputusan->file) }}"
                                            type="application/pdf" width="400" height="300" />
                                    </td>
                                    <td>
                                        <form action="{{ route('suratkeputusan.destroy', $suratkeputusan->id) }}" method="POST">
                                            <a href="{{ route('suratkeputusan.edit', $suratkeputusan->id) }}"
                                                style="text-decoration: none;">
                                                edit
                                            </a>

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
