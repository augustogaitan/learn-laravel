<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        //$password = bcrypt('123456');
        //return $password;
        return view('index');
    }
    public function reviews()
    {
        return view('reviews');
    }
    public function contacto()
    {
        return view('contacto');
    }
}
