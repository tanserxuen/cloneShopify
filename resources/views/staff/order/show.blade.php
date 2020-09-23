@extends('layouts.staff')

@section('staff_content')

    <div class="jumbotron m-5">
        <div class="container">

            <a href="/staff/orders" class="btn btn-light mb-3" title="Back to order lists">Go Back</a>

            <h2>Order History</h2>
            <br>
            <h4>Order Details (Order ID: {{$data[0]->order_id}})</h4>
            <table class="table table-striped">
                <thead class="table-primary">
                    <th>Order ID</th>
                    <th>Shipping</th>
                    <th>Payment</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Time</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data[0]->order_id}}</td>
                        <td>
                            @if($data[0]->shipping == 1)
                                <p>RM 4.99</p>
                            @else
                                <p> None </p>
                            @endif
                        </td>
                        <td>{{$data[0]->payment}}</td>
                        <td>RM {{number_format($data[4],2) }}</td>
                        @php
                            $format1 = 'Y-m-d';
                            $format2 = 'H:i:s';
                            $date = Carbon\Carbon::parse($data[0]->created_at)->format($format1);
                            $time = Carbon\Carbon::parse($data[0]->created_at)->format($format2);    
                        @endphp
                        <td>{{ date("Y-m-d", strtotime($date)) }}</td>
                        <td>{{ date("H:i:s", strtotime($time)) }}</td>
                    </tr>
                </tbody>
            </table>

            <br>
            <h4>Purchase Details</h4>
            <table class="table table-striped">
                <thead class="table-success">
                    <th>Item Code</th>
                    <th>Price Per Unit (RM)</th>
                    <th>Quantity</th>
                    <th>Subtotal (RM)</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @foreach($data[2]->tea_id as $tea)
                                <ol>{{$tea}}</ol>
                            @endforeach
                        </td>
                        <td>
                            @foreach($data[2]->unit_price as $p)
                                <ol>{{number_format($p,2)}}</ol>
                            @endforeach
                        </td>
                        <td>
                            @foreach($data[2]->quantity as $q)
                                <ol>{{$q}}</ol>
                            @endforeach
                        </td>
                        <td>
                            @foreach($data[3] as $subtotal)
                                <ol>{{number_format($subtotal,2)}}</ol>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
                <tfoot class="text-center">
                    @if ($data[0]->shipping == true)
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right">+</td>
                            <td>RM 4.99</td>
                        </tr>
                    @endif
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total:</td>
                        <td style="text-decoration-style: double; text-decoration-line:underline;"> RM {{number_format($data[4],2) }}</td>
                    </tr>
                </tfoot>
            </table>

            <h4>Customer Details</h4>
            <table class="table table-striped">
                <thead class="table-info">
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Register Date</th>
                    <th>Register Time</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">{{$data[1]->id}}</td>
                        <td>{{$data[1]->name}}</td>
                        <td>{{$data[1]->email}}</td>
                        @php
                            $format1 = 'Y-m-d';
                            $format2 = 'H:i:s';
                            $date = Carbon\Carbon::parse($data[1]->created_at)->format($format1);
                            $time = Carbon\Carbon::parse($data[1]->created_at)->format($format2);    
                        @endphp
                        <td>{{ date("Y-m-d", strtotime($date)) }}</td>
                        <td>{{ date("H:i:s", strtotime($time)) }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
        


        
