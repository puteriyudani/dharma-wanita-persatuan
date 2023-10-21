<?php

namespace App\Http\Controllers;

use App\Models\SuratPerintahTugas;
use Illuminate\Http\Request;

class SuratPerintahTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratperintahtugas22 = SuratPerintahTugas::where('tahun', '2022')->get();
        $suratperintahtugas23 = SuratPerintahTugas::where('tahun', '2023')->get();

        return view('admin.arsip.suratperintahtugas.index',compact('suratperintahtugas22', 'suratperintahtugas23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.suratperintahtugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
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
    
        SuratPerintahTugas::create($input);
    
        return redirect()->route('suratperintahtugas.index')
                        ->with('success','Surat Perintah Tugas created successfully.');
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
    public function edit(SuratPerintahTugas $suratperintahtugas)
    {
        return view('admin.arsip.suratperintahtugas.edit',compact('suratperintahtugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratPerintahTugas $suratperintahtugas)
    {
        $request->validate([
            'judul' => 'required',
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
    
        $suratperintahtugas->update($input);
    
        return redirect()->route('surat$suratperintahtugas.index')
                        ->with('success','Surat Perintah Tugas updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratPerintahTugas $suratperintahtugas)
    {
        $suratperintahtugas->delete();
    
        return back()->with('success','Surat Perintah Tugas deleted successfully');
    }
}
