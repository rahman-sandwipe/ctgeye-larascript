<?php

namespace App\Http\Controllers\Frontends;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home() : View {
        return view('frontends.master');
    }
}
