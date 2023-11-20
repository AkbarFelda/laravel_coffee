<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailCoffeeController extends Controller
{
    public function index()
        {
            return view ('coffee.all', [
                "title" => "Coffee",
                "coffee" => coffee::all()
                ]
            ); 
        }

        // Controller
    public function showDetail($id)
        {       
            $coffee = Coffee::find($id); 
            return view('coffee.detail', ['coffee' => $coffee]);
        }

}
