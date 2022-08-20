<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function main($type) {
        $quote = DB::table('quotes')->get();
        $average = DB::table('responses')->where('type', substr($type, 0, 1))->avg('rating');
        $average = round($average, 1);
        $data = DB::table('responses')->where('type', substr($type, 0, 1))->get();
        return view($type, ['data'=>$data, 'average'=>$average, 'quote'=>$quote]);
    }
}
