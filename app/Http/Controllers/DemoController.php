<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //creating simple function with just one return

    public function show(){
        return "Hello All from DemoController.";
    }
    
    public function showName($name){
        return "Hello $name";
    }

    public function showView(){
        return view('view1');
    }
    
    public function argsView($name){
        if(view()->exists('view2'))
        {
            return view('view2',['name'=>$name]);
        }
        else{
            return "VIEW NOT FOUND";
        }
    }
}
