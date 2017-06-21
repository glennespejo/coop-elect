<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ('admin' === Auth::user()->type) {
            return view('home');
        }

        return redirect()->route('index');

    }

    public function election()
    {
        return view('election');
    }

    public function user()
    {
        return view('user');
    }
}
