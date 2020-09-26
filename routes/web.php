<?php

use App\Http\Controllers\geturldata;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('welcome');
// })

// User Routing
Route::view('/', 'login');
Route::get('/fetchorder','fetchorder@insert');
Route::get('/function','geturldata@add');
Route::view('/ewallets','user.ewallet');
Route::view('/hwallets','user.hwallet');
Route::view('/hwalletfaststart','user.hwalletfaststart');
Route::view('/hwalletpassup','user.hwalletpassup');

Route::view('/dashboard', 'user.index');
Route::post('/loginform', 'loginClass@Login_button');
Route::view('/user/register', 'registration');
Route::view('/user/forget', 'forget_password');
Route::group(['prefix' => 'account-setting'], function () {
    Route::view('/user/profile','user.profile');
    Route::view('/user/kyc','user.kyc');
    Route::view('/user/changepassword','user.changepassword');
});

Route::group(['prefix' => 'activate-user'], function () {
Route::view('/user/useractivation','user.useractivation');
Route::view('/user/historyactivation','user.historyactivation');

});

Route::group(['prefix' => 'wallet-transfer'], function () {
    Route::group(['prefix' => 'to-other'], function () {

        Route::view('/user/transferwalletother','user.transferwalletother');
        Route::view('/user/historywallettransaction','user.historywallettransaction');
    });
    Route::group(['prefix' => 'to-self'], function () {

        Route::view('/user/transferfundtoself','user.transferfundtoself');
        Route::view('/user/historyfundtranstoself','user.historyfundtranstoself');
    });

});

Route::group(['prefix' => 'withdrawl'], function () {
    Route::view('/user/withdrawlmake','user.withdrawlmake');
    Route::view('/user/withdrawlpending','user.withdrawlpending');
    Route::view('/user/withdrawlconfirm','user.withdrawlconfirm');
    Route::view('/user/withdrawlreject','user.withdrawlreject');

});
Route::group(['prefix' => 'my-team'], function () {

    Route::view('/user/directactiveuser','user.directactiveuser');
    Route::view('/user/directinactiveuser','user.directinactiveuser');
    Route::view('/user/mydownline','user.mydownline');

});

Route::group(['prefix' => 'tree'], function () {
    Route::get('/user/{tree}/{id}','geturldata@tree');

});

Route::group(['prefix' => 'cmc-auto'], function () {
    Route::view('/user/autopool','user.autopool');
    Route::view('/user/cmc','user.cmc');
});
Route::group(['prefix' => 'income'], function () {
    Route::view('/user/incomebinary','user.incomebinary');
    Route::view('/user/incomedirect','user.incomedirect');
    Route::view('/user/incomeautopool','user.incomeautopool');
    Route::view('/user/incomepoint','user.incomepoint');
    Route::view('/user/incomecmc','user.incomecmc');

});

Route::view('/user/historytransactionpage','user.historytransactionpage');

Route::get('/user/logout', function(){

    session()->forget('user_id');
    session()->forget('user_name');
    session()->forget('u_auto_id');

    return redirect('/');


});

//End  User Routing

// Admin Routing
Route::view('activation','activation');
Route::post('/activationction','activation@operation');
Route::view('/admin/dashboard','admin.dashboard');

Route::group(['prefix' => 'activation'], function () {

    Route::view('/admin/newreq','admin.newreq');
    Route::view('/admin/historytodayactive','admin.historytodayactive');
    Route::view('/admin/historyallactive','admin.historyallactive');

});

Route::view('/admin/transactionwallet','admin.transactionwallet');
Route::view('/admin/withdrawalconfirm','admin.withdrawalconfirm');
Route::view('/admin/withdrawalpending','admin.withdrawalpending');
Route::view('/admin/withdrawalreject','admin.withdrawalreject');
Route::view('/admin/kycapproved','admin.kycapproved');
Route::view('/admin/kycrequest','admin.kycrequest');
Route::view('/admin/kycunavailable','admin.kycunavailable');
Route::view('/admin/historybinaryincome','admin.historybinaryincome');
Route::view('/admin/historypointincome','admin.historypointincome');
Route::view('/admin/historydirectincome','admin.historydirectincome');
Route::view('/admin/historytransactions','admin.historytransactions');
Route::view('/admin/historyadmintransaction','admin.historyadmintransaction');
Route::view('/admin/transfertotheruser','admin.transfertotheruser');
Route::view('/admin/transfertearningtomain','admin.transfertearningtomain');
Route::view('/admin/cmclosing','admin.cmclosing');
Route::view('/admin/settingswithdrawal','admin.settingswithdrawal');
Route::view('/admin/settingsmintransferamt','admin.settingsmintransferamt');
Route::view('/admin/settingspointwalletuse','admin.settingspointwalletuse');
Route::view('/admin/settingsautopool','admin.settingsautopool');
Route::view('/admin/settingscmc','admin.settingscmc');
Route::view('/admin/settingsactivation','admin.settingsactivation');
Route::view('/admin/settingsbinaryupgrade','admin.settingsbinaryupgrade');
Route::view('/admin/settingsupdatesystem','admin.settingsupdatesystem');
Route::view('/admin/users','admin.users');
Route::view('/admin/usersearch','admin.usersearch');

Route::get('/admin/leadership-bonus','leadership@leadershipBonus');

// End Admin Routing

