<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LLModel;
class LLController extends Controller
{
    function login(Request $req){
        $umail=$req->email;
        $pswd=$req->password;

        $result = LLModel::where('email',$umail)
                ->where('enrollment', $pswd)
                ->get();
        
        if($result->isNotEmpty()){
            $req->session()->put('uid', $result[0]);
            return redirect ('ll');
        }else{
            return redirect ('ll')->with('report', 'Invalid Username/Password');
        }
    }

    function logout(Request $req){
        $req->session()->forget('uid') ;
        return redirect ('ll')->with('report', 'Successfully Logged Out!');
    }
}
