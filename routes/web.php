<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\SizeController;
use App\Http\Controllers\Admin\SupplierOrVendorController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UnitController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\admin\ShippingAreaController;
use App\Http\Controllers\website\CustomerController;
use App\Http\Controllers\website\CheckoutController;
use App\Http\Controllers\website\CategoryByProductController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\admin\AdminReviewController;
use App\Http\Controllers\admin\PrivacyPolicyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/ajax-product-search',[WebsiteController::class,'ajaxProductSearch'])->name('ajax-product-search');
Route::get('/offer-product/{id}',[WebsiteController::class,'offer'])->name('product-offer');
Route::post('/product-review/{id}',[WebsiteController::class,'review'])->name('product-review');
Route::get('/product',[WebsiteController::class,'product'])->name('product');
Route::get('/return-policy',[WebsiteController::class,'returnPolicy'])->name('return-policy');
Route::get('/shipping-policy',[WebsiteController::class,'shippingPolicy'])->name('shipping-policy');
Route::get('/terms-condition',[WebsiteController::class,'termsAndCondition'])->name('terms-condition');
Route::get('/product/details/{id}',[WebsiteController::class,'productDetails'])->name('product.details');
Route::get('/get-category-by-product/{id}',[CategoryByProductController::class,'index'])->name('product.category');
Route::get('/get-product-by-subcategory/{id}',[CategoryByProductController::class,'subCategoryWiseProduct'])->name('product.subCategory');


Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/customer-mobile-check',[CheckoutController::class,'customerMobileCheck'])->name('customer-mobile-check');
Route::get('/get-price-by-area',[CheckoutController::class,'getPriceByArea'])->name('get-price-by-area');
Route::post('/new-order',[CheckoutController::class,'newOrder'])->name('new-order');
Route::get('/complete-order',[CheckoutController::class,'completeOrder'])->name('complete-order');

Route::resources(['carts'=>CartController::class]);

Route::get('/customer/registration',[CustomerController::class,'registrationForm'])->name('customer.registration');
Route::post('/customer/registration',[CustomerController::class,'saveCustomerInfo'])->name('customer.registration');

Route::get('/customer/login',[CustomerController::class,'loginForm'])->name('customer.login');
Route::get('/customer/logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::post('/customer/login',[CustomerController::class,'customerLoginCheck'])->name('customer.login');


Route::get('/customer/dashboard',[CustomerController::class,'customerDashboard'])->name('customer.dashboard');
Route::get('/customer/profile',[CustomerController::class,'customerProfile'])->name('customer.profile');
Route::post('/customer/update-profile/{id}',[CustomerController::class,'customerUpdateProfile'])->name('customer.update-profile');
Route::get('/customer/order',[CustomerController::class,'customerOrder'])->name('customer.order');

Route::get('/customer/change-password',[CustomerController::class,'customerChangePassword'])->name('customer.change-password');

Route::get('/customer/wishlist/show',[CustomerController::class,'customerWishlist'])->name('customer.wishlist.show');
Route::get('/customer/wishlist/{id}',[CustomerController::class,'wishlist'])->name('customer.wishlist');
Route::get('/customer/delete/wishlist/{id}',[CustomerController::class,'deleteWishlist'])->name('customer.wishlist.delete');


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resources(['categories'=>CategoryController::class]);
    Route::resources(['subcategories'=>SubcategoryController::class]);
    Route::resources(['brands'=>BrandController::class]);
    Route::resources(['colors'=>ColorController::class]);
    Route::resources(['sizes'=>SizeController::class]);
    Route::resources(['supplier'=>SupplierOrVendorController::class]);
    Route::resources(['products'=>ProductController::class]);
    Route::resources(['units'=>UnitController::class]);
    Route::resources(['shippingAreas'=>ShippingAreaController::class]);

    Route::get('/get-sub-category-by-category',[ProductController::class,'getSubCategoryByCategory'])->name('get-sub-category-by-category');
    Route::get('/product/status/{id}',[ProductController::class,'info'])->name('products.status');
//    Route::resources(['company'=>CompanyController::class]); regular way//
    Route::resource('company',CompanyController::class); //another way//

    //order management Routes//
    Route::get('/admin/all-order',[AdminOrderController::class,'index'])->name('admin-order.manage');
    Route::get('/admin/order-detail/{id}',[AdminOrderController::class,'detail'])->name('admin-order.detail');
    Route::get('/admin/order-invoice/{id}',[AdminOrderController::class,'invoice'])->name('admin-order.invoice');
    Route::get('/admin/order-invoice-download/{id}',[AdminOrderController::class,'downloadInvoice'])->name('admin-order.download-invoice');
    Route::get('/admin/order-edit/{id}',[AdminOrderController::class,'edit'])->name('admin-order.edit');
    Route::post('/admin/order-update/{id}',[AdminOrderController::class,'update'])->name('admin-order.update');
    Route::post('/admin/order-delete/{id}',[AdminOrderController::class,'delete'])->name('admin-order.delete');

    //Courier Info//
    Route::resources(['courier'=>CourierController::class]);
    Route::resources(['offer'=>OfferController::class]);

    //Review
    Route::get('/all-product-review',[AdminReviewController::class,'review'])->name('all-product-review');
    Route::get('/update-review-status/{id}',[AdminReviewController::class,'reviewStatus'])->name('update-review-status');
    Route::post('/delete-review/{id}',[AdminReviewController::class,'deleteReview'])->name('delete-review');

    //policies
    Route::resource('privacy-policy',PrivacyPolicyController::class);
});
