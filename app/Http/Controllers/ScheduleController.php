<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    public function main() {
        $quote = DB::table('quotes')->get();
        if(date('D') == 'Sun') {
            $a=date('d');
        } else if(date('D') == 'Mon') {
            $a=date('d')-1;
        } else if(date('D') == 'Tue') {
            $a=date('d')-2;
        } else if(date('D') == 'Wed') {
            $a=date('d')-3;
        } else if(date('D') == 'Thu') {
            $a=date('d')-4;
        } else if(date('D') == 'Fri') {
            $a=date('d')-5;
        } else {
            $a=date('d')-6;
        }
        if(date('D') == 'Sun') {
            $b=date('d')+6;
        } else if(date('D') == 'Mon') {
            $b=date('d')+5;
        } else if(date('D') == 'Tue') {
            $b=date('d')+4;
        } else if(date('D') == 'Wed') {
            $b=date('d')+3;
        } else if(date('D') == 'Thu') {
            $b=date('d')+2;
        } else if(date('D') == 'Fri') {
            $b=date('d')+1;
        } else {
            $b=date('d');
        }
        $fday = $a.'-'.$b.date(' F Y');
        return view('schedule', ['quote'=>$quote, 'period'=>$fday]);
    }
}
