<?php

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

Route::get('/', 'App\Http\Controllers\HomePageController@index')->name('frotend.homepage');


route::get('/home', 'App\Http\Controllers\AboutController@index')->name('admin.frontend.about')->middleware('guard');



route::get('/courses', 'App\Http\Controllers\CourseController@index')->name('admin.frotend.course');

route::group(['middleware' => 'guard'], function () {
    //-----------------Gallery-----------------------------------
    route::get('/gallery', 'App\Http\Controllers\GalleryController@index')->name('admin.frotend.gallery');
    route::get('/admin/galleryadd', 'App\Http\Controllers\admin\GalleryAddController@index')->name('frotend.admin.galleryadd');
    route::post('/gallery/add', 'App\Http\Controllers\admin\GalleryAddController@store')->name('admin.frotend.gallery.add');
    route::get('/admin/gallery', 'App\Http\Controllers\admin\GalleryViewController@index')->name('frotend.admin.gallery');
    route::get('/admin/gallery/delete/{id}', 'App\Http\Controllers\admin\GalleryViewController@delete')->name('frotend.admin.gallery.delete');
    route::get('/admin/gallery/edit/{id}', 'App\Http\Controllers\admin\GalleryAddController@edit')->name('frotend.admin.gallery.edit');
    route::post('/admin/gallery/update/{id}', 'App\Http\Controllers\admin\GalleryAddController@update')->name('admin.frotend.gallery.update');
    route::get('/admin/gallery/status/{id}', 'App\Http\Controllers\admin\GalleryViewController@status')->name('admin.frotend.gallery.status.update');


    //--------------end-------------------


    //------------------------About------------------------------


    route::get('/about/add', 'App\Http\Controllers\admin\AboutAddController@index')->name('admin.frotend.aboutadd');
    route::post('/about/add/store', 'App\Http\Controllers\admin\AboutAddController@store')->name('admin.frotend.aboutadd.store');
    route::get('/about/view', 'App\Http\Controllers\admin\AboutViewController@index')->name('admin.frotend.aboutview');
    route::get('/about/delete/{id}', 'App\Http\Controllers\admin\AboutAddController@delete')->name('admin.frotend.about.delete');
    route::get('/about/edit/{id}', 'App\Http\Controllers\admin\AboutAddController@edit')->name('admin.frotend.about.edit');
    route::post('/about/update/{id}', 'App\Http\Controllers\admin\AboutAddController@update')->name('admin.frotend.about.update');


    //------------------------End------------------------------


    //------------------------News------------------------------

    route::get('/news', 'App\Http\Controllers\admin\AddNewsController@index')->name('frotend.news');
    route::post('/news/add', 'App\Http\Controllers\admin\AddNewsController@store')->name('frotend.news.add');
    route::get('/news/view', 'App\Http\Controllers\admin\ViewNewsController@index')->name('frotend.news.view');
    route::get('/news/status/{id}', 'App\Http\Controllers\admin\ViewNewsController@status')->name('frotend.news.status');
    route::get('/news/delete/{id}', 'App\Http\Controllers\admin\AddNewsController@delete')->name('frotend.news.delete');
    route::get('/news/edit/{id}', 'App\Http\Controllers\admin\AddNewsController@edit')->name('frotend.news.edit');
    route::post('/news/update/{id}', 'App\Http\Controllers\admin\AddNewsController@update')->name('frotend.news.update');
    route::get('/news/new/{id}', 'App\Http\Controllers\NewsController@index')->name('frotend.new.news');



    //--------------------------End-------------------------------


    //-------------------------------Course------------------------------

    route::get('/course', 'App\Http\Controllers\admin\AddCourseController@index')->name('frotend.admin.add.course');
    route::post('/course/add', 'App\Http\Controllers\admin\AddCourseController@store')->name('frotend.admin.add.course.store');
    route::get('/course/view', 'App\Http\Controllers\admin\AddCourseController@view')->name('frotend.admin.add.course.view');
    route::get('/course/view/delete/{id}', 'App\Http\Controllers\admin\AddCourseController@delete')->name('frotend.admin.add.course.delete');
    route::get('/course/view/edit/{id}', 'App\Http\Controllers\admin\AddCourseController@edit')->name('frotend.admin.add.course.edit');
    route::post('/course/update/{id}', 'App\Http\Controllers\admin\AddCourseController@update')->name('frotend.admin.add.course.update');
    route::get('/course/status/{id}', 'App\Http\Controllers\admin\AddCourseController@status')->name('frotend.admin.add.course.status');

    route::get('/course/courseview/{id}', 'App\Http\Controllers\CourseController@courseview')->name('frotend.admin.add.course.frotend');



    //-----------------------End---------------------------------------------

    //--------------------------Contact-------------------------------------------------------------

    route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('admin.frotend.contact');
    route::get('/contact/view', 'App\Http\Controllers\admin\ContactViewController@index')->name('admin.contact.view');
    route::get('/contact/edit/{id}', 'App\Http\Controllers\admin\ContactViewController@edit')->name('admin.contact.edit');
    route::post('/contact/update/{id}', 'App\Http\Controllers\admin\ContactViewController@update')->name('admin.contact.update');
    //--------------------------------------End ---------------------------------------


    //------------------------------Country--------------------------------------------

    route::get('/country', 'App\Http\Controllers\admin\CountryAddController@index')->name('admin.country');
    route::post('/country/add', 'App\Http\Controllers\admin\CountryAddController@store')->name('admin.country.add');
    route::get('/country/view', 'App\Http\Controllers\admin\CountryAddController@view')->name('admin.country.view');
    route::get('/country/status/{id}', 'App\Http\Controllers\admin\CountryAddController@status')->name('admin.country.status');
    route::get('/country/delete/{id}', 'App\Http\Controllers\admin\CountryAddController@delete')->name('admin.country.delete');
    route::get('/country/edit/{id}', 'App\Http\Controllers\admin\CountryAddController@edit')->name('admin.country.edit');
    route::post('/country/update/{id}', 'App\Http\Controllers\admin\CountryAddController@update')->name('admin.country.update');

    //------------------------------End-------------------------------------------------------------

    //-----------------------------State----------------------------------------------------

    route::get('/state', 'App\Http\Controllers\admin\StateAddController@index')->name('admin.state.add');
    route::post('/state/store', 'App\Http\Controllers\admin\StateAddController@store')->name('admin.state.store');
    route::get('/state/view', 'App\Http\Controllers\admin\StateAddController@view')->name('admin.state.view');
    route::get('/state/status/{id}', 'App\Http\Controllers\admin\StateAddController@status')->name('admin.state.status');
    route::get('/state/delete/{id}', 'App\Http\Controllers\admin\StateAddController@delete')->name('admin.state.delete');
    route::get('/state/edit/{id}', 'App\Http\Controllers\admin\StateAddController@edit')->name('admin.state.edit');
    route::post('/state/update/{id}', 'App\Http\Controllers\admin\StateAddController@update')->name('admin.state.update');

    //-------------------------------Enquiry--------------------------------------
    route::get('/enquiry', 'App\Http\Controllers\EnquiryController@index')->name('admin.frotend.enquiry');
    route::post('/enquiry/add', 'App\Http\Controllers\EnquiryController@store')->name('admin.frotend.enquiry.store');
    route::any('/enquiry/state', 'App\Http\Controllers\EnquiryController@getState')->name('admin.frotend.enquiry.state');
    route::get('/enquiry/view', 'App\Http\Controllers\EnquiryController@view')->name('enquiry.view');
    //------------------------------------End-------------------------------------
    route::get('/admin', 'App\Http\Controllers\admin\AdminController@index')->name('admin.page');
});



