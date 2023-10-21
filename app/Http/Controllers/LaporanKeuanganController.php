<?php

namespace App\Http\Controllers;

use App\Models\LaporanKeuangan;
use Illuminate\Http\Request;

class LaporanKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukuarisan = LaporanKeuangan::where('kategori', 'bukuarisan')->get();
        $bukukas = LaporanKeuangan::where('kategori', 'bukukas')->get();
        $lainnya = LaporanKeuangan::where('kategori', 'lainnya')->get();

        return view('admin.arsip.laporankeuangan.index',compact('bukuarisan', 'bukukas', 'lainnya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.laporankeuangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'tahun' => 'required',
            'file' => 'required|mimes:pdf,xlsx,csv|max:10000',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        LaporanKeuangan::create($input);
    
        return redirect()->route('laporankeuangan.index')
                        ->with('success','Laporan Keuangan created successfully.');
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
    public function edit(LaporanKeuangan $laporankeuangan)
    {
        return view('admin.arsip.laporankeuangan.edit',compact('laporankeuangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaporanKeuangan $laporankeuangan)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'tahun' => 'required',
            'file' => 'required|mimes:pdf,xlsx,csv|max:10000',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        $laporankeuangan->update($input);
    
        return redirect()->route('laporankeuangan.index')
                        ->with('success','Laporan Keuangan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaporanKeuangan $laporankeuangan)
    {
        $laporankeuangan->delete();
    
        return back()->with('success','Laporan Keuangan deleted successfully');
    }
}
