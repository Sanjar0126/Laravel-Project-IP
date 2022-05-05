<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\Food;
use App\Category;

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
        $categories = Category::all()->sortByDesc('order');
        return view('menu',[
            'foods' => $foods ,
            'categories' => $categories
        ]
        );
    }
}
