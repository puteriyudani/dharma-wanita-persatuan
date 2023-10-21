<?php

namespace App\Http\Controllers;

use App\Models\UndanganKeluar;
use Illuminate\Http\Request;

class UndanganKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        return view('admin.arsip.undangankeluar.index', compact('undangankeluarjan20', 'undangankeluarfeb20', 'undangankeluarmar20', 'undangankeluarapr20', 'undangankeluarmei20', 'undangankeluarjun20', 'undangankeluarjul20', 'undangankeluaragu20', 'undangankeluarsep20', 'undangankeluarokt20', 'undangankeluarnov20', 'undangankeluardes20',
        'undangankeluarjan21', 'undangankeluarfeb21', 'undangankeluarmar21', 'undangankeluarapr21', 'undangankeluarmei21', 'undangankeluarjun21', 'undangankeluarjul21', 'undangankeluaragu21', 'undangankeluarsep21', 'undangankeluarokt21', 'undangankeluarnov21', 'undangankeluardes21',
        'undangankeluarjan22', 'undangankeluarfeb22', 'undangankeluarmar22', 'undangankeluarapr22', 'undangankeluarmei22', 'undangankeluarjun22', 'undangankeluarjul22', 'undangankeluaragu22', 'undangankeluarsep22', 'undangankeluarokt22', 'undangankeluarnov22', 'undangankeluardes22',
        'undangankeluarjan23', 'undangankeluarfeb23', 'undangankeluarmar23', 'undangankeluarapr23', 'undangankeluarmei23', 'undangankeluarjun23', 'undangankeluarjul23', 'undangankeluaragu23', 'undangankeluarsep23', 'undangankeluarokt23', 'undangankeluarnov23', 'undangankeluardes23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.undangankeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'file' => 'required|mimes:pdf,xlsx,csv,docx,doc|max:10000',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        UndanganKeluar::create($input);
    
        return redirect()->route('undangankeluar.index')
                        ->with('success','Undangan Keluar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UndanganKeluar $undangankeluar)
    {
        return view('admin.arsip.undangankeluar.edit',compact('undangankeluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UndanganKeluar $undangankeluar)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'file' => 'required|mimes:pdf,xlsx,csv,docx,doc|max:10000',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        $undangankeluar->update($input);
    
        return redirect()->route('undangankeluar.index')
                        ->with('success','Undangan Keluar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UndanganKeluar $undangankeluar)
    {
        $undangankeluar->delete();
    
        return back()->with('success','Undangan Keluar deleted successfully');
    }
}
