<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderDetails;
use App\User;

class Order extends Model
{
    protected $table = 'orders';
    
    protected $fillable = [
        'order_id', 'user_id', 'customer_id', 'shipping', 'payment'
    ];

    // public function teas(){
    //     return $this -> hasMany(Tea::class);
    // }

    public function user(){
        return $this -> belongsTo(User::class, 'user_id', 'id');
    }

    public function details(){
        return $this -> hasMany(OrderDetails::class, 'id', 'order_id');
    }

}
