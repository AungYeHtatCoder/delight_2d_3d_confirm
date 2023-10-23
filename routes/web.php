<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PlayTwoDController;
use App\Http\Controllers\Admin\TwoDigitController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TwoDWinnerController;
use App\Http\Controllers\Admin\FillBalanceController;
use App\Http\Controllers\Admin\TwoDLotteryController;
use App\Http\Controllers\Admin\FillBalanceReplyController;
use App\Http\Controllers\Admin\TwoDEveningWinnerController;
use App\Http\Controllers\Admin\TwoDWinnerHistoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\User\WelcomeController::class, 'index'])->name('welcome');
//Route::get('/user_profile', [App\Http\Controllers\User\WelcomeController::class, 'userProfile']);
Route::get('/user_fillmoney', [App\Http\Controllers\User\WelcomeController::class, 'userFillMoney']);
Route::get('/user_login', [App\Http\Controllers\User\WelcomeController::class, 'userLogin']);
Route::get('/user_register', [App\Http\Controllers\User\WelcomeController::class, 'userRegister']);
Route::get('/winner_lists', [App\Http\Controllers\User\WelcomeController::class, 'winnerList']);
Route::get('/lottery_result', [App\Http\Controllers\User\WelcomeController::class, 'lotteryResult']);
Route::get('/contact', [App\Http\Controllers\User\WelcomeController::class, 'contact']);

Route::get('/service', [App\Http\Controllers\User\WelcomeController::class, 'service']);


Route::get('/user_requestmoney', [App\Http\Controllers\User\WelcomeController::class, 'userRequestMoney']);






Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
    // Permissions
    Route::delete('permissions/destroy', [PermissionController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionController::class);
    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);
    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    //Banners
    Route::resource('banners', BannerController::class);


    // profile resource rotues
    Route::resource('profiles', ProfileController::class);
    // user profile route get method
    Route::put('/change-password', [ProfileController::class, 'newPassword'])->name('changePassword');
    // PhoneAddressChange route with auth id route with put method
    Route::put('/change-phone-address', [ProfileController::class, 'PhoneAddressChange'])->name('changePhoneAddress');
    Route::put('/change-kpay-no', [ProfileController::class, 'KpayNoChange'])->name('changeKpayNo');
    Route::put('/change-join-date', [ProfileController::class, 'JoinDate'])->name('addJoinDate');
    Route::resource('play-twod', PlayTwoDController::class);
    Route::post('lotteries-two-d-play', [TwoDigitController::class, 'store'])->name('StorePlayTwoD');

    //Route::resource('two-d-lotteries', TwoDigitController::class);
    //Route::get('/two-d-lotteries', [App\Http\Controllers\Admin\TwoDigitController::class, 'index'])->name('GetTwoDigit');
    Route::post('/two-d-play', [App\Http\Controllers\Admin\TwoDigitController::class, 'store'])->name('two-d-play.store');
    Route::get('/close-two-d', [App\Http\Controllers\Admin\CloseTwodController::class, 'index'])->name('CloseTwoD');
    Route::put('/update-open-close-two-d', [App\Http\Controllers\Admin\CloseTwodController::class, 'update'])->name('OpenCloseTwoD');
    Route::resource('twod-records', TwoDLotteryController::class);
    Route::resource('tow-d-win-number', TwoDWinnerController::class);
    Route::resource('tow-d-morning-number', TwoDMorningController::class);
    Route::get('/two-d-morning-winner', [App\Http\Controllers\Admin\TwoDMorningWinnerController::class, 'TwoDMorningWinner'])->name('morningWinner');

    Route::get('/two-d-evening-number', [App\Http\Controllers\Admin\TwoDMorningController::class, 'EveningTwoD'])->name('eveningNumber');

    Route::get('/two-d-evening-winner', [App\Http\Controllers\Admin\TwoDMorningController::class, 'TwoDEveningWinner'])->name('eveningWinner');
    Route::get('/two-d-evening-winner', [App\Http\Controllers\Admin\TwoDEveningWinnerController::class, 'TwoDEveningWinner'])->name('eveningWinner');

    Route::get('profile/fill_money', [ProfileController::class, 'fillmoney']);
    // kpay fill money get route
    Route::get('profile/kpay_fill_money', [ProfileController::class, 'index'])->name('kpay_fill_money');
    Route::resource('fill-balance-replies', FillBalanceReplyController::class);
});


Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
    Route::get('user-profile', [ProfileController::class, 'UserProfile'])->name('UserProfile');
    // kpay route get method
    Route::get('user-kpay-fill-money', [FillBalanceController::class, 'UserKpayFillMoney'])->name('UserKpayFillMoney');
    // kpay fill money post method
    Route::post('user-kpay-fill-money', [FillBalanceController::class, 'StoreKpayFillMoney'])->name('StoreKpayFillMoney');

    Route::get('user-cbpay-fill-money', [FillBalanceController::class, 'UserCBPayFillMoney'])->name('UserCBPayFillMoney');

    Route::post('user-cbpay-fill-money', [FillBalanceController::class, 'StoreCBpayFillMoney'])->name('StoreCBpayFillMoney');

    Route::get('user-wavepay-fill-money', [FillBalanceController::class, 'UserWavePayFillMoney'])->name('UserWavePayFillMoney');

    Route::post('user-wavepay-fill-money', [FillBalanceController::class, 'StoreWavepayFillMoney'])->name('StoreWavepayFillMoney');

    Route::get('user-aya-pay-fill-money', [FillBalanceController::class, 'UserAYAPayFillMoney'])->name('UserAYAPayFillMoney');

    Route::post('user-aya-pay-fill-money', [FillBalanceController::class, 'StoreAYApayFillMoney'])->name('StoreAYApayFillMoney');
    Route::get('/two-d-winners-history', [TwoDWinnerHistoryController::class, 'getWinners'])->name('two-d-winners-history.getWinners');
});


// Route::group(['prefix' => 'two-d-play', 'as' => 'two-d-play.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'lottery.available']], function () {
//     //Route::post('lotteries-two-d-play', TwoDigitController::class);
//     Route::post('lotteries-two-d-play', [TwoDigitController::class, 'store'])->name('StorePlayTwoD');

// });

// Route::group(['prefix' => 'two-d-play', 'as' => 'two-d-play.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
//     Route::post('lotteries-two-d-play', [TwoDigitController::class, 'store'])->middleware('lottery.available')->name('StorePlayTwoD');

//     // ... any other routes you might have for this group that do not need the 'lottery.available' middleware
// });