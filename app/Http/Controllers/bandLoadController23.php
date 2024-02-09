<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Band;

class bandLoadController23 extends Controller
{
    public function index() {
        $Bands = Band::all();
        $allBands = $Bands->where('year', '=', 2023);
        $thursHL = $allBands->where('headliner', true)->where('day', 'thursday'); 
        $thursNM = $allBands->where('headliner', false)->where('day', 'thursday'); 
        $friHL = $allBands->where('headliner', true)->where('day', 'friday'); 
        $friNM = $allBands->where('headliner', false)->where('day', 'friday'); 
        $satHL = $allBands->where('headliner', true)->where('day', 'saturday'); 
        $satNM = $allBands->where('headliner', false)->where('day', 'saturday'); 
        $sunHL = $allBands->where('headliner', true)->where('day', 'sunday'); 
        $sunNM = $allBands->where('headliner', false)->where('day', 'sunday');

        // compact('thursHL', 'thursNM', 'friHL'. 'friNM', 'satHL', 'satNM', 'sunHL', 'sunNM');
        return view('festival', compact('thursHL', 'thursNM', 'friHL', 'friNM', 'satHL', 'satNM', 'sunHL', 'sunNM'));
    }

}
