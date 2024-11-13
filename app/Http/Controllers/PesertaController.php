<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PesertaModel;
use Illuminate\View\View;
use App\Models\Pos;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PesertaController extends Controller {
    public function index(): View {
        $data = ([
            'peserta' => PesertaModel::get(),
        ]);
        return view('Peserta', $data);

    }
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'id_bpjs' => 'required',
            'nama_peserta' => 'required',
        ]);
        PesertaModel::create($data);
        return back()->with('success', 'Data Siswa Berhasil Ditambahkan!');

    }
}