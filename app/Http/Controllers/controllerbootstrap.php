<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;

class controllerbootstrap extends Controller   
{
    public function index(){

        return view('HAD.index',
        
        ['data'=> Offers::all()]); 
    }

}
