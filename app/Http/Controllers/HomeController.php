<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $users = User::paginate(2);//Manggil semua dari table users
        return view('home',compact('users'));
    }

    public function showPrinter() {
        return view('file');
    }

    public function showPrintPreview() {
        return view('print');
    }
}
