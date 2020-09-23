<?php

namespace App\Http\Controllers;
use App\Tea;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DisplayTeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(10);
        
        return view('staff.order.index')->with('orders', $orders);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();

        $order = Order::find($id); 
        array_push($data, $order);

        $user = $order->user()->first();
        array_push($data, $user);
       

        $details = $order->details()->first();
        array_push($data, $details);

        $subtotal=array();
        for($i =0;$i<count($details->tea_id);$i++){
            $s=0;
            $s=$details->unit_price[$i]*$details->quantity[$i];
            array_push($subtotal, $s);
        }
        array_push($data, $subtotal);

        $total = 0;
        for($i=0;$i<count($subtotal);$i++){
            $total+=$subtotal[$i];
        }

        if($order->shipping == 1){
            $total+=4.99;
        }
        
        array_push($data, $total);

        // return $data;
        return view('staff.order.show')->with('data', $data);
        
    }

}
