<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Pos;
use Illuminate\Http\Request;
use App\Models\KriteriaModel;
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
}