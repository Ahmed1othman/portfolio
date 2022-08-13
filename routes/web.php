<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\effects;
use Spatie\Sitemap\SitemapGenerator;

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

require __DIR__ . '/auth.php';

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','countVisitor']], function () { //...

    ################## Start Route Get Home ###########################
    Route::get('/', [HomeController::class, 'index'])->name('home');
    ################## End Route Get Home ###########################

    ################## Start Route Get profile ###########################
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    ################## End Route Get profile ###########################

    ################## Start Route Get orders ###########################
    Route::post('/orders', [HomeController::class, 'Orders'])->name('orders');
    ################## End Route Get orders ###########################

    ################## Start Route Get about-us ###########################
    Route::get('/about-us', function () {
        return view('website.about-us');
    })->name('aboutus');
    ################## End Route Get about-us ###########################


    ################## Start Route Get contact-us ###########################
    Route::get('/contact-us', function () {
        return view('website.contact-us');
    })->name('contactus');
    ################## End Route Get contact-us ###########################

    ################## Start Route Get site-services ###########################
    Route::get('/site-services', [HomeController::class, 'profile'])->name('siteservice');
    ################## End Route Get site-services ###########################

    ################## Start Route Get site-news ###########################
    Route::get('/site-news', [HomeController::class, 'profile'])->name('sitenews');
    ################## End Route Get site-news ###########################

    ################## Start Route Get site-projects ###########################
    Route::get('/site-projects', [HomeController::class, 'profile'])->name('siteprojects');
    ################## End Route Get site-projects ###########################

    ################## Start Route Get site-projects ###########################
    Route::post('/site-projects', [HomeController::class, 'subscription'])->name('subscription');
    ################## End Route Get site-projects ###########################

    ################## Start Route Get contactus ###########################
    Route::post('/contactus', [HomeController::class, 'contactus'])->name('contactusstore');
    ################## End Route Get contactus ###########################

    Route::get('/site-services',[HomeController::class , 'siteservices' ])->name('siteservices');
    Route::get('/service-details/{id}',[HomeController::class , 'serviceDetails' ])->name('service.details');

    Route::get('/site-news',[HomeController::class , 'sitenews' ])->name('sitenews');
    Route::get('/news-details/{id}',[HomeController::class , 'newsDetails' ])->name('news.details');

    Route::get('/site-projects',[HomeController::class , 'siteprojects' ])->name('siteprojects');
    Route::get('/project-details/{id}',[HomeController::class , 'projectDetails' ])->name('project.details');
    Route::get('/page/{slug}',[HomeController::class , 'customPage' ])->name('customPage');

    Route::post('/site-projects',[HomeController::class , 'subscription' ])->name('subscription');
    Route::post('/contactus',[HomeController::class , 'contactus' ])->name('contactusstore');
    Route::get('/pdf',[HomeController::class , 'downloadPdf' ])->name('downloadPdf');
});


Route::get("users",[effects::class,"list"]);
Route::get("sitemap",function (){
    SitemapGenerator::create('/')->writeToFile('sitemap.xml');
});
