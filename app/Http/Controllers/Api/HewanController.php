<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HewanModel as hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hewan = hewan::all();

        return $hewan;
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

        $hewan = hewan::create([
            'nama_hewan' => $request->nama_hewan,
            'jenis_hewan' => $request->jenis_hewan,
            'status_kehidupan' => $request->status_kehidupan
        ]);

        return $hewan;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hewan = hewan::find($id);
        // $hewan = hewan::where('id', $id)->first();
        return $hewan;
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

        $hewan = hewan::find($id);
        $hewan->update([
            'nama_hewan' => $request->nama_hewan,
            'jenis_hewan' => $request->jenis_hewan,
            'status_kehidupan' => $request->status_kehidupan
        ]);

        return $hewan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hewan::destroy($id);

        return "Hewan id = " . $id . " berhasil di hapus.";
    }
}
