<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SpotController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\JoinController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Admin\LocationController;
//---website---//
use App\Http\Controllers\Admin\TravelerController;
use App\Http\Controllers\Website\ReviewController;
use App\Http\Controllers\Website\SearchController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Website\WebsiteBlogController;
use App\Http\Controllers\Website\SpotController as WebsiteSpotController;

use App\Http\Controllers\Website\WebsiteLocationController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Website\TourController as WebsiteTourController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|x
*/
//----website-----
//home page
Route::get('/',[HomeController::class,'home'])->name('website');
Route::get('/website/Blog/{id}',[WebsiteBlogController::class,'BlogView'])->name('website.blog');
Route::get('/frontend/login',[UserController::class,'loginView'])->name('user.page.login');
Route::post('/frontend/Registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.dologin');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

//location
Route::get('/location/{location_id}',[WebsiteLocationController::class,'LocationSpotView'])->name('website.view.location');

Route::group(['middleware'=>'check_user'],function (){
//Tourplan
route::get('/tourplan',[WebsiteTourController::class,'TourPlan'])->name('user.tourplan');
route::post('/make/tourplan',[WebsiteTourController::class,'storeTourPlan'])->name('user.added.tourplan');
route::get('/view/tourplan/{tourplan_id}',[WebsiteTourController::class,'ViewTourPlanDetails'])->name('view.tourplan.user');
route::get('/view/tourplan-list',[WebsiteTourController::class,'viewTourList'])->name('tourplan.list');
/*My plan*/
route::get('/view/MyPlan/list',[WebsiteTourController::class,'MyPlanList'])->name('Myplan.list');
route::get('/view/MyPlan/Edit/{tourplan_id}',[WebsiteTourController::class,'MyPlanEdit'])->name('Myplan.Edit');
route::PUT('/view/MyPlan/update/{tourplan_id}',[WebsiteTourController::class,'MyPlanUpdate'])->name('Myplan.update');
route::get('/view/My-Joined-Plan/list',[WebsiteTourController::class,'MyJoinedPlanList'])->name('My.Joined.Plan.List');

//Spot
route::get('/traveler/spot/add',[WebsiteSpotController::class,'add_spot_view'])->name('add.spot.user');
Route::post('/storeSpot',[WebsiteSpotController::class,'store_spot'])->name('store.spot');
Route::get('/user/spot/view',[WebsiteSpotController::class,'userspotlist'])->name('user.spot.list');





//Blog
Route::get('/AddBlog',[WebsiteBlogController::class,'BlogAdd'])->name('Add.blog');
Route::post('/storeBlog',[WebsiteBlogController::class,'Blogstore'])->name('store.blog');
Route::get('/MyBlogs',[WebsiteBlogController::class,'MyBlogList'])->name('My.blog.List');
Route::get('/MyBlog/MyBlogEdit/{blog_id}',[WebsiteBlogController::class,'MyBlogEdit'])->name('My.blog.edit.user');
Route::put('/My blog/Update/{blog_id}',[WebsiteBlogController::class,'UpdateMyblog'])->name('My.Update.blog');
Route::get('/MyBlog/delete/{blog_id}',[WebsiteBlogController::class,'MyBlogDelete'])->name('My.blog.delete');


//Query
route::get('/query/{tourplan_id}',[ContactController::class,'QueryView'])->name('user.query');
route::post('/store/query',[ContactController::class,'QueryStore'])->name('user.query.store');
route::get('/list/query',[ContactController::class,'ViewQueryList'])->name('query.list.view');
route::get('/reply/{query_id}',[ContactController::class,'ViewReply'])->name('reply.view');
Route::put('/query/reply/{query_id}',[ContactController::class,'queryReply'])->name('query.reply');
route::get('/query/details/{query_id}',[ContactController::class,'ViewQueryDetail'])->name('query.details.view');

//review

route::get('/review',[ReviewController::class,'addreview'])->name('user.review');
route::post('/review/store',[ReviewController::class,'storereview'])->name('user.store.review');


//join
Route::get('/join/request/{join_request_id}',[JoinController::class,'JoinRequest'])->name('request.Join');
Route::get('/join/view/{join_request_id}',[JoinController::class,'viewJoin'])->name('request.Join.view');
Route::get('/join/request/approved/{join_request_id}',[JoinController::class,'joinApprove'])->name('request.join.approve');
Route::get('/join/request/decline/{join_request_id}',[JoinController::class,'joinDecline'])->name('request.join.decline');

//join-payment
Route::get('/join/payment_info/{join_id}',[JoinController::class,'payment_info'])->name('join.payment.info');


//search
Route::post('/search',[SearchController::class,'search'])->name('search.plan');



});

