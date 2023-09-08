<?php

namespace App\Http\Controllers;
use App\Models\TourGuide;
use DB;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(){

        //  $tourguide = TourGuide::find(2);
        //  return $tourguide;


        $orders = DB::table('tour_guides')
        ->where('id', 2)
        ->get();
        return $orders;
    }
}
