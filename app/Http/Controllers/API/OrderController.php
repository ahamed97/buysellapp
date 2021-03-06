<?php

namespace App\Http\Controllers\API;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        $order = Order::create([
            'customer_id' => $request->customer_id,
            'advertisement_id' => $request->advertisement_id,
            'order_details' => $request->order_details,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'description_3' => $request->description_3,
            'status' => 1,
        ]);

        $order = Order::find($order->id);

        return response()->json(['orderCreate' => [$order],'message'=>'Created'], 200);
    }

    public function destroy(Request $request)
    {

        $order = Order::where('id',$request->id)->delete();

        return response()->json(['orderDelete' => [],'message' => 'order deleted'], 200);
    }

    public function show(Request $request)
    {

        $order = Order::find($request->id);

        return response()->json(['order' => [$order],'message' => 'order get'], 200);
    }

    public function index(Request $request)
    {

        $orders = Order::query();

        if($request->customer_id){
            $orders = $orders->where('customer_id',$request->customer_id);
        }
        if($request->advertisement_id){
            $orders = $orders->where('advertisement_id',$request->advertisement_id);
        }
        if($request->status){
            $orders = $orders->where('status',$request->status);
        }
        if($request->seller_id){
            $sellerId = $request->seller_id;
            $orders = $orders->whereHas('advertisement',function($q) use($sellerId){
                $q->where('seller_id',$sellerId);
            });
        }

        $orders = $orders->get();

        return response()->json(['orders' => $orders,'message' => 'Orders get'], 200);
    }
}
