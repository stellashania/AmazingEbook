<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function rent(Request $request)
    {
        // $order = new Order();
        // $order->user_id = Auth::user()->id;
        // $order->ebook_id = $request->id;
        // $current_date = Carbon::now();
        // $order->order_date = $current_date->format('Y-m-d');

        $user_id = Auth::user()->id;
        $ebook_id = $request->id;
        $current_date = Carbon::now();
        $current_date = $current_date->format('Y-m-d');

        Order::create([
            'user_id' => $user_id,
            'ebook_id' => $ebook_id,
            'order_date' => $current_date
        ]);

        return redirect('cart');
    }

    public function display_all()
    {
        $user_id = Auth::user()->id;
        $allOrders = Order::where('user_id', '=', $user_id)->get();
        // dd($allOrders);

        $data = [
            'orders' => $allOrders
        ];

        return view('cart', $data);
    }

    public function delete_order(Request $request)
    {
        $order_id = $request->order_id;
        $order = Order::where('id', $order_id)->first();
        $order->delete();

        return redirect()->back();
    }

    public function submit_order()
    {
        $user_id = Auth::user()->id;
        Order::where('user_id', $user_id)->delete();

        return redirect()->back();
    }
}
