<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Pos;
use App\Models\PesertaModel;

class MemberController extends Controller {
    public function index(): View {

        $data = ([
            'member' => PesertaModel::get(),
        ]);
        return view('member', $data);

    }
   
}