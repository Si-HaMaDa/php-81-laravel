<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function db_test()
    {
        // SELECT * FROM flights

        // $flight = DB::table('flights')->find(5);

        // $flights = DB::table('flights')->get();

        // $flights = DB::table('flights')->pluck('name', 'id');

        // ->get();
        // ->where('id', '>', '5')

        // dd(
        //     $flights,
        //     'DB test'
        // );

        // $flights = DB::table('flights')->orderBy('id', 'desc')->select('name', 'id', 'color', 'number')->paginate(3);

        $flights = Flight::orderBy('id', 'desc')->select('name', 'id', 'color', 'number')->paginate(3);

        return view('flights', ['flights' => $flights]);
    }
}
