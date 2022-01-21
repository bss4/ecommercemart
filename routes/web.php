<?php

include(app_path().'/GlobalConstants.php');

use App\Http\Controllers\PDFController;
use App\Http\Controllers\PushnotificationController;

use Illuminate\Support\Facades\Route;

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



Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::get('pushnotificationtoall', [PushnotificationController::class, 'pushnotificationtoall'])->name('pushnotificationtoall');

// Get Route For Show Payment Form
Route::get('/{shopid}/paywithrazorpay',array('as'=>'frontend.paywithrazorpay','uses'=>'Frontend\RazorpayController@paywithrazorpay'));
// Post Route For Make Payment Request
Route::post('/{shopid}/payment', array('as'=>'frontend.payment','uses'=>'Frontend\RazorpayController@payment'));

/*Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {

    Route::get('/', 'HomeController@index')->name('user_dashboard');

});*/



//frontend route start  theme1

Route::get('/{shopid}/',array('as'=>'frontend.index','uses'=>'Frontend\AuthController@index'));

Route::get('/{shopid}/login',array('as'=>'frontend.login','uses'=>'Frontend\AuthController@frontlogin'));

Route::get('/{shopid}/register',array('as'=>'frontend.register','uses'=>'Frontend\AuthController@frontregister'));

Route::post('/{shopid}/login', 'Frontend\AuthController@doLogin')->name('frontlogin');

Route::post('/{shopid}/forgotpassword', 'Frontend\AuthController@forgotPasswod')->name('forgotpassword');
Route::get('/{shopid}/forgotpassword', array('as'=>'frontend.forgot','uses'=>'Frontend\AuthController@forgotPasswodView'));

Route::get('/{shopid}/resetpassword/{id}', 'Frontend\AuthController@resetPassword');
Route::post('/{shopid}/resetpassword/', 'Frontend\AuthController@resetPasswordChange')->name('resetpassword');

Route::any('/{shopid}/logout', 'Frontend\AuthController@doLogout')->name('frontlogout');

Route::post('/{shopid}/register', 'Frontend\AuthController@RegisterUser')->name('registeruser');



Route::get('/{shopid}/payment-policy', array('as'=>'frontend.paymentpolicy','uses'=>'Frontend\PolicyController@paymentpolicy'));



Route::get('/{shopid}/privacy-policy', array('as'=>'frontend.privacypolicy','uses'=>'Frontend\PolicyController@privacypolicy'));



Route::get('/{shopid}/terms-conditions', array('as'=>'frontend.termsconditions','uses'=>'Frontend\PolicyController@termsconditions'));



Route::get('/{shopid}/shipping-policy', array('as'=>'frontend.shippingpolicy','uses'=>'Frontend\PolicyController@shippingpolicy'));



Route::get('/{shopid}/return-refund', array('as'=>'frontend.returnrefund','uses'=>'Frontend\PolicyController@returnrefund'));



Route::get('/{shopid}/contact', array('as'=>'frontend.contact','uses'=>'Frontend\ContactController@index'));

Route::post('/{shopid}/contact-mail', array('as'=>'frontend.contact_mail','uses'=>'Frontend\ContactController@contactMail'));



Route::get('/{shopid}/product-detail', array('as'=>'frontend.productdetail','uses'=>'Frontend\ShoppingController@productdetail'));



Route::get('/{shopid}/single-product-detail/{id}', array('as'=>'frontend.singleproductdetail','uses'=>'Frontend\ShoppingController@singleproductdetail'));



Route::get('/{shopid}/catalogs', array('as'=>'frontend.catalogs','uses'=>'Frontend\ShoppingController@catalogs'));



Route::get('/{shopid}/catalogs/{id}', array('as'=>'frontend.singlecatalogue','uses'=>'Frontend\ShoppingController@singlecatalogue'));



Route::any('/{shopid}/shopping-cart', array('as'=>'frontend.shoppingcart','uses'=>'Frontend\ShoppingController@shoppingcart'));

Route::get('/{shopid}/checkout', array('as'=>'frontend.checkout','uses'=>'Frontend\ShoppingController@checkout'));



Route::get('/{shopid}/wishlist', array('as'=>'frontend.wishlist','uses'=>'Frontend\ShoppingController@wishlist'));

Route::post('/{shopid}/order', array('as'=>'frontend.order','uses'=>'Frontend\ShoppingController@order'));

Route::get('/{shopid}/thank-you', array('as'=>'frontend.thankyou','uses'=>'Frontend\ShoppingController@thankyou'));

Route::post('/add-to-cart', array('as'=>'frontend.addtocart','uses'=>'Frontend\ShoppingController@addToCart'));

Route::post('/update-cart',array('as'=>'frontend.updatecart','uses'=>'Frontend\ShoppingController@updatecart'));

Route::post('/apply-coupencode',array('as'=>'frontend.applycouponcode','uses'=>'Frontend\ShoppingController@applycouponcode'));

Route::post('/remove-coupencode',array('as'=>'frontend.removecouponcode','uses'=>'Frontend\ShoppingController@removecouponcode'));

Route::post('/remove-from-cart',array('as'=>'frontend.removecart','uses'=>'Frontend\ShoppingController@removecart'));

Route::post('/list-cart',array('as'=>'frontend.list_cart','uses'=>'Frontend\ShoppingController@list_cart'));
Route::post('/list-cart-page',array('as'=>'frontend.listcartpage','uses'=>'Frontend\ShoppingController@listcartPage'));

Route::post('/list-wishlist-page',array('as'=>'frontend.listwishlistpage','uses'=>'Frontend\ShoppingController@listwishlistPage'));



Route::post('/add-to-wishlist', array('as'=>'frontend.addtowishlist','uses'=>'Frontend\ShoppingController@addTowishlist'));

Route::post('/remove-from-wishlist',array('as'=>'frontend.removewishlist','uses'=>'Frontend\ShoppingController@removewishlist'));



Route::post('/{shopid}/newsletter', array('as'=>'frontend.newsletter','uses'=>'Frontend\NewsletterController@newsletter'));



Route::post('/ajax-single-product-deatils',array('as'=>'frontend.ajaxsingleproduct','uses'=>'Frontend\ShoppingController@ajaxSingleproduct'));



Route::post('/catalogueproductlist',['as'=>'frontend.catalogueproductlist','uses'=>'Frontend\ShoppingController@catalogueproductlist']);



Route::post('/changeproduct',['as'=>'frontend.changeproduct','uses'=>'Frontend\ShoppingController@changeproduct']);

//frontend route end theme1

//myaccount route start
Route::get('/{shopid}/myaccount', array('as'=>'frontend.myaccount','uses'=>'Frontend\AuthController@myaccount'));
Route::post('/{shopid}/myaccount-update', array('as'=>'frontend.myaccountupdate','uses'=>'Frontend\AuthController@myaccountupdate'));
Route::get('/{shopid}/order-view/{id}', array('as'=>'frontend.orderview','uses'=>'Frontend\AuthController@orderView'));
//myaccount route end









//social login start

Route::get('login/{provider}', 'SocialController@redirect');

Route::get('login/{provider}/callback','SocialController@Callback');

//Route::any('/logout',array('as'=>'logout','uses'=>'SocialController@Logout'))->name('frontlogout');

//social login end



Route::group(['prefix'=>'admin','middleware'=>['guest']],function(){



  Route::get('/adminlogin', array('as'=>'admin.index','uses'=>'Backend\AuthController@showLogin'));

  Route::post('/adminlogin', 'Backend\AuthController@doLogin')->name('login');

});







Route::group(['prefix'=>'admin','middleware' => ['auth', 'admin']], function ()

{

    

  Route::get('/dashboard',array('as'=>'admin.dashboard','uses'=>'Backend\DashboardController@dashboard'));



  //Route::get('/dashboard',array('as'=>'admin.dashboard','uses'=>'Backend\AuthController@dashboard'));

  // Route::get('/', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@dashboard'));

  Route::any('/dashboard/dashboard-json',array('as'=>'Dashboard.json','uses'=>'Backend\DashboardController@getTotalPackageBasedOnUser'));

  Route::any('/adminlogout',array('as'=>'admin.logout','uses'=>'Backend\AuthController@doLogout'));

  Route::get('/dashboard/sales',array('as'=>'Dashboard.sales','uses'=>'Backend\DashboardController@getTotalSales'));

  Route::get('/dashboard/store-type',array('as'=>'Dashboard.storetype','uses'=>'Backend\DashboardController@getTotalStore'));

  Route::get('/dashboard/orders',array('as'=>'Dashboard.orders','uses'=>'Backend\DashboardController@getTotalOrders'));



  /*Start Admin Edit Profile*/

  Route::get('/users/edit-admin/{id}',array('as'=>'Users.admin','uses'=>'Backend\UsersController@editAdminProfile'));

  Route::post('/users/update-admin/{id}',array('as'=>'Users.adminUpdate','uses'=>'Backend\UsersController@updateAdmin'));

  /*End Admin Edit Profile*/

  /*Start User route*/

  Route::get('/users',array('as'=>'Users.index','uses'=>'Backend\UsersController@listUsers'));

  Route::get('/users/add-users',array('as'=>'Users.add','uses'=>'Backend\UsersController@addUsers'));

  Route::post('/users/add-users',array('as'=>'Users.save','uses'=>'Backend\UsersController@saveUsers'));

  Route::get('/users/edit-users/{id}',array('as'=>'Users.edit','uses'=>'Backend\UsersController@editUsers'));

  Route::get('/users/view-users/{id}',array('as'=>'Users.view','uses'=>'Backend\UsersController@viewUsers'));

  Route::post('/users/update-users/{id}',array('as'=>'Users.update','uses'=>'Backend\UsersController@updateUsers'));

  Route::get('/users/delete-users/{id}',array('as'=>'Users.delete','uses'=>'Backend\UsersController@deleteUsers'));



  Route::get('/usersjson',array('as'=>'Users.jsondata','uses'=>'Backend\UsersController@listUsersjson'));

  Route::get('/users/users-json',array('as'=>'Users.json','uses'=>'Backend\UsersController@userJsonData'));

  /*End User route*/



  /*Start Sellers route*/

  Route::get('/sellers',array('as'=>'Sellers.index','uses'=>'Backend\SellersController@listSellers'));

  Route::get('/sellers/sellers-json',array('as'=>'Sellers.json','uses'=>'Backend\SellersController@sellersJsonData'));

  Route::get('/sellers/add-sellers',array('as'=>'Sellers.add','uses'=>'Backend\SellersController@addSellers'));

  Route::any('/sellers/save-sellers',array('as'=>'Sellers.save','uses'=>'Backend\SellersController@saveSellers'));

  Route::get('/sellers/edit-sellers/{id}',array('as'=>'Sellers.edit','uses'=>'Backend\SellersController@editSellers'));

  

  Route::get('/sellers/catalogue-sellers/{id}',array('as'=>'Sellers.catalogue','uses'=>'Backend\SellersController@catalogueSellers'));

  Route::get('/sellers/sellers-catalogue-json/{id}',array('as'=>'Sellers.cataloguejson','uses'=>'Backend\SellersController@listSellerCatalogueJsonData'));



  Route::get('/sellers/sellers-catalogue-details/{id}',array('as'=>'Sellers.cataloguedetails','uses'=>'Backend\SellersController@viewSellerCatalogue'));

  Route::get('/sellers/sellers-catalogue-add/{sellerid}',array('as'=>'Sellers.catalogueadd','uses'=>'Backend\SellersController@addSellerCatalogue'));

  Route::post('/sellers/sellers-catalogue-save/{sellerid}',array('as'=>'Sellers.cataloguesave','uses'=>'Backend\SellersController@saveSellerCatalogue'));

  Route::get('/sellers/sellers-catalogue-edit/{id}',array('as'=>'Sellers.catalogueedit','uses'=>'Backend\SellersController@editSellerCatalogue'));

  Route::post('/sellers/sellers-catalogue-update/{id}',array('as'=>'Sellers.catalogueupdate','uses'=>'Backend\SellersController@updateSellerCatalogue'));

  Route::get('/sellers/sellers-catalogue-delete/{id}',array('as'=>'Sellers.cataloguedelete','uses'=>'Backend\SellersController@deleteSellerCatalogue'));

  Route::post('/sellers/seller-delivered-status/{id}',array('as'=>'Sellers.sellerdeliverd','uses'=>'Backend\SellersController@sellerDeliveredStatus'));

//product route start

  Route::get('/sellers/sellers-product/{id}',array('as'=>'Sellers.storecatalogueproduct','uses'=>'Backend\SellersController@sellersProducts'));

  Route::get('/sellers/sellers-product-json/{id}',array('as'=>'Sellers.productjson','uses'=>'Backend\SellersController@listSellerProductJsonData'));

  Route::get('/sellers/sellers-product-details/{id}',array('as'=>'Sellers.productdetails','uses'=>'Backend\SellersController@viewSellerProduct'));

  Route::get('/sellers/sellers-product-add/{id}',array('as'=>'Sellers.productadd','uses'=>'Backend\SellersController@addSellerProduct'));

  Route::post('/sellers/sellers-product-save/{id}',array('as'=>'Sellers.productsave','uses'=>'Backend\SellersController@saveSellerProduct'));

  Route::get('/sellers/sellers-product-edit/{id}',array('as'=>'Sellers.productedit','uses'=>'Backend\SellersController@editSellerProduct'));

  Route::post('/sellers/sellers-product-update/{id}',array('as'=>'Sellers.productupdate','uses'=>'Backend\SellersController@updateSellerProduct'));

  Route::get('/sellers/sellers-product-delete/{id}',array('as'=>'Sellers.productdelete','uses'=>'Backend\SellersController@deleteSellerProduct'));

  Route::post('/catalogue-variation',['as'=>'Seller.cataloguevariationajax','uses'=>'Backend\SellersController@ajaxcataloguevariation']);

//product route end



  Route::get('/sellers/view-sellers/{id}',array('as'=>'Sellers.view','uses'=>'Backend\SellersController@viewSellers'));

  Route::get('/sellers/update-bank-status/{id}',array('as'=>'Sellers.updatebnkstatus','uses'=>'Backend\SellersController@updatebnkstatus'));

  Route::post('/sellers/update-sellers/{id}',array('as'=>'Sellers.update','uses'=>'Backend\SellersController@updateSellers'));

  Route::get('/sellers/delete-sellers/{id}',array('as'=>'Sellers.delete','uses'=>'Backend\SellersController@deleteSellers'));

  Route::get('/sellers/payments/{id}',array('as'=>'Sellers.payments','uses'=>'Backend\SellersController@listSellerPayments'));

  Route::get('/sellers/orders/{id}',array('as'=>'Sellers.orders','uses'=>'Backend\SellersController@listSellerOrders'));

  Route::get('/sellers/stores/{id}',array('as'=>'Sellers.stores','uses'=>'Backend\SellersController@listSellerStores'));

  Route::get('/sellers/sellers-orders-json/{id}',array('as'=>'Sellers.orderjson','uses'=>'Backend\SellersController@listSellerOrdersJsonData'));

  Route::get('/sellers/sellers-payments-json/{id}',array('as'=>'Sellers.paymentjson','uses'=>'Backend\SellersController@listSellerPaymentJsonData'));

  Route::get('/sellers/sellers-payments-view/{id}',array('as'=>'Sellers.paymentview','uses'=>'Backend\SellersController@viewSellerPayment'));


  /*End Sellers route*/





  /*Start Affilate users route*/

  Route::get('/affilate-users',array('as'=>'Affilate.index','uses'=>'Backend\AffilateController@listAffilate'));

  Route::get('/affilate-users/add-affilate-users',array('as'=>'Affilate.add','uses'=>'Backend\AffilateController@addAffilate'));

  Route::any('/affilate-users/save-affilate-users',array('as'=>'Affilate.save','uses'=>'Backend\AffilateController@saveAffilate'));

  Route::get('/affilate-users/edit-affilate-users/{id}',array('as'=>'Affilate.edit','uses'=>'Backend\AffilateController@editAffilate'));

  Route::post('/affilate-users/update-affilate-users/{id}',array('as'=>'Affilate.update','uses'=>'Backend\AffilateController@updateAffilate'));

  Route::get('/affilate-users/delete-affilate-users/{id}',array('as'=>'Affilate.delete','uses'=>'Backend\AffilateController@deleteAffilate'));

  Route::any('/affilate-users/multiple-affilate-delete',array('as'=>'Affilate.alldelete','uses'=>'Backend\AffilateController@multipleDeleteAffilate'));

  Route::get('/affilate-users/view-affilate-users/{id}',array('as'=>'Affilate.view','uses'=>'Backend\AffilateController@viewAffilate'));

  Route::get('/affilate-users/affilate-json',array('as'=>'Affilate.json','uses'=>'Backend\AffilateController@affilateJsonData'));
  Route::get('/affilate-seller/affilate-seller-json/{id}',array('as'=>'Affilate.seller','uses'=>'Backend\AffilateController@affilateSellerJson'));
  /*End Affilate users route*/





  /*Start Payments route*/

  Route::get('/payments',array('as'=>'Payments.index','uses'=>'Backend\PaymentsController@listPayments'));

  Route::get('/payments-view/{id}',array('as'=>'Payments.view','uses'=>'Backend\PaymentsController@viewPayments'));

  Route::get('/payments-delete/{id}',array('as'=>'Payments.delete','uses'=>'Backend\PaymentsController@deletePayments'));

  Route::get('/payments/payments-json',array('as'=>'Payments.json','uses'=>'Backend\PaymentsController@paymentsJsonListData'));

  /*End Payments route*/



  /*Start Orders route*/

  Route::get('/orders',array('as'=>'Orders.index','uses'=>'Backend\OrdersController@listOrders'));
  Route::get('/orders-view/{id}',array('as'=>'Orders.view','uses'=>'Backend\OrdersController@viewOrders'));
  Route::get('/orders-delete/{id}',array('as'=>'Orders.delete','uses'=>'Backend\OrdersController@deleteOrders'));
  Route::get('/orders/orders-json',array('as'=>'Orders.json','uses'=>'Backend\OrdersController@ordersJsonListData'));

  /*End Orders route*/



  /*Start Stores route*/

  Route::get('/stores',array('as'=>'Stores.index','uses'=>'Backend\StoresController@listStores'));

  Route::get('/stores/stores-json',array('as'=>'Stores.json','uses'=>'Backend\StoresController@storesJsonListData'));

  Route::get('/stores/add-stores',array('as'=>'Stores.add','uses'=>'Backend\StoresController@addStores'));

  Route::any('/stores/save-stores',array('as'=>'Stores.save','uses'=>'Backend\StoresController@saveStores'));

  Route::get('/stores/edit-stores/{id}',array('as'=>'Stores.edit','uses'=>'Backend\StoresController@editStores'));

  Route::post('/stores/update-stores/{id}',array('as'=>'Stores.update','uses'=>'Backend\StoresController@updateStores'));

  Route::get('/stores/view-stores/{id}',array('as'=>'Stores.view','uses'=>'Backend\StoresController@viewStores'));

  Route::get('/stores/delete-stores/{id}',array('as'=>'Stores.delete','uses'=>'Backend\StoresController@deleteStores'));

  Route::any('/stores/ckeditorimage',array('as'=>'Stores.ckeditorimage','uses'=>'Backend\StoresController@ckeditorimage'));
  /*End Stores route*/

/*Start Stores route*/

  Route::get('/themes',array('as'=>'Themes.index','uses'=>'Backend\ThemesController@listThemes'));

  Route::get('/themes-json',array('as'=>'Themes.json','uses'=>'Backend\ThemesController@ThemesJsonListData'));

  Route::get('/add-themes',array('as'=>'Themes.add','uses'=>'Backend\ThemesController@addThemes'));

  Route::any('/save-themes',array('as'=>'Themes.save','uses'=>'Backend\ThemesController@saveThemes'));

  Route::get('/edit-themes/{id}',array('as'=>'Themes.edit','uses'=>'Backend\ThemesController@editThemes'));

  Route::post('/update-themes/{id}',array('as'=>'Themes.update','uses'=>'Backend\ThemesController@updateThemes'));

  Route::get('/view-themes/{id}',array('as'=>'Themes.view','uses'=>'Backend\ThemesController@viewThemes'));

  Route::get('/delete-themes/{id}',array('as'=>'Themes.delete','uses'=>'Backend\ThemesController@deleteThemes'));

  /*End Stores route*/

  /*seller order route start*/
  Route::get('/view-seller-order/{id}',array('as'=>'SellerOrder.view','uses'=>'Backend\SellersController@viewSellerorder'));

  Route::get('/delete-seller-order/{id}',array('as'=>'SellerOrder.delete','uses'=>'Backend\SellersController@deletsellerorder'));

  Route::post('/seller-order-status/{id}',array('as'=>'SellerOrder.statusupdate','uses'=>'Backend\SellersController@statusorderupdate'));

  /*seller order route end*/


  /*Start Plans Routing*/

  Route::get('/plans',array('as'=>'Plans.index','uses'=>'Backend\PlansController@listPlans'));

  Route::get('/plans/plans-json',array('as'=>'Plans.json','uses'=>'Backend\PlansController@plansJsonListData'));

  Route::get('/plans/add-plans',array('as'=>'Plans.add','uses'=>'Backend\PlansController@addPlans'));

  Route::post('/plans/add-plans',array('as'=>'Plans.save','uses'=>'Backend\PlansController@savePlans'));

  Route::get('/plans/edit-plans/{id}',array('as'=>'Plans.edit','uses'=>'Backend\PlansController@editPlans'));

  Route::get('/plans/view-plans/{id}',array('as'=>'Plans.view','uses'=>'Backend\PlansController@viewPlans'));

  Route::post('/plans/update-plans/{id}',array('as'=>'Plans.update','uses'=>'Backend\PlansController@updatePlans'));

  Route::get('/plans/delete-plans/{id}',array('as'=>'Plans.delete','uses'=>'Backend\PlansController@deletePlans'));

  /*End Plans Routing*/





  /*Start Plans Routing*/

  Route::get('/storetype',array('as'=>'StoreType.index','uses'=>'Backend\StoreTypeController@listStoreType'));

  Route::get('/storetype/storetype-json',array('as'=>'StoreType.json','uses'=>'Backend\StoreTypeController@storeTypeJsonListData'));

  Route::get('/storetype/add-storetype',array('as'=>'StoreType.add','uses'=>'Backend\StoreTypeController@addStoreType'));

  Route::post('/storetype/add-storetype',array('as'=>'StoreType.save','uses'=>'Backend\StoreTypeController@saveStoreType'));

  Route::get('/storetype/edit-storetype/{id}',array('as'=>'StoreType.edit','uses'=>'Backend\StoreTypeController@editStoreType'));

  Route::get('/storetype/view-storetype/{id}',array('as'=>'StoreType.view','uses'=>'Backend\StoreTypeController@viewStoreType'));

  Route::post('/storetype/update-storetype/{id}',array('as'=>'StoreType.update','uses'=>'Backend\StoreTypeController@updateStoreType'));

  Route::get('/storetype/delete-storetype/{id}',array('as'=>'StoreType.delete','uses'=>'Backend\StoreTypeController@deleteStoreType'));

  /*End Plans Routing*/



  /*Start Store type Category Routing*/

  Route::get('/category',array('as'=>'Category.index','uses'=>'Backend\CategoryController@listCategory'));

  Route::get('/category/category-json',array('as'=>'Category.json','uses'=>'Backend\CategoryController@CategoryJsonListData'));

  Route::get('/category/add-category',array('as'=>'Category.add','uses'=>'Backend\CategoryController@addCategory'));

  Route::post('/category/add-category',array('as'=>'Category.save','uses'=>'Backend\CategoryController@saveCategory'));

  Route::get('/category/edit-category/{id}',array('as'=>'Category.edit','uses'=>'Backend\CategoryController@editCategory'));

  Route::get('/category/view-category/{id}',array('as'=>'Category.view','uses'=>'Backend\CategoryController@viewCategory'));

  Route::post('/category/update-category/{id}',array('as'=>'Category.update','uses'=>'Backend\CategoryController@updateCategory'));

  Route::get('/category/delete-category/{id}',array('as'=>'Category.delete','uses'=>'Backend\CategoryController@deleteCategory'));

  /*End Store type Category Routing*/





  /*start text setting*/

  Route::get('/text-setting',array('as'=>'TextSetting.index','uses'=>'Backend\TextSettingController@listTextSetting'));



  Route::get('/text-setting/add-new-text',array('as'=>'TextSetting.add','uses'=>'Backend\TextSettingController@addTextSetting'));



  Route::any('/text-setting/save-new-text',array('as'=>'TextSetting.save','uses'=>'Backend\TextSettingController@saveTextSetting'));



  Route::any('/text-setting/edit-new-text/{id}',array('as'=>'TextSetting.edit','uses'=>'Backend\TextSettingController@editTextSetting'));



  Route::any('/text-setting/update-new-text/{id}',array('as'=>'TextSetting.update','uses'=>'Backend\TextSettingController@updateTextSetting'));



  Route::any('/text-setting/delete-text/{id}',array('as'=>'TextSetting.delete','uses'=>'Backend\TextSettingController@deleteText'));

  /*end text setting*/



  /* coin settings start*/

  Route::get('/coin-setting',array('as'=>'Setting.index','uses'=>'Backend\SettingController@addCoinSetting'));



  Route::post('/coin-setting',array('as'=>'Setting.save','uses'=>'Backend\SettingController@saveCoinSetting'));

  Route::get('/bank-money-trasfer/{id}',array('as'=>'Transfermoney.trasfermoneydirectbank','uses'=>'Backend\TransfermoneyController@trasnfarmoneydirectbank'));
  Route::get('/upi-money-trasfer/{id}',array('as'=>'Transfermoney.trasfermoneyupi','uses'=>'Backend\TransfermoneyController@trasfermoneyupi'));
  Route::post('/upi-id-verify',array('as'=>'Transfermoney.verifyupi','uses'=>'Backend\TransfermoneyController@verifyupi'));
 
  /* coin settings end*/

});