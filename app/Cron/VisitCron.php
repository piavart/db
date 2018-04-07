<?php
/**
 * Created by PhpStorm.
 * User: Арсений
 * Date: 07.04.2018
 * Time: 23:54
 */

namespace App\Cron;


use App\models\Visit;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class VisitCron extends Command
{

    protected $signature = 'VisitCron:go';

    public function handle(){
        $visits = Visit::all();
        foreach ($visits as $visit){

            $data = $visit->extend;
            if( preg_match("/bot/i", $data['HTTP_USER_AGENT'] ) ){

                $visit->parent = 1;
            }
//            $visit->ip = $visit->extend['REMOTE_ADDR'];
//            $visit->url = $visit->extend['HTTP_HOST'].$visit->extend['REQUEST_URI'];
//            $visit->http_referer = $data['HTTP_REFERER'];
//            $visit->user_agent = $data['HTTP_USER_AGENT'];
//            $visit->save();

        }
    }
}