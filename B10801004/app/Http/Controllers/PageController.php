<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function search (Request $request){
        $page = $request -> input('page');
        $type = 5000;
        return view('home', ['page' => $page, 'type' => $type]);
    }
}