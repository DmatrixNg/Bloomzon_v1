<?php

use App\Http\Controllers\Web\Buyer\DashboardController;
use App\Http\Controllers\Web\Buyer\FavoriteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// provides the APP\HTTP\CONTOLLERS NAMESPACE

Route::get('/rename_table',function(){

dump("enter old and new name eg /{before}/{after}");

});
Route::get('/rename_table/{before}/{after}',function(Request $request){
  if ($request->before && $request->after) {
    Schema::rename($request->before,$request->after);
  dump("done");
  }
  return dump("enter old and new name eg /{before}/{after}");

});
Route::get('test/product', function () {
  $first = \App\Product::all();
  foreach ($first as $key => $value) {
dump($value->seller_class);
 }
  // dd($first->seller_class);
});
Route::get('manufacturer/logout', 'Web\Manufacturer\Auth\LoginController@logout')->name('logout');

Route::GET('/realestate',function(){
    return view('front.realestate');
});


Route::get('home/{page?}','HomeController@home')->name('home');

Route::GET('/chat',function(){
    return view('front.chat');
});

Route::view('/test', 'emails.new_chat_notification');

Route::get('bloomzontravels',function(){
    return view('front.bloomzontravels');
});
Route::get('bloomzontravels',function(){
    return view('front.bloomzontrip');
});


Route::get('/', 'HomeController@index');
Route::post('/uploadImage','ProductController@upload_image');
Route::post('/deleteImage','ProductController@delete_image');

Route::get('/not-found',function(){
    return view('front.404');
});

Route::post('/order/create','OrderController@create');

Route::get('/track-delivery/{id?}','OrderController@trackDelivery');

Route::get('track-order/{id}','OrderController@trackDelivery');
Route::post('track-order/{id}','OrderController@trackDelivery');

Auth::routes();
Route::get('/logout',function(){
    Auth::logout();
});
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/product-details/{id}','ProductController@show');
Route::post('/product/reviews/add','ProductController@addReview');

//gets the subcategories
Route::post('/product/getSubCategories/{id}','ProductController@getSubCategories');
// Cart System Routes

Route::get('/cart','CartController@displayCart');
Route::get('/cart/add/{product_id}/{qty}','CartController@addToCart');
Route::get('/cart/increase/{product_id}/{qty}','CartController@addToCart');
Route::get('/cart/decrease/{product_id}/{qty}','CartController@redItemQty');
Route::get('/cart/remove/{product_id}','CartController@removeItem');
Route::post('/cart/add-coupon/','CartController@addCoupon');
Route::post('/cart/clear','CartController@clearCart');


Route::get('/checkout','CartController@checkout');
Route::get('/get_categories', 'Web\Admin\CategoryController@get_all_catgeory');
Route::get('/all_categories', 'Web\Admin\CategoryController@index');
Route::get('/convert/{total}', 'CartController@getConversion');

Route::get('/category/{id}/{subid?}','HomeController@show_category');

//paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
// Route::post('/order', 'PaymentController@order')->name('order');
Route::get('/paid', 'PaymentController@handleGatewayCallback');


Route::get('/fast-foods','HomeController@fast_foods')->name('fast-foods');
Route::get('/vendor-food-list/{id?}','HomeController@vendor_food_list');
Route::get('/fast-food-details/{id}','HomeController@fast_food_details')->name('fast-food-details');
Route::get('/groceries','HomeController@groceries')->name("groceries");

// Route::get('/manufacturers','HomeController@manufacturers')->name('manufacturers');
Route::get('/sellers','HomeController@sellers')->name('sellers');
Route::get('/seller-details/{id}','HomeController@seller_details')->name('seller-details');
Route::get('/seller-product-list/{id?}','HomeController@seller_product_list');



Route::get('/proservice','HomeController@proservice')->name('proservice');
Route::get('/fashion_design','HomeController@fashion')->name('fashion');
Route::get('/proservice-details/{id}','HomeController@proservice_details')->name('proservice_details');
// Route::get('/proservice','HomeController@proservice')->name('proservice');

//AGENTS
Route::get('/agents','HomeController@agents')->name('agents');
Route::get('/networkingagent-details/{id}','HomeController@agent_details')->name('fast-food-details');

Route::get('/shop','HomeController@shops');

// chat
Route::post('/chat/new_chat','ChatController@new_chat')->name('chat.new');
Route::post('/chat/replies','ChatController@chat_replies')->name('chat.replies');
Route::post('/chat/reply','ChatController@reply')->name('chat.reply');
Route::post('/chat/continue','ChatController@continue')->name('chat.continue');

// manufacturer
Route::get('/manufacturers','ManufacturerController@index')->name('manufacturers');
Route::get('/manufacturer-details/{id}','ManufacturerController@show');

//all the admin routes will be defined here...
Route::prefix('/admin')->name('admin.')->namespace('Web\Admin')->group(function () {

    // all admin authentication routes
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    // all admin protected routes, user must be login as admin to access these routes
    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', 'DashboardController@index');
        Route::get('/profile', 'ProfileController@index');

        // categories
        Route::get('/create_category', 'CategoryController@create_category');
        Route::post('/store_category', 'CategoryController@store_category');
        Route::get('/all_categories', 'CategoryController@index');

        // subcategories
        Route::get('/create_subcategory', 'CategoryController@create_subcategory');
        Route::post('/store_subcategory', 'CategoryController@store_subcategory');

        // messages and replies
        Route::post('/create_message', 'MessageController@create_message');
        Route::get('/all_messages', 'MessageController@all_messages')->name('all-messages');
        Route::get('/replies/{message_id}', 'MessageController@get_replies');
        Route::post('/reply/{message_id}', 'MessageController@reply');

        // query
        Route::get('queries', 'QueryController@queries')->name('queries');
        Route::get('create_query/{id}','QueryController@create_query');
        Route::post('store_query','QueryController@store_query');
        // Route::post('/all_queries', 'MessageController@all_queries');
        Route::post('/super_admin_reply/{query_id}', 'QueryController@super_admin_reply');
        Route::post('/sub_admin_reply/{query_id}', 'QueryController@sub_admin_reply');
        Route::get('/query_replies/{query_id}', 'QueryController@get_replies');

        // users
        Route::get('create_user', 'UserController@create')->name('create-user');
        Route::post('store_user', 'UserController@store');
        Route::get('all_sellers', 'UserController@all_sellers');
        Route::get('get_users/{user_type}', 'UserController@show_users');
        Route::post('get_users/{user_type}', 'UserController@get_users');
        //DELETE USER
        Route::post('delete-user/{usertype}/{id}','UserController@destroyUser');
        Route::post('change_status/{usertype}/{id}','UserController@change_status');
        //CHANGE STATUS
        Route::post('change-status/sub_admin/{id}','UserController@changeAdminStatus');
        //MAKE SELLER BLOOMZON
        Route::post('make-bloomzon-seller/{id}','UserController@makeBloomzonSeller');


        //BRANDS
        Route::get('all-brands','BrandController@index')->name('all-brands');
        Route::get('create-brands','BrandController@create')->name('create-brand');
        Route::post('store-brand','BrandController@store');
        Route::post('change-brand-status','BrandController@changeStatus');
        Route::post('delete-brand/{id}','BrandController@destroy');
        // REVIEWS
        Route::get('reviews', 'ReviewController@index');
        Route::post('/reveiw/change_status/{id}', 'ReviewController@change_status');

        //ADVERTS
        Route::get('all-adverts','AdvertController@index')->name('all-adverts');
        Route::get('create-advert','AdvertController@create')->name('create-advert');
        Route::post('post-ads','AdvertController@store')->name('post-ads');
        Route::post('change-advert-status','AdvertController@changeStatus');
        Route::post('delete-advert/{id}','AdvertController@destroy');


        //New Push

        //FOOD CATALOGUE
        Route::get('food-catalagues','FoodCatalogueController@index')->name("food-catalogues");
        Route::get('create-catalogue','FoodCatalogueController@create')->name("create-catalogue");
        Route::post('store-catalogue','FoodCatalogueController@store')->name("store-catalogue");
        Route::get('edit-catalogue/{id}','FoodCatalogueController@show')->name("edit-catalogue");
        Route::post('update-catalogue','FoodCatalogueController@update')->name("update-catalogue");
        Route::post('delete-catalogue/{id}','FoodCatalogueController@destroy');


        //All SUBADMIN
        Route::get('all-subadmin','SubAdminController@index')->name("all-subadmin");
        Route::get('create-subadmin','SubAdminController@create')->name("create-subadmin");


        Route::get('settings','SettingController@index');
        Route::get('account-statement','SettingController@accountStatement');
        Route::get('privacy-policy','SettingController@privacyPolicy');
        Route::get('terms','SettingController@terms');
        Route::get('right-of-purchase','SettingController@rightOfPurchase');
        Route::get('refund','SettingController@refund');
        Route::post('save-setting/','SettingController@storeData');

        Route::get('payout-request',"PayoutRequestController@index");

        Route::get('site-config','SiteConfigController@index')->name('site-config');
        Route::get('set-configuration',"SiteConfigController@update")->name('set-config');

        Route::get('site-config','SiteConfigController@index')->name('site-config');
        Route::get('set-configuration',"SiteConfigController@update")->name('set-config');

        // manufacturer chat
        Route::get('manufacturer-chats',"ChatController@index");
        Route::get('manufacturer-replies/{id}',"ChatController@show_chat_replies");
        Route::post('/chat/new_chat','ChatController@new_chat')->name('chat.new');
        Route::post('/chat/replies','ChatController@chat_replies')->name('chat.replies');
        Route::post('/chat/reply','ChatController@reply')->name('chat.reply');
        Route::post('/chat/continue','ChatController@continue')->name('chat.continue');

        // manufacturer requests
        Route::post('send-request',"RequestController@store");
        Route::post('send-update',"RequestController@update");

        // bz products
        Route::get('bloomzonproducts',"BloomzonProductController@index");

        // ADD PRODUCT
        // Route::get('add-new-product', 'ProductController@create')->name('add-new-product');
        Route::post('product/add', 'BloomzonProductController@store');
        Route::get('product/all/', 'BloomzonProductController@index')->name('all-my-products');
        Route::post('product/delete/{id}','BloomzonProductController@destroy');
        Route::get('product/edit/{id}','BloomzonProductController@edit')->name('edit-product');
        Route::post('product/update/{id}','BloomzonProductController@update');


    });


});

//all the buyer routes will be defined here...
Route::prefix('/buyer')->name('buyer.')->namespace('Web\Buyer')->group(function () {

    // all buyer authentication routes
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });



    // all buyer protected routes, user must be login as buyer to access these routes
    Route::middleware('auth:buyer')->group(function () {

        Route::get('/dashboard', 'DashboardController@index');

        Route::get('/profile', 'ProfileController@index');
        //ADD TO FAVORITE
        Route::post('/favorite/add', 'FavoriteController@create');
        Route::post('favorite/remove', 'FavoriteController@destroy');
        Route::get('favorites','FavoriteController@index')->name('favorites');
        Route::put('edit-profile/{id}', 'ProfileController@update');
        //display account information
        Route::get('/account-information', function () {
            $buyer = Auth::guard('buyer')->user();
            return view('dashboard.buyer.account-information', compact(['buyer']));
        });

        //edit profile
        Route::get('edit-profile', function () {
            $buyer = Auth::guard('buyer')->user();
            return view('dashboard.buyer.edit-profile', compact(['buyer']));
        });
        Route::get('edit-login-details', function () {
            $buyer = Auth::guard('buyer')->user();
            return view('dashboard.buyer.edit-login-details', compact(['buyer']));
        });
        //update account details
        Route::get('update-account-details', function () {
            $buyer = Auth::guard('buyer')->user();
            return view('dashboard.buyer.update-account-details', compact(['buyer']));
        });


        //contact admin
        Route::get('contact-admin', function () {
            $buyer = Auth::guard('buyer')->user();
            $ticket = 'B'.time().rand(0,99999);
            return view('dashboard.buyer.contact-admin', compact(['buyer','ticket']));
        });

        // PURCHASE HISTORY
        Route::get('purchase-history/','PurchaseHistoryController@index')->name('purchase-history');

        Route::get('track-order',function(){
            return view('dashboard.buyer.track-order');
        });

        Route::get('view-order-details/{id}','PurchaseHistoryController@view_order_details');

        Route::get('notifications/{id}','DashboardController@notification');
        Route::get('favorites/{id}','DashboardController@favorites');


        Route::get('products/bloomzon','DashboardController@bloomlist');
        //POINTS
        Route::get('points','DashboardController@points');

        //DELIVERY STATUS
        Route::get('delivery-status/{id}','DashboardController@deliveryStatus')->name('delivery-status');
        Route::get('delivery-status','DashboardController@allStatus')->name('all-delivery');

        //ADVERT ROUTES
        Route::get('my-ads','AdvertController@index')->name('all-ads');
        Route::get('post-new-ads/','AdvertController@create')->name('post-new-ads');
        Route::post('post-ads/','AdvertController@store');
        Route::post('delete-ads/{id}','AdvertController@destroy');
        Route::post('change-ads-status/{id}','AdvertController@change_status');
        // message
        Route::get('messages', 'MessageController@messages')->name('messages');;
        Route::get('create_message','MessageController@create_message');
        Route::post('store_message','MessageController@store_message');
        Route::post('/all_messages', 'MessageController@all_messages');
        Route::post('/reply/{message_id}', 'MessageController@reply');
        Route::get('/message_replies/{message_id}', 'MessageController@get_replies');

        Route::get('/reviews-and-feedback','ReviewController@index')->name('reviews');
        Route::get('/reply-review/{id}','ReviewController@reply')->name('reply-reviews');
        Route::post('/reply-review','ReviewController@storeReply')->name('reply-reviews');

        Route::get('/payment_history','PurchaseHistoryController@paymentHistory')->name('payment-history');

        //

    });
});

//all the manufacturer routes will be defined here...
Route::prefix('/manufacturer')->name('manufacturer.')->namespace('Web\Manufacturer')->group(function () {

    // all manufacturer authentication routes
    Route::namespace('Auth')->group(function () {

        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');


        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        // veryfy email
        Route::post('/verify_email', 'LoginController@verify_email')->name('verify_email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    // email verification page
    Route::view('/verify_email', 'front.email_verification')->name('verify_email');
    Route::view('/accept_terms_and_conditions', 'front.terms_and_conditions')->name('accept_terms_and_conditions');
    Route::post('/accept_terms', 'ProfileController@accept_terms')->name('accept_terms');

    // all manufacturer protected routes, user must be login as manufacturer to access these routes
    Route::middleware(['auth:manufacturer', 'manufacturer_has_verified', 'manufacturer_accept_terms_and_conditions'])->group(function () {
        // dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        // profile
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::get('/view-profile', 'ProfileController@show')->name('view-profile');
        Route::get('/edit-profile', 'ProfileController@edit')->name('edit-profile');
        Route::post('/update-profile', 'ProfileController@update')->name('update-profile');
        Route::post('/update_profile', 'ProfileController@update_profile')->name('update-profile');
        Route::get('/edit_account_details', 'ProfileController@edit_account_details')->name('edit-account-details');
        Route::post('/update_account_details', 'ProfileController@update_account_details')->name('update-account-details');
        Route::get('/settings', 'ProfileController@settings')->name('settings');
        Route::post('/settings', 'ProfileController@save_settings')->name('settings');
        Route::get('/subscription', 'ProfileController@subscription');
        Route::post('/subscribe', 'ProfileController@subscribe');
        Route::get('/verification', 'ProfileController@verification');
        Route::post('/verify', 'ProfileController@verify');

        // message
        Route::get('messages', 'MessageController@messages')->name('messages');;
        Route::get('create_message','MessageController@create_message');
        Route::post('store_message','MessageController@store_message');
        Route::post('/all_messages', 'MessageController@all_messages');
        Route::post('/reply/{message_id}', 'MessageController@reply');
        Route::get('/message_replies/{message_id}', 'MessageController@get_replies');

        //ADVERT
        Route::get('all-ads/','AdvertController@index')->name('all-ads');
        Route::get('post-new-ads','AdvertController@create')->name('post-new-ads');
        Route::post('post-ads/','AdvertController@store');
        Route::post('delete-ads/{id}','AdvertController@destroy');
        Route::post('change-ads-status/{id}','AdvertController@change_status');

        // ADD PRODUCT
        Route::get('/product/all/','ProductController@index')->name('products');
        Route::get('/product/add/','ProductController@create')->name('add-product');
        Route::get('/product/edit/{id}','ProductController@edit')->name('edit-product');
        Route::post('product/add', 'ProductController@store');
        Route::post('/product/edit/{id}','ProductController@update');
        Route::post('product/delete/{id}','ProductController@destroy');

        //WALLET
        Route::get('wallet','WalletController@index')->name('wallet');
        Route::post('cashout','WalletController@cashOut')->name('cash-out');

        // manufacturer requests
        Route::get('requests',"RequestController@index");
        Route::get('request-details/{id}',"RequestController@show");
        Route::get('request-status/{id}',"RequestController@show_status");
        Route::post('request-update/{id}',"RequestController@update_status");
    });
});

//all the networking_agent routes will be defined here...
Route::prefix('/networking_agent')->name('networking_agent.')->namespace('Web\Networking_agent')->group(function () {

    // all networking_agent authentication routes
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    // all networking_agent protected routes, user must be login as networking_agent to access these routes
    Route::middleware('auth:networking_agent')->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/profile', 'ProfileController@index')->name('profile');
         //edit profile
         Route::get('edit-profile','ProfileController@edit_profile')->name('edit-profile');
        Route::put('edit-profile/{id}', 'ProfileController@update');
        Route::put('edit-bank-account/{id}', 'ProfileController@updateBankAccount');
        //update account details
        Route::get('update-account-details', function () {
            $user = Auth::guard('seller')->user();
            return view('dashboard.seller.update-account-details', compact(['user']));
        });

        Route::get('/account-information', 'ProfileController@account_info');



        Route::get('/notifications',function(){
            return view('dashboard.networking_agent.notification');
        })->name('notifications');



        Route::get('/create-seller','SellerController@index')->name('create-seller');
        Route::post('/save-seller','SellerController@create');


        Route::get('/pre-chart',"SellerController@pre_chart")->name('pre-chart');

        Route::get('/verification',function(){
            return view('dashboard.networking_agent.verification');
        })->name('verification');

        Route::post('/verify_account',"ProfileController@verify_account");

         //WALLET
         Route::get('/wallet',"WalletController@index")->name('wallet');
         Route::post('cashout','WalletController@cashOut')->name('cash-out');



        // message
        Route::get('messages', 'MessageController@messages')->name('messages');
        Route::get('create_message','MessageController@create_message');
        Route::post('store_message','MessageController@store_message');
        Route::post('/all_messages', 'MessageController@all_messages');
        Route::post('/reply/{message_id}', 'MessageController@reply');
        Route::get('/message_replies/{message_id}', 'MessageController@get_replies');

        // accountupgrade
        Route::get('/accountupgrade/', 'ProfileController@upgrade_account');
        Route::post('/account_upgrade/', 'ProfileController@upgrade');


          ///ADVERTS
        Route::get('all-ads/','AdvertController@index')->name('all-ads');
        Route::get('post-new-ads','AdvertController@create')->name('post-new-ads');
        Route::post('post-ads/','AdvertController@store');
        Route::post('delete-ads/{id}','AdvertController@destroy');
        Route::post('change-ads-status/{id}','AdvertController@change_status');



    });
});

//all the professional routes will be defined here...
Route::prefix('/professional')->name('professional.')->namespace('Web\Professional')->group(function () {

    // all professional authentication routes
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    // all professional protected routes, user must be login as professional to access these routes
    Route::middleware('auth:professional')->group(function () {

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/profile', 'ProfileController@index')->name('profile');
         //edit profile
         Route::get('edit-profile','ProfileController@edit_profile')->name('edit-profile');
        Route::put('edit-profile/{id}', 'ProfileController@update');
        Route::put('edit-bank-account/{id}', 'ProfileController@updateBankAccount');
        //update account details
        Route::get('update-account-details', function () {
            $user = Auth::guard('seller')->user();
            return view('dashboard.seller.update-account-details', compact(['user']));
        });

        Route::get('/account-information', 'ProfileController@account_info');


        Route::get('/notifications',function(){
            return view('dashboard.professional.notifications');
        })->name('notifications');
        Route::get('/messages', function(){
            return view('dashboard.professional.messages');
        })->name('messages');


        Route::get('/contact',function(){
            return view('dashboard.professional.contact-admin');
        })->name('contact');
        Route::get('/verification',function(){
            return view('dashboard.professional.verification');
        })->name('verification');

        //ADVERTS
        Route::get('all-ads/','AdvertController@index')->name('all-ads');
        Route::get('post-new-ads','AdvertController@create')->name('post-new-ads');
        Route::post('post-ads/','AdvertController@store');
        Route::post('delete-ads/{id}','AdvertController@destroy');
        Route::post('change-ads-status/{id}','AdvertController@change_status');

        //Products Routes
        Route::get('/product/all/','ProductController@index')->name('products');
        Route::get('/product/add/','ProductController@create')->name('add-product');
        Route::get('/product/edit/{id}','ProductController@edit')->name('edit-product');
        Route::post('product/add', 'ProductController@store');
        Route::post('/product/edit/{id}','ProductController@update');
        Route::post('product/delete/{id}','ProductController@destroy');

        // Shop Galleries
        Route::get('shop-gallery','ShopGalleryController@index')->name('shop-gallery');
        Route::get('shop-gallery/add','ShopGalleryController@create')->name('add-shop-gallery');
        Route::post('shop-gallery/add-shop','ShopGalleryController@store')->name('store-shop-gallery');

        //SALES HISTORY
        Route::get('sales-history','SalesController@index');
        Route::get('/sales/show/{sale}','SalesController@show')->name('show-sales');


        // subscriptions
        Route::get('/subscription', 'SubscriptionController@index');
        Route::post('/create_subscription', 'SubscriptionController@store');

        // message
        Route::get('messages', 'MessageController@messages');
        Route::get('create_message','MessageController@create_message');
        Route::post('store_message','MessageController@store_message');
        Route::post('/all_messages', 'MessageController@all_messages');
        Route::post('/reply/{message_id}', 'MessageController@reply');
        Route::get('/message_replies/{message_id}', 'MessageController@get_replies');

        //WALLET
        Route::get('wallet','WalletController@index')->name('wallet');
        Route::post('cashout','WalletController@cashOut')->name('cash-out');

        // order
        Route::get('/orders','OrdersController@index')->name('histogram');
        Route::get('/order/show/{order}','OrdersController@show')->name('order-details');
        Route::post('change-order-status','OrdersController@changeStatus');

        //REVIEWS
        Route::get('/reviews-and-feedback','ReviewController@index')->name('reviews');
        Route::get('/reply-review/{id}','ReviewController@reply')->name('reply-reviews');
        Route::post('/reply-review','ReviewController@storeReply')->name('reply-reviews');  //display account information


    });
});

//all the seller routes will be defined here...
Route::prefix('/seller')->name('seller.')->namespace('Web\Seller')->group(function () {

    // all seller authentication routes
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    // all seller protected routes, user must be login as seller to access these routes
    Route::middleware('auth:seller')->group(function () {
        // index dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/profile', 'ProfileController@index')->name('profile');
         //edit profile
         Route::get('edit-profile', function () {
            $seller = Auth::guard('seller')->user();
            return view('dashboard.seller.edit-profile', compact(['seller']));
        });
        Route::put('edit-profile/{id}', 'ProfileController@update');
        Route::put('edit-bank/{id}', 'ProfileController@updateBankDetails');
        Route::put('edit-terms-policy/{id}', 'ProfileController@updateTerms');
        //update account details
        Route::get('update-account-details', function () {
            $seller = Auth::guard('seller')->user();
            return view('dashboard.seller.account-details', compact(['seller']));
        });

        Route::get('/account-information', function () {
            $seller = Auth::guard('seller')->user();
            return view('dashboard.seller.account-information', compact(['seller']));
        });

        Route::get('/sales','SalesController@index')->name('sales');
        Route::get('/sales/show/{sale}','SalesController@show')->name('show-sales');

        Route::get('/orders','OrdersController@index')->name('histogram');
        Route::get('/order/show/{order}','OrdersController@show')->name('order-details');

        Route::post('change-order-status','OrdersController@changeStatus');

        Route::get('/reviews-and-feedback','ReviewController@index')->name('reviews');
        Route::get('/reply-review/{id}','ReviewController@reply')->name('reply-reviews');
        Route::post('/reply-review','ReviewController@storeReply')->name('reply-reviews');  //display account information


        //contact admin
        Route::get('contact-admin', function () {
            $user =  Auth::guard('seller')->user();
            return view('dashboard.buyer.contact-admin', compact(['user']));
        });

        //contact admin
        // Route::get('messages/{id}', 'DashboardController@listMessages');
        // Route::get('message/show/{message}', 'DashboardController@showMessage');

        // Route::post('contact-admin', 'DashboardController@contactAdmin');

        // message
        Route::get('messages', 'MessageController@messages')->name('messages');
        Route::get('create_message','MessageController@create_message');
        Route::post('store_message','MessageController@store_message');
        Route::post('/all_messages', 'MessageController@all_messages');
        Route::post('/reply/{message_id}', 'MessageController@reply');
        Route::get('/message_replies/{message_id}', 'MessageController@get_replies');

        Route::get('/subscription', 'SubscriptionController@index');
        Route::post('/create_subscription', 'SubscriptionController@store');

        // Route::get('package', function () {
        //     $seller = Auth::guard('seller')->user();
        //     return view('dashboard.seller.package', compact(['seller']));
        // });

        Route::get('notifications/','DashboardController@notifications');
        Route::get('notification','DashboardController@notifications');
        Route::get('notification/{id}','DashboardController@notification');


         Route::get('all-coupons','CouponController@index')->name('all-coupons');
         Route::get('create-coupon','CouponController@create')->name('create-coupon');
         Route::post('store-coupon','CouponController@store')->name('store-coupon');
         Route::post('change-coupon-status/{id}','CouponController@changeStatus');

        // ADD PRODUCT
        Route::get('add-new-product', 'ProductController@create')->name('add-new-product');
        Route::post('product/add', 'ProductController@store');
        Route::get('product/all/', 'ProductController@index')->name('all-my-products');
        Route::post('product/delete/{id}','ProductController@destroy');
        Route::get('product/edit/{id}','ProductController@edit')->name('edit-product');
        Route::post('product/update/{id}','ProductController@update');


       Route::get('settings', function () {
        $seller = Auth::guard('seller')->user();
        return view('dashboard.seller.settings', compact(['seller']));
    });

    Route::get('account-upgrade', function () {
        $seller = Auth::guard('seller')->user();
        return view('dashboard.seller.accountupgrade', compact(['seller']));
    });
    // Route::get('promotion', function () {
    //     $seller = Auth::guard('seller')->user();
    //     return view('dashboard.seller.promotion', compact(['seller']));
    // });

    Route::get('policy', function () {
        $seller = Auth::guard('seller')->user();
        return view('dashboard.seller.policy', compact(['seller']));
    });

    //ADVERT
    Route::get('all-ads/','AdvertController@index')->name('all-ads');
    Route::get('post-new-ads','AdvertController@create')->name('post-new-ads');
    Route::post('post-ads/','AdvertController@store');
    Route::post('delete-ads/{id}','AdvertController@destroy');
    Route::post('change-ads-status/{id}','AdvertController@change_status');

    //WALLET
    Route::get('wallet','WalletController@index')->name('wallet');
    Route::post('cashout','WalletController@cashOut')->name('cash-out');

        // HANDLES FILE UPLOADS
        Route::post('image/upload/store', 'ImageUploadController@fileStore');
        Route::post('image/delete', 'ImageUploadController@fileDestroy');

        Route::get('/logout', function () {
            Auth::logout();
            redirect('/');
        });
    });
});

//all the shopper routes will be defined here...
Route::prefix('/shopper')->name('shopper.')->namespace('Web\Shopper')->group(function () {

    // all shopper authentication routes
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    // all shopper protected routes, user must be login as shopper to access these routes
    Route::middleware('auth:shopper')->group(function () {

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/profile', 'ProfileController@index')->name('profile');
         //edit profile
         Route::get('edit-profile','ProfileController@edit_profile')->name('edit-profile');
        Route::put('edit-profile/{id}', 'ProfileController@update');
        Route::put('edit-bank-account/{id}', 'ProfileController@updateBankAccount');
        //update account details
        Route::get('update-account-details', function () {
            $user = Auth::guard('seller')->user();
            return view('dashboard.seller.update-account-details', compact(['user']));
        });

        Route::get('/account-information', 'ProfileController@account_info');


        ///DELIVERY ROUTE
        Route::get('delivery-request','DeliveryController@index')->name('delivery-request');
        Route::get('delivery-request/{id}','DeliveryController@show')->name('delivery-details');
        Route::post('change-order-status','DeliveryController@updateStatus');
        Route::get('delivery-merchant','DeliveryController@merchant')->name('delivery-merchant');
        Route::get('routing','DeliveryController@routing')->name('routing');
        Route::post('change-delivery-status','DeliveryController@changeDeliveryStatus');

        Route::get('warehouse-package','WareHouseController@index')->name('warehouse-package');
        Route::get('store-in-warehouse/{id}','WareHouseController@create')->name('store-in-warehouse');
        Route::post('store-in-warehouse','WareHouseController@store');
        Route::get('scan-code/{id}','WareHouseController@scan_code')->name('scan-code');


        Route::get('wallet','WalletController@index')->name('wallet');
        Route::get('request-details/{id}','WalletController@show')->name('request-details');

        Route::post('payout','WalletController@payout');

        Route::get('settings','SettingsController@index');

        Route::get('/edit-profile', 'ProfileController@index')->name('profile');
         //edit profile
        Route::put('edit-profile/{id}', 'ProfileController@update');

        Route::put('edit-bank/{id}', 'ProfileController@updateBankDetails');
        //update account details
        Route::get('account-details', "ProfileController@accountDetails");

         // message
         Route::get('messages', 'MessageController@messages')->name('messages');
         Route::get('create_message','MessageController@create_message');
         Route::post('store_message','MessageController@store_message');
         Route::post('/all_messages', 'MessageController@all_messages');
         Route::post('/reply/{message_id}', 'MessageController@reply');
         Route::get('/message_replies/{message_id}', 'MessageController@get_replies');

         //ADVERTS
         Route::get('all-ads/','AdvertController@index')->name('all-ads');
         Route::get('post-new-ads','AdvertController@create')->name('post-new-ads');
         Route::post('post-ads/','AdvertController@store');
         Route::post('delete-ads/{id}','AdvertController@destroy');
         Route::post('change-ads-status/{id}','AdvertController@change_status');

         //REVIEWS
         Route::get('/reviews-and-feedback','ReviewController@index')->name('reviews');
         Route::get('/reply-review/{id}','ReviewController@reply')->name('reply-reviews');
         Route::post('/reply-review','ReviewController@storeReply')->name('reply-reviews');  //display account information


    });
});

//all the shopper routes will be defined here...
Route::prefix('/fast_food_grocery')->name('fast_food_grocery.')->namespace('Web\FastFoodGrocery')->group(function () {

    // all shopper authentication routes
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout')->name('logout');

        //Register Routes
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    // all shopper protected routes, user must be login as shopper to access these routes
    Route::middleware('auth:fast_food_grocery')->group(function () {

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/profile', 'ProfileController@index')->name('profile');
         //edit profile
         Route::get('edit-profile', function () {
            $fast_food_grocery = Auth::guard('fast_food_grocery')->user();
            return view('dashboard.fast_food_grocery.edit-profile', compact(['fast_food_grocery']));
        });
        Route::put('edit-profile/{id}', 'ProfileController@update');
        Route::put('edit-bank-account/{id}', 'ProfileController@updateBankAccount');
        //update account details
        Route::get('update-account-details', function () {
            $fast_food_grocery = Auth::guard('fast_food_grocery')->user();
            return view('dashboard.fast_food_grocery.update-account-details', compact(['fast_food_grocery']));
        });

        Route::get('/account-information', function () {
            $fast_food_grocery = Auth::guard('fast_food_grocery')->user();
            return view('dashboard.fast_food_grocery.account-information', compact(['fast_food_grocery']));
        });


        Route::get('/orders','OrdersController@index')->name('orders');
        Route::get('/order/show/{order}','OrdersController@show')->name('order-details');

        Route::post('change-order-status','OrdersController@changeStatus');



        //WALLET
        Route::get('/wallet',"WalletController@index")->name('wallet');
        Route::post('cashout','WalletController@cashOut')->name('cash-out');


        Route::get('/food-menu', 'FoodController@index')->name('food-menu');
        Route::get('/add-food-menu', 'FoodController@create')->name('add-food-menu');
        Route::post('/store-food-menu', 'ProductController@store')->name('store-food-menu');

        // accountupgrade
        Route::get('/accountupgrade/', 'ProfileController@upgrade_account');
        Route::post('/account_upgrade/', 'ProfileController@upgrade');

        // settings
        Route::get('settings', 'ProfileController@settings');
        Route::post('store_settings', 'ProfileController@store_settings');

        // message
        Route::get('messages', 'MessageController@messages')->name('messages');;
        Route::get('create_message','MessageController@create_message');
        Route::post('store_message','MessageController@store_message');
        Route::post('/all_messages', 'MessageController@all_messages');
        Route::post('/reply/{message_id}', 'MessageController@reply');
        Route::get('/message_replies/{message_id}', 'MessageController@get_replies');

        ///ADVERTS
        Route::get('all-ads/','AdvertController@index')->name('all-ads');
        Route::get('post-new-ads','AdvertController@create')->name('post-new-ads');
        Route::post('post-ads/','AdvertController@store');
        Route::post('delete-ads/{id}','AdvertController@destroy');
        Route::post('change-ads-status/{id}','AdvertController@change_status');

        // ADD PRODUCT
        Route::get('add-new-grocery', 'ProductController@create')->name('add-new-product');

        Route::post('grocery/add', 'ProductController@store');
        Route::get('grocery/all/', 'ProductController@index')->name('all-my-groceries');
        Route::post('grocery/delete/{id}','ProductController@destroy');
        Route::get('grocery/edit/{id}','ProductController@edit')->name('edit-grocery');
        Route::post('grocery/update/{id}','ProductController@update');

        //REVIEWS
        Route::get('/reviews-and-feedback','ReviewController@index')->name('reviews');
        Route::get('/reply-review/{id}','ReviewController@reply')->name('reply-reviews');
        Route::post('/reply-review','ReviewController@storeReply')->name('reply-reviews');


    });
});
