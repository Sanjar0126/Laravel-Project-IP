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

    public function index() {
        return view('index');
    }

    public function menu() {
        $foods = Food::all()->sortByDesc('rank');
        $categories = Category::all()->sortBy('order');
        return view('menu',[
            'foods' => $foods ,
            'categories' => $categories
        ]
        );
    }
}
