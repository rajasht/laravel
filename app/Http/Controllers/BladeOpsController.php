<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeOpsController extends Controller
{
    //

    public function loadView(){
        return view('simplebladeop');
    }
    
    public function loadView1(){
        return view('bladeops',["name"=>"Raja"]);
    }
    
    public function getcount(){
        $data = ["Raja","Raju","Rozi","Ram","Rakesh"];
        return view('bladeops',["name"=>$data]);
    }
}
