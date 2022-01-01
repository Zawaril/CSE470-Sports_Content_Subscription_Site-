<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contents;

class FrontEndController extends Controller
{
    //

    public function showPost(){

        $post=Contents::all();
        

        return view('user.article1',compact('post'));




    }
}
