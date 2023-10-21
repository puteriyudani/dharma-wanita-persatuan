@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Laporan Keuangan Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Laporan Keuangan</h2>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#bukuarisan" role="tab" data-bs-toggle="tab">Buku Arisan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bukukas" role="tab" data-bs-toggle="tab">Buku Kas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lainnya" role="tab" data-bs-toggle="tab">Lainnya</a>
                    </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- Buku Arisan -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="bukuarisan">

                        @foreach ($bukuarisan as $laporankeuangan)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $laporankeuangan->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $laporankeuangan->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Buku Arisan -->

                    <!-- Buku Kas -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="bukukas">

                        @foreach ($bukukas as $laporankeuangan)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $laporankeuangan->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $laporankeuangan->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Buku Kas -->

                    <!-- Lainnya -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="lainnya">

                        @foreach ($lainnya as $laporankeuangan)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $laporankeuangan->judul }}</h4></div>
                                <div class="col-md-10">
                                    <a href="{{ asset('/storage/file/' . $laporankeuangan->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Lainnya -->

                </div>
            </div>

        </section>
        <!-- End Laporan Keuangan Section -->

    </main>
@endsection
