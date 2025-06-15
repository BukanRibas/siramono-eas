<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;

class TanamanController extends Controller
{
    public function tanamanku()
    {
        $tanaman = Tanaman::all();
        return view('tanamanku', compact('tanaman'));
    }

    public function index()
    {
        $tanaman = Tanaman::all();
        return view('tanaman.index', compact('tanaman'));
    }

    
    public function create()
    {
        $last = Tanaman::orderByDesc('id_tanaman')->first();
        $lastKode = $last ? intval(substr($last->kode_tanaman, 1)) : 0;
        $kode_tanaman = 'T' . str_pad($lastKode + 1, 3, '0', STR_PAD_LEFT);

        return view('tanaman.create', compact('kode_tanaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tanaman' => 'required|string|max:255',
            'jenis_tanaman' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
            'status_penyiraman' => 'required|string',
            'kebutuhan_air' => 'nullable|integer',
            'intensitas_cahaya' => 'nullable|string|max:255',
            'tds' => 'nullable|string|max:255',
        ]);

        // Generate kode otomatis
        $last = Tanaman::orderByDesc('id_tanaman')->first();
        $lastKode = $last ? intval(substr($last->kode_tanaman, 1)) : 0;
        $newKode = 'T' . str_pad($lastKode + 1, 3, '0', STR_PAD_LEFT);

        Tanaman::create([
            'nama_tanaman' => $request->nama_tanaman,
            'jenis_tanaman' => $request->jenis_tanaman,
            'tanggal_tanam' => $request->tanggal_tanam,
            'status_penyiraman' => $request->status_penyiraman,
            'kebutuhan_air' => $request->kebutuhan_air ?? 0, // Default to 0 if not provided
            'intensitas_cahaya' => $request->intensitas_cahaya,
            'tds' => $request->tds,
            'kode_tanaman' => $newKode,
        ]);

        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tanaman = Tanaman::findOrFail($id);
        return view('tanaman.aturtanaman', compact('tanaman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tanaman' => 'required|string|max:255',
            'jenis_tanaman' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
            'status_penyiraman' => 'nullable|string',
            'kebutuhan_air' => 'nullable|integer',
            'intensitas_cahaya' => 'nullable|string|max:255',
            'tds' => 'nullable|string|max:255',
        ]);

        $tanaman = Tanaman::findOrFail($id);
        $tanaman->update($request->only([
            'nama_tanaman',
            'jenis_tanaman',
            'tanggal_tanam',
            'status_penyiraman',
            'kebutuhan_air',
            'intensitas_cahaya',
            'tds',
        ]));

        return redirect()->route('tanamanku')->with('success', 'Tanaman berhasil diperbarui.');
    }

    public function jadwal($id)
    {
        $tanaman = Tanaman::findOrFail($id);
        return view('tanaman.aturjadwal', compact('tanaman'));
    }

    public function updateJadwal(Request $request, $id)
    {
        $request->validate([
            'kebutuhan_air' => 'nullable|integer|min:0',
            'tanggal_siram' => 'nullable|date',
            'status_penyiraman' => 'nullable|string|in:Otomatis',
        ]);

        $tanaman = Tanaman::findOrFail($id);

        $tanaman->update([
            'kebutuhan_air' => $request->kebutuhan_air,
            'tanggal_siram' => $request->tanggal_siram,
            'status_penyiraman' => $request->has('status_penyiraman') ? 'Otomatis' : 'Manual',
        ]);

        return redirect()->route('tanamanku', $id)->with('success', 'Jadwal penyiraman diperbarui.');
    }


    public function destroy($id)
    {
        Tanaman::destroy($id);
        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil dihapus.');
    }
}
