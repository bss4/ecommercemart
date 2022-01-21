<?php



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;



/*

|--------------------------------------------------------------------------

| API Routes

|--------------------------------------------------------------------------

|

| Here is where you can register API routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| is assigned the "api" middleware group. Enjoy building your API!

|

*/



// User Login & Register Routes

Route::post('apiRegister','ApiController@apiRegister');
Route::post('otpVarify','ApiController@otpVarify');
Route::any('dashboard','ApiController@dashboard');

// Home Routes

/*Start Seller Add/Edit/Delete/list Api Section*/
Route::post('sellerdetails','ApiController@sellerdetails');
Route::post('createstore','ApiController@createstore');
Route::post('updatestore','ApiController@updatestore');
Route::post('deletestore','ApiController@deletestore');
Route::post('sellerstore','ApiController@sellerstore');
/*End Seller Add/Edit/Delete/list Api Section*/

/*Start Seller Catelogue Api Section*/
Route::post('addsellercatalogue','ApiController@addsellercatalogue');
Route::post('updatesellercatalogue','ApiController@updatesellercatalogue');
Route::post('deletesellercatalogue','ApiController@deletesellercatalogue');
Route::post('sellercataloguelist','ApiController@sellercataloguelist');
/*End Seller Catelogue Section*/

/*Satrt Specific Catelogue Product Add/Edit/Delete/List Api Section*/
Route::post('singlecatalogueproductlist','ApiController@singlecatalogueproductlist');
Route::post('deleteimage','ApiController@deleteimage');
Route::post('addcatalogueproduct','ApiController@addcatalogueproduct');
Route::post('deletecatalogueproduct','ApiController@deletecatalogueproduct');
Route::post('updatecatalogueproduct','ApiController@updatecatalogueproduct');
/*End Specific Catelogue Product Add/Edit/Delete/List Api Section*/

/*Start Plans/Packages List Api Section*/
Route::post('packageslist','ApiController@packageslist');
/*End Plans/Packages List Api Section*/

/*Start Payment List Api Section*/
Route::post('sellerpaymentslist','ApiController@sellerpaymentslist');
/*End Payment List Api Section*/

/*Start Seller Store Type List Api Section*/
Route::post('sellerstoretype','ApiController@sellerstoretype');
/*End Seller Store Type List Api Section*/

/*Start Social Login Api Section*/
Route::post('sociallogin','ApiController@sociallogin');
/*End Social Login Api Section*/

/*Start Seller Starff Add/Edit/Delete/List Api Section*/
Route::post('listsellerstaff','ApiController@listsellerstaff');
Route::post('addsellerstaff','ApiController@addsellerstaff');
Route::post('updatesellerstaff','ApiController@updatesellerstaff');
Route::post('deletesellerstaff','ApiController@deletesellerstaff');
/*End Seller Starff Add/Edit/Delete/List Api Section*/

/*Start Seller Starff Add/Edit/Delete/List Api Section*/
Route::post('listsellercustomer','ApiController@listsellercustomer');
Route::post('addsellercustomer','ApiController@addsellercustomer');
Route::post('updatesellercustomer','ApiController@updatesellercustomer');
Route::post('deletesellercustomer','ApiController@deletesellercustomer');
/*End Seller Starff Add/Edit/Delete/List Api Section*/

/*Start Seller Reviews Add/Edit/Delete/List Api Section*/
Route::post('listsellerreviews','ApiController@listsellerreviews');
Route::post('deletesellerreviews','ApiController@deletesellerreviews');
/*End Seller Reviews Add/Edit/Delete/List Api Section*/


/*Start Seller Offers Add/Edit/Delete/List Api Section*/
Route::post('listselleroffer','ApiController@listselleroffer');
Route::post('addselleroffer','ApiController@addselleroffer');
Route::post('updateselleroffer','ApiController@updateselleroffer');
Route::post('deleteselleroffer','ApiController@deleteselleroffer');
/*End Seller Offers Add/Edit/Delete/List Api Section*/

/*Report List Start*/
Route::post('sellerreport','ApiController@sellerreport');
Route::post('orderreportlist','ApiController@orderreportlist');
Route::post('revenuelist','ApiController@revenuelist');
Route::post('updatesellerstoretype','ApiController@updatesellerstoretype');
/*Report List End*/


/*Start Product Attributes Api 31-08-2021*/
Route::post('catalogueattributes','ApiController@catalogueattributes');
Route::post('getcatalogueattributes','ApiController@getcatalogueattributes');
Route::post('updatecatalogueattributes','ApiController@updatecatalogueattributes');
Route::post('deletecatalogueattributes','ApiController@deletecatalogueattributes');
/*End Product Attributes Api 31-08-2021*/

//variation part start
Route::post('createcataloguevariation','ApiController@createcataloguevariation');
Route::post('listcataloguevariation','ApiController@listcataloguevariation');
//Route::post('updatevariationproduct','ApiController@updatevariationproduct');
Route::post('category','ApiController@category');
Route::post('savesellerBankdetails','ApiController@savesellerBankdetails');
Route::post('themeslist','ApiController@themeslist');
Route::post('bankdetails','ApiController@bankdetails');
Route::post('purchaseplan','ApiController@purchaseplan');
Route::post('customdomain','ApiController@customdomain');
Route::post('getcustomdomain','ApiController@getcustomdomain');
Route::post('inventoryreport','ApiController@inventoryreport');
Route::post('customerreport','ApiController@customerreport');
Route::post('statchart','ApiController@statchart');
Route::post('deliverypartner','ApiController@deliverypartner');
Route::post('sellershoptime','ApiController@sellershoptime');
Route::post('createsellershoptime','ApiController@createsellershoptime');
Route::post('sellerordergenrate','ApiController@sellerordergenrate');
Route::post('globalproductlist','ApiController@globalproductlist');
Route::post('uploadexcelfile','ApiController@uploadexcelfile');
Route::post('createsellerslider','ApiController@createsellerslider');
Route::post('deletesellerslider','ApiController@deletesellerslider');
Route::post('Contactus','ApiController@Contactus');
Route::post('Newsletter','ApiController@Newsletter');
Route::post('cartuser','ApiController@cartuser');
Route::post('cartproductdetails','ApiController@cartproductdetails');
Route::post('updatethemes','ApiController@updatethemes');
Route::post('savesellerUpidetails','ApiController@savesellerUpidetails');
Route::post('sellerupidetails','ApiController@sellerupidetails');
Route::post('countrieslist','ApiController@countrieslist');
Route::post('Statelist','ApiController@Statelist');
Route::post('citieslist','ApiController@citieslist');
Route::post('updatesellerprofile','ApiController@updatesellerprofile');
Route::post('sellerstaffprofile','ApiController@sellerstaffprofile');
Route::post('packagepermision','ApiController@packagepermision');