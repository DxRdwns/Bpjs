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
}