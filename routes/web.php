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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('med.index');
})->name('med.index');

Route::name('med.')->middleware('auth')->group(function	()	{
      Route::get('/services', function () {
        return view('med.services');
       })->name('services');

      Route::get('/about', function () {
        return view('med.about');
       })->name('about');

      Route::get('/news', function () {
        return view('med.news');
       })->name('news');

      Route::get('/contact', function () {
        return view('med.contact');
       })->name('contact');

      Route::get('/doctors','DoctorController@all')->name('doctors');

});

Route::name('admin.')->middleware('auth')->group(function()	{
        Route::get('/admin', function () {
        if (Gate::allows('admin-login',Auth::user())) {
            return view('admin.index');
        }else{
            return redirect()->route('med.index');
        }
        })->name('index');
});
Route::post('/paid/{id}','PaymentController@paid')->name('paid.payments');
Route::get('/paids','PaymentController@allpaids')->name('payments.paid');

Route::get('/doctors/{id}',function (){
   return view('doctor.doctor');
})->name('med.doctor')->middleware('auth');

Route::post('/payment/store/{id}','PaymentController@store')->name('payment.store');
Route::resource('docs','DoctorController')->middleware('admin');
Route::resource('pays','PaymentController')->middleware('admin');
Route::resource('users','UserController')->middleware('admin');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

