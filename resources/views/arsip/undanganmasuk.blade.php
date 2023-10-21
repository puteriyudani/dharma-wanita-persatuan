@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Undangan Masuk Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Undangan Masuk</h2>
                </div>

                {{-- 2020 --}}
                <div class="tahun text-center">
                    <h3>2020</h3>
                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#jan20" role="tab" data-bs-toggle="tab">Januari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feb20" role="tab" data-bs-toggle="tab">Februari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mar20" role="tab" data-bs-toggle="tab">Maret</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apr20" role="tab" data-bs-toggle="tab">April</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mei20" role="tab" data-bs-toggle="tab">Mei</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jun20" role="tab" data-bs-toggle="tab">Juni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jul20" role="tab" data-bs-toggle="tab">Juli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agu20" role="tab" data-bs-toggle="tab">Agustus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sep20" role="tab" data-bs-toggle="tab">September</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#okt20" role="tab" data-bs-toggle="tab">Oktober</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nov20" role="tab" data-bs-toggle="tab">November</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#des20" role="tab" data-bs-toggle="tab">Desember</a>
                    </li>
                </ul>

                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- Januari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="jan20">

                        @foreach ($undanganmasukjan20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb20">

                        @foreach ($undanganmasukfeb20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar20">

                        @foreach ($undanganmasukmar20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr20">

                        @foreach ($undanganmasukapr20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei20">

                        @foreach ($undanganmasukmei20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun20">

                        @foreach ($undanganmasukjun20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul20">

                        @foreach ($undanganmasukjul20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu20">

                        @foreach ($undanganmasukagu20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep20">

                        @foreach ($undanganmasuksep20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt20">

                        @foreach ($undanganmasukokt20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov20">

                        @foreach ($undanganmasuknov20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des20">

                        @foreach ($undanganmasukdes20 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Desember -->

                </div>
                {{-- end 2020 --}}

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

                        @foreach ($undanganmasukjan21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb21">

                        @foreach ($undanganmasukfeb21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar21">

                        @foreach ($undanganmasukmar21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr21">

                        @foreach ($undanganmasukapr21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei21">

                        @foreach ($undanganmasukmei21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun21">

                        @foreach ($undanganmasukjun21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul21">

                        @foreach ($undanganmasukjul21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu21">

                        @foreach ($undanganmasukagu21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep21">

                        @foreach ($undanganmasuksep21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt21">

                        @foreach ($undanganmasukokt21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov21">

                        @foreach ($undanganmasuknov21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des21">

                        @foreach ($undanganmasukdes21 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
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

                        @foreach ($undanganmasukjan22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb22">

                        @foreach ($undanganmasukfeb22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar22">

                        @foreach ($undanganmasukmar22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr22">

                        @foreach ($undanganmasukapr22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei22">

                        @foreach ($undanganmasukmei22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun22">

                        @foreach ($undanganmasukjun22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul22">

                        @foreach ($undanganmasukjul22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu22">

                        @foreach ($undanganmasukagu22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep22">

                        @foreach ($undanganmasuksep22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt22">

                        @foreach ($undanganmasukokt22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov22">

                        @foreach ($undanganmasuknov22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des22">

                        @foreach ($undanganmasukdes22 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
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

                        @foreach ($undanganmasukjan23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb23">

                        @foreach ($undanganmasukfeb23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar23">

                        @foreach ($undanganmasukmar23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr23">

                        @foreach ($undanganmasukapr23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei23">

                        @foreach ($undanganmasukmei23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun23">

                        @foreach ($undanganmasukjun23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul23">

                        @foreach ($undanganmasukjul23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu23">

                        @foreach ($undanganmasukagu23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep23">

                        @foreach ($undanganmasuksep23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt23">

                        @foreach ($undanganmasukokt23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov23">

                        @foreach ($undanganmasuknov23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des23">

                        @foreach ($undanganmasukdes23 as $undanganmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $undanganmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $undanganmasuk->file) }}"
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
        <!-- End Undangan Masuk Section -->

    </main>
@endsection
