<?php

namespace App\Http\Controllers;

use App\Models\Pelajar;
use Illuminate\Http\Request;

class PelajarController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index', [
            'pelajars' => Pelajar::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        $pelajars = Pelajar::orderBy('id', 'desc')->get();

        return view('backend.dashboard.create', compact('pelajars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:128',
            'kelas' => 'required|string|max:20',
            'jurusan' => 'required|string|max:128',
        ]);

        Pelajar::create($validated);

        return redirect('/panel/dashboard')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('backend.dashboard.edit', [
            'pelajars' => Pelajar::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:128',
            'kelas' => 'required|string|max:20',
            'jurusan' => 'required|string|max:128',
        ]);

        Pelajar::where('id', $id)->update($validated);

        return redirect('/panel/dashboard')->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy($id)
    {
        Pelajar::destroy($id);

        return redirect('/panel/dashboard')->with('success', 'Data siswa berhasil dihapus.');
    }

    public function show($id)
    {
        $pelajars = Pelajar::findOrFail($id);
        return view('backend.dashboard.show', compact('pelajars'));
    }
}
