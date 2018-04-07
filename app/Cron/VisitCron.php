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
            if($visit->ip == '12345'){
                $visit->ip = $visit->extend['REMOTE_ADDR'];
                $visit->save();
            }
        }
    }
}