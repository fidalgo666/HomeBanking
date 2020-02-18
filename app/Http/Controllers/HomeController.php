<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index2($vista)
    {
        if($vista == 1){
        return view('index');
        } else{
            return "La vista no existe!";
        }
    }


    public function index($vista)
    {

 

}

    public function payService(Request $request){
        $service = $request->get('service');
        $money = $request->get('money');
    }







}

