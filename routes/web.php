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

use Illuminate\Support\Facades\Route;

Route::get('/', 'Frontend\HomeController@index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//MultiAuthentication System

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('/admin/login', 'Auth\AdminLoginController@login');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout');
Route::get('/dashboard', 'Admin\DashboardController@index');

Route::get('/member/register', 'Auth\RegisterController@showMemberRegisterForm');
Route::get('/verify/{token}', 'Auth\RegisterController@memberVerify');
Route::post('/member/register', 'Auth\RegisterController@createMember');

Route::get('/member/login', 'Auth\MemberLoginController@showLoginForm');
Route::post('/member/login', 'Auth\MemberLoginController@login');
Route::post('/member/logout', 'Auth\MemberLoginController@logout');
Route::get('/member', 'Admin\MemberController@index');

Route::view('/home', 'home')->middleware('auth');
//Route::View('/member', 'member');

//BlogController

Route::get('/blogs', 'Frontend\BlogController@index');
Route::get('/blog/{slug}', 'Frontend\BlogController@show');
Route::post('/blog/{slug}/like', 'Frontend\BlogController@like');
Route::post('/blog/{slug}/dislike', 'Frontend\BlogController@dislike');
Route::post('/blog/{slug}/rating', 'Frontend\BlogController@rating');
Route::post('/blog/{slug}/comment', 'Frontend\BlogController@commentStore');
Route::post('/blog/{slug}/comment/{comment}', 'Frontend\BlogController@commentUpdate');
Route::delete('/blog/{slug}/comment/{comment}', 'Frontend\BlogController@commentDestroy');


//AnalysisController

Route::get('/analyses', 'Frontend\AnalysisController@index');
Route::get('/analysis/{slug}', 'Frontend\AnalysisController@show');
Route::post('/analysis/{slug}/like', 'Frontend\AnalysisController@like');
Route::post('/analysis/{slug}/dislike', 'Frontend\AnalysisController@dislike');
Route::post('/analysis/{slug}/rating', 'Frontend\AnalysisController@rating');
Route::post('/analysis/{slug}/comment', 'Frontend\AnalysisController@commentStore');
Route::post('/analysis/{slug}/comment/{comment}', 'Frontend\AnalysisController@commentUpdate');
Route::delete('/analysis/{slug}/comment/{comment}', 'Frontend\AnalysisController@commentDestroy');


//AboutUsController

Route::get('/aboutus', 'Frontend\AboutUsController@index');



//CopyTradeController

Route::get('/copytrade', 'Frontend\CopyTradeController@index');



//ForexConsultancyController
Route::get('/forex-consultancy', 'Frontend\ForexConsultancyController@index');

//ForexSignalController
Route::get('/forex-signal', 'Frontend\ForexSignalController@index');

//ForexSignalPackageController
Route::get('/forex-signal-package', 'Frontend\ForexSignalPackageController@index');

//ForexSignalReportController
Route::get('/forex-signal-report', 'Frontend\ForexSignalReportController@index');


//ForexSignalReportController
Route::get('/faq', 'Frontend\FAQController@index');

//ForexBrokerController
Route::get('/forex-broker-review', 'Frontend\ForexBrokerController@index');

//ContactUsController
Route::get('/contact-us', 'Frontend\ContactUsController@index');

Route::post('/customer/contact/mail', 'Frontend\ContactUsController@customerContactMail');

//FundManagementController
Route::get('/fund-management', 'Frontend\FundManagementController@index');

//SignalFaqController
Route::get('/signal-faq', 'Frontend\SignalFaqController@index');

//ForexVpxReviewController
Route::get('/forex-vpx-review', 'Frontend\ForexVpxreviewController@index');


// Start AdminDashboard Work

//BlogController

Route::get('/admin/blogs', 'Admin\BlogController@index');

Route::post('admin/blog', 'Admin\BlogController@store');

Route::post('admin/blog/{blog}/inactive', 'Admin\BlogController@inactive');

Route::post('admin/blog/{blog}/active', 'Admin\BlogController@active');

Route::post('admin/blog/{blog}/publish', 'Admin\BlogController@publish');

Route::get('admin/blog/edit', 'Admin\BlogController@edit');

Route::post('admin/blog/update', 'Admin\BlogController@update');

Route::post('admin/blog/{blog}/delete', 'Admin\BlogController@delete');

Route::post('admin/blog/{blog}/restore', 'Admin\BlogController@restore');

Route::delete('admin/blog/{blog}/delete', 'Admin\BlogController@destroy');

Route::get('admin/sub-category/{category}', 'Admin\CategoryController@childrens');





//AnalysisController

Route::get('admin/analyses', 'Admin\AnalysisController@index');

Route::post('admin/analysis/save', 'Admin\AnalysisController@store');

Route::post('admin/analysis/{analysis}/inactive', 'Admin\AnalysisController@inactive');

Route::post('admin/analysis/{analysis}/active', 'Admin\AnalysisController@active');

Route::post('admin/analysis/{analysis}/publish', 'Admin\AnalysisController@publish');

Route::get('admin/analysis/edit', 'Admin\AnalysisController@edit');
Route::post('admin/analysis/update', 'Admin\AnalysisController@update');

Route::post('admin/analysis/{analysis}/delete', 'Admin\AnalysisController@delete');


//CommentController

Route::get('admin/comments', 'Admin\CommentController@index');
Route::post('admin/comment/{id}/approved', 'Admin\CommentController@approved');
Route::post('admin/comment/{id}/revoke', 'Admin\CommentController@revoke');
Route::get('admin/{service}/comments', 'Admin\CommentController@comments'); // Analysis and Blog service





//PackagesController

Route::get('admin/packages', 'Admin\PackageController@index');
Route::post('admin/packages/{id}/active', 'Admin\PackageController@active');
Route::post('admin/packages/{id}/inactive', 'Admin\PackageController@inactive');
Route::post('admin/package/save', 'Admin\PackageController@store');
Route::get('admin/package/edit/{id}', 'Admin\PackageController@edit');
Route::post('admin/package/update/{package}', 'Admin\PackageController@update');
Route::post('admin/packages/{id}/delete', 'Admin\PackageController@delete');



//FaqController

Route::get('admin/faq', 'Admin\FaqController@index');
Route::get('admin/faq/{faq}', 'Admin\FaqController@show'); //Genarel and ForexSignalFaq
Route::post('admin/faq/save', 'Admin\FaqController@store');
Route::get('admin/faq/edit/{id}', 'Admin\FaqController@edit');
Route::post('admin/faq/update/{faq}', 'Admin\FaqController@update');
Route::post('admin/faq/{faq}/active', 'Admin\FaqController@active');
Route::post('admin/faq/{faq}/inactive', 'Admin\FaqController@inactive');
Route::post('admin/faq/{id}/delete', 'Admin\FaqController@delete');



















// End AdminDashboard Work


