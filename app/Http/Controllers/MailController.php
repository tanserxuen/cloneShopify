<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailTrap;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Order;

class MailController extends Controller
{
    public function send(){
        $data = array();

        // $id = Auth::id();
        $order = Order::orderBy('id', 'DESC')->first(); 
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

        $totalquantity = 0;
        for($i=0;$i<count($details->quantity);$i++){
            $totalquantity+=$details->quantity[$i];
        }
        
        array_push($data, $totalquantity);

        Mail::send('cust.orderSummaryMail', ["data"=>$data] , function($message){
            $message->to(Auth::user()->email, Auth::user()->name)
                    ->subject('Order Summary from Black Panther');
        });  
        // return view('cust.orderSummaryMail')->with('data', $data);
        // return $data;
        return view('cust.teapage');
    }
}
