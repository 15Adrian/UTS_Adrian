<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            $mahasiswa = Mahasiswa::with('prodi')->get();
            return view('mahasiswa.index', compact('mahasiswa'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa,nim',
            'kelas' => 'required',
            'prodi_id' => 'required|exists:prodi,id',
            'angkatan' => 'required',
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
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
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodi = Prodi::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa,nim,'.$mahasiswa->id,
            'kelas' => 'required',
            'prodi_id' => 'required|exists:prodi,id',
            'angkatan' => 'required',
        ]);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}
