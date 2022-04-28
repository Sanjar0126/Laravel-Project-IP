<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Contact;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Translation\Dumper\JsonFileDumper;

class AdminHomeController extends Controller
{
    public function allUsers() {
        $users = User::all();

        error_log(print_r($users, 1));

        return view('admin/index', [
            'users' => $users
        ]);
    }
    public function allOrders() {
        $orders = Order::all();
        $users = User::all();
        return view('admin/orders', [
            'orders' => $orders,
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
    public function editOrderAdmin($id) {
        $str = $id;
        $len = (int)strlen($str);
        $index = (int)substr($str,$len-1,1);
        $id = (int)substr($str,0,$index);
        $role = (int)substr($str,$index,$len-$index-1);
        $order = Order::findOrFail($id);
        $order->status = $role;
        $order->save();
    }

    public function deleteOrderAdmin($id) {
        $order = Order::findOrFail($id);
        $order->delete();
    }
    public function deleteContactAdmin($id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    }
    public function allCategories() {
        $categories = Category::all();
        return view('admin/categories', [
            'categories' => $categories,
        ]);
    }
}
