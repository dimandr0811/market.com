<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        // сессия с key orderID
        $orderID = session('orderID');

        //Если не нулевое, тогда в переменную записываем из таблицы ордер по ордер_айди товар. Если нулевое, то ничего
        //не делать, соотвественно в view баскет ничего не пойдет под переменной ордер и корзина будет пустая
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
        // Создаем переменную, где key сессии orderID. Изначально null
        $orderID = session('orderID');
        // если null, то создаем запись в бд, в таблице order через create.
        if(is_null($orderID)){
            $order = Order::create();
            // в key сессии записываем этот айди
            session(['orderID' => $order->id]);
        } else {
            // если найден key orderID, то есть он не пустой, значит мы находим этот айди в таблице Order
            $order = Order::find($orderID);
        }
        // Проверить или есть такой товар уже в списке
        if ($order->products->contains($productId)){
            //Если есть, то найти его count и увеличить на 1
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            // затем мы в переменную, где есть таблица ордер, прикрепляем товар по его айди.
            // Айди берется из адресной строки. Так делается каждый раз когда переходим на товар
            $order->products()->attach($productId);
        }



        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $orderID = session('orderID');
        if(is_null($orderID)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderID);
        $order->products()->detach($productId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
            return redirect()->route('basket');

    }

}
