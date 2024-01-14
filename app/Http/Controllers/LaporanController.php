<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use Illuminate\Contracts\Support\ValidatedData;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $laporans = Laporan::with('user')->where('user_id', $user->id)->get();

        if ($laporans !== null) {
            return view('laporan.index', ['laporans' => $laporans]);
        } else {
            return view('laporan.index', ['laporans' => []]);
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLaporanRequest $request)
    {

        $user = auth()->user();
        $validatedData = $request->validated();
        $validatedData['user_id'] = $user->id;

        Laporan::create($validatedData);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $laporan = Laporan::find($id);

        return view('laporan.show', ['laporan' => $laporan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
