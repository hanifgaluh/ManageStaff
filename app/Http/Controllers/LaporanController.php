<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        // if (!$laporan || !$laporan->exists()) {
        //     abort(404, 'Laporan tidak ditemukan.');
        // }

        return view('laporan.show', ['laporan' => $laporan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        return view('laporan.edit', ['laporan' => $laporan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {

        $validatedData = $request->validated();

        $laporan->update($validatedData);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus');
    }


    public function leader()
    {
        $user = Auth::user();

        $laporans = Laporan::join('users', 'laporans.user_id', '=', 'users.id')
            ->where('users.leader', 'LIKE', '%' . $user->name . '%')
            ->get(['laporans.*', 'users.leader', 'users.name']);

        return view('laporan.inbox', ['laporans' => $laporans]);
    }
}
