<?php

namespace App\Http\Controllers;

use App\Models\SuratKeputusan;
use Illuminate\Http\Request;

class SuratKeputusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratkeputusans = SuratKeputusan::get();

        return view('admin.arsip.suratkeputusan.index', compact('suratkeputusans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.suratkeputusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'periode' => 'required',
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
    
        SuratKeputusan::create($input);
    
        return redirect()->route('suratkeputusan.index')
                        ->with('success','Surat Keputusan created successfully.');
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
    public function edit(SuratKeputusan $suratkeputusan)
    {
        return view('admin.arsip.suratkeputusan.edit',compact('suratkeputusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKeputusan $suratkeputusan)
    {
        $request->validate([
            'judul' => 'required',
            'periode' => 'required',
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
    
        $suratkeputusan->update($input);
    
        return redirect()->route('sura$suratkeputusan.index')
                        ->with('success','Surat Keputusan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKeputusan $suratkeputusan)
    {
        $suratkeputusan->delete();
    
        return back()->with('success','Surat Keputusan deleted successfully');
    }
}
