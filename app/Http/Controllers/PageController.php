<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $name = 'Jan Remiel Menor';
        $email = '201910410@gordoncollege.edu.ph';
        return view('pages.home',compact('name','email'));
    }

    public function about()
    {
 
       
        return view('pages.about'); 
    }
}
