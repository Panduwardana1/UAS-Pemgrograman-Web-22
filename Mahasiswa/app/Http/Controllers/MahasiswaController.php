<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa/mahasiswa', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'nama_lengkap' => 'required|string|max:100',
        'NIM' => 'required|alpha_num|max:20',
        'program_studi' => 'required|in:Sistem Informasi,Teknik Informatika',
        'angkatan' => 'required|digits:4|integer|min:2000',
    ]);

    Mahasiswa::create($request->only(['nama_lengkap', 'NIM', 'program_studi', 'angkatan']));

    return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil disimpan.');
}


    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa/show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa/edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
         $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'NIM' => 'required|alpha_num|max:20',
            'program_studi' => 'required|in:Sistem Informasi,Teknik Informatika',
            'angkatan' => 'required|digits:4|integer|min:2000',
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
