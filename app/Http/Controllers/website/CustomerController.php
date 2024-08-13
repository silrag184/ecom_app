<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\ShippingArea;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Session;
use function Illuminate\Validation\message;


class CustomerController extends Controller
{

    private $customer, $orders, $customer_id, $wishlist;
    public function registrationForm(){
        return view('website.customer.registration');
    }

    public function loginForm(){
        return view('website.customer.login');
    }

    public function saveCustomerInfo(Request $request){
        Customer::saveInfo($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);
        return back();

    }

    public function customerLoginCheck(Request $request){
        Customer::loginCheck($request);
        if (Session::get('product_id'))
        {
            $productId = Session::get('product_id');
            Session::forget(Session::get('product_id'));
            return  redirect('/product/details/'.$productId);
        }
        return redirect('/customer/dashboard');
    }

    public function logout(){
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }

    public function customerDashboard(){
        return view('website.customer.dashboard');
    }

    public function customerProfile(){
        return view('website.customer.profile',[
            'customer'=>Customer::find(Session::get('customer_id')),
        ]);
    }

    public function customerUpdateProfile(Request $request, $id){
        Customer::updateProfile($request, $id);
        return back()->with('message', 'Profile Info Updated');
    }

    public function customerWishlist(){
        return view('website.customer.wishlist',[
            'wishlists' => Wishlist::where('customer_id', Session::get('customer_id'))->latest()->get(),
        ]);
    }

    public function wishlist($id)
    {
        if (Session::get('customer_id'))
        {
            $this->customer_id = (Session::get('customer_id'));
            $wishlistProduct = Wishlist::where('customer_id', $this->customer_id)->where('product_id', $id)->first();
            if ($wishlistProduct)
            {
                return back()->with('message', 'This product already in your wishlist. Please chose another one.');
            }
            else
            {
                Wishlist::saveWishlist($id, $this->customer_id);
            }

            return back();
        }
        else
        {
            Session::put('product_id', $id);
            return redirect('/customer/login/');
        }

    }

    public function customerOrder(){
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->orderBy('id', 'desc')->get();
        return view('website.customer.order', ['orders'=>$this->orders]);
    }

    public function customerChangePassword(){
        return view('website.customer.change-password');
    }

    public function deleteWishlist($id){
        Wishlist::deleteWishlist($id);
        return back()->with('message', 'Your Wishlist Product Removed Successfully');
    }


}
