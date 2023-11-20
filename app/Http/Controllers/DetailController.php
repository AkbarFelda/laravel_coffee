<?php

namespace App\Http\Controllers;
use App\Models\details;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        return view ('coffee.all', [
            "title" => "Coffee",
            "coffee" => coffee::all()
            ]
        ); 
    }

    public function show($coffees)
    {
        return view('coffee.detail', [
            "title" => "detail-coffee",
            "coffee" => coffee::find($coffees)
        ]);
    }
}
