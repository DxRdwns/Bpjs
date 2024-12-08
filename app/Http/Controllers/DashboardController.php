<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PesertaModel;
use Illuminate\View\View;
use App\Models\Pos;

class DashboardController extends Controller {
    public function index(): View {
    
        return view('user.beranda');

    }
      public function petunjuk(): View {
    
        return view('user.petunjuk');

    }
    public function dashboard(): View
    {
        $data = ([
            'all' => PesertaModel::whereNotNull('hasil')->count(),
            'kelas1' => PesertaModel::whereNotNull('quality')->where('quality', 'BPJS Kelas I')->count(),
            'kelas2' => PesertaModel::whereNotNull('quality')->where('quality', 'BPJS Kelas II')->count(),
            'kelas3' => PesertaModel::whereNotNull('quality')->where('quality', 'BPJS Kelas III')->count(),


        ]);
        return view('Dashboard', $data);
    }
    public function guideline(): View
    {
        return view('Guideline');
    }
}