<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PesertaModel;
use Illuminate\View\View;
use App\Models\Pos;
use App\Models\SubKriteriaModel;
use App\Models\KriteriaModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\PekerjaanModel;

class PekerjaanController extends Controller {
    public function index(): View {
        $data = ([
            'peserta' => PesertaModel::get(),
            'kriteria' => KriteriaModel::get(),
            'subkriteria' => SubKriteriaModel::get(),
            'pekerjaan' => PekerjaanModel::get(),
        ]);
        return view('Pekerjaan', $data);

    }
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'id_peserta' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
        ]);
        PekerjaanModel::create($data);
        return back()->with('success', 'Data Siswa Berhasil Ditambahkan!');

    }

}