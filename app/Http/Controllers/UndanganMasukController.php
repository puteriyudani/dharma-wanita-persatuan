<?php

namespace App\Http\Controllers;

use App\Models\UndanganMasuk;
use Illuminate\Http\Request;

class UndanganMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        return view('admin.arsip.undanganmasuk.index', compact('undanganmasukjan20', 'undanganmasukfeb20', 'undanganmasukmar20', 'undanganmasukapr20', 'undanganmasukmei20', 'undanganmasukjun20', 'undanganmasukjul20', 'undanganmasukagu20', 'undanganmasuksep20', 'undanganmasukokt20', 'undanganmasuknov20', 'undanganmasukdes20',
        'undanganmasukjan21', 'undanganmasukfeb21', 'undanganmasukmar21', 'undanganmasukapr21', 'undanganmasukmei21', 'undanganmasukjun21', 'undanganmasukjul21', 'undanganmasukagu21', 'undanganmasuksep21', 'undanganmasukokt21', 'undanganmasuknov21', 'undanganmasukdes21',
        'undanganmasukjan22', 'undanganmasukfeb22', 'undanganmasukmar22', 'undanganmasukapr22', 'undanganmasukmei22', 'undanganmasukjun22', 'undanganmasukjul22', 'undanganmasukagu22', 'undanganmasuksep22', 'undanganmasukokt22', 'undanganmasuknov22', 'undanganmasukdes22',
        'undanganmasukjan23', 'undanganmasukfeb23', 'undanganmasukmar23', 'undanganmasukapr23', 'undanganmasukmei23', 'undanganmasukjun23', 'undanganmasukjul23', 'undanganmasukagu23', 'undanganmasuksep23', 'undanganmasukokt23', 'undanganmasuknov23', 'undanganmasukdes23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.undanganmasuk.create');
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
    
        UndanganMasuk::create($input);
    
        return redirect()->route('undanganmasuk.index')
                        ->with('success','Undangan Masuk created successfully.');
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
    public function edit(UndanganMasuk $undanganmasuk)
    {
        return view('admin.arsip.undanganmasuk.edit',compact('undanganmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UndanganMasuk $undanganmasuk)
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
    
        $undanganmasuk->update($input);
    
        return redirect()->route('undanganmasuk.index')
                        ->with('success','Undangan Masuk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UndanganMasuk $undanganmasuk)
    {
        $undanganmasuk->delete();
    
        return back()->with('success','Undangan Masuk deleted successfully');
    }
}
