<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\UserModel;

class FormController extends Controller
{
    function getdata(Request $req){
        $name=$req->name;
        $email=$req->email;

        $tbl = new UserModel;
        $tbl->name= $name;
        $tbl->email=$email;

        $tbl->save();

        return redirect('userpage')->with('msg', 'Data successfully Inserted');
    }
}
