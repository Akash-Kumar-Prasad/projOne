<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function makesession(Request $req){
        $name=$req->t1;
        $req->session()->put('msg', $name);

        if($req->session()->has('msg')){
        $vari=$req->session()->get('msg');
        }

        return redirect ('sform');
    }
}
