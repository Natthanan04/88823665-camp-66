<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function multiplication(Request $req){
        $number = $req->input('number');
        $multiplicationTable = [];
        for($i = 1; $i <= 12; $i++){
            $multiplicationTable[$i] = $number * $i;
        }
        return view('multiplication',['number' => $number, 'multiplicationTable' => $multiplicationTable]);
    }
    
}
