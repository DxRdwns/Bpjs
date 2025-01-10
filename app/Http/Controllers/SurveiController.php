<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\PesertaModel;
use App\Models\Pos;
use App\Models\SubKriteriaModel;
use App\Models\KriteriaModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\PekerjaanModel;
class SurveiController extends Controller {
    public function index(): View {
        $data = ([
            'question' => KriteriaModel::get(),
            'sub' => SubKriteriaModel::get(),
        ]);
        return view('user.survei', $data);

    }
    
public function result(Request $request): View {
    // Mendapatkan data peserta, kriteria, subkriteria, dan pekerjaan
    $data = [
        'peserta' => PesertaModel::get(),
        'kriteria' => KriteriaModel::get(),
        'subkriteria' => SubKriteriaModel::get(),
        'pekerjaan' => PekerjaanModel::get(), // Mengambil semua pekerjaan
    ];

        $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required',
    'phone' => 'required',
    'C1' => 'nullable|numeric',
    'C2' => 'nullable|numeric',
    'C3' => 'nullable|numeric',
    'C4' => 'nullable|numeric',
    'C5' => 'nullable|numeric',
    'C1text' => 'required|string|max:255',
    'C2text' => 'required|string|max:255',
    'C3text' => 'required|string|max:255',
    'C4text' => 'required|string|max:255',
    'C5text' => 'required|string|max:255',
]);

        session([
            'name' => $request->name,
            'email' => $request->email,
            'addres' => $request->addres,
            'phone' => $request->phone,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5,
            'C1text' => $request->C1text,
            'C2text' => $request->C2text,
            'C3text' => $request->C3text,
            'C4text' => $request->C4text,
            'C5text' => $request->C5text,
        ]);

    // Menyusun data untuk setiap pekerjaan
    $data['normalisasi'] = [];
   
        // Bobot dari pekerjaan
        $C1 = session('C1');
        $C2 = session('C2');
        $C3 = session('C3');
        $C4 = session('C4');
        $C5 = session('C5');

        // Mendapatkan nilai tertinggi dan terendah dari SubKriteriaModel
        $maxMinValues = SubKriteriaModel::select('id_kategori')
            ->selectRaw('MAX(nilai_subkriteria) as nilai_tertinggi')
            ->selectRaw('MIN(nilai_subkriteria) as nilai_terendah')
            ->groupBy('id_kategori')
            ->get()
            ->keyBy('id_kategori');

        // Total nilai bobot
        $totalnilai = $C1 + $C2 + $C3 + $C4 + $C5;

        // Normalisasi Bobot
        $normbobot = [
            'C1' => round($C1 / $totalnilai, 9),
            'C2' => round($C2 / $totalnilai, 9),
            'C3' => round($C3 / $totalnilai, 9),
            'C4' => round($C4 / $totalnilai, 9),
            'C5' => round($C5 / $totalnilai, 9),
        ];

        // Normalisasi Utility
        $norutic = [
            'C1' => round(($C1 - $maxMinValues[1]->nilai_terendah) / ($maxMinValues[1]->nilai_tertinggi - $maxMinValues[1]->nilai_terendah), 9),
            'C2' => round(($C2 - $maxMinValues[2]->nilai_terendah) / ($maxMinValues[2]->nilai_tertinggi - $maxMinValues[2]->nilai_terendah), 9),
            'C3' => round(($C3 - $maxMinValues[3]->nilai_terendah) / ($maxMinValues[3]->nilai_tertinggi - $maxMinValues[3]->nilai_terendah), 9),
            'C4' => round(($C4 - $maxMinValues[4]->nilai_terendah) / ($maxMinValues[4]->nilai_tertinggi - $maxMinValues[4]->nilai_terendah), 9),
            'C5' => round(($C5 - $maxMinValues[5]->nilai_terendah) / ($maxMinValues[5]->nilai_tertinggi - $maxMinValues[5]->nilai_terendah), 9),
        ];

        // Menghitung Nilai Akhir untuk masing-masing kriteria
        $nilaiakhir = [
            'C1' => round($normbobot['C1'] * $norutic['C1'], 9),
            'C2' => round($normbobot['C2'] * $norutic['C2'], 9),
            'C3' => round($normbobot['C3'] * $norutic['C3'], 9),
            'C4' => round($normbobot['C4'] * $norutic['C4'], 9),
            'C5' => round($normbobot['C5'] * $norutic['C5'], 9),
        ];

        // Menambahkan total nilai akhir
        $total_nilaiakhir = round(array_sum(array_values($nilaiakhir)), 9);
        $nilaiDesimal = substr(number_format($total_nilaiakhir, 2), strpos(number_format($total_nilaiakhir, 2), '.') + 1);

            $keterangan = '';
if ($nilaiDesimal <= 46) {
    $keterangan = 'BPJS Kelas III';
} elseif ($nilaiDesimal <= 68) {
    $keterangan = 'BPJS Kelas II';

} else {
    $keterangan = 'BPJS Kelas I';
}
        // Menyimpan data untuk setiap pekerjaan
        $data['normalisasi'][] = [
            
            'bobot' => compact('C1', 'C2', 'C3', 'C4', 'C5'),
            'normbobot' => $normbobot,
            'norutic' => $norutic,
            'nilaiakhir' => $nilaiakhir,
            'total_nilaiakhir' => $total_nilaiakhir,
        ];

        $pes = ([
            'nama_peserta' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'addres' => $request->addres,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5,
            'hasil' => $nilaiDesimal,
            'quality' => $keterangan,
        ]);
        PesertaModel::create($pes);
        $datasession = session()->all();
        
    
    return view('user.hasil', $data, compact('keterangan','nilaiDesimal'));
    
    

}
}