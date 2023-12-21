<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\WebGalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ContactmeController;
use App\Http\Controllers\MedialinkController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\TearSheetController;
use App\Http\Controllers\WebSetupController;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'register' => true
]);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/user-list', [AdminController::class, 'userlist'])->name('user-list');
    Route::get('/edit-user/{id}', [AdminController::class, 'edit'])->name('editUser');
    Route::post('/updateuser/{id}', [AdminController::class, 'update'])->name('updateuser');
    Route::get('/my-client-list', [AdminController::class, 'myClientList'])->name('my-client-list');
    Route::get('/member-list', [AdminController::class, 'memeberslist'])->name('member-list');
    Route::get('/All-payment-list', [AdminController::class, 'all_list_payment'])->name('all-payment-list');
    Route::get('/approvePayment/{media}', [AdminController::class, 'approvePayment'])->name('approvePayment');
    Route::get('/rejectPayment/{media}', [AdminController::class, 'rejectPayment'])->name('rejectPayment');
    Route::get('/rejectPayment/{media}', [AdminController::class, 'rejectPayment'])->name('rejectPayment');

    Route::post('userchangeStatus', [AdminController::class, 'userchangeStatus'])->name('userchangeStatus');

    Route::get('/contactsmail', [AdminController::class, 'contactsmail'])->name('contactsmail');
    Route::get('/createmedia', [MedialinkController::class, 'create'])->name('createmedia');
    Route::get('/medialinks', [MedialinkController::class, 'index'])->name('medialinks');
    Route::post('/storemedia', [MedialinkController::class, 'store'])->name('storemedia');


    //tearsheet
    Route::resource('tearsheets', TearSheetController::class);

    //websetup
    Route::resource('web', WebSetupController::class);

    //publication
    Route::resource('public', PublicationController::class);

    //commercials
    Route::resource('commerc', CommercialController::class);

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
    Route::get('/gallery-images-upload', [WebGalleryController::class, 'galleryImagesUpload'])->name('gallery');
    Route::get('/vGallery', [VideoController::class, 'create'])->name('vgallery');
    Route::get('/gallery-images-List', [WebGalleryController::class, 'viewall'])->name('list-gallery');

    Route::post('changeStatus', [WebGalleryController::class, 'changeStatus'])->name('changeStatus');


    Route::get('/v-List', [VideoController::class, 'index'])->name('v-gallery');
    Route::post('/store', [WebGalleryController::class, 'store'])->name('store');
    Route::post('/vstore', [VideoController::class, 'store'])->name('vstore');
    Route::get('/delete-Image/{media}', [WebGalleryController::class, 'deleteImage'])->name('delete-Image');
    Route::get('/delete-video/{media}', [VideoController::class, 'deletevideo'])->name('delete-video');

    Route::post('/insert-image', [WebGalleryController::class, 'insertImage'])->name('insertImage');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/addnewcat', [CategoryController::class, 'create'])->name('addnewcat');
    Route::post('/storecat', [CategoryController::class, 'store'])->name('storecat');
    Route::get('/editcat/{id}', [CategoryController::class, 'edit'])->name('editcat');
    Route::post('/updatecat/{id}', [CategoryController::class, 'update'])->name('updatecat');

    //job company

    //rabbi // Work on zone

    //rabbi  // Social Media
    Route::get('Social-media', [SocialmediaController::class, 'index'])->name('social_media');
    Route::post('Social-update', [SocialmediaController::class, 'update'])->name('socialupdate');
    //rabbi// Journal And Publications

    //    rabbi //contact
    Route::get('Contactindex', [ContactUsController::class, 'index'])->name('Contactindex');
    Route::post('updatecontact/{id}', [ContactUsController::class, 'update']);
});

Route::get('/jobView/{media}', [FrontEndController::class, 'jobView'])->name('jobView');
Route::post('seekerlogin', [FrontEndController::class, 'seekerlogin'])->name('seekerlogin');


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
