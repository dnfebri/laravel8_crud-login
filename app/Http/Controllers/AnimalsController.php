<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animal/index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate(
            [
                'nama_hewan' => 'required',
                'jenis_hewan' => 'required',
                'status_kehidupan' => 'required'
            ],
            [
                'nama_hewan.required' => 'Nama Harus diisi!',
                'jenis_hewan.required' => 'Jenis Hewan Harus diisi!',
                'status_kehidupan.required' => 'Status Kehidipan Harus diisi!'
            ]
        );

        // // {cara 1} //
        // $animal = new Animal;
        // $animal->nama_hewan = $request->nama_hewan;
        // $animal->jenis_hewan = $request->jenis_hewan;
        // $animal->status_kehidupan = $request->status_kehidupan;
        // $animal->save();

        // // {cara 2} //
        // Animal::create([
        //     'nama_hewan' => $request->nama_hewan,
        //     'jenis_hewan' => $request->jenis_hewan,
        //     'status_kehidupan' => $request->status_kehidupan
        // ]);
        // OR =>

        Animal::create($request->all());

        return redirect('/animals')->with('status', 'Data Hewan berhasi ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $request->validate(
            [
                'nama_hewan' => 'required',
                'jenis_hewan' => 'required',
                'status_kehidupan' => 'required'
            ],
            [
                'nama_hewan.required' => 'Nama Harus diisi!',
                'jenis_hewan.required' => 'Jenis Hewan Harus diisi!',
                'status_kehidupan.required' => 'Status Kehidipan Harus diisi!'
            ]
        );
        Animal::where('id', $animal->id)
            ->update([
                'nama_hewan' => $request->nama_hewan,
                'jenis_hewan' => $request->jenis_hewan,
                'status_kehidupan' => $request->status_kehidupan
            ]);

        return redirect('/animals')->with('status', 'Data Hewan berhasi Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        Animal::destroy($animal->id);

        return redirect('/animals')->with('status', 'Data Hewan berhasi Dihapus');
    }
}
