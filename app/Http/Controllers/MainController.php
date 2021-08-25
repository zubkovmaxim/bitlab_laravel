<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function index($slug){
        dd('hello '.$slug);
        return 'this is index';
    }
}
