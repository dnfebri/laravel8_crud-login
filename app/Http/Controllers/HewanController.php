<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HewanModel;

class HewanController extends Controller
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
        // $hewan = \App\Models\Animal::all();
        $hewan = HewanModel::all();
        // return view('hewan.index', ['hewan' => $hewan]); 
        // OR =>
        return view('hewan.index', compact('hewan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hewan.create');
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
        // $hewan = new HewanModel();
        // $hewan->nama_hewan = $request->nama_hewan;
        // $hewan->jenis_hewan = $request->jenis_hewan;
        // $hewan->status_kehidupan = $request->status_kehidupan;
        // $hewan->save();

        HewanModel::create($request->all());

        return redirect('/hewan')->with('status', 'Data Hewan berhasi ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hewan = HewanModel::where('id', $id)->first();
        return view('hewan.show', compact('hewan'));
        // dd($hewan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hewan = HewanModel::where('id', $id)->first();
        return view('hewan.edit', compact('hewan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        HewanModel::where('id', $id)
            ->update([
                'nama_hewan' => $request->nama_hewan,
                'jenis_hewan' => $request->jenis_hewan,
                'status_kehidupan' => $request->status_kehidupan
            ]);

        return redirect('/hewan')->with('status', 'Data Hewan berhasi Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HewanModel::destroy($id);

        return redirect('/hewan')->with('status', 'Data Hewan berhasi Dihapus');
    }
}
