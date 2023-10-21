@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Surat Keputusan Section ======= -->
        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Surat Keputusan</h2>
                </div>

                @foreach ($suratkeputusans as $suratkeputusan)
                    <div class="row schedule-item">
                        <div class="col-md-2">
                            <h4>{{ $suratkeputusan->judul }}</h4>
                            <p>{{ $suratkeputusan->periode }}</p>
                        </div>
                        <div class="col-md-10">
                            <embed src="{{ asset('/storage/file/' . $suratkeputusan->file) }}" type="application/pdf" />
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
        <!-- End Surat Keputusan Section -->

    </main>
@endsection