// -----without any middleware----------//

//change password
// Route::get('/changepassword/{user_id}',[UserController::class,'changePasswordForm'])->name('changepassword');
// Route::post('/changepassword/update/{user_id}', [UserController::class,'changePassword'])->name('changepassword.update');


//profile
Route::get('/profile/{user_id}',[UserController::class,'profile'])->name('profile');
Route::get('/profile/edit/{user_id}',[UserController::class,'profileEdit'])->name('profile.edit');
Route::PUT('/profile/update/{user_id}',[UserController::class,'profileUpdate'])->name('profile.update');

//email verification
Route::get('/user/verify/{token}',[UserController::class,'verifyEmail'])->name('user.verify');

//forgot password

Route::get('/password/forgot',[UserController::class,'showForgotForm'])->name('forgot.password.form');
Route::post('/password/forgot/link',[UserController::class,'sendResetLink'])->name('forgot.password.link');
Route::get('/password/reset/{token}',[UserController::class,'showResetForm'])->name('reset.password.form');
Route::post('/password/user/reset',[UserController::class,'resetPassword'])->name('reset.password');


//comment-reply (blog part)

Route::post('{post}/comment/store',[CommentController::class,'store'])->name('comment.store');
Route::get('comment/delete/{comment_id}',[CommentController::class,'comment_delete'])->name('comment.delete');

//-----payment-------//

