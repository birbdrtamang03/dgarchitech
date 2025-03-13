<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroBannerController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;

// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/', [HeroBannerController::class, 'fetchHeroBannerContent'])->name('home');

Route::get('/about', [AboutUsController::class, 'fetchAboutUsContent'])->name('about');
Route::get('/services', [ServiceController::class, 'fetchServiceHeaderContent'])->name('services');
Route::get('/service/{id}', [ServiceController::class, 'showServiceDetail'])->name('service.detail');

Route::get('/portfolio',function(){
    return view('portfolio');
})->name('portfolio');

Route::get('/construction',function(){
    return view('construction');
})->name('construction');

Route::get('/insights',function(){
    return view('insights');
})->name('insights');

Route::get('/career',function(){
    return view('career');
})->name('career');

Route::get('/blogs',function(){
    return view('blog');
})->name('blogs');

Route::get('/feature',function(){
    return view('feature');
})->name('feature');

Route::get('/ourteam',function(){
    return view('team');
})->name('ourteam');

Route::get('/testimonial',function(){
    return view('testimonial');
})->name('testimonial');

Route::get('/ouroffer',function(){
    return view('offer');
})->name('ouroffer');

Route::get('/faqs',function(){
    return view('FAQ');
})->name('faqs');

Route::get('/404',function(){
    return view('404');
})->name('404page');

Route::get('/contactus',function(){
    return view('contact');
})->name('contactus');



// admin routes
Route::get('/admin',function(){
    return view('admin/index');
})->name('admin');

Route::get('/admin/projects',function(){
    return view('admin/projects');
})->name('projects');

Route::get('/admin/landingpage',function(){
    return view('admin/landingPage');
})->name('landingPage');

Route::get('/admin/aboutUsContentManagement',function(){
    return view('admin/about');
})->name('aboutUsContentManagement');

Route::get('/admin/ourServiceContentManagement',function(){
    return view('admin/ourServices');
})->name('ourServiceContentManagement');

Route::get('/admin/horizontalForm',function(){
    return view('admin/horizontalForm');
})->name('horizontalForm');

Route::get('/admin/verticalForm',function(){
    return view('admin/verticalForm');
})->name('verticalForm');


Route::get('/admin/inputs',function(){
    return view('admin/forms-basic-inputs');
})->name('inputs');

Route::get('/admin/groups',function(){
    return view('admin/forms-input-groups');
})->name('groups');

Route::get('/admin/login',function(){
    return view('admin/auth-login-basic');
})->name('login');
Route::get('/admin/register',function(){
    return view('admin/auth-register-basic');
})->name('register');
Route::get('/admin/forgotPassword',function(){
    return view('admin/auth-forgot-password-basic');
})->name('forgotPassword');




// backend url

Route::post('/hero-banner', [HeroBannerController::class, 'store'])->name('hero-banner.store');
Route::post('/about-us', [AboutUsController::class, 'storeAboutUs'])->name('aboutUs.store');
Route::post('/storeTeamMembers', [AboutUsController::class, 'storeTeamMembers'])->name('teamMembers.store');
Route::post('/storeServiceHeader', [ServiceController::class, 'storeServiceHeader'])->name('serviceHeader.store');
Route::post('/storeServiceContent', [ServiceController::class, 'storeServiceContent'])->name('serviceContent.store');



