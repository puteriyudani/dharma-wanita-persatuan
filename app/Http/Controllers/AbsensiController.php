<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        return view('admin.arsip.absensi.index', compact('absensijan21', 'absensifeb21', 'absensimar21', 'absensiapr21', 'absensimei21', 'absensijun21', 'absensijul21', 'absensiagu21', 'absensisep21', 'absensiokt21', 'absensinov21', 'absensides21',
        'absensijan22', 'absensifeb22', 'absensimar22', 'absensiapr22', 'absensimei22', 'absensijun22', 'absensijul22', 'absensiagu22', 'absensisep22', 'absensiokt22', 'absensinov22', 'absensides22',
        'absensijan23', 'absensifeb23', 'absensimar23', 'absensiapr23', 'absensimei23', 'absensijun23', 'absensijul23', 'absensiagu23', 'absensisep23', 'absensiokt23', 'absensinov23', 'absensides23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.absensi.create');
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
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        Absensi::create($input);
    
        return redirect()->route('absensi.index')
                        ->with('success','Absensi created successfully.');
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
    public function edit(Absensi $absensi)
    {
        return view('admin.arsip.absensi.edit',compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        $absensi->update($input);
    
        return redirect()->route('absensi.index')
                        ->with('success','Absensi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
    
        return back()->with('success','Absensi deleted successfully');
    }
}
