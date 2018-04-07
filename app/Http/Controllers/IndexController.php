<?php

namespace App\Http\Controllers;

use App\models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(){
        $visits = Visit::all();
        //dd($visits);
        return view('index', ['visits' => $visits]);
    }
}
