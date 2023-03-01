<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactoy;
// use Illuminate\Database\Eloquent\Models;

class Offers extends User{
    
    public static function data(){
        $offers =[
    
    'header' => '-By Maria Jessica Jupillo',
    'desc' => 'Bubble Milktea',
    'desc2' => 'Life is full of PosibiliTEA',

            ];
    return $offers;

    }
}
 