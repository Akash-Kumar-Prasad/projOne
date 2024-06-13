<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GradecardModel;
use Illuminate\Support\Facades\Session;

class GradecardController extends Controller
{
    function searchdata(Request $req){
        //$name=$req->name;
        $enrolment=$req->enrolment;
        //$sub1=$req->sub1;
        //$sub2=$req->sub2;
        //$sub3=$req->sub3;

        $res=GradecardModel::where('enrolment',$enrolment)->get();

        if($res->count()==0)
        {
            return redirect('gradepage')->with('errormsg','Record not found.');
        }
        else
        {
            return view('gradecard',['records'=>$res[0]]);
        }
    }
}
