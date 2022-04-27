<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\User;
use App\Contact;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Translation\Dumper\JsonFileDumper;

class AdminHomeController extends Controller
{
    public function allUsers() {
        $users = User::where('role','1')->get();

        return view('admin/index', [
            'users' => $users
        ]);
    }
    public function allBookings() {
        $bookings = Booking::all();
        $users = User::all();
        return view('admin/bookings', [
            'bookings' => $bookings,
            'users' => $users
        ]);
    }

    public function allContacts() {
        $contacts = Contact::all();
        $users = User::all();
        return view('admin/contacts', [
            'contacts' => $contacts,
            'users' => $users
        ]);
    }
    public function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();
    }
    public function editBookingAdmin($id) {
        $str = $id;
        $len = (int)strlen($str);
        $index = (int)substr($str,$len-1,1);
        $id = (int)substr($str,0,$index);
        $role = (int)substr($str,$index,$len-$index-1);
        $booking = Booking::findOrFail($id);
        $booking->status = $role;
        $booking->save();
    }

    public function deleteBookingAdmin($id) {
        $booking = Booking::findOrFail($id);
        $booking->delete();
    }
    public function deleteContactAdmin($id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    }
}
