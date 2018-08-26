<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use routes\web;
use Illuminate\img;
use App\Http\Controllers\Controller;


class TestController extends Controller
{/**
   *@return \Illuminate\Http\Response
*/
public function index()
{
return view ('index');
return view ('Contactos');
return view ('event');
return view ('service');
}
/**
@return 
*/
public function create()
{
//
}
}


