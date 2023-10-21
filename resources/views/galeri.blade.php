@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Galeri Section ======= -->
        <section id="galeri" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Galeri</h2>
                </div>

                <div class="row portfolio-container">

                    {{-- 2019 --}}
                    <div class="tahun text-center">
                        <h3>2019</h3>
                    </div>
                    @foreach ($galeri19 as $galeri)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $galeri->judul }}</h4>
                                    <p>{{ $galeri->tahun }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- 2020 --}}
                    <div class="tahun text-center">
                        <h3>2020</h3>
                    </div>
                    @foreach ($galeri20 as $galeri)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $galeri->judul }}</h4>
                                    <p>{{ $galeri->tahun }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- 2021 --}}
                    <div class="tahun text-center">
                        <h3>2021</h3>
                    </div>
                    @foreach ($galeri21 as $galeri)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $galeri->judul }}</h4>
                                    <p>{{ $galeri->tahun }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- 2022 --}}
                    <div class="tahun text-center">
                        <h3>2022</h3>
                    </div>
                    @foreach ($galeri22 as $galeri)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $galeri->judul }}</h4>
                                    <p>{{ $galeri->tahun }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- 2023 --}}
                    <div class="tahun text-center">
                        <h3>2023</h3>
                    </div>
                    @foreach ($galeri23 as $galeri)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/storage/images/' . $galeri->image) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $galeri->judul }}</h4>
                                    <p>{{ $galeri->tahun }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Galeri Section -->

    </main>
@endsection
