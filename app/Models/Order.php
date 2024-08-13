<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    private static $order;
    public static function newOrder($request, $customer){
        self::$order = new Order();
        self::$order->customer_id       = $customer->id;
        self::$order->shipping_area_id  = $request->area;
        self::$order->order_total       = $request->order_total;
        self::$order->tax_total         = $request->tax_total;
        self::$order->shipping_total    = $request->shipping_total;
        self::$order->order_date        = date('y-m-d');
        self::$order->order_timestamp   = strtotime(date('y-m-d'));
        self::$order->delivery_address  = $request->address;
        self::$order->payment_method    = $request->payment_method;
        self::$order->save();
        return self::$order;
    }

    public static function updateOrder($request, $id){
        self::$order = Order::find($id);
        if (self::$order->order_status == 'Pending') {

            self::$order->order_status          = $request->order_status;
            self::$order->delivery_status       = $request->order_status;
            self::$order->payment_status        = $request->order_status;

        }
        elseif (self::$order->order_status == 'Processing'){

            self::$order->courier_id            = $request->courier_id;
            self::$order->order_status          = $request->order_status;
            self::$order->delivery_address      = $request->delivery_address;
            self::$order->delivery_status       = $request->order_status;
            self::$order->payment_status        = $request->order_status;
        }
        elseif (self::$order->order_status == 'Complete'){

            self::$order->order_status           = $request->order_status;
            self::$order->delivery_status        = $request->order_status;
            self::$order->delivery_date          = date('Y-m-d');
            self::$order->delivery_timestamp     = strtotime(date('Y-m-d'));
            self::$order->payment_status         = $request->order_status;
            self::$order->payment_amount         = self::$order->order_total;
            self::$order->payment_date           = date('Y-m-d');
            self::$order->payment_timestamp      = strtotime(date('Y-m-d'));
        }
        elseif (self::$order->order_status == 'Cancel'){

            self::$order->order_status          = $request->order_status;
            self::$order->delivery_status       = $request->order_status;
            self::$order->payment_status        = $request->order_status;
        }
        self::$order->save();

    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
