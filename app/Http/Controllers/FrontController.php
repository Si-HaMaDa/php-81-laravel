<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        $loggedIn = "Mohamed";

        return view('home', [
            'name' => 'new Name',
            'loggedIn' => $loggedIn
        ]);
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
}
