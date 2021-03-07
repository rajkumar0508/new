<?php

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
Route::get('qr-code-g', function () {
    return QrCode::size(200)->generate(55);
  \QrCode::size(500)
            ->format('png')
            ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
    
  return view('qrCode');
    
});
Route::get('/', function () {
    return redirect('login');
});
Route::get('/release', function() {
	Artisan::call('cache:clear');
	Artisan::call('clear-compiled');
	Artisan::call('config:cache');
	Artisan::call('view:clear');
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
	return 'Operation Successfull';
});
Route::get('/pdf/{id}', 'customer\CustomerController@pdf');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin_dashboard');
    Route::resource('course', 'admin\course\CourseController');
    Route::resource('lessions', 'admin\lession\LessionController');
    Route::resource('rto', 'admin\rto\RtoController');
    Route::resource('purchase', 'admin\purchase\PurchaseOrderController');
    Route::get('unit-by-product', 'admin\purchase\PurchaseOrderController@unit');
    
    
});

// distributor protected routes
Route::group(['middleware' => ['auth', 'distributor'], 'prefix' => 'distributor'], function () {
    Route::get('/', 'HomeController@index')->name('distributor_dashboard');
});

// dealer protected routes
Route::group(['middleware' => ['auth', 'dealer'], 'prefix' => 'dealer'], function () {
    Route::get('/', 'HomeController@index')->name('dealer_dashboard');
});

// rto protected routes
Route::group(['middleware' => ['auth', 'rto'], 'prefix' => 'rto'], function () {
    Route::get('/', 'HomeController@index')->name('rto_dashboard');
});


// distributor protected routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('change-password', 'Auth\LoginController@changePassword');
    Route::post('update-password', 'Auth\LoginController@updatePassword');
    Route::resource('users', 'admin\user\UserManagementController');
    Route::resource('sales', 'admin\sales\SalesOrderController');
    Route::get('get-users', 'admin\sales\SalesOrderController@getUsers');
    Route::get('get-unit', 'admin\product\ProductController@getUnit');
    Route::get('products', 'admin\purchase\PurchaseOrderController@getProduct');
    Route::resource('customer', 'customer\CustomerController');
    Route::post('status/update', 'customer\CustomerController@statusUpdate');
    Route::get('report', 'ReportController@index');
    Route::get('distributor/details', 'admin\user\UserManagementController@detail');
    Route::post('details/save', 'admin\user\UserManagementController@detailSave');
    
});

Route::group(['middleware' => ['auth'], 'prefix' => 'front'], function () {
	Route::get('/', 'HomeController@index');
});	
	
	