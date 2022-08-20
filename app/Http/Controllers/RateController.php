<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RateController extends Controller
{
    public function main() {
        $quote = DB::table('quotes')->get();
        return view('rate.index', ["quote"=>$quote]);
    }
    public function store(Request $request) {

        $time = date('G') + 8;
        if ($time >= 5 && $time < 11) {
            $mealtime = 'B';
        } else if($time >= 11 && $time < 17) {
            $mealtime = 'L';
        } else {
            $mealtime = 'D';
        }
        
        $ide = DB::table('responses')->max('id')+1;
        $ids = DB::table('responses')->max('id')+2;
        $idf = DB::table('responses')->max('id')+3;

        $id = [$ide, $ids, $idf];
        // dd($request->all());
        $responden = $request->responden;
        $timecreated = date('Y-m-d');
        $comments = $request->comments;
        $rating = $request->rating;
        $type = ['E', 'S', 'F'];
        for ($i=0; $i < 3; $i++) { 
            $data = [
                'id' => $id[$i],
                'responden' => $responden[0],
                'timecreated' => $timecreated,
                'comments' => $comments[$i],
                'rating' => $rating[$i],
                'type' => $type[$i],
                'mealtime' => $mealtime
            ];
            DB::table('responses')->insert($data);
        }
        $quote = DB::table('quotes')->get();

        return view('rate.thankyou', ['quote'=>$quote]);

    }
}
