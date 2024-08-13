<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Offer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductReview;
use App\Models\ProductSize;
use App\Models\ShippingArea;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Cart;
use Illuminate\Http\Request;
use Session;

class WebsiteController extends Controller
{

    private $product, $wishlist;
    public function index()
    {

        $offers = Offer::where('status', 1)->latest()->get();
        $data   =[];
        $index = 1;
        foreach ($offers as $offer){
            foreach ($offer->offerDetails as $offerDetail){
                $product = Product::find($offerDetail->product_id);
                $data[$index]['id']           = $product->id;
                $data[$index]['offer_id']     = $offer->id;
                $data[$index]['name']         = $product->name;
                $data[$index]['percentage']   = $offer->percentage;
                $data[$index]['image']        = $product->image;
                $data[$index]['sales_count']  = $product->sales_count;
                $index++;
            }
        }

        $key_values = array_column($data, 'sales_count');
        array_multisort($key_values, SORT_DESC, $data);
        $newArrayOne = array_slice($data, 0, 2, true);
        $newArrayTwo = array_slice($data, 3, 3, true);

        return view('website.home.index',[
//            'products'=>Product::where('status',1)->orderby('id','desc')->take(3)->get()
            'products'=>Product::where('status',1)->latest()->take(6)->get(),
            'subcategories' =>SubCategory::where('status',1)->get(),
            'offers' => Offer::where('status',1)->get(),
            'offer_one_products' => $newArrayOne,
            'offer_two_products' => $newArrayTwo
        ]);
    }

    public function product()
    {
        return view('website.product.index',[
            'products'=>Product::where('status',1)->latest()->get(),
            'cartsProduct'=>Cart::content(),
            'categories'=>Category::where('status',1)->get(),
        ]);
    }


    public function productDetails($id)
    {

        $this->product = Product::find($id);
        return view('website.product.product-details',[
            'product' => $this->product,
            'productColors' => ProductColor::where('product_id',$this->product->id)->get(),
            'productSizes' => ProductSize::where('product_id',$this->product->id)->get(),
            'productImages' => ProductImage::where('product_id',$this->product->id)->get(),
            'ShippingAreas'=>ShippingArea::all(),
            'cartsProduct'=>Cart::content(),
            'categories'=>Category::where('status',1)->get(),
            'reviews' => ProductReview::where(['product_id' => $id, 'status' =>1])->latest()->get(),
        ]);



//        return view('website.product.product-details');
    }

    public function cart()
    {
        return view('website.cart.index');
    }

    public function offer($id)
    {
        return view('website.product.offer-wise-product.product-offer', ['offer' => Offer::find($id)]);
    }

    public function review(Request $request, $id){
        ProductReview:: saveReview($request, $id);
        return back()->with('message', 'Review Post Successfully');
    }
    public function shippingPolicy(){
        return view('website.pages.shipping-policy', ['shipping_policy' => PrivacyPolicy::latest()->first()->shipping_policy]);
    }

    public function returnPolicy(){
        return view('website.pages.return-policy', ['return_policy' => PrivacyPolicy::latest()->first()]);
    }

    public function termsAndCondition(){
        return view('website.pages.terms-condition', ['terms_policy' => PrivacyPolicy::latest()->first()->terms_policy]);
    }

    public function ajaxProductSearch(){
        $searchText = $_GET['search_text'];
        $products = Product::where('name', 'like', '%' .$searchText. '%')->get();
        return response()->json($products);
    }

}
