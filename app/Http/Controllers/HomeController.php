<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $userCards = \App\User::find(1)->cards()->get();
        $allCards = DB::table('cards')->get();

        return view('home', [
            'user' => Auth::user(),
            'userCards' => $userCards,
            'allCards' => $allCards,
        ]);
    }
}
