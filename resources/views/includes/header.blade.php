<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="index.html">Green</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto"><img src="{{ asset('asset') }}/img/logo.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('programkerja.home') }}">Program Kerja</a></li>
                <li><a class="nav-link scrollto" href="{{ route('galeri.home') }}">Galeri</a></li>
                <li><a class="nav-link scrollto " href="{{ route('kegiatan.home') }}">Kegiatan</a></li>
                <li><a class="nav-link scrollto" href="{{ route('agenda') }}">Agenda</a></li>
                <li><a class="nav-link scrollto" href="{{ route('arsip') }}">Arsip</a></li>
                <li><a class="nav-link scrollto" href="{{ route('produk') }}">Produk</a></li>
                <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
