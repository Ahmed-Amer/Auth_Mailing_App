<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

//add middleware verified to enable email verification
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//show admin private page (check for Gate at AuthServiceProvider) 
Route::get('/private', [App\Http\Controllers\HomeController::class, 'private']);


/*
* Mailing
*/

//route for mailing someone (it just send it to mail trap for testing only)
// Route::get('/email_someone' , function(){
//     Mail::to('elsheikh4440@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });

//route for mailing someone with attachment image
Route::get('/email', [App\Http\Controllers\EmailsController::class, 'email']);


/*
* Notification
*/
//route for mailing someone with notification Email
Route::get('/send-enrollment-notification', [App\Http\Controllers\TestEnrollmentController::class, 'sendNotification']);

/*
* SMS Using Nexmo (vonage now)
*/
//route for sending sms (errors update package)
Route::get('/sms', [App\Http\Controllers\SmsController::class, 'index']);