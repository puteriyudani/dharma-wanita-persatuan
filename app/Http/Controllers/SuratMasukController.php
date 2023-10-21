<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        return view('admin.arsip.suratmasuk.index', compact('suratmasukjan20', 'suratmasukfeb20', 'suratmasukmar20', 'suratmasukapr20', 'suratmasukmei20', 'suratmasukjun20', 'suratmasukjul20', 'suratmasukagu20', 'suratmasuksep20', 'suratmasukokt20', 'suratmasuknov20', 'suratmasukdes20',
        'suratmasukjan21', 'suratmasukfeb21', 'suratmasukmar21', 'suratmasukapr21', 'suratmasukmei21', 'suratmasukjun21', 'suratmasukjul21', 'suratmasukagu21', 'suratmasuksep21', 'suratmasukokt21', 'suratmasuknov21', 'suratmasukdes21',
        'suratmasukjan22', 'suratmasukfeb22', 'suratmasukmar22', 'suratmasukapr22', 'suratmasukmei22', 'suratmasukjun22', 'suratmasukjul22', 'suratmasukagu22', 'suratmasuksep22', 'suratmasukokt22', 'suratmasuknov22', 'suratmasukdes22',
        'suratmasukjan23', 'suratmasukfeb23', 'suratmasukmar23', 'suratmasukapr23', 'suratmasukmei23', 'suratmasukjun23', 'suratmasukjul23', 'suratmasukagu23', 'suratmasuksep23', 'suratmasukokt23', 'suratmasuknov23', 'suratmasukdes23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.suratmasuk.create');
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
    
        SuratMasuk::create($input);
    
        return redirect()->route('suratmasuk.index')
                        ->with('success','Surat Masuk created successfully.');
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
    public function edit(SuratMasuk $suratmasuk)
    {
        return view('admin.arsip.suratmasuk.edit',compact('suratmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratMasuk $suratmasuk)
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
    
        $suratmasuk->update($input);
    
        return redirect()->route('suratmasuk.index')
                        ->with('success','Surat Masuk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratMasuk $suratmasuk)
    {
        $suratmasuk->delete();
    
        return back()->with('success','Surat Masuk deleted successfully');
    }
}
