<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adult-diapers', [App\Http\Controllers\HomeController::class, 'adult'])->name('adult-diapers');
Route::get('/baby-diapers', [App\Http\Controllers\HomeController::class, 'baby'])->name('baby-diapers');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about-us');
Route::get('/wholesale', [App\Http\Controllers\HomeController::class, 'wholesale'])->name('wholesale');
// Single Product Page
Route::get('/products/{category}', [App\Http\Controllers\HomeController::class, 'products'])->name('products');
Route::get('/products/{category}/{slung}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

Route::get('/add-to-cart', [App\Http\Controllers\HomeController::class, 'addToCart'])->name('add-to-cart');
Route::get('/shopping-cart', [App\Http\Controllers\HomeController::class, 'shopping'])->name('shopping-cart');
Route::get('/remove-cart/{rowId}', [App\Http\Controllers\HomeController::class, 'remove'])->name('remove-cart');
Route::get('/clear', [App\Http\Controllers\HomeController::class, 'clearCart'])->name('clearCart');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('admin/', [AdminsController::class, 'adminHome'])->name('admin.home');

    // SiteSettings
    Route::get('admin/credentials', [AdminsController::class, 'systemsCredentials']);
    Route::get('admin/SiteSettings', [AdminsController::class, 'SiteSettings']);
    Route::get('admin/SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings']);
    Route::get('admin/logo-and-favicon', [AdminsController::class, 'logo_and_favicon']);
    Route::post('admin/logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update']);

    // mailerSettings
    Route::get('admin/mailerSettings', [AdminsController::class, 'mailerSettings']);

    // Terms and Conditions
    Route::get('admin/terms', [AdminsController::class, 'terms']);
    Route::get('admin/addTerms', [AdminsController::class, 'addTerms']);
    Route::get('admin/editTerm/{id}', [AdminsController::class, 'editTerm']);
    Route::post('admin/add_term', [AdminsController::class, 'add_term']);
    Route::post('admin/edit_term/{id}', [AdminsController::class, 'edit_term']);
    Route::get('admin/delete_term/{id}', [AdminsController::class, 'delete_term']);

    // Privacy Policy
    Route::get('admin/privacy', [AdminsController::class, 'privacy']);
    Route::get('admin/addPrivacy', [AdminsController::class, 'addPrivacy']);
    Route::get('admin/editPrivacy/{id}', [AdminsController::class, 'editPrivacy']);
    Route::post('admin/add_privacy', [AdminsController::class, 'add_privacy']);
    Route::post('admin/edit_privacy/{id}', [AdminsController::class, 'edit_privacy']);
    Route::get('admin/delete_privacy/{id}', [AdminsController::class, 'delete_privacy']);

    // Frequently Asked Questions
    Route::get('admin/faq', [AdminsController::class, 'faq']);
    Route::get('admin/addFaq', [AdminsController::class, 'addFaq']);
    Route::get('admin/editFaq/{id}', [AdminsController::class, 'editFaq']);
    Route::post('admin/add_Faq', [AdminsController::class, 'add_Faq']);
    Route::post('admin/edit_Faq/{id}', [AdminsController::class, 'edit_Faq']);
    Route::get('admin/delete_Faq/{id}', [AdminsController::class, 'delete_Faq']);

    // Risks Declaration
    Route::get('admin/editRisk', [AdminsController::class, 'editRisk']);
    Route::post('admin/edit_Risk', [AdminsController::class, 'edit_Risk']);

    // How It Works
    Route::get('admin/how', [AdminsController::class, 'how']);
    Route::get('admin/addHow', [AdminsController::class, 'addHow']);
    Route::get('admin/editHow/{id}', [AdminsController::class, 'editHow']);
    Route::post('admin/add_How', [AdminsController::class, 'add_How']);
    Route::post('admin/edit_How/{id}', [AdminsController::class, 'edit_How']);
    Route::get('admin/delete_How/{id}', [AdminsController::class, 'delete_How']);

    // Courses
    Route::get('admin/courses', [AdminsController::class, 'courses']);
    Route::get('admin/addCourse', [AdminsController::class, 'addCourse']);
    Route::get('admin/editCourse/{id}', [AdminsController::class, 'editCourse']);
    Route::post('admin/add_Course', [AdminsController::class, 'add_Course']);
    Route::post('admin/edit_Course/{id}', [AdminsController::class, 'edit_Course']);
    Route::get('admin/delete_Course/{id}', [AdminsController::class, 'delete_Course']);

    // Topics
    Route::get('admin/topics', [AdminsController::class, 'topics']);
    Route::get('admin/addTopic', [AdminsController::class, 'addTopic']);
    Route::get('admin/editTopic/{id}', [AdminsController::class, 'editTopic']);
    Route::post('admin/add_Topic', [AdminsController::class, 'add_Topic']);
    Route::post('admin/edit_Topic/{id}', [AdminsController::class, 'edit_Topic']);
    Route::get('admin/delete_Topic/{id}', [AdminsController::class, 'delete_Topic']);

    // Copyright Statement
    Route::get('admin/editCopyright', [AdminsController::class, 'copyright']);
    Route::post('admin/edit_Copyright', [AdminsController::class, 'edit_copyright']);

    // About Us
    Route::get('admin/editAbout', [AdminsController::class, 'about']);
    Route::post('admin/edit_About', [AdminsController::class, 'edit_about']);

    // Sliders
    Route::get('admin/sliders', [AdminsController::class, 'slider']);
    Route::get('admin/addSlider', [AdminsController::class, 'addSlider']);
    Route::post('admin/add_Slider', [AdminsController::class, 'add_Slider']);
    Route::get('admin/editSlider/{id}', [AdminsController::class, 'editSlider']);
    Route::post('admin/edit_Slider/{id}', [AdminsController::class, 'edit_Slider']);
    Route::get('admin/deleteSlider/{id}', [AdminsController::class, 'deleteSlider']);

    // Banners
    Route::get('admin/banners', [AdminsController::class, 'banners']);
    Route::get('admin/editBanner/{id}', [AdminsController::class, 'editBanner']);
    Route::post('admin/edit_Banner/{id}', [AdminsController::class, 'edit_Banner']);

    // Messages
    Route::get('admin/allMessages', [AdminsController::class, 'allMessages']);
    Route::get('admin/unread', [AdminsController::class, 'unread']);
    Route::post('admin/reply', [AdminsController::class, 'reply']);
    Route::get('admin/read/{id}', [AdminsController::class, 'read']);
    Route::get('admin/deleteMessage/{id}', [AdminsController::class, 'deleteMessage']);

    // Categories
    Route::get('admin/categories', [AdminsController::class, 'categories']);
    Route::get('admin/addCategory', [AdminsController::class, 'addCategory']);
    Route::post('admin/add_Category', [AdminsController::class, 'add_Category']);
    Route::get('admin/editCategories/{id}', [AdminsController::class, 'editCategories']);
    Route::post('admin/edit_Category/{id}', [AdminsController::class, 'edit_Category']);
    Route::get('admin/deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

    // Products
    Route::get('admin/products', [AdminsController::class, 'products']);
    Route::get('admin/addProduct', [AdminsController::class, 'addProduct']);
    Route::post('admin/add_Product', [AdminsController::class, 'add_Product']);
    Route::get('admin/editProducts/{id}', [AdminsController::class, 'editProducts']);
    Route::post('admin/edit_Product/{id}', [AdminsController::class, 'edit_Product']);
    Route::get('admin/deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);



    Route::post('admin/add_Variation', [AdminsController::class, 'add_Variation']);
    Route::post('admin/edit_Variation/{id}', [AdminsController::class, 'edit_Variation']);
    Route::get('admin/addVariation/color', [AdminsController::class, 'variations_color']);
    Route::get('admin/addVariation/size', [AdminsController::class, 'variations_size']);
    Route::get('admin/variations/color', [AdminsController::class, 'var_color']);
    Route::get('admin/variations/size', [AdminsController::class, 'var_size']);
    Route::get('admin/editVariation/{id}', [AdminsController::class, 'editVariation']);

    // Categories
    Route::get('admin/categories', [AdminsController::class, 'categories']);
    Route::get('admin/addCategory', [AdminsController::class, 'addCategory']);
    Route::post('admin/add_Category', [AdminsController::class, 'add_Category']);
    Route::get('admin/editCategories/{id}', [AdminsController::class, 'editCategories']);
    Route::post('admin/edit_Category/{id}', [AdminsController::class, 'edit_Category']);
    Route::get('admin/deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

    // Testimonials
    Route::get('admin/testimonials', [AdminsController::class, 'testimonials']);
    Route::get('admin/addTestimonial', [AdminsController::class, 'addTestimonial']);
    Route::post('admin/add_Testimonial', [AdminsController::class, 'add_Testimonial']);
    Route::get('admin/editTestimonial/{id}', [AdminsController::class, 'editTestimonial']);
    Route::post('admin/edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial']);

    // Signal
    Route::get('admin/signals', [AdminsController::class, 'signals']);
    Route::get('admin/addSignal', [AdminsController::class, 'addSignal']);
    Route::post('admin/add_Signal', [AdminsController::class, 'add_Signal']);
    Route::get('admin/editSignal/{id}', [AdminsController::class, 'editSignal']);
    Route::post('admin/edit_Signal/{id}', [AdminsController::class, 'edit_Signal']);

    // Blog
    Route::get('admin/blog', [AdminsController::class, 'blog']);
    Route::get('admin/addBlog', [AdminsController::class, 'addBlog']);
    Route::post('admin/add_Blog', [AdminsController::class, 'add_Blog']);
    Route::get('admin/editBlog/{id}', [AdminsController::class, 'editBlog']);
    Route::post('admin/edit_Blog/{id}', [AdminsController::class, 'edit_Blog']);
    Route::get('admin/delete_Blog/{id}', [AdminsController::class, 'delete_Blog']);


    // Payments
    Route::get('admin/b2b', [AdminsController::class, 'b2b']);
    Route::get('admin/b2c', [AdminsController::class, 'b2c']);
    Route::get('admin/lnmo_api_response', [AdminsController::class, 'lnmo_api_response']);
    Route::get('admin/mobile_payments', [AdminsController::class, 'mobile_payments']);
    Route::get('admin/reverse_transaction', [AdminsController::class, 'reverse_transaction']);
    Route::get('admin/transaction_status', [AdminsController::class, 'transaction_status']);
    Route::get('admin/accountbalance', [AdminsController::class, 'accountbalance']);
    Route::get('admin/approve-transaction/{id}', [AdminsController::class, 'approve_transaction']);
    Route::get('admin/approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk']);

    // Enroll Users
    Route::get('admin/enroll-users', [AdminsController::class, 'enroll_users']);
    Route::get('admin/enroll-users-post/{id}', [AdminsController::class, 'enroll_users_post']);
    Route::post('admin/enroll-user-now', [AdminsController::class, 'enroll_user_now']);

    //Manage Users
    Route::get('admin/users', [AdminsController::class, 'users']);
    Route::get('admin/admins', [AdminsController::class, 'admins']);
    Route::get('admin/addUser', [AdminsController::class, 'addUser']);
    Route::get('admin/editUser/{id}', [AdminsController::class, 'editUser']);
    Route::post('admin/add_User', [AdminsController::class, 'add_User']);
    Route::post('admin/edit_User/{id}', [AdminsController::class, 'edit_User']);
    Route::get('admin/delete_user/{id}', [AdminsController::class, 'delete_user']);
    Route::get('admin/switchRole/{id}', [AdminsController::class, 'switchRole']);
    Route::get('admin/switchStatus/{id}', [AdminsController::class, 'switchStatus']);

    Route::get('admin/updateSlung', [AdminsController::class, 'updateSlung']);




    Route::get('admin/activitylogs', [AdminsController::class, 'activitylogs']);


    // AJAX REQUESTS
    Route::post('admin/addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest']);
    Route::post('admin/deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax']);
    Route::put('admin/updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax']);
    Route::put('admin/updateMailerAjax', [AdminsController::class, 'updateMailerAjax']);
    Route::put('admin/updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax']);
    Route::put('admin/updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials']);
    Route::post('admin/deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax']);
    Route::post('admin/deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax']);
    Route::post('admin/deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax']);
    Route::post('admin/deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax']);
    Route::post('admin/deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax']);
    Route::post('admin/deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax']);
    Route::post('admin/deleteBalAjax', [AdminsController::class, 'deleteBalAjax']);
    Route::post('admin/deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax']);
    Route::post('admin/deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax']);
    Route::post('admin/deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax']);
    Route::post('admin/deleteUserAjax', [AdminsController::class, 'deleteUserAjax']);
    Route::post('admin/deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax']);
    Route::post('admin/deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax']);
    Route::post('admin/deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax']);
    Route::post('admin/deleteHowAjax', [AdminsController::class, 'deleteHowAjax']);
    Route::post('admin/deleteCoursesAjax', [AdminsController::class, 'deleteCoursesAjax']);
    Route::post('admin/deleteTopicsAjax', [AdminsController::class, 'deleteTopicsAjax']);
    Route::post('admin/deleteSignalsAjax', [AdminsController::class, 'deleteSignalsAjax']);
    Route::post('admin/deleteProductAjax', [AdminsController::class, 'deleteProductAjax']);

    // SocialMedia
    Route::get('/facebook', [LoginController::class, 'facebook']);
    Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
    Route::get('/google', [LoginController::class, 'google']);
    Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);


});
