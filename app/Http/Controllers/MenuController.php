<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function main() {
        $quote = DB::table('quotes')->get();
        return view('menu', ['quote'=>$quote]);
    }
}