//------------------------------------User Register------------------------------------------

route::get('/admin/register', 'App\Http\Controllers\admin\RegisterController@index')->name('admin.fortend.register');
route::post('/admin/register/store', 'App\Http\Controllers\admin\RegisterController@store')->name('admin.fortend.register.store');
route::get('/admin/login', 'App\Http\Controllers\admin\RegisterController@login')->name('admin.fortend.login');
route::post('/admin/checklogin', 'App\Http\Controllers\admin\RegisterController@checklogin')->name('admin.fortend.checklogin');
route::get('/admin/logout', 'App\Http\Controllers\admin\RegisterController@logout')->name('admin.fortend.logout');

//------------------------User------------------------------------------------------
route::get('/admin/user/{id}', 'App\Http\Controllers\admin\UserController@index')->name('admin.fortend.user');
route::get('/admin/user/edit/{id}', 'App\Http\Controllers\admin\UserController@edit')->name('admin.fortend.user.edit');
route::post('/admin/user/update/{id}', 'App\Http\Controllers\admin\UserController@update')->name('admin.fortend.user.update');
route::get('/admin/send-email', 'App\Http\Controllers\admin\UserController@sendEmail');
route::get('/admin/forget', 'App\Http\Controllers\admin\UserController@forget')->name('admin.user.forget');
route::post('/admin/gmail', 'App\Http\Controllers\admin\UserController@sendlink')->name('admin.user.sendlink');
route::post('/admin/rest', 'App\Http\Controllers\admin\UserController@sendlink')->name('admin.user.sendlink');

//-------------------------------------------end-------------------------------------------------------

//--------------------------------------------------social route----------------------------------

route::get('/googlelogin', 'App\Http\Controllers\SocialController@googlelogin')->name('frotend.google.login');
route::get('/google-call-back', 'App\Http\Controllers\SocialController@googlecallback')->name('frotend.google.callback');


// 'prefix' => 'admin', 
Auth::routes();

Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home');