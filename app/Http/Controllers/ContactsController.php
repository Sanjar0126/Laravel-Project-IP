<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    //

    public function __construct()
    {
       $this->middleware('auth'); //verified
    }
   /* protected function validate(Request $req) {
        $this->validate( $req,[
            'message' => 'required|text'
        ]);
    }*/
    public function index()
    {
        return view('contacts');
    }
    public function newContact(Request $req) {
        $this->validate($req, [
            'message' => 'required'
        ]);        
        $user = Auth::user();
        $contact = new Contact(
            [
                'id' => $user->id,
                'message' => $req->input('message')
            ]
        );
        $user->contacts()->save($contact);
        return redirect()->back()->with([
            'info' => 'message saved, Thank you'
        ]);
    }
}
