<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\Food;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth'); //verified
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $contacts = Contact::orderBy('created_at','desc')->take(4)->get();
        $foods = Food::orderBy('rank', 'asc')
               ->take(4)
               ->get();

        return view('index',[
            'foods' => $foods,
            'contacts' => $contacts
        ]);
    }
    public function menu() {
        $foods = Food::all()->sortByDesc('rank');
        return view('menu',[
            'foods' => $foods 
        ]            
        );
    }
}
