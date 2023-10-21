<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class BeritaAcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //2021
        $beritaacarajan21 = BeritaAcara::where('bulan', 'januari')->where('tahun', 2021)->get();
        $beritaacarafeb21 = BeritaAcara::where('bulan', 'februari')->where('tahun', 2021)->get();
        $beritaacaramar21 = BeritaAcara::where('bulan', 'maret')->where('tahun', 2021)->get();
        $beritaacaraapr21 = BeritaAcara::where('bulan', 'april')->where('tahun', 2021)->get();
        $beritaacaramei21 = BeritaAcara::where('bulan', 'mei')->where('tahun', 2021)->get();
        $beritaacarajun21 = BeritaAcara::where('bulan', 'juni')->where('tahun', 2021)->get();
        $beritaacarajul21 = BeritaAcara::where('bulan', 'juli')->where('tahun', 2021)->get();
        $beritaacaraagu21 = BeritaAcara::where('bulan', 'agustus')->where('tahun', 2021)->get();
        $beritaacarasep21 = BeritaAcara::where('bulan', 'september')->where('tahun', 2021)->get();
        $beritaacaraokt21 = BeritaAcara::where('bulan', 'oktober')->where('tahun', 2021)->get();
        $beritaacaranov21 = BeritaAcara::where('bulan', 'november')->where('tahun', 2021)->get();
        $beritaacarades21 = BeritaAcara::where('bulan', 'desember')->where('tahun', 2021)->get();

        //2022
        $beritaacarajan22 = BeritaAcara::where('bulan', 'januari')->where('tahun', 2022)->get();
        $beritaacarafeb22 = BeritaAcara::where('bulan', 'februari')->where('tahun', 2022)->get();
        $beritaacaramar22 = BeritaAcara::where('bulan', 'maret')->where('tahun', 2022)->get();
        $beritaacaraapr22 = BeritaAcara::where('bulan', 'april')->where('tahun', 2022)->get();
        $beritaacaramei22 = BeritaAcara::where('bulan', 'mei')->where('tahun', 2022)->get();
        $beritaacarajun22 = BeritaAcara::where('bulan', 'juni')->where('tahun', 2022)->get();
        $beritaacarajul22 = BeritaAcara::where('bulan', 'juli')->where('tahun', 2022)->get();
        $beritaacaraagu22 = BeritaAcara::where('bulan', 'agustus')->where('tahun', 2022)->get();
        $beritaacarasep22 = BeritaAcara::where('bulan', 'september')->where('tahun', 2022)->get();
        $beritaacaraokt22 = BeritaAcara::where('bulan', 'oktober')->where('tahun', 2022)->get();
        $beritaacaranov22 = BeritaAcara::where('bulan', 'november')->where('tahun', 2022)->get();
        $beritaacarades22 = BeritaAcara::where('bulan', 'desember')->where('tahun', 2022)->get();

        //2023
        $beritaacarajan23 = BeritaAcara::where('bulan', 'januari')->where('tahun', 2023)->get();
        $beritaacarafeb23 = BeritaAcara::where('bulan', 'februari')->where('tahun', 2023)->get();
        $beritaacaramar23 = BeritaAcara::where('bulan', 'maret')->where('tahun', 2023)->get();
        $beritaacaraapr23 = BeritaAcara::where('bulan', 'april')->where('tahun', 2023)->get();
        $beritaacaramei23 = BeritaAcara::where('bulan', 'mei')->where('tahun', 2023)->get();
        $beritaacarajun23 = BeritaAcara::where('bulan', 'juni')->where('tahun', 2023)->get();
        $beritaacarajul23 = BeritaAcara::where('bulan', 'juli')->where('tahun', 2023)->get();
        $beritaacaraagu23 = BeritaAcara::where('bulan', 'agustus')->where('tahun', 2023)->get();
        $beritaacarasep23 = BeritaAcara::where('bulan', 'september')->where('tahun', 2023)->get();
        $beritaacaraokt23 = BeritaAcara::where('bulan', 'oktober')->where('tahun', 2023)->get();
        $beritaacaranov23 = BeritaAcara::where('bulan', 'november')->where('tahun', 2023)->get();
        $beritaacarades23 = BeritaAcara::where('bulan', 'desember')->where('tahun', 2023)->get();
        return view('admin.arsip.beritaacara.index', compact('beritaacarajan21', 'beritaacarafeb21', 'beritaacaramar21', 'beritaacaraapr21', 'beritaacaramei21', 'beritaacarajun21', 'beritaacarajul21', 'beritaacaraagu21', 'beritaacarasep21', 'beritaacaraokt21', 'beritaacaranov21', 'beritaacarades21',
        'beritaacarajan22', 'beritaacarafeb22', 'beritaacaramar22', 'beritaacaraapr22', 'beritaacaramei22', 'beritaacarajun22', 'beritaacarajul22', 'beritaacaraagu22', 'beritaacarasep22', 'beritaacaraokt22', 'beritaacaranov22', 'beritaacarades22',
        'beritaacarajan23', 'beritaacarafeb23', 'beritaacaramar23', 'beritaacaraapr23', 'beritaacaramei23', 'beritaacarajun23', 'beritaacarajul23', 'beritaacaraagu23', 'beritaacarasep23', 'beritaacaraokt23', 'beritaacaranov23', 'beritaacarades23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.arsip.beritaacara.create');
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
    
        BeritaAcara::create($input);
    
        return redirect()->route('beritaacara.index')
                        ->with('success','Berita Acara created successfully.');
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
    public function edit(BeritaAcara $beritaacara)
    {
        return view('admin.arsip.beritaacara.edit',compact('beritaacara'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BeritaAcara $beritaacara)
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
    
        $beritaacara->update($input);
    
        return redirect()->route('beritaacara.index')
                        ->with('success','Berita Acara updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BeritaAcara $beritaacara)
    {
        $beritaacara->delete();
    
        return back()->with('success','Berita Acara deleted successfully');
    }
}
