<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Pos;

class TentangController extends Controller {
    public function index(): View {
    
        return view('user.tentang');

    }
}