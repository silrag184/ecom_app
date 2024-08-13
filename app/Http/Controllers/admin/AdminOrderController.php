<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Pdf;

class AdminOrderController extends Controller
{
    public function index(){
        return view('admin.order.index',[
            'orders' => Order::latest()->get()
        ]);
    }

    public function detail($id){
        return view('admin.order.detail',['order' => Order::find($id)]);
    }

    public function invoice($id){

        return view('admin.order.invoice',[
            'order' => Order::find($id),
            'orderDetails' => OrderDetail::where('order_id',$id)->get()
        ]);
    }

    public function downloadInvoice($id){

        $pdf = Pdf::loadView('admin.order.download-invoice', [
            'order' => Order::find($id),
            'orderDetails' => OrderDetail::where('order_id',$id)->get()
        ]);
        return $pdf->stream('invoice.pdf');

    }

    public function edit($id){
        return view('admin.order.edit',['order' => Order::find($id), 'couriers' => Courier::all()]);
    }

    public function update(Request $request, $id){
        Order::updateOrder($request, $id);
        return redirect('/admin/all-order')->with('message', 'Order info updated Successfully');
    }

    public function delete(Request $request, $id){
        $order = Order::find($id);
        $orderDetails = OrderDetail::where('order_id',$id)->get();
        foreach ($orderDetails as $orderDetail){
            $orderDetail->delete();
        }
        $order->delete();

        return redirect('/admin/all-order')->with('message', 'Order info updated Successfully');

    }
}
