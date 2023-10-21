@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Absensi Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Absensi</h2>
                </div>

                {{-- 2021 --}}
                <div class="tahun text-center">
                    <h3>2021</h3>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#jan21" role="tab" data-bs-toggle="tab">Januari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feb21" role="tab" data-bs-toggle="tab">Februari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mar21" role="tab" data-bs-toggle="tab">Maret</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apr21" role="tab" data-bs-toggle="tab">April</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mei21" role="tab" data-bs-toggle="tab">Mei</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jun21" role="tab" data-bs-toggle="tab">Juni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jul21" role="tab" data-bs-toggle="tab">Juli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agu21" role="tab" data-bs-toggle="tab">Agustus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sep21" role="tab" data-bs-toggle="tab">September</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#okt21" role="tab" data-bs-toggle="tab">Oktober</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nov21" role="tab" data-bs-toggle="tab">November</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#des21" role="tab" data-bs-toggle="tab">Desember</a>
                    </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- Januari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="jan21">

                        @foreach ($absensijan21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb21">

                        @foreach ($absensifeb21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar21">

                        @foreach ($absensimar21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr21">

                        @foreach ($absensiapr21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei21">

                        @foreach ($absensimei21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun21">

                        @foreach ($absensijun21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul21">

                        @foreach ($absensijul21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu21">

                        @foreach ($absensiagu21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep21">

                        @foreach ($absensisep21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt21">

                        @foreach ($absensiokt21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov21">

                        @foreach ($absensinov21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des21">

                        @foreach ($absensides21 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Desember -->

                </div>
                {{-- end 2021 --}}

                {{-- 2022 --}}
                <div class="tahun text-center">
                    <h3>2022</h3>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#jan22" role="tab" data-bs-toggle="tab">Januari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feb22" role="tab" data-bs-toggle="tab">Februari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mar22" role="tab" data-bs-toggle="tab">Maret</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apr22" role="tab" data-bs-toggle="tab">April</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mei22" role="tab" data-bs-toggle="tab">Mei</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jun22" role="tab" data-bs-toggle="tab">Juni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jul22" role="tab" data-bs-toggle="tab">Juli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agu22" role="tab" data-bs-toggle="tab">Agustus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sep22" role="tab" data-bs-toggle="tab">September</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#okt22" role="tab" data-bs-toggle="tab">Oktober</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nov22" role="tab" data-bs-toggle="tab">November</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#des22" role="tab" data-bs-toggle="tab">Desember</a>
                    </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- Januari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="jan22">

                        @foreach ($absensijan22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb22">

                        @foreach ($absensifeb22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar22">

                        @foreach ($absensimar22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr22">

                        @foreach ($absensiapr22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei22">

                        @foreach ($absensimei22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun22">

                        @foreach ($absensijun22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul22">

                        @foreach ($absensijul22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu22">

                        @foreach ($absensiagu22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep22">

                        @foreach ($absensisep22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt22">

                        @foreach ($absensiokt22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov22">

                        @foreach ($absensinov22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des22">

                        @foreach ($absensides22 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Desember -->

                </div>
                {{-- end 2022 --}}

                {{-- 2023 --}}
                <div class="tahun text-center">
                    <h3>2023</h3>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#jan23" role="tab" data-bs-toggle="tab">Januari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feb23" role="tab" data-bs-toggle="tab">Februari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mar23" role="tab" data-bs-toggle="tab">Maret</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apr23" role="tab" data-bs-toggle="tab">April</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mei23" role="tab" data-bs-toggle="tab">Mei</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jun23" role="tab" data-bs-toggle="tab">Juni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jul23" role="tab" data-bs-toggle="tab">Juli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agu23" role="tab" data-bs-toggle="tab">Agustus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sep23" role="tab" data-bs-toggle="tab">September</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#okt23" role="tab" data-bs-toggle="tab">Oktober</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nov23" role="tab" data-bs-toggle="tab">November</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#des23" role="tab" data-bs-toggle="tab">Desember</a>
                    </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- Januari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="jan23">

                        @foreach ($absensijan23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb23">

                        @foreach ($absensifeb23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar23">

                        @foreach ($absensimar23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr23">

                        @foreach ($absensiapr23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei23">

                        @foreach ($absensimei23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun23">

                        @foreach ($absensijun23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul23">

                        @foreach ($absensijul23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu23">

                        @foreach ($absensiagu23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep23">

                        @foreach ($absensisep23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt23">

                        @foreach ($absensiokt23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov23">

                        @foreach ($absensinov23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des23">

                        @foreach ($absensides23 as $absensi)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $absensi->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $absensi->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Desember -->

                </div>
                {{-- end 2023 --}}

            </div>

        </section>
        <!-- End Absensi Section -->

    </main>
@endsection
