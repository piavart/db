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
        $data = $_POST;
        $visit = new Visit();
        $visit->ip = '123';
        $visit->url = '1234';

    }
}