<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Translation\Dumper\JsonFileDumper;
use Illuminate\Support\Facades\Gate;

class BookingsController extends Controller
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
        $bookings = $user->bookings;
        return view('reservation/reservation',[
            'bookings' => $bookings
        ]);
    }
    public function newBooking(Request $req) {
        $this->validate($req, [
            'time' => 'required',
            'date' => 'required|date',
            'numPerson' => 'required|regex:/\d{1,}/',
            'message' => 'nullable'
        ]);        
        $user = Auth::user();
        $booking = new Booking(
            [
                'message' => $req->input('message'),
                'numPerson' => $req->input('numPerson'),
                'date' => $req->input('date'),
                'hour' => $req->input('time')
            ]
        );
        $user->bookings()->save($booking);
        return redirect()->route('reservation')->with([
            'info' => 'reservation saved, Thank you'
        ]);
    }


    public function getEdit($id) {
        $booking = Booking::find($id);
        return view('reservation/edit',[
            'booking' => $booking
        ]);
    }
    public function postEdit(Request $req) {
         $this->validate($req, [
            'time' => 'required',
            'date' => 'required|date',
            'numPerson' => 'required|regex:/\d{1,}/',
            'message' => 'nullable'
        ]); 
        $booking = Booking::find($req->input('id'));
        if(Gate::denies('update-smth', $booking)) {
            return redirect()->back()->with([
                'info' => "You are not authorized for edit!"
            ]);
        }
        $booking->message = $req->input('message');        
        $booking->hour = $req->input('time');        
        $booking->date = $req->input('date');        
        $booking->numPerson = $req->input('numPerson');
        $booking->save();
        return redirect()->route('reservation')->with([
            'info' => "Succeffully updated!"
        ]);
    }
    
    public function deleteBooking($id) {
        $booking = Booking::findOrFail($id);
        if(Gate::denies('update-smth', $booking)) {
            return redirect()->back()->with([
                'info' => "You are not authorized for delete!"
            ]);
        }
        
        $booking->delete();
    }
}
