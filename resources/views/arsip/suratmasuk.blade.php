@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Surat Masuk Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Surat Masuk</h2>
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

                        @foreach ($suratmasukjan20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb20">

                        @foreach ($suratmasukfeb20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar20">

                        @foreach ($suratmasukmar20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr20">

                        @foreach ($suratmasukapr20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei20">

                        @foreach ($suratmasukmei20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun20">

                        @foreach ($suratmasukjun20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul20">

                        @foreach ($suratmasukjul20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu20">

                        @foreach ($suratmasukagu20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep20">

                        @foreach ($suratmasuksep20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt20">

                        @foreach ($suratmasukokt20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov20">

                        @foreach ($suratmasuknov20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des20">

                        @foreach ($suratmasukdes20 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
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

                        @foreach ($suratmasukjan21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb21">

                        @foreach ($suratmasukfeb21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar21">

                        @foreach ($suratmasukmar21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr21">

                        @foreach ($suratmasukapr21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei21">

                        @foreach ($suratmasukmei21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun21">

                        @foreach ($suratmasukjun21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul21">

                        @foreach ($suratmasukjul21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu21">

                        @foreach ($suratmasukagu21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep21">

                        @foreach ($suratmasuksep21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt21">

                        @foreach ($suratmasukokt21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov21">

                        @foreach ($suratmasuknov21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des21">

                        @foreach ($suratmasukdes21 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
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

                        @foreach ($suratmasukjan22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb22">

                        @foreach ($suratmasukfeb22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar22">

                        @foreach ($suratmasukmar22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr22">

                        @foreach ($suratmasukapr22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei22">

                        @foreach ($suratmasukmei22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun22">

                        @foreach ($suratmasukjun22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul22">

                        @foreach ($suratmasukjul22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu22">

                        @foreach ($suratmasukagu22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep22">

                        @foreach ($suratmasuksep22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt22">

                        @foreach ($suratmasukokt22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov22">

                        @foreach ($suratmasuknov22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des22">

                        @foreach ($suratmasukdes22 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
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

                        @foreach ($suratmasukjan23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Januari -->

                    <!-- Februari -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="feb23">

                        @foreach ($suratmasukfeb23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Februari -->

                    <!-- Maret -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mar23">

                        @foreach ($suratmasukmar23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Maret -->

                    <!-- April -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="apr23">

                        @foreach ($suratmasukapr23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End April -->

                    <!-- Mei -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="mei23">

                        @foreach ($suratmasukmei23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Mei -->

                    <!-- Juni -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jun23">

                        @foreach ($suratmasukjun23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juni -->

                    <!-- Juli -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="jul23">

                        @foreach ($suratmasukjul23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Juli -->

                    <!-- Agustus -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="agu23">

                        @foreach ($suratmasukagu23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Agustus -->

                    <!-- September -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="sep23">

                        @foreach ($suratmasuksep23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End September -->

                    <!-- Oktober -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="okt23">

                        @foreach ($suratmasukokt23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End Oktober -->

                    <!-- November -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="nov23">

                        @foreach ($suratmasuknov23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
                                        type="application/pdf"/>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End November -->

                    <!-- Desember -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="des23">

                        @foreach ($suratmasukdes23 as $suratmasuk)
                            <div class="row schedule-item">
                                <div class="col-md-2"><h4>{{ $suratmasuk->judul }}</h4></div>
                                <div class="col-md-10">
                                    <embed src="{{ asset('/storage/file/' . $suratmasuk->file) }}"
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
        <!-- End Surat Masuk Section -->

    </main>
@endsection
