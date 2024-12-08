<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use App\Models\KriteriaModel;
use Illuminate\View\View;
use App\Models\Pos;
use App\Models\SubKriteriaModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller {
    public function index(): View {
        $data = ([
            'about' => AboutModel::get(),
            'subkriteria' => SubKriteriaModel::get(),
        ]);
        return view('About', $data);

    }

    
    public function update(String $id, Request $request): RedirectResponse
    {
        $request->validate([
            'about' => 'required',
        ]);
        $data = AboutModel::find($id);
        $data->update([
            
            'about' => $request->about,
        ]);
        return back()->with('success', 'Subkategori berhasil diupdate!');

    }

}