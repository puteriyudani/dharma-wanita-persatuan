@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Surat Perintah Tugas Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Surat Perintah Tugas</h2>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#2022" role="tab" data-bs-toggle="tab">2022</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#2023" role="tab" data-bs-toggle="tab">2023</a>
                    </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- 2022 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="2022">

                        @foreach ($suratperintahtugas22 as $suratperintahtugas)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratperintahtugas->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratperintahtugas->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End 2022 -->

                    <!-- 2023 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="2023">

                        @foreach ($suratperintahtugas23 as $suratperintahtugas)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratperintahtugas->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratperintahtugas->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End 2023 -->

                </div>
            </div>

        </section>
        <!-- End Surat Perintah Tugas Section -->

    </main>
@endsection
