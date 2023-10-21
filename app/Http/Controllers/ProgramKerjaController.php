<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function home()
    {
        $programkerja21 = ProgramKerja::where('tahun', '2021')->get();
        $programkerja22 = ProgramKerja::where('tahun', '2022')->get();
        $programkerja23 = ProgramKerja::where('tahun', '2023')->get();
        $programkerja24 = ProgramKerja::where('tahun', '2024')->get();

        return view('programkerja',compact('programkerja21', 'programkerja22', 'programkerja23', 'programkerja24'));
    }

    public function index()
    {
        $programkerja21 = ProgramKerja::where('tahun', '2021')->get();
        $programkerja22 = ProgramKerja::where('tahun', '2022')->get();
        $programkerja23 = ProgramKerja::where('tahun', '2023')->get();
        $programkerja24 = ProgramKerja::where('tahun', '2024')->get();

        return view('admin.programkerja.index',compact('programkerja21', 'programkerja22', 'programkerja23', 'programkerja24'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programkerja.create');
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
    
        ProgramKerja::create($input);
    
        return redirect()->route('programkerja.index')
                        ->with('success','Program Kerja created successfully.');
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
    public function edit(ProgramKerja $programkerja)
    {
        return view('admin.programkerja.edit',compact('programkerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramKerja $programkerja)
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
    
        $programkerja->update($input);
    
        return redirect()->route('programkerja.index')
                        ->with('success','Program Kerja updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramKerja $programkerja)
    {
        $programkerja->delete();
    
        return back()->with('success','Program Kerja deleted successfully');
    }
}
