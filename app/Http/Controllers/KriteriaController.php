<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Pos;
use Illuminate\Http\Request;
use App\Models\KriteriaModel;
use App\Models\SubKriteriaModel;
use Illuminate\Http\RedirectResponse;

class KriteriaController extends Controller {
    public function index(): View {
        $data = ([
            'kriteria' => KriteriaModel::get(),
        ]);
    
        return view('Kriteria', $data);

    }
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'nilai_kriteria' => 'required',
        ]);

        KriteriaModel::create($data);
        return back()->with('success', 'Data Siswa Berhasil Ditambahkan!');
    }
    public function destroy(string $id): RedirectResponse
{
    // Mencari data kategori berdasarkan ID
    $kategori = KriteriaModel::find($id);

    // Memeriksa apakah kategori ditemukan
    if (!$kategori) {
        return back()->with('error', 'Kategori tidak ditemukan.');
    }

    // Menghapus subkategori yang terkait
    $subKategori = SubKriteriaModel::where('id_kategori', $id);
    if ($subKategori->exists()) {
        $subKategori->delete();
    }

    // Menghapus kategori
    $kategori->delete();

    // Mengembalikan respon dengan pesan sukses
    return back()->with('error', 'Kategori dan subkategori terkait berhasil dihapus.');
}

     public function update(String $id, Request $request): RedirectResponse
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'nilai_kriteria' => 'required',
           
        ]);
        $data = KriteriaModel::find($id);
        $data->update([
            'nama_kriteria' => $request->nama_kriteria,
            'nilai_kriteria' => $request->nilai_kriteria,
        ]);
        return back()->with('success', 'Period Berhasil Diupdate');

    }
}