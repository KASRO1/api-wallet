<?php

use App\Calendar;
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

if (env('APP_ENV') == 'production') {
    \URL::forceScheme('http');
}
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang');
Route::get('/', function () {
    $news = \App\News::query()->take(6)->latest('published_at')->get();

    $start = now()->startOfMonth()->startOfWeek();
    $end = now()->endOfMonth()->endOfWeek();

    $calendar = collect();

    for($current = $start->clone(); $current->getTimestamp() < $end->getTimestamp(); $current->addDay()) {
        $date = Calendar::query()->where('date', '=', $current->format('Y-m-d'))->first();
        $calendar->put($current->format('d-m'), [
            'date' => $current->clone(),
            'value' => $date,
        ]);
    }

    return view('welcome', compact('news', 'calendar'));
})->name('landing');

Auth::routes();

Route::post('/payment/p2p/notify', 'p2pController@checkPayment')->name('payment.p2p.notify')->withoutMiddleware(['web']);
Route::post('/payment/notify', 'WestWalletController@checkPayment')->name('payment.notify')->withoutMiddleware(['web']);
Route::get('/home', 'CabinetController@index')->name('home');
Route::view('/recover-account', 'pages.recover')->name('password.reset');
Route::post('/recover-account', 'Auth\ResetPasswordController@index')->name('password.reset');
//Route::get('/new-password', 'Auth\ResetPasswordController@index')->name('password.recovery');
Route::post('/new-password', 'Auth\ResetPasswordController@recover')->name('password.recovery');
Route::view('/about', 'pages.about')->name('page.about');
Route::view('/token', 'pages.token')->name('page.token');
Route::view('/referral', 'pages.referral')->name('page.ref');
Route::view('/apybot', 'pages.apybot')->name('page.apybot');
Route::view('/company', 'pages.company')->name('page.company');
Route::view('/staking', 'pages.staking')->name('page.staking');
Route::view('/defistaking', 'pages.defistaking')->name('page.defistaking');
// Route::view('/liquidity', 'pages.liquidity')->name('page.liquidity');
Route::get('/liquidity', 'PageController@liquidity')->name('page.liquidity');
Route::view('/classicstaking', 'pages.classicstaking')->name('page.classicstaking');
Route::view('/ido-invest', 'pages.investIDO')->name('page.investIDO');
Route::view('/terms', 'pages.terms')->name('page.terms');
Route::view('/strategy', 'pages.strategy')->name('page.strategy');
Route::view('/faq', 'pages.faq')->name('page.faq');
Route::any('/news', 'NewsController')->name('page.news');
Route::any('/news/{news}', 'NewsController@show')->name('page.news.show');
Route::view('/support', 'pages.support')->name('page.support');
Route::view('/partners', 'pages.partners')->name('page.partners');
Route::view('/invest', 'pages.invest')->name('page.invest');
Route::view('/rules', 'pages.rules')->name('page.rules');

Route::post('/support', 'SupportController')->name('support.store');
Route::get('/payment-system/{id}', 'CabinetController@paymentSystem')->name('payment-system');

Route::view('/passive', 'pages.passive')->name('page.passive');
Route::view('/active', 'pages.active')->name('page.active');
Route::view('/am', 'pages.tm')->name('page.tm');

