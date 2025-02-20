<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    //
    public function index(){
        return view('parkings.index');
    }

    public function create(){
        return view('parkings.create');
    }
}
