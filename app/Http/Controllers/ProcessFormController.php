<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
class ProcessFormController extends Controller
{
    function search(Request $req){
        $email=$req->email;
        $enr=$req->enr;

        $result=UserModel::where('email',$email)
                        ->where('enrollment', $enr)
                        ->get();
        
        if($result->isNotEmpty())
            return redirect('userform')->with('success','User Exist.');
        else
            return redirect('userform')->with('error','User Does Not Exist.');
    }
}
