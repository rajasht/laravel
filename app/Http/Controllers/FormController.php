<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function getData(Request $req){
        $req->validate(['Username'=>'required|max:10','Password'=>'required|min:5']);
        return $req->all();
    }
}
