<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Translation\Dumper\JsonFileDumper;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    //
    /*
    public function validate(Request $req) {
        $this->validate( $req,[
            'date' => 'required|date',
            'hour' => 'required',
            'numPerson' => 'required'
        ]);
    }*/
    public function __construct()
    {
       $this->middleware('auth'); //verified
    }
    public function index()
    {
        $user = Auth::user();
        $orders = $user->orders;
        return view('reservation/reservation',[
            'orders' => $orders
        ]);
    }
    public function newOrder(Request $req) {
        $this->validate($req, [
            'time' => 'required',
            'date' => 'required|date',
            'message' => 'nullable'
        ]);        
        $user = User::user();
        $order = new Order(
            [
                'message' => $req->input('message'),
                'date' => $req->input('date'),
                'hour' => $req->input('time')
            ]
        );
        $user->orders()->save($order);
        return redirect()->route('reservation')->with([
            'info' => 'order saved, Thank you'
        ]);
    }


    public function getEdit($id) {
        $order = Order::find($id);
        return view('reservation/edit',[
            'order' => $order
        ]);
    }
    public function postEdit(Request $req) {
         $this->validate($req, [
            'time' => 'required',
            'date' => 'required|date',
            'message' => 'nullable'
        ]); 
        $order = Order::find($req->input('id'));
        if(Gate::denies('update-smth', $order)) {
            return redirect()->back()->with([
                'info' => "You are not authorized for edit!"
            ]);
        }
        $order->message = $req->input('message');        
        $order->hour = $req->input('time');        
        $order->date = $req->input('date');        
        $order->save();
        return redirect()->route('reservation')->with([
            'info' => "Succeffully updated!"
        ]);
    }
    
    public function deleteBooking($id) {
        $order = Order::findOrFail($id);
        if(Gate::denies('update-smth', $order)) {
            return redirect()->back()->with([
                'info' => "You are not authorized for delete!"
            ]);
        }
        
        $order->delete();
    }
}
