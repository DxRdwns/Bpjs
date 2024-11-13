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

class NormalisasiController extends Controller {
public function index(): View {
    // Mendapatkan data peserta, kriteria, subkriteria, dan pekerjaan
    $data = [
        'peserta' => PesertaModel::get(),
        'kriteria' => KriteriaModel::get(),
        'subkriteria' => SubKriteriaModel::get(),
        'pekerjaan' => PekerjaanModel::get(), // Mengambil semua pekerjaan
    ];

    // Menyusun data untuk setiap pekerjaan
    $data['normalisasi'] = [];
    foreach ($data['pekerjaan'] as $pekerjaan) {
        // Bobot dari pekerjaan
        $C1 = $pekerjaan->C1;
        $C2 = $pekerjaan->C2;
        $C3 = $pekerjaan->C3;
        $C4 = $pekerjaan->C4;
        $C5 = $pekerjaan->C5;

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

        // Menyimpan data untuk setiap pekerjaan
        $data['normalisasi'][] = [
            'pekerjaan' => $pekerjaan,
            'bobot' => compact('C1', 'C2', 'C3', 'C4', 'C5'),
            'normbobot' => $normbobot,
            'norutic' => $norutic,
            'nilaiakhir' => $nilaiakhir,
            'total_nilaiakhir' => $total_nilaiakhir,
        ];
    }

    return view('Normalisasi', $data);
}






}