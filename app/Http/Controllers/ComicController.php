<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        return view ('comics', ['comics'=>$comics]);
    }
}
