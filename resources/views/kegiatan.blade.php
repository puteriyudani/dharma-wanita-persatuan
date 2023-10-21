@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Kegiatan Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Kegiatan</h2>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#2021" role="tab" data-bs-toggle="tab">2021</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#2022" role="tab" data-bs-toggle="tab">2022</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#2023" role="tab" data-bs-toggle="tab">2023</a>
                    </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- 2021 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="2021">

                        @foreach ($kegiatan21 as $kegiatan)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $kegiatan->judul }}</h4></div>
                                <div class="col-md-10">
                                    <a href="{{ asset('/storage/file/' . $kegiatan->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End 2021 -->

                    <!-- 2022 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="2022">

                        @foreach ($kegiatan22 as $kegiatan)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $kegiatan->judul }}</h4></div>
                                <div class="col-md-10">
                                    <a href="{{ asset('/storage/file/' . $kegiatan->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End 2022 -->

                    <!-- 2023 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="2023">

                        @foreach ($kegiatan23 as $kegiatan)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $kegiatan->judul }}</h4></div>
                                <div class="col-md-10">
                                    <a href="{{ asset('/storage/file/' . $kegiatan->file) }}" target="_blank">Unduh File (XLSX/DOCX)</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End 2023 -->

                </div>
            </div>

        </section>
        <!-- End Kegiatan Section -->

    </main>
@endsection
