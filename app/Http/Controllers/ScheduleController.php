<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    public function main() {
        $quote = DB::table('quotes')->get();
        $test = 'test';
        return view('schedule', ['quote'=>$quote, 'test'=>$test]);
    }
}
