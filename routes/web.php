<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\WebGalleryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\JournalAndPublicationController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ContactmeController;
use App\Http\Controllers\MedialinkController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'register' => true
]);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/user-list', [AdminController::class, 'userlist'])->name('user-list');
    Route::get('/member-list', [AdminController::class, 'memeberslist'])->name('member-list');
    Route::get('/All-payment-list', [AdminController::class, 'all_list_payment'])->name('all-payment-list');
    Route::get('/approvePayment/{media}', [AdminController::class, 'approvePayment'])->name('approvePayment');
    Route::get('/rejectPayment/{media}', [AdminController::class, 'rejectPayment'])->name('rejectPayment');
    Route::get('/rejectPayment/{media}', [AdminController::class, 'rejectPayment'])->name('rejectPayment');
    Route::get('/Rules', [RulesController::class, 'rules'])->name('rules');
    Route::get('/Addrules', [RulesController::class, 'addrules'])->name('addrules');
    Route::post('/storeRulses', [RulesController::class, 'storeRulses'])->name('storeRulses');


    Route::get('/contactsmail', [AdminController::class, 'contactsmail'])->name('contactsmail');
    Route::get('/createmedia', [MedialinkController::class, 'create'])->name('createmedia');
    Route::get('/medialinks', [MedialinkController::class, 'index'])->name('medialinks');
    Route::post('/storemedia', [MedialinkController::class, 'store'])->name('storemedia');

    //about me
    Route::get('/aboutme', [AboutmeController::class, 'index'])->name('aboutme');
    Route::get('/addaboutme', [AboutmeController::class, 'create'])->name('addaboutme');
    Route::post('/storeaboutme', [AboutmeController::class, 'store'])->name('storeaboutme');
    Route::get('editabout/{id}', [AboutmeController::class, 'edit'])->name('editabout');
    Route::post('updateabout', [AboutmeController::class, 'update'])->name('updateabout');

    //story
    Route::get('/story', [StoryController::class, 'index'])->name('story');
    Route::get('/addstory', [StoryController::class, 'create'])->name('addstory');
    Route::post('/storestory', [StoryController::class, 'store'])->name('storestory');

    //achievement
    Route::get('/achievement', [AchievementController::class, 'index'])->name('achievement');
    Route::get('/addachievement', [AchievementController::class, 'create'])->name('addachievement');
    Route::post('/storeachievement', [AchievementController::class, 'store'])->name('storeachievement');

    Route::get('/sliders', [SliderController::class, 'sliders'])->name('sliders');
    Route::get('/addslider', [SliderController::class, 'addslider'])->name('addslider');
    Route::post('/storesliders', [SliderController::class, 'storesliders'])->name('storesliders');
    Route::post('/sliderStatusChange', [SliderController::class, 'sliderStatusChange'])->name('sliderStatusChange');

    Route::get('/createclient', [ClientController::class, 'create'])->name('createclient');
    Route::post('/storeclient', [ClientController::class, 'store'])->name('storeclient');
    Route::get('/showclient', [ClientController::class, 'index'])->name('showclient');
    Route::get('/deleteclient/{id}', [ClientController::class, 'deleteclient'])->name('deleteclient');

    Route::get('/change-password', [AdminController::class, 'changepass'])->name('passwordchange');
    Route::post('/change-password', [AdminController::class, 'passstore'])->name('storepass');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [RegistrationController::class, 'profile'])->name('profile');
    Route::get('/myCv', [RegistrationController::class, 'myCv'])->name('myCv');
    Route::post('/edit-profile', [RegistrationController::class, 'edit_profile'])->name('edit-profile');
    Route::post('/edit-job', [RegistrationController::class, 'edit_job'])->name('edit-job');
    Route::post('/edit-education', [RegistrationController::class, 'edit_education'])->name('edit-education');
    Route::get('/view-member/{media}', [AdminController::class, 'view_member'])->name('view-member');
    Route::get('/Gallery', [WebGalleryController::class, 'gallery'])->name('gallery');
    Route::get('/vGallery', [VideoController::class, 'create'])->name('vgallery');
    Route::get('/Gallery-List', [WebGalleryController::class, 'viewall'])->name('list-gallery');
    Route::get('/v-List', [VideoController::class, 'index'])->name('v-gallery');
    Route::post('/store', [WebGalleryController::class, 'store'])->name('store');
    Route::post('/vstore', [VideoController::class, 'store'])->name('vstore');
    Route::get('/delete-Image/{media}', [WebGalleryController::class, 'deleteImage'])->name('delete-Image');
    Route::get('/delete-video/{media}', [VideoController::class, 'deletevideo'])->name('delete-video');
    Route::get('/Member-payment', [PaymentController::class, 'pyament'])->name('memebr-payment');
    Route::get('/List-payment', [PaymentController::class, 'list_payment'])->name('list-payment');
    Route::post('/Payment-store', [PaymentController::class, 'payment_store'])->name('payment-store');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/addnewcat', [CategoryController::class, 'create'])->name('addnewcat');
    Route::post('/storecat', [CategoryController::class, 'store'])->name('storecat');

    //job company
    Route::get('/Company-profile', [JobController::class, 'company_profile'])->name('company_profile');
    Route::get('/edit-comp', [JobController::class, 'edit_comp'])->name('edit-comp');
    Route::post('/editSave', [JobController::class, 'editSave'])->name('editSave');
    Route::get('/jobs', [JobController::class, 'jobs'])->name('jobs');
    Route::get('/add_job', [JobController::class, 'add_job'])->name('add_job');
    Route::post('/saveJob', [JobController::class, 'saveJob'])->name('saveJob');
    Route::get('appliedJobs', [ApplyController::class, 'appliedJobs'])->name('appliedJobs');

    //rabbi // Work on zone
    Route::get('zone', [ZoneController::class, 'index'])->name('zone');
    Route::get('Zone-add', [ZoneController::class, 'create'])->name('addzone');
    Route::post('store-zone', [ZoneController::class, 'store'])->name('storezone');
    Route::get('deletezone/{id}', [ZoneController::class, 'destroy']);
    Route::get('editzone/{id}', [ZoneController::class, 'edit']);
    Route::post('updatezone/{id}', [ZoneController::class, 'update'])->name('updatezone');
    Route::post('/zoneDistList', [ZoneController::class, 'zoneDistList'])->name('zoneDistList');
    Route::post('/zoneThanaList', [ZoneController::class, 'zoneThanaList'])->name('zoneThanaList');
    //rabbi  // Social Media
    Route::get('Social-media', [SocialmediaController::class, 'index'])->name('social_media');
    Route::post('Social-update', [SocialmediaController::class, 'update'])->name('socialupdate');
    //rabbi// Journal And Publications
    Route::get('Journal-publications', [JournalAndPublicationController::class, 'index'])->name('Journalpublications');
    Route::get('Add-publications', [JournalAndPublicationController::class, 'create'])->name('addpublications');
    Route::post('Store-publications', [JournalAndPublicationController::class, 'store'])->name('storepublications');
    Route::post('updatepublications/{id}', [JournalAndPublicationController::class, 'update']);
    Route::get('editJournal/{id}', [JournalAndPublicationController::class, 'edit']);
    Route::get('deleteJournal/{id}', [JournalAndPublicationController::class, 'destroy']);
    //    rabbi //contact
    Route::get('Contactindex', [ContactUsController::class, 'index'])->name('Contactindex');
    Route::post('updatecontact/{id}', [ContactUsController::class, 'update']);
});

