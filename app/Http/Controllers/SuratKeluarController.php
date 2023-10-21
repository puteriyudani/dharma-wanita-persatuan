<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        return view('admin.arsip.suratkeluar.index', compact('suratkeluarjan21', 'suratkeluarfeb21', 'suratkeluarmar21', 'suratkeluarapr21', 'suratkeluarmei21', 'suratkeluarjun21', 'suratkeluarjul21', 'suratkeluaragu21', 'suratkeluarsep21', 'suratkeluarokt21', 'suratkeluarnov21', 'suratkeluardes21',
        'suratkeluarjan22', 'suratkeluarfeb22', 'suratkeluarmar22', 'suratkeluarapr22', 'suratkeluarmei22', 'suratkeluarjun22', 'suratkeluarjul22', 'suratkeluaragu22', 'suratkeluarsep22', 'suratkeluarokt22', 'suratkeluarnov22', 'suratkeluardes22',
        'suratkeluarjan23', 'suratkeluarfeb23', 'suratkeluarmar23', 'suratkeluarapr23', 'suratkeluarmei23', 'suratkeluarjun23', 'suratkeluarjul23', 'suratkeluaragu23', 'suratkeluarsep23', 'suratkeluarokt23', 'suratkeluarnov23', 'suratkeluardes23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.suratkeluar.create');
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
    
        SuratKeluar::create($input);
    
        return redirect()->route('suratkeluar.index')
                        ->with('success','Surat Keluar created successfully.');
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
    public function edit(SuratKeluar $suratkeluar)
    {
        return view('admin.arsip.suratkeluar.edit',compact('suratkeluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKeluar $suratkeluar)
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
    
        $suratkeluar->update($input);
    
        return redirect()->route('suratkeluar.index')
                        ->with('success','Surat Keluar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKeluar $suratkeluar)
    {
        $suratkeluar->delete();
    
        return back()->with('success','Surat Keluar deleted successfully');
    }
}
