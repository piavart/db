<?php
/**
 * Created by PhpStorm.
 * User: Арсений
 * Date: 07.04.2018
 * Time: 16:42
 */

namespace App\Http\Controllers;


use App\models\Visit;

class VisitController extends Controller
{

    public function webhook(){
        //$visit = Visit::find(1);
        $data = $_POST;
        $visit = new Visit();
        $visit->ip = '12345';//;
        $visit->extend = $data;
        $visit->url = '1234';
        $visit->save();
    }
}