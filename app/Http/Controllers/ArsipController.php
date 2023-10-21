<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\UndanganKeluar;
use App\Models\UndanganMasuk;
use App\Models\Absensi;
use App\Models\LaporanKeuangan;
use App\Models\SuratKeputusan;
use App\Models\SuratPerintahTugas;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index() 
    {
        return view('arsip');
    }

    public function suratkeluar() 
    {
        //2021
        $suratkeluarjan21 = SuratKeluar::where('bulan', 'januari')->where('tahun', 2021)->get();
        $suratkeluarfeb21 = SuratKeluar::where('bulan', 'februari')->where('tahun', 2021)->get();
        $suratkeluarmar21 = SuratKeluar::where('bulan', 'maret')->where('tahun', 2021)->get();
        $suratkeluarapr21 = SuratKeluar::where('bulan', 'april')->where('tahun', 2021)->get();
        $suratkeluarmei21 = SuratKeluar::where('bulan', 'mei')->where('tahun', 2021)->get();
        $suratkeluarjun21 = SuratKeluar::where('bulan', 'juni')->where('tahun', 2021)->get();
        $suratkeluarjul21 = SuratKeluar::where('bulan', 'juli')->where('tahun', 2021)->get();
        $suratkeluaragu21 = SuratKeluar::where('bulan', 'agustus')->where('tahun', 2021)->get();
        $suratkeluarsep21 = SuratKeluar::where('bulan', 'september')->where('tahun', 2021)->get();
        $suratkeluarokt21 = SuratKeluar::where('bulan', 'oktober')->where('tahun', 2021)->get();
        $suratkeluarnov21 = SuratKeluar::where('bulan', 'november')->where('tahun', 2021)->get();
        $suratkeluardes21 = SuratKeluar::where('bulan', 'desember')->where('tahun', 2021)->get();

        //2022
        $suratkeluarjan22 = SuratKeluar::where('bulan', 'januari')->where('tahun', 2022)->get();
        $suratkeluarfeb22 = SuratKeluar::where('bulan', 'februari')->where('tahun', 2022)->get();
        $suratkeluarmar22 = SuratKeluar::where('bulan', 'maret')->where('tahun', 2022)->get();
        $suratkeluarapr22 = SuratKeluar::where('bulan', 'april')->where('tahun', 2022)->get();
        $suratkeluarmei22 = SuratKeluar::where('bulan', 'mei')->where('tahun', 2022)->get();
        $suratkeluarjun22 = SuratKeluar::where('bulan', 'juni')->where('tahun', 2022)->get();
        $suratkeluarjul22 = SuratKeluar::where('bulan', 'juli')->where('tahun', 2022)->get();
        $suratkeluaragu22 = SuratKeluar::where('bulan', 'agustus')->where('tahun', 2022)->get();
        $suratkeluarsep22 = SuratKeluar::where('bulan', 'september')->where('tahun', 2022)->get();
        $suratkeluarokt22 = SuratKeluar::where('bulan', 'oktober')->where('tahun', 2022)->get();
        $suratkeluarnov22 = SuratKeluar::where('bulan', 'november')->where('tahun', 2022)->get();
        $suratkeluardes22 = SuratKeluar::where('bulan', 'desember')->where('tahun', 2022)->get();

        //2023
        $suratkeluarjan23 = SuratKeluar::where('bulan', 'januari')->where('tahun', 2023)->get();
        $suratkeluarfeb23 = SuratKeluar::where('bulan', 'februari')->where('tahun', 2023)->get();
        $suratkeluarmar23 = SuratKeluar::where('bulan', 'maret')->where('tahun', 2023)->get();
        $suratkeluarapr23 = SuratKeluar::where('bulan', 'april')->where('tahun', 2023)->get();
        $suratkeluarmei23 = SuratKeluar::where('bulan', 'mei')->where('tahun', 2023)->get();
        $suratkeluarjun23 = SuratKeluar::where('bulan', 'juni')->where('tahun', 2023)->get();
        $suratkeluarjul23 = SuratKeluar::where('bulan', 'juli')->where('tahun', 2023)->get();
        $suratkeluaragu23 = SuratKeluar::where('bulan', 'agustus')->where('tahun', 2023)->get();
        $suratkeluarsep23 = SuratKeluar::where('bulan', 'september')->where('tahun', 2023)->get();
        $suratkeluarokt23 = SuratKeluar::where('bulan', 'oktober')->where('tahun', 2023)->get();
        $suratkeluarnov23 = SuratKeluar::where('bulan', 'november')->where('tahun', 2023)->get();
        $suratkeluardes23 = SuratKeluar::where('bulan', 'desember')->where('tahun', 2023)->get();
        return view('arsip.suratkeluar', compact('suratkeluarjan21', 'suratkeluarfeb21', 'suratkeluarmar21', 'suratkeluarapr21', 'suratkeluarmei21', 'suratkeluarjun21', 'suratkeluarjul21', 'suratkeluaragu21', 'suratkeluarsep21', 'suratkeluarokt21', 'suratkeluarnov21', 'suratkeluardes21',
        'suratkeluarjan22', 'suratkeluarfeb22', 'suratkeluarmar22', 'suratkeluarapr22', 'suratkeluarmei22', 'suratkeluarjun22', 'suratkeluarjul22', 'suratkeluaragu22', 'suratkeluarsep22', 'suratkeluarokt22', 'suratkeluarnov22', 'suratkeluardes22',
        'suratkeluarjan23', 'suratkeluarfeb23', 'suratkeluarmar23', 'suratkeluarapr23', 'suratkeluarmei23', 'suratkeluarjun23', 'suratkeluarjul23', 'suratkeluaragu23', 'suratkeluarsep23', 'suratkeluarokt23', 'suratkeluarnov23', 'suratkeluardes23'));
    }

    public function suratmasuk() 
    {
        //2020
        $suratmasukjan20 = SuratMasuk::where('bulan', 'januari')->where('tahun', 2020)->get();
        $suratmasukfeb20 = SuratMasuk::where('bulan', 'februari')->where('tahun', 2020)->get();
        $suratmasukmar20 = SuratMasuk::where('bulan', 'maret')->where('tahun', 2020)->get();
        $suratmasukapr20 = SuratMasuk::where('bulan', 'april')->where('tahun', 2020)->get();
        $suratmasukmei20 = SuratMasuk::where('bulan', 'mei')->where('tahun', 2020)->get();
        $suratmasukjun20 = SuratMasuk::where('bulan', 'juni')->where('tahun', 2020)->get();
        $suratmasukjul20 = SuratMasuk::where('bulan', 'juli')->where('tahun', 2020)->get();
        $suratmasukagu20 = SuratMasuk::where('bulan', 'agustus')->where('tahun', 2020)->get();
        $suratmasuksep20 = SuratMasuk::where('bulan', 'september')->where('tahun', 2020)->get();
        $suratmasukokt20 = SuratMasuk::where('bulan', 'oktober')->where('tahun', 2020)->get();
        $suratmasuknov20 = SuratMasuk::where('bulan', 'november')->where('tahun', 2020)->get();
        $suratmasukdes20 = SuratMasuk::where('bulan', 'desember')->where('tahun', 2020)->get();

        //2021
        $suratmasukjan21 = SuratMasuk::where('bulan', 'januari')->where('tahun', 2021)->get();
        $suratmasukfeb21 = SuratMasuk::where('bulan', 'februari')->where('tahun', 2021)->get();
        $suratmasukmar21 = SuratMasuk::where('bulan', 'maret')->where('tahun', 2021)->get();
        $suratmasukapr21 = SuratMasuk::where('bulan', 'april')->where('tahun', 2021)->get();
        $suratmasukmei21 = SuratMasuk::where('bulan', 'mei')->where('tahun', 2021)->get();
        $suratmasukjun21 = SuratMasuk::where('bulan', 'juni')->where('tahun', 2021)->get();
        $suratmasukjul21 = SuratMasuk::where('bulan', 'juli')->where('tahun', 2021)->get();
        $suratmasukagu21 = SuratMasuk::where('bulan', 'agustus')->where('tahun', 2021)->get();
        $suratmasuksep21 = SuratMasuk::where('bulan', 'september')->where('tahun', 2021)->get();
        $suratmasukokt21 = SuratMasuk::where('bulan', 'oktober')->where('tahun', 2021)->get();
        $suratmasuknov21 = SuratMasuk::where('bulan', 'november')->where('tahun', 2021)->get();
        $suratmasukdes21 = SuratMasuk::where('bulan', 'desember')->where('tahun', 2021)->get();

        //2022
        $suratmasukjan22 = SuratMasuk::where('bulan', 'januari')->where('tahun', 2022)->get();
        $suratmasukfeb22 = SuratMasuk::where('bulan', 'februari')->where('tahun', 2022)->get();
        $suratmasukmar22 = SuratMasuk::where('bulan', 'maret')->where('tahun', 2022)->get();
        $suratmasukapr22 = SuratMasuk::where('bulan', 'april')->where('tahun', 2022)->get();
        $suratmasukmei22 = SuratMasuk::where('bulan', 'mei')->where('tahun', 2022)->get();
        $suratmasukjun22 = SuratMasuk::where('bulan', 'juni')->where('tahun', 2022)->get();
        $suratmasukjul22 = SuratMasuk::where('bulan', 'juli')->where('tahun', 2022)->get();
        $suratmasukagu22 = SuratMasuk::where('bulan', 'agustus')->where('tahun', 2022)->get();
        $suratmasuksep22 = SuratMasuk::where('bulan', 'september')->where('tahun', 2022)->get();
        $suratmasukokt22 = SuratMasuk::where('bulan', 'oktober')->where('tahun', 2022)->get();
        $suratmasuknov22 = SuratMasuk::where('bulan', 'november')->where('tahun', 2022)->get();
        $suratmasukdes22 = SuratMasuk::where('bulan', 'desember')->where('tahun', 2022)->get();

        //2023
        $suratmasukjan23 = SuratMasuk::where('bulan', 'januari')->where('tahun', 2023)->get();
        $suratmasukfeb23 = SuratMasuk::where('bulan', 'februari')->where('tahun', 2023)->get();
        $suratmasukmar23 = SuratMasuk::where('bulan', 'maret')->where('tahun', 2023)->get();
        $suratmasukapr23 = SuratMasuk::where('bulan', 'april')->where('tahun', 2023)->get();
        $suratmasukmei23 = SuratMasuk::where('bulan', 'mei')->where('tahun', 2023)->get();
        $suratmasukjun23 = SuratMasuk::where('bulan', 'juni')->where('tahun', 2023)->get();
        $suratmasukjul23 = SuratMasuk::where('bulan', 'juli')->where('tahun', 2023)->get();
        $suratmasukagu23 = SuratMasuk::where('bulan', 'agustus')->where('tahun', 2023)->get();
        $suratmasuksep23 = SuratMasuk::where('bulan', 'september')->where('tahun', 2023)->get();
        $suratmasukokt23 = SuratMasuk::where('bulan', 'oktober')->where('tahun', 2023)->get();
        $suratmasuknov23 = SuratMasuk::where('bulan', 'november')->where('tahun', 2023)->get();
        $suratmasukdes23 = SuratMasuk::where('bulan', 'desember')->where('tahun', 2023)->get();
        return view('arsip.suratmasuk', compact('suratmasukjan20', 'suratmasukfeb20', 'suratmasukmar20', 'suratmasukapr20', 'suratmasukmei20', 'suratmasukjun20', 'suratmasukjul20', 'suratmasukagu20', 'suratmasuksep20', 'suratmasukokt20', 'suratmasuknov20', 'suratmasukdes20',
        'suratmasukjan21', 'suratmasukfeb21', 'suratmasukmar21', 'suratmasukapr21', 'suratmasukmei21', 'suratmasukjun21', 'suratmasukjul21', 'suratmasukagu21', 'suratmasuksep21', 'suratmasukokt21', 'suratmasuknov21', 'suratmasukdes21',
        'suratmasukjan22', 'suratmasukfeb22', 'suratmasukmar22', 'suratmasukapr22', 'suratmasukmei22', 'suratmasukjun22', 'suratmasukjul22', 'suratmasukagu22', 'suratmasuksep22', 'suratmasukokt22', 'suratmasuknov22', 'suratmasukdes22',
        'suratmasukjan23', 'suratmasukfeb23', 'suratmasukmar23', 'suratmasukapr23', 'suratmasukmei23', 'suratmasukjun23', 'suratmasukjul23', 'suratmasukagu23', 'suratmasuksep23', 'suratmasukokt23', 'suratmasuknov23', 'suratmasukdes23'));
    }

    public function undangankeluar() 
    {
        //2020
        $undangankeluarjan20 = UndanganKeluar::where('bulan', 'januari')->where('tahun', 2020)->get();
        $undangankeluarfeb20 = UndanganKeluar::where('bulan', 'februari')->where('tahun', 2020)->get();
        $undangankeluarmar20 = UndanganKeluar::where('bulan', 'maret')->where('tahun', 2020)->get();
        $undangankeluarapr20 = UndanganKeluar::where('bulan', 'april')->where('tahun', 2020)->get();
        $undangankeluarmei20 = UndanganKeluar::where('bulan', 'mei')->where('tahun', 2020)->get();
        $undangankeluarjun20 = UndanganKeluar::where('bulan', 'juni')->where('tahun', 2020)->get();
        $undangankeluarjul20 = UndanganKeluar::where('bulan', 'juli')->where('tahun', 2020)->get();
        $undangankeluaragu20 = UndanganKeluar::where('bulan', 'agustus')->where('tahun', 2020)->get();
        $undangankeluarsep20 = UndanganKeluar::where('bulan', 'september')->where('tahun', 2020)->get();
        $undangankeluarokt20 = UndanganKeluar::where('bulan', 'oktober')->where('tahun', 2020)->get();
        $undangankeluarnov20 = UndanganKeluar::where('bulan', 'november')->where('tahun', 2020)->get();
        $undangankeluardes20 = UndanganKeluar::where('bulan', 'desember')->where('tahun', 2020)->get();

        //2021
        $undangankeluarjan21 = UndanganKeluar::where('bulan', 'januari')->where('tahun', 2021)->get();
        $undangankeluarfeb21 = UndanganKeluar::where('bulan', 'februari')->where('tahun', 2021)->get();
        $undangankeluarmar21 = UndanganKeluar::where('bulan', 'maret')->where('tahun', 2021)->get();
        $undangankeluarapr21 = UndanganKeluar::where('bulan', 'april')->where('tahun', 2021)->get();
        $undangankeluarmei21 = UndanganKeluar::where('bulan', 'mei')->where('tahun', 2021)->get();
        $undangankeluarjun21 = UndanganKeluar::where('bulan', 'juni')->where('tahun', 2021)->get();
        $undangankeluarjul21 = UndanganKeluar::where('bulan', 'juli')->where('tahun', 2021)->get();
        $undangankeluaragu21 = UndanganKeluar::where('bulan', 'agustus')->where('tahun', 2021)->get();
        $undangankeluarsep21 = UndanganKeluar::where('bulan', 'september')->where('tahun', 2021)->get();
        $undangankeluarokt21 = UndanganKeluar::where('bulan', 'oktober')->where('tahun', 2021)->get();
        $undangankeluarnov21 = UndanganKeluar::where('bulan', 'november')->where('tahun', 2021)->get();
        $undangankeluardes21 = UndanganKeluar::where('bulan', 'desember')->where('tahun', 2021)->get();

        //2022
        $undangankeluarjan22 = UndanganKeluar::where('bulan', 'januari')->where('tahun', 2022)->get();
        $undangankeluarfeb22 = UndanganKeluar::where('bulan', 'februari')->where('tahun', 2022)->get();
        $undangankeluarmar22 = UndanganKeluar::where('bulan', 'maret')->where('tahun', 2022)->get();
        $undangankeluarapr22 = UndanganKeluar::where('bulan', 'april')->where('tahun', 2022)->get();
        $undangankeluarmei22 = UndanganKeluar::where('bulan', 'mei')->where('tahun', 2022)->get();
        $undangankeluarjun22 = UndanganKeluar::where('bulan', 'juni')->where('tahun', 2022)->get();
        $undangankeluarjul22 = UndanganKeluar::where('bulan', 'juli')->where('tahun', 2022)->get();
        $undangankeluaragu22 = UndanganKeluar::where('bulan', 'agustus')->where('tahun', 2022)->get();
        $undangankeluarsep22 = UndanganKeluar::where('bulan', 'september')->where('tahun', 2022)->get();
        $undangankeluarokt22 = UndanganKeluar::where('bulan', 'oktober')->where('tahun', 2022)->get();
        $undangankeluarnov22 = UndanganKeluar::where('bulan', 'november')->where('tahun', 2022)->get();
        $undangankeluardes22 = UndanganKeluar::where('bulan', 'desember')->where('tahun', 2022)->get();

        //2023
        $undangankeluarjan23 = UndanganKeluar::where('bulan', 'januari')->where('tahun', 2023)->get();
        $undangankeluarfeb23 = UndanganKeluar::where('bulan', 'februari')->where('tahun', 2023)->get();
        $undangankeluarmar23 = UndanganKeluar::where('bulan', 'maret')->where('tahun', 2023)->get();
        $undangankeluarapr23 = UndanganKeluar::where('bulan', 'april')->where('tahun', 2023)->get();
        $undangankeluarmei23 = UndanganKeluar::where('bulan', 'mei')->where('tahun', 2023)->get();
        $undangankeluarjun23 = UndanganKeluar::where('bulan', 'juni')->where('tahun', 2023)->get();
        $undangankeluarjul23 = UndanganKeluar::where('bulan', 'juli')->where('tahun', 2023)->get();
        $undangankeluaragu23 = UndanganKeluar::where('bulan', 'agustus')->where('tahun', 2023)->get();
        $undangankeluarsep23 = UndanganKeluar::where('bulan', 'september')->where('tahun', 2023)->get();
        $undangankeluarokt23 = UndanganKeluar::where('bulan', 'oktober')->where('tahun', 2023)->get();
        $undangankeluarnov23 = UndanganKeluar::where('bulan', 'november')->where('tahun', 2023)->get();
        $undangankeluardes23 = UndanganKeluar::where('bulan', 'desember')->where('tahun', 2023)->get();
        return view('arsip.undangankeluar', compact('undangankeluarjan20', 'undangankeluarfeb20', 'undangankeluarmar20', 'undangankeluarapr20', 'undangankeluarmei20', 'undangankeluarjun20', 'undangankeluarjul20', 'undangankeluaragu20', 'undangankeluarsep20', 'undangankeluarokt20', 'undangankeluarnov20', 'undangankeluardes20',
        'undangankeluarjan21', 'undangankeluarfeb21', 'undangankeluarmar21', 'undangankeluarapr21', 'undangankeluarmei21', 'undangankeluarjun21', 'undangankeluarjul21', 'undangankeluaragu21', 'undangankeluarsep21', 'undangankeluarokt21', 'undangankeluarnov21', 'undangankeluardes21',
        'undangankeluarjan22', 'undangankeluarfeb22', 'undangankeluarmar22', 'undangankeluarapr22', 'undangankeluarmei22', 'undangankeluarjun22', 'undangankeluarjul22', 'undangankeluaragu22', 'undangankeluarsep22', 'undangankeluarokt22', 'undangankeluarnov22', 'undangankeluardes22',
        'undangankeluarjan23', 'undangankeluarfeb23', 'undangankeluarmar23', 'undangankeluarapr23', 'undangankeluarmei23', 'undangankeluarjun23', 'undangankeluarjul23', 'undangankeluaragu23', 'undangankeluarsep23', 'undangankeluarokt23', 'undangankeluarnov23', 'undangankeluardes23'));
    }

    public function undanganmasuk() 
    {
        //2020
        $undanganmasukjan20 = UndanganMasuk::where('bulan', 'januari')->where('tahun', 2020)->get();
        $undanganmasukfeb20 = UndanganMasuk::where('bulan', 'februari')->where('tahun', 2020)->get();
        $undanganmasukmar20 = UndanganMasuk::where('bulan', 'maret')->where('tahun', 2020)->get();
        $undanganmasukapr20 = UndanganMasuk::where('bulan', 'april')->where('tahun', 2020)->get();
        $undanganmasukmei20 = UndanganMasuk::where('bulan', 'mei')->where('tahun', 2020)->get();
        $undanganmasukjun20 = UndanganMasuk::where('bulan', 'juni')->where('tahun', 2020)->get();
        $undanganmasukjul20 = UndanganMasuk::where('bulan', 'juli')->where('tahun', 2020)->get();
        $undanganmasukagu20 = UndanganMasuk::where('bulan', 'agustus')->where('tahun', 2020)->get();
        $undanganmasuksep20 = UndanganMasuk::where('bulan', 'september')->where('tahun', 2020)->get();
        $undanganmasukokt20 = UndanganMasuk::where('bulan', 'oktober')->where('tahun', 2020)->get();
        $undanganmasuknov20 = UndanganMasuk::where('bulan', 'november')->where('tahun', 2020)->get();
        $undanganmasukdes20 = UndanganMasuk::where('bulan', 'desember')->where('tahun', 2020)->get();

        //2021
        $undanganmasukjan21 = UndanganMasuk::where('bulan', 'januari')->where('tahun', 2021)->get();
        $undanganmasukfeb21 = UndanganMasuk::where('bulan', 'februari')->where('tahun', 2021)->get();
        $undanganmasukmar21 = UndanganMasuk::where('bulan', 'maret')->where('tahun', 2021)->get();
        $undanganmasukapr21 = UndanganMasuk::where('bulan', 'april')->where('tahun', 2021)->get();
        $undanganmasukmei21 = UndanganMasuk::where('bulan', 'mei')->where('tahun', 2021)->get();
        $undanganmasukjun21 = UndanganMasuk::where('bulan', 'juni')->where('tahun', 2021)->get();
        $undanganmasukjul21 = UndanganMasuk::where('bulan', 'juli')->where('tahun', 2021)->get();
        $undanganmasukagu21 = UndanganMasuk::where('bulan', 'agustus')->where('tahun', 2021)->get();
        $undanganmasuksep21 = UndanganMasuk::where('bulan', 'september')->where('tahun', 2021)->get();
        $undanganmasukokt21 = UndanganMasuk::where('bulan', 'oktober')->where('tahun', 2021)->get();
        $undanganmasuknov21 = UndanganMasuk::where('bulan', 'november')->where('tahun', 2021)->get();
        $undanganmasukdes21 = UndanganMasuk::where('bulan', 'desember')->where('tahun', 2021)->get();

        //2022
        $undanganmasukjan22 = UndanganMasuk::where('bulan', 'januari')->where('tahun', 2022)->get();
        $undanganmasukfeb22 = UndanganMasuk::where('bulan', 'februari')->where('tahun', 2022)->get();
        $undanganmasukmar22 = UndanganMasuk::where('bulan', 'maret')->where('tahun', 2022)->get();
        $undanganmasukapr22 = UndanganMasuk::where('bulan', 'april')->where('tahun', 2022)->get();
        $undanganmasukmei22 = UndanganMasuk::where('bulan', 'mei')->where('tahun', 2022)->get();
        $undanganmasukjun22 = UndanganMasuk::where('bulan', 'juni')->where('tahun', 2022)->get();
        $undanganmasukjul22 = UndanganMasuk::where('bulan', 'juli')->where('tahun', 2022)->get();
        $undanganmasukagu22 = UndanganMasuk::where('bulan', 'agustus')->where('tahun', 2022)->get();
        $undanganmasuksep22 = UndanganMasuk::where('bulan', 'september')->where('tahun', 2022)->get();
        $undanganmasukokt22 = UndanganMasuk::where('bulan', 'oktober')->where('tahun', 2022)->get();
        $undanganmasuknov22 = UndanganMasuk::where('bulan', 'november')->where('tahun', 2022)->get();
        $undanganmasukdes22 = UndanganMasuk::where('bulan', 'desember')->where('tahun', 2022)->get();

        //2023
        $undanganmasukjan23 = UndanganMasuk::where('bulan', 'januari')->where('tahun', 2023)->get();
        $undanganmasukfeb23 = UndanganMasuk::where('bulan', 'februari')->where('tahun', 2023)->get();
        $undanganmasukmar23 = UndanganMasuk::where('bulan', 'maret')->where('tahun', 2023)->get();
        $undanganmasukapr23 = UndanganMasuk::where('bulan', 'april')->where('tahun', 2023)->get();
        $undanganmasukmei23 = UndanganMasuk::where('bulan', 'mei')->where('tahun', 2023)->get();
        $undanganmasukjun23 = UndanganMasuk::where('bulan', 'juni')->where('tahun', 2023)->get();
        $undanganmasukjul23 = UndanganMasuk::where('bulan', 'juli')->where('tahun', 2023)->get();
        $undanganmasukagu23 = UndanganMasuk::where('bulan', 'agustus')->where('tahun', 2023)->get();
        $undanganmasuksep23 = UndanganMasuk::where('bulan', 'september')->where('tahun', 2023)->get();
        $undanganmasukokt23 = UndanganMasuk::where('bulan', 'oktober')->where('tahun', 2023)->get();
        $undanganmasuknov23 = UndanganMasuk::where('bulan', 'november')->where('tahun', 2023)->get();
        $undanganmasukdes23 = UndanganMasuk::where('bulan', 'desember')->where('tahun', 2023)->get();
        return view('arsip.undanganmasuk', compact('undanganmasukjan20', 'undanganmasukfeb20', 'undanganmasukmar20', 'undanganmasukapr20', 'undanganmasukmei20', 'undanganmasukjun20', 'undanganmasukjul20', 'undanganmasukagu20', 'undanganmasuksep20', 'undanganmasukokt20', 'undanganmasuknov20', 'undanganmasukdes20',
        'undanganmasukjan21', 'undanganmasukfeb21', 'undanganmasukmar21', 'undanganmasukapr21', 'undanganmasukmei21', 'undanganmasukjun21', 'undanganmasukjul21', 'undanganmasukagu21', 'undanganmasuksep21', 'undanganmasukokt21', 'undanganmasuknov21', 'undanganmasukdes21',
        'undanganmasukjan22', 'undanganmasukfeb22', 'undanganmasukmar22', 'undanganmasukapr22', 'undanganmasukmei22', 'undanganmasukjun22', 'undanganmasukjul22', 'undanganmasukagu22', 'undanganmasuksep22', 'undanganmasukokt22', 'undanganmasuknov22', 'undanganmasukdes22',
        'undanganmasukjan23', 'undanganmasukfeb23', 'undanganmasukmar23', 'undanganmasukapr23', 'undanganmasukmei23', 'undanganmasukjun23', 'undanganmasukjul23', 'undanganmasukagu23', 'undanganmasuksep23', 'undanganmasukokt23', 'undanganmasuknov23', 'undanganmasukdes23'));
    }

    public function absensi() 
    {
        //2021
        $absensijan21 = Absensi::where('bulan', 'januari')->where('tahun', 2021)->get();
        $absensifeb21 = Absensi::where('bulan', 'februari')->where('tahun', 2021)->get();
        $absensimar21 = Absensi::where('bulan', 'maret')->where('tahun', 2021)->get();
        $absensiapr21 = Absensi::where('bulan', 'april')->where('tahun', 2021)->get();
        $absensimei21 = Absensi::where('bulan', 'mei')->where('tahun', 2021)->get();
        $absensijun21 = Absensi::where('bulan', 'juni')->where('tahun', 2021)->get();
        $absensijul21 = Absensi::where('bulan', 'juli')->where('tahun', 2021)->get();
        $absensiagu21 = Absensi::where('bulan', 'agustus')->where('tahun', 2021)->get();
        $absensisep21 = Absensi::where('bulan', 'september')->where('tahun', 2021)->get();
        $absensiokt21 = Absensi::where('bulan', 'oktober')->where('tahun', 2021)->get();
        $absensinov21 = Absensi::where('bulan', 'november')->where('tahun', 2021)->get();
        $absensides21 = Absensi::where('bulan', 'desember')->where('tahun', 2021)->get();

        //2022
        $absensijan22 = Absensi::where('bulan', 'januari')->where('tahun', 2022)->get();
        $absensifeb22 = Absensi::where('bulan', 'februari')->where('tahun', 2022)->get();
        $absensimar22 = Absensi::where('bulan', 'maret')->where('tahun', 2022)->get();
        $absensiapr22 = Absensi::where('bulan', 'april')->where('tahun', 2022)->get();
        $absensimei22 = Absensi::where('bulan', 'mei')->where('tahun', 2022)->get();
        $absensijun22 = Absensi::where('bulan', 'juni')->where('tahun', 2022)->get();
        $absensijul22 = Absensi::where('bulan', 'juli')->where('tahun', 2022)->get();
        $absensiagu22 = Absensi::where('bulan', 'agustus')->where('tahun', 2022)->get();
        $absensisep22 = Absensi::where('bulan', 'september')->where('tahun', 2022)->get();
        $absensiokt22 = Absensi::where('bulan', 'oktober')->where('tahun', 2022)->get();
        $absensinov22 = Absensi::where('bulan', 'november')->where('tahun', 2022)->get();
        $absensides22 = Absensi::where('bulan', 'desember')->where('tahun', 2022)->get();

        //2023
        $absensijan23 = Absensi::where('bulan', 'januari')->where('tahun', 2023)->get();
        $absensifeb23 = Absensi::where('bulan', 'februari')->where('tahun', 2023)->get();
        $absensimar23 = Absensi::where('bulan', 'maret')->where('tahun', 2023)->get();
        $absensiapr23 = Absensi::where('bulan', 'april')->where('tahun', 2023)->get();
        $absensimei23 = Absensi::where('bulan', 'mei')->where('tahun', 2023)->get();
        $absensijun23 = Absensi::where('bulan', 'juni')->where('tahun', 2023)->get();
        $absensijul23 = Absensi::where('bulan', 'juli')->where('tahun', 2023)->get();
        $absensiagu23 = Absensi::where('bulan', 'agustus')->where('tahun', 2023)->get();
        $absensisep23 = Absensi::where('bulan', 'september')->where('tahun', 2023)->get();
        $absensiokt23 = Absensi::where('bulan', 'oktober')->where('tahun', 2023)->get();
        $absensinov23 = Absensi::where('bulan', 'november')->where('tahun', 2023)->get();
        $absensides23 = Absensi::where('bulan', 'desember')->where('tahun', 2023)->get();
        return view('arsip.absensi', compact('absensijan21', 'absensifeb21', 'absensimar21', 'absensiapr21', 'absensimei21', 'absensijun21', 'absensijul21', 'absensiagu21', 'absensisep21', 'absensiokt21', 'absensinov21', 'absensides21',
        'absensijan22', 'absensifeb22', 'absensimar22', 'absensiapr22', 'absensimei22', 'absensijun22', 'absensijul22', 'absensiagu22', 'absensisep22', 'absensiokt22', 'absensinov22', 'absensides22',
        'absensijan23', 'absensifeb23', 'absensimar23', 'absensiapr23', 'absensimei23', 'absensijun23', 'absensijul23', 'absensiagu23', 'absensisep23', 'absensiokt23', 'absensinov23', 'absensides23'));
    }

    public function laporankeuangan() 
    {
        $bukuarisan = LaporanKeuangan::where('kategori', 'bukuarisan')->get();
        $bukukas = LaporanKeuangan::where('kategori', 'bukukas')->get();
        $lainnya = LaporanKeuangan::where('kategori', 'lainnya')->get();

        return view('arsip.laporankeuangan',compact('bukuarisan', 'bukukas', 'lainnya'));
    }

    public function profilanggota() 
    {
        return view('arsip.profilanggota');
    }

    public function suratkeputusan() 
    {
        $suratkeputusans = SuratKeputusan::get();
        return view('arsip.suratkeputusan', compact('suratkeputusans'));
    }

    public function suratperintahtugas() 
    {
        $suratperintahtugas22 = SuratPerintahTugas::where('tahun', '2022')->get();
        $suratperintahtugas23 = SuratPerintahTugas::where('tahun', '2023')->get();

        return view('arsip.suratperintahtugas',compact('suratperintahtugas22', 'suratperintahtugas23'));
    }
}
