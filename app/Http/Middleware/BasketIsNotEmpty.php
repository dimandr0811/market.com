<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $orderID = session('orderID');

        if(!is_null($orderID)){
            $order = Order::findOrFail($orderID);
            if ($order->products->count()===0){
                session()->flash('warning', 'Ваша корзина пуста');
                return redirect()->route('index');
            }
        }
        return $next($request);
    }
}
