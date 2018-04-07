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
        $bots = [
            'YandexBot',
            'AhrefsBot'
            ];

        $data = $_POST;
        if( !preg_match("/bot/i", $data['HTTP_USER_AGENT'] ) ){
            $visit = new Visit();
            $visit->ip = $data['REMOTE_ADDR'];//;
            $visit->extend = $data;
            $visit->url = $data['HTTP_HOST'].$data['REQUEST_URI'];
            $visit->http_referer = $data['HTTP_REFERER'];
            $visit->user_agent = $data['HTTP_USER_AGENT'];
            $visit->save();
        }

    }
}