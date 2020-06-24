<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderID = session('orderID');
        if(!is_null($orderID)){
            $order = Order::findOrFail($orderID);
        }
        return view('basket',compact('order') );
    }

    public function basketPlace()
    {
        return view('order' );
    }

    public function basketAdd($productId)
    {
        $orderID = session('orderID');
        if(is_null($orderID)){
            $order = Order::create()->id;
            session(['orderID' => $order->id]);
        } else {
            $order = Order::find($orderID);
        }

        $order->products()->attach($productId);


        return view('basket', compact('order'));
    }
}
