<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $galeri19 = Galeri::where('tahun', 2019)->get();
        $galeri20 = Galeri::where('tahun', 2020)->get();
        $galeri21 = Galeri::where('tahun', 2021)->get();
        $galeri22 = Galeri::where('tahun', 2022)->get();
        $galeri23 = Galeri::where('tahun', 2023)->get();
        return view('galeri', compact('galeri19', 'galeri20', 'galeri21', 'galeri22', 'galeri23'));
    }

    public function index()
    {
        $galeri19 = Galeri::where('tahun', 2019)->get();
        $galeri20 = Galeri::where('tahun', 2020)->get();
        $galeri21 = Galeri::where('tahun', 2021)->get();
        $galeri22 = Galeri::where('tahun', 2022)->get();
        $galeri23 = Galeri::where('tahun', 2023)->get();
        return view('admin.galeri.index', compact('galeri19', 'galeri20', 'galeri21', 'galeri22', 'galeri23'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'public/images';
            $image = $request->file('image');
            $image_name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destinationPath,$image_name);

            $input['image'] = $image_name;
        }
    
        Galeri::create($input);
    
        return redirect()->route('galeri.index')
                        ->with('success','Galeri created successfully.');
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
    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit',compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'public/images';
            $image = $request->file('image');
            $image_name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destinationPath,$image_name);

            $input['image'] = $image_name;
        } else{
            unset($input['image']);
        }
    
        $galeri->update($input);
    
        return redirect()->route('galeri.index')
                        ->with('success','Galeri updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
    
        return back()->with('success','Galeri deleted successfully');
    }
}
