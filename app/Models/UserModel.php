<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $table='emailpassveri';
    public $timestamps=false;
}
//creted at & updated at are two things that laravel automatically intializes
//it needs to be in mind
//before practicing laravel as learning purpose
//it is necessary to give timestamps value as false so both the above
//functions are not executed in the background