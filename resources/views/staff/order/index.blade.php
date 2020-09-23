@extends('layouts.staff')

@section('staff_content')

    <div class="jumbotron m-5">

        <h2>Order History</h2>
        <br>
        {{ $orders->links() }}
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Shipping</th>
                    <th>Payment Type</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td><a href="/staff/orders/{{$order->id}}" title="Click to view details">{{$order->id}}</a></td>
                        <td>{{$order->order_id}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>
                            @if($order->shipping == 1)
                                <p>RM 4.99</p>
                            @else
                                <p> None </p>
                            @endif
                        </td>
                        <td>{{$order->payment}}</td>
                        @php
                            $format1 = 'Y-m-d';
                            $format2 = 'H:i:s';
                            $date = Carbon\Carbon::parse($order->created_at)->format($format1);
                            $time = Carbon\Carbon::parse($order->created_at)->format($format2);    
                        @endphp
                        <td>{{ date("Y-m-d", strtotime($date)) }}</td>
                        <td>{{ date("H:i:s", strtotime($time)) }}</td>
                    </tr>
                @endforeach
                
            </tbody>
            
        </table>
    </div>
    
@endsection
        


        
