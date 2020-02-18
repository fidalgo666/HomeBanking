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


    public function index()
    {

        // $balance = Balance::insert(['nombre' => 'nombre transaccion', 'referencia' => 'hd7655', 'importe' => '5467,34']);
    	$balance = Balance::orderBy('id','ASC')->get();
        return view('about')->with('about' , $balance);

//        $balance = Balance::orderBy('id', 'DESC')->get(); trae con info ordenada de la columna "id" de manera descendente

}

    public function payService(Request $request){
        $service = $request->get('service');
        $money = $request->get('money');
    }







}

