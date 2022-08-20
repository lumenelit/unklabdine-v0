<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function main() {
        // quote
        $quote = DB::table('quotes')->get();
        // overal rating
        $enviavg = DB::table('responses')->where('type', 'E')->avg('rating');
        $enviavg = round($enviavg, 1);
        $servavg = DB::table('responses')->where('type', 'S')->avg('rating');
        $servavg = round($servavg, 1);
        $foodavg = DB::table('responses')->where('type', 'F')->avg('rating');
        $foodavg = round($foodavg, 1);
        //card
        $envicard = DB::table('responses')->where('type', 'E')->get();
        $servcard = DB::table('responses')->where('type', 'S')->get();
        $foodcard = DB::table('responses')->where('type', 'F')->get();

        
        return view('index', ['environment'=>$enviavg, 'service'=>$servavg, 'food'=>$foodavg, 'envicard'=>$envicard, 'servcard'=>$servcard, 'foodcard'=>$foodcard, 'quote'=>$quote]);
        
    }

}