// SSLCOMMERZ Start
Route::get('/example1/{join_id}', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('advance.pay');;
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

// -----without any middleware----------//


//-------Admin------//

    Route::get('/admin/login',[AdminUserController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');

    Route::group(['prefix'=>'admin','middleware'=>['auth','Admin']],function (){
        Route::get('/',[IndexController::class,'index'])->name('admin');
        //admin logout
        Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');
//tour controller

Route::get('/ManageTourPlanRequest',[TourController::class,'ManagetourplanReq'])->name('admin.manage.TourplanReq');
Route::get('/Tourplan/details/{tourplan_id}',[TourController::class,'TourPlanDetails'])->name('view.tourplan.details');
Route::get('/tourplan/delete/{tourplan_id}',[TourController::class,'DeleteTourPlan'])->name('admin.tourplan.delete');
Route::get('/ManageTourplan/AdminAddedTourlist',[TourController::class,'ViewAdminTourList'])->name('admin.added.TourList');
Route::get('/tourplan/Approve/{tourplan_id}',[TourController::class,'approveTour'])->name('admin.approve.Tour');
Route::get('/tourplan/Decline/{tourplan_id}',[TourController::class,'declineTour'])->name('admin.decline.Tour');

//--joined Tour--//
Route::get('/joined/tourplan/list',[TourController::class,'JoinedTourList'])->name('admin.view.joined.tourlist');
Route::post('/joined-tourplan/report/show',[TourController::class,'JoinTourPlanReport_Search'])->name('Join.Tourplan.Report.show');

//--report--//
Route::get('/tourplan/report',[TourController::class,'TourplanReport'])->name('Tourplan.Report');
Route::post('/tourplan/report/show',[TourController::class,'TourPlanReport_Search'])->name('Tourplan.Report.show');


//traveller controller
Route::get('/Managetraveler',[TravelerController::class,'ManageTraveler'])->name('manage.traveler');
Route::get('/TravelerList',[TravelerController::class,'TravelerList'])->name('traveler.List');

//--report--//
Route::get('/travelers/report',[TravelerController::class,'TravelerReportshow'])->name('traveler.report.show');
Route::post('/travelers/report/search',[TravelerController::class,'TravelerReport'])->name('traveler.report');

//Transport
Route::get('/admin/Transport/Addtransport',[TransportController::class,'addransport'])->name('admin.addtransportform');
Route::post('/admin/Transport/Storetransport',[TransportController::class,'Storetransport'])->name('Admin.Transport.Store');
Route::get('/admin/Transport/transportList',[TransportController::class,'TransportList'])->name('admin.addtransportList');
//--report--//
Route::get('/transport/report',[TransportController::class,'TransportReportshow'])->name('transport.Report');
Route::post('/transport/report/show',[TransportController::class,'TransportReport'])->name('transport.Report.show');

//Spot
Route::get('/Spot/Addspot',[SpotController::class,'Addspot'])->name('admin.Addspot');
Route::post('/Spot/StoreSpot',[SpotController::class,'StoreSpot'])->name('admin.StoreSpot');
Route::get('/Spot/SpotList',[SpotController::class,'SpotList'])->name('admin.Spotlist');
Route::get('/view/{spot_id}',[SpotController::class,'SpotDetails'])->name('admin.spot.details');
Route::get('/delete/spot/{spot_id}',[SpotController::class,'Spotdelete'])->name('admin.delete.spot');
Route::get('/approve/spot/{spot_id}',[SpotController::class,'approvespot'])->name('admin.user.spot.approve');
Route::get('/decline/spot/{spot_id}',[SpotController::class,'declinespot'])->name('admin.user.spot.decline');
//--spot-report--//
Route::get('/spot/report',[SpotController::class,'spotReportshow'])->name('spot.Report');
Route::post('/spot/report/show',[SpotController::class,'spotReport'])->name('spot.Report.show');
//blog
Route::get('/admin/blog',[BlogController::class,'Addblog'])->name('admin.add.blog');
Route::post('/admin/StoreBlog',[BlogController::class,'storeBlog'])->name('admin.Store.Blog');
Route::get('/admin/blog/bloglist',[BlogController::class,'BlogList'])->name('admin.blog.blogList');
Route::get('/blog/bloglist/details/{blog_id}',[BlogController::class,'Blogdetails'])->name('admin.blog.details');
Route::get('/blog/delete/{blog_id}',[BlogController::class,'BlogDelete'])->name('admin.delete.blog');
Route::get('/blog/edit/{blog_id}',[BlogController::class,'BlogEdit'])->name('admin.Edit.blog');
Route::put('/blog/update/{blog_id}',[BlogController::class,'BlogUpdate'])->name('admin.update.blog');
Route::get('/blog/Approve/{blog_id}',[BlogController::class,'approveBlog'])->name('admin.approve.blog');
Route::get('/blog/Decline/{blog_id}',[BlogController::class,'declineBlog'])->name('admin.decline.blog');
//--blog-report--//
Route::get('/blog/report',[BlogController::class,'blogReportshow'])->name('blog.Report');
Route::post('/blog/report/show',[BlogController::class,'blogReport'])->name('blog.Report.show');

//location
Route::get('/create/location',[LocationController::class,'createLocation'])->name('admin.create.location');
Route::post('/store/location',[LocationController::class,'storeLocation'])->name('admin.store.location');
Route::get('/location/list',[LocationController::class,'LocationList'])->name('admin.location.list');
Route::get('/location/delete/{location_id}',[LocationController::class,'deletelocation'])->name('admin.location.delete');
Route::get('/location/details/{location_id}',[LocationController::class,'LocationDetails'])->name('admin.location.details');
Route::get('/location/edit/{location_id}',[LocationController::class,'EditLocation'])->name('admin.location.edit');
Route::PUT('/location/update/{location_id}',[LocationController::class,'UpdateLocation'])->name('admin.location.update');
//--location-report--//
Route::get('/location/report',[LocationController::class,'locationReportshow'])->name('location.Report');
Route::post('/location/report/show',[LocationController::class,'locationReport'])->name('location.Report.show');



//contact-info
route::get('/add/contact-info',[AdminContactController::class,'contact_show'])->name('contact.show');
route::post('/contact/store',[AdminContactController::class,'contact_store'])->name('contact.store');
route::get('/contact/list',[AdminContactController::class,'contact_list'])->name('contact.list');
Route::post('/contact/report/show',[AdminContactController::class,'contactReport'])->name('contact.Report.show');

//review
Route::get('/user-review',[AdminReviewController::class,'reviewlist'])->name('admin.review.list');
Route::get('/user-review/approve/{review_id}',[AdminReviewController::class,'ApproveReview'])->name('admin.review.approve');
Route::get('/user-review/decline/{review_id}',[AdminReviewController::class,'DeclineReview'])->name('admin.review.decline');
//--review-report--//
Route::get('/review/report',[AdminReviewController::class,'reviewReportshow'])->name('review.Report');
Route::post('/review/report/show',[AdminReviewController::class,'reviewReport'])->name('review.Report.show');



});