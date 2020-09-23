<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black Panther</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron">
            <div class="card">
                <div class="card card-head m-3">
                    <h2 class="pt-5 text-center">Order Summary</h2>
                    <div class="row m-3">
                        <div class="col-sm-6">
                            <p>User: {{$data[1]->name}}</p> 
                            <p>Order ID: {{$data[1]->order_id}}</p> 
                            <p>Payment Method: {{$data[0]->payment}}</p> 
                        </div>
                        <div class="col-sm-6">
                            <p>Purchased at: {{$data[2]->created_at}}</p> 
                            <p>Total Items: {{count($data[2]->tea_id)}}</p> 
                        </div>
                    </div>
                    <div class="card card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Quantity</th>
                                    <th>Price per Unit (RM)</th>
                                    <th>Subtotal (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-left">
                                    <td>
                                        @foreach ($data[2]->tea_id as $tea)
                                            <ol>{{$tea}}</ol>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data[2]->quantity as $quantity)
                                            <ol>{{$quantity}}</ol>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data[2]->unit_price as $unit_price)
                                            <ol>{{$unit_price}}</ol>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data[3] as $sub)
                                            <ol>{{$sub}}</ol>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    @if ($data[0]->shipping)
                                        <td class="text-right">+Shipping</td>
                                        <td class="text-center">4.99</td>
                                    @else
                                        <td></td>
                                        <td></td>
                                    @endif
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-right">Total:</td>
                                    <td class="text-center" style="border-top: 1px solid black;border-bottom: 1px double black;">RM {{$data[4]}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>