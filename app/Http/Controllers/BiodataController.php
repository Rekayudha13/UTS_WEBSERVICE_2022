<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Http\Requests\StoreBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Biodata::all();
        return view('biodata', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBiodataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required|unique:biodatas',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jurusan' => 'required',
        ]);
        Biodata::create($request->all());
        return redirect(url('biodata'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBiodataRequest  $request
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Biodata::find($request->id);
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jurusan' => 'required',
        ]);
        $data->update($request->all());
        return redirect(url('biodata'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Biodata::find($id);
        $data->delete();
        return redirect(url('biodata'));
    }
}