Route::get('/jobView/{media}', [FrontEndController::class, 'jobView'])->name('jobView');
Route::post('seekerlogin', [FrontEndController::class, 'seekerlogin'])->name('seekerlogin');
Route::post('applicationStore', [ApplyController::class, 'applicationStore'])->name('applicationStore');

Route::get('/aboutsme', [FrontEndController::class, 'aboutsme'])->name('aboutsme');
Route::get('/portfolio', [FrontEndController::class, 'portfolio'])->name('portfolio');
Route::get('/myachievement', [FrontEndController::class, 'myachievement'])->name('myachievement');
Route::get('/mygallery', [FrontEndController::class, 'mygallery'])->name('mygallery');
Route::get('/myvideogallery', [FrontEndController::class, 'myvideogallery'])->name('myvideogallery');
Route::get('/photostory', [FrontEndController::class, 'photostory'])->name('photostory');

Route::get('/buyphoto', [FrontEndController::class, 'buyphoto'])->name('buyphoto');
Route::get('/contacts', [FrontEndController::class, 'contacts'])->name('contacts');
Route::get('viewstory/{id}', [FrontEndController::class, 'viewstory']);

Route::post('/storestorymessage', [ContactmeController::class, 'storestorymessage'])->name('storestorymessage');
Route::post('/storestorycontact', [ContactmeController::class, 'storestorycontact'])->name('storestorycontact');


Route::get('/contactsemail', [ContactmeController::class, 'contactsemail'])->name('contactsemail');

Route::get('/', [FrontEndController::class, 'index']);
//avi code
Route::get('/principles', [FrontEndController::class, 'principle']);
Route::get('/constitution', [FrontEndController::class, 'constitution']);
Route::get('/Contact-Us', [FrontEndController::class, 'contact']);
Route::get('/All-Gallery', [FrontEndController::class, 'gallery']);
Route::get('/All-job', [FrontEndController::class, 'alljob']);
Route::get('/Our-Rules', [FrontEndController::class, 'OurRules']);
//avi route
Route::get('/signin', [RegistrationController::class, 'index'])->name('signin');
Route::post('/regstore', [RegistrationController::class, 'store'])->name('regstore');

//job section
Route::get('/emp_signin', [JobController::class, 'emp_signin'])->name('emp_signin');
Route::get('/emp_signup', [JobController::class, 'emp_signup'])->name('emp_signup');
Route::post('/emp_registration', [JobController::class, 'emp_registration'])->name('emp_registration');

//corporate job post
Route::get('/corp_signin', [JobController::class, 'corp_signin'])->name('corp_signin');
Route::get('/corp_signup', [JobController::class, 'corp_signup'])->name('corp_signup');
Route::post('/corp_registration', [JobController::class, 'corp_registration'])->name('corp_registration');
Route::post('/getDistList', [JobController::class, 'getDistList'])->name('getDistList');
Route::post('/getDistList2', [JobController::class, 'getDistList2'])->name('getDistList2');
Route::post('/getThanaList', [JobController::class, 'getThanaList'])->name('getThanaList');
