<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Order;
use App\OrderDetails;
use App\Http\Resources\Order as OrderResource;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(3);
        return OrderResource::collection($orders);
        // $detailsId = OrderDetails::orderBy('id', 'DESC')->pluck('id')->first();
        // return $detailsId;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $details = new OrderDetails();
        $details->tea_id = $request['tea_id'];
        $details->unit_price = $request['unit_price'];
        $details->quantity = $request['quantity'];
        $details->save();

        $detailsId = OrderDetails::orderBy('id', 'DESC')->pluck('id')->first();

        $order = new Order();
        $order->order_id = $detailsId;
        $order->user_id = $request['user_id'];
        $order->customer_id = $request['customer_id'];
        $order->payment = $request['payment'];
        $order->shipping = $request['shipping'];
        $order->save();
        
        return new OrderResource($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return new OrderResource($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $order = Order::find($id);
    //     $order->tea_id = $request->input('tea_id');
    //     $order->customer_id = $request->input('customer_id');
    //     $order->shipping = $request->input('shipping');
    //     $order->save();

    //     return new OrderResource($order);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        if($order->delete()){
            return new OrderResource($order);
        }
    }

    public function getTea($id){

        

    }
}
