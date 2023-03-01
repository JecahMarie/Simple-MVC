<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offers;

class controllerbootstrap extends Controller   
{
    public static function Index(){
        return view('HAD.index',['data'=> Offers::data()]); 
    }

}
