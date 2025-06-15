<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function index()
     {
       $user = auth()->user();
       $orders = $user->orders()->with('user')->get();
    //  note:  SELECT * FROM orders WHERE user_id = 1;
        return view('admin.orders.index',compact('orders'));
     }
}
