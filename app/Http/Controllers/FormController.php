<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\UserModel;

class FormController extends Controller
{
    function savedata(Request $req){
        $name=$req->name;
        $email=$req->email;

        $tbl = new UserModel;
        $tbl->name= $name;
        $tbl->email=$email;

        $tbl->save();

        //return redirect('userpage')->with('msg', 'Data successfully Inserted');
        return $this->fetchdata();
    }

    function fetchdata(){
        $data=UserModel::all();
        return view ('userform', ['records'=>$data]);
    }
}
