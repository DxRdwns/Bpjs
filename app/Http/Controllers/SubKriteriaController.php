<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KriteriaModel;
use Illuminate\View\View;
use App\Models\Pos;
use App\Models\SubKriteriaModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SubKriteriaController extends Controller {
    public function index(): View {
        $data = ([
            'kriteria' => KriteriaModel::get(),
            'subkriteria' => SubKriteriaModel::get(),
        ]);
        return view('SubKriteria', $data);

    }
     public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama_subkriteria' => 'required',
            'nilai_subkriteria' => 'required',
            'id_kategori' => 'required',
        ]);
        SubKriteriaModel::create($data);
        return back()->with('success', 'Data Siswa Berhasil Ditambahkan!');

    }
    public function update(String $id, Request $request): RedirectResponse
    {
        $request->validate([
            'nama_subkriteria' => 'required',
            'nilai_subkriteria' => 'required',
            'id_kategori' => 'required'

        ]);
        $data = KriteriaModel::find($id);
        $data->update([
            'nama_subkriteria' => $request->nama_subkriteria,
            'nilai_subkriteria' => $request->nilai_subkriteria,
            'id_kategori' => $request->id_kategori,
        ]);
        return back()->with('success', 'Subkategori berhasil diupdate!');

    }
        public function destroy(string $id): RedirectResponse
{
    // Mencari data kategori berdasarkan ID
    $subkriteria = SubKriteriaModel::find($id);

    
    // Menghapus subkriteria
    $subkriteria->delete();

    // Mengembalikan respon dengan pesan sukses
    return back()->with('error', 'Subkategori terkait berhasil dihapus.');
}
}