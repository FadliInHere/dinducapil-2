<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KehilanganKtp;
use Illuminate\Http\Request;

class KehilanganKtpController extends Controller
{
    public function index()
    {
        $data = KehilanganKtp::all();
        return view('admin.kehilangan_ktp.index', compact('data'));
    }

    public function create()
    {
        return view('admin.kehilangan_ktp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'tanggal_kehilangan' => 'required|date',
            'tempat_kehilangan' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        KehilanganKtp::create($request->all());
        return redirect()->route('admin.kehilangan.index')->with('success', 'Laporan kehilangan KTP berhasil ditambahkan');
    }

    public function show($id)
    {
        $data = KehilanganKtp::findOrFail($id);
        return view('admin.kehilangan.show', compact('data'));
    }

    public function edit($id)
    {
        $data = KehilanganKtp::findOrFail($id);
        return view('admin.kehilangan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'tanggal_kehilangan' => 'required|date',
            'tempat_kehilangan' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $data = KehilanganKtp::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('admin.kehilangan.index')->with('success', 'Laporan kehilangan KTP berhasil diperbarui');
    }

    public function destroy($id)
    {
        KehilanganKtp::destroy($id);
        return redirect()->route('admin.kehilangan.index')->with('success', 'Laporan kehilangan KTP berhasil dihapus');
    }

    public function markAsCompleted($id)
    {
        $pengajuan = KehilanganKtp::findOrFail($id);
        $pengajuan->status_pengajuan = 'Selesai';
        $pengajuan->save();
    
        return redirect()->route('admin.kehilangan.index')->with('success', 'Pengajuan KTP telah diselesaikan');
    }
    
    public function markAsRejected($id)
{
    $pengajuan = KehilanganKtp::findOrFail($id);
    $pengajuan->status_pengajuan = 'Ditolak';
    $pengajuan->save();

    return redirect()->route('admin.kehilangan.index')->with('success', 'Pengajuan KTP telah ditolak');
}

}
