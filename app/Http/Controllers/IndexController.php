<?php

namespace App\Http\Controllers;

use App\models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        $visits = Visit::all();
        dd($visits);
    }
}
