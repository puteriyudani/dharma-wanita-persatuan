<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $kegiatan21 = Kegiatan::where('tahun', '2021')->get();
        $kegiatan22 = Kegiatan::where('tahun', '2022')->get();
        $kegiatan23 = Kegiatan::where('tahun', '2023')->get();

        return view('kegiatan',compact('kegiatan21', 'kegiatan22', 'kegiatan23'));
    }

    public function index()
    {
        $kegiatan21 = Kegiatan::where('tahun', '2021')->get();
        $kegiatan22 = Kegiatan::where('tahun', '2022')->get();
        $kegiatan23 = Kegiatan::where('tahun', '2023')->get();

        return view('admin.kegiatan.index',compact('kegiatan21', 'kegiatan22', 'kegiatan23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'file' => 'required|mimes:pdf,xlsx,csv,docx|max:10000',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        Kegiatan::create($input);
    
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan created successfully.');
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
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit',compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'file' => 'required|mimes:pdf,xlsx,csv,docx|max:10000',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $destinationPath = 'public/file';
            $file = $request->file('file');
            $file_name = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs($destinationPath,$file_name);

            $input['file'] = $file_name;
        }
    
        $kegiatan->update($input);
    
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
    
        return back()->with('success','Kegiatan deleted successfully');
    }
}