Route::middleware('auth')->group(function () {
    Route::get('/show-recovery','CabinetController@showPhrase')->name('showPhrase');
    Route::get('/cabinet', 'CabinetController@index')->name('cabinet');
    Route::get('/withdraw', 'CabinetController@withdraw')->name('cabinet.withdraw');
    Route::post('/withdraw', 'OutcomeController@store')->name('cabinet.withdraw');
    Route::get('/account', 'CabinetController@account')->name('cabinet.account');
    Route::post('/wallet/generate', 'WestWalletController@generateWallets')->name('wallet.generate');
    Route::get('/deposits', 'DepositController@index')->name('cabinet.deposits');
    Route::get('/deposits/new', 'CabinetController@newDeposit')->name('cabinet.deposits.new');
    Route::post('/deposits/update/${deposit}', 'DepositController@update')->name('cabinet.deposits.update');
    Route::post('/deposits', 'DepositController@store')->name('cabinet.deposits.store');
    Route::get('/wallet', 'CabinetController@wallets')->name('cabinet.wallet');
    Route::get('/wallet/fiat', 'CabinetController@walletsFiat')->name('cabinet.wallet.fiat');
    Route::post('/claim/${deposit}', 'DepositController@claim')->name('cabinet.deposits.claim');
    //Route::get('/income', 'IncomeController@index')->name('income');
    //Route::post('/income', 'IncomeController@store')->name('cabinet.income.store');
    //Route::get('/income/{income}/requisites', 'IncomeController@requisites')->name('cabinet.income.requisites');
    //Route::post('/income/{income}', 'IncomeController@update')->name('cabinet.income.update');
    Route::get('/outcome', 'OutcomeController@index')->name('cabinet.outcome');
    Route::post('/outcome', 'OutcomeController@store')->name('cabinet.outcome.store');
    Route::get('/referals', 'CabinetController@referals')->name('cabinet.referals');
    Route::get('/promo', 'CabinetController@promo')->name('cabinet.promo');
    Route::get('/password', 'CabinetController@password')->name('cabinet.password');
    Route::post('/password', 'CabinetController@passwordStore')->name('cabinet.password.store');
    Route::post('/password/fin', 'CabinetController@finPassword')->name('cabinet.fin_password.store');
    Route::post('/ga/connect', 'GoogleAuthenticatorController@connect')->name('cabinet.ga.connect');
    Route::post('/payment/p2p/create', 'p2pController@createPaymentOrder')->name('payment.p2p.create');


    Route::get('/staking-plan-1', 'CabinetController@investFtxbot')->name('investplan.ftx');
    Route::get('/staking-plan-2', 'CabinetController@isolated')->name('investplan.isolated');
    Route::get('/staking-plan-3', 'CabinetController@stock')->name('investplan.stock');
    Route::get('/staking-plan-4', 'CabinetController@ido')->name('investplan.ido');
    Route::get('/staking-plan-5', 'CabinetController@liquidity')->name('investplan.liquidity');
    Route::get('/staking-plan-6', 'CabinetController@stacking')->name('investplan.stacking');
    
    Route::get('/operation/${id}', 'CabinetController@showDepositWallet')->name('cabinet.showWallet');

    Route::post('promocode', 'CabinetController@promocode')->name('cabinet.promocode');

    Route::get('deals', 'DealsController')->name('cabinet.deals');

    Route::get('add-funds/${wallet}', 'CabinetController@showIncome')->name('cabinet.income');
    Route::get('add-funds/${id}/show', 'CabinetController@showIncomeReq')->name('cabinet.income.show');
    Route::post('add-funds', 'IncomeController@store')->name('cabinet.income.add');
    Route::post('add-funds/${id}/update', 'IncomeController@update')->name('cabinet.income.update');
    Route::get('tracking', 'TrackingController')->name('cabinet.tracking');

    Route::get('transfer', 'TransferController@show')->name('cabinet.transfer');
    Route::post('transfer', 'TransferController@store')->name('cabinet.transfer.store');

    Route::get('conversion', 'ConversionController@show')->name('cabinet.conversion');
    Route::get('socials', 'SocialsController@show')->name('cabinet.socials');
    Route::post('socials', 'SocialsController@store')->name('cabinet.socials.store');

    Route::get('notifications', 'NotificationsController@show')->name('cabinet.notifications');

    Route::get('verification', 'VerificationController@show')->name('cabinet.verification');
    Route::post('verification', 'VerificationController@store')->name('cabinet.verification.store');

    Route::view('calculator', 'cabinet.calculator')->name('cabinet.calculator');

    Route::get('requisites', 'RequisiteController@show')->name('cabinet.requisites');
    Route::post('requisites', 'CabinetController@storeWallets')->name('cabinet.requisites.store');


    Route::prefix('admin')
        ->middleware('admin')
        ->group(function () {
        Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
        Route::any('/tracking', 'Admin\DashboardController@store')->name('admin.tracking.store');

        Route::any('user/{user}/verify', 'Admin\UsersController@verify')->name('admin.users.verify');
        Route::any('user/{user}/notVerify', 'Admin\UsersController@notVerify')->name('admin.users.notVerify');

        Route::any('requisites/{requisite}/delete', 'Admin\RequisitesController@delete')->name('admin.requisites.delete');

        Route::post('users/{user}/editRefPercent', 'Admin\UsersController@referralPercent')->name('admin.users.percent');
        Route::post('users/{user}/editRequisites', 'Admin\UsersController@changeRequisites')->name('admin.users.requisites');
        Route::get('users/{user}/banUser', 'Admin\UsersController@banUser')->name('admin.users.ban');
        Route::get('users/{user}/unlockProduct', 'Admin\UsersController@specialProduct')->name('admin.users.addproduct');
        Route::get('users/{user}/password', 'Admin\UsersController@password')->name('admin.users.password');
        Route::resource('users', 'Admin\UsersController')->names('admin.users');
        Route::resource('promocodes', 'Admin\PromocodesController')->names('admin.promocodes');
        Route::resource('news', 'Admin\NewsController')->names('admin.news');
        Route::resource('supports', 'Admin\SupportsController')->names('admin.supports');


        Route::post('accounts/{account}', 'Admin\AccountsController@update')->name('admin.accounts.update');
        Route::post('payment-details/{paymentDetail}', 'Admin\PaymentDetailsController@update')->name('admin.payment-details.update');
        Route::post('update-apyrate', 'Admin\ConfigsController@updateApyRate')->name('admin.update-apyrate');
        Route::post('update-preferencerate', 'Admin\ConfigsController@updatePreferenceRate')->name('admin.update-preferencerate');

        Route::get('outcomes/{outcome}/success', 'Admin\OutcomesController@success')->name('admin.outcomes.success');
        Route::get('outcomes/{outcome}/cancel', 'Admin\OutcomesController@cancel')->name('admin.outcomes.cancel');
        Route::get('outcomes/{outcome}/error', 'Admin\OutcomesController@error')->name('admin.outcomes.error');

        Route::get('incomes/{income}/update', 'Admin\IncomesController@update')->name('admin.incomes.update');
        Route::get('incomes/{income}/success', 'Admin\IncomesController@success')->name('admin.incomes.success');
        Route::get('incomes/{income}/cancel', 'Admin\IncomesController@cancel')->name('admin.incomes.cancel');
        Route::get('incomes/{income}/error', 'Admin\IncomesController@error')->name('admin.incomes.error');

        Route::post('deposits/{user}', 'Admin\DepositsController@store')->name('admin.deposits.store');
        Route::post('deposits/{deposit}/update', 'Admin\DepositsController@update')->name('admin.deposits.update');
        Route::get('deposits/{deposit}/close', 'Admin\DepositsController@close')->name('admin.deposits.close');
        Route::get('deposits/{deposit}/open', 'Admin\DepositsController@open')->name('admin.deposits.open');
        Route::get('deposits/{deposit}/destroy', 'Admin\DepositsController@destroy')->name('admin.deposits.destroy');

        Route::post('image/upload', 'Admin\ImageUploadController')->name('image.upload');

        Route::get('notifications/{notification}/delete', 'Admin\NotificationsController@destroy')->name('notification.destroy');
        Route::post('notifications/{user}', 'Admin\NotificationsController@store')->name('notification.store');


        Route::get('tracking-edit', 'Admin\GraphController@showPage')->name('admin.tracking.page');
        Route::post('buildGraph', 'Admin\GraphController@index')->name('admin.graph.build');
        Route::post('modifyGraph', 'Admin\GraphController@changeCandle')->name('admin.graph.modify');
        Route::post('deleteGraph', 'Admin\GraphController@destroy')->name('admin.graph.destroy');
    });
});
