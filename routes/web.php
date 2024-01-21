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
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ContactmeController;
use App\Http\Controllers\MedialinkController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\MailsettingController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TearSheetController;
use App\Http\Controllers\WebSetupController;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'register' => false
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

    Route::get('/contacts-mail', [AdminController::class, 'contactsmail'])->name('contactsmail');
    Route::get('/create-media', [MedialinkController::class, 'create'])->name('createmedia');
    Route::get('/media-links', [MedialinkController::class, 'index'])->name('medialinks');
    Route::get('/edit-media/{id}', [MedialinkController::class, 'edit'])->name('editmedia');
    Route::get('/delete-media/{id}', [MedialinkController::class, 'destroy'])->name('delete-media');
    Route::post('/update-media/{id}', [MedialinkController::class, 'update'])->name('update-media');
    Route::post('/store-media', [MedialinkController::class, 'store'])->name('storemedia');


    //tearsheet
    Route::resource('tearsheets', TearSheetController::class);

    //websetup
    Route::resource('web', WebSetupController::class);

    //publication
    Route::resource('public', PublicationController::class);

    //commercials
    Route::resource('commerc', CommercialController::class);

    //about me
    // Route::get('/about-me', [AboutmeController::class, 'index'])->name('aboutme');
    Route::get('/add-about-me', [AboutmeController::class, 'create'])->name('addaboutme');
    Route::post('/storeaboutme/{id}', [AboutmeController::class, 'store'])->name('storeaboutme');
    Route::get('editabout/{id}', [AboutmeController::class, 'edit'])->name('editabout');
    Route::post('updateabout', [AboutmeController::class, 'update'])->name('updateabout');

    //story
    Route::get('/story', [StoryController::class, 'index'])->name('story');
    Route::get('/addstory', [StoryController::class, 'create'])->name('addstory');
    Route::get('/edit-story/{id}', [StoryController::class, 'edit'])->name('edit-story');
    Route::post('/storyupdate/{id}', [StoryController::class, 'update'])->name('storyupdate');
    Route::post('/storestory', [StoryController::class, 'store'])->name('storestory');

    //achievement
    Route::get('/achievement', [AchievementController::class, 'index'])->name('achievement');
    Route::get('/add-achievement', [AchievementController::class, 'create'])->name('addachievement');
    Route::get('/eidt-achievement/{id}', [AchievementController::class, 'edit'])->name('editachievement');
    Route::get('/delete-achievement/{id}', [AchievementController::class, 'destroy'])->name('delete-achievement');
    Route::post('/store-achievement', [AchievementController::class, 'store'])->name('storeachievement');
    Route::post('update-achievment/{id}', [AchievementController::class, 'update'])->name('update-achievment');

    Route::get('/sliders', [SliderController::class, 'sliders'])->name('sliders');
    Route::get('/addslider', [SliderController::class, 'addslider'])->name('addslider');
    Route::post('/storesliders', [SliderController::class, 'storesliders'])->name('storesliders');
    Route::post('/sliderStatusChange', [SliderController::class, 'sliderStatusChange'])->name('sliderStatusChange');
    Route::get('/delete_slide/{id}', [SliderController::class, 'delete_slide'])->name('delete_slide');

    Route::get('/createclient', [ClientController::class, 'create'])->name('createclient');
    Route::post('/storeclient', [ClientController::class, 'store'])->name('storeclient');
    Route::get('/showclient', [ClientController::class, 'index'])->name('showclient');
    Route::get('/deleteclient/{id}', [ClientController::class, 'deleteclient'])->name('deleteclient');

    Route::get('/change-password', [AdminController::class, 'changepass'])->name('passwordchange');
    Route::post('/change-password', [AdminController::class, 'passstore'])->name('storepass');





    //user profile
    Route::get('/user-Profile', [BuyerController::class, 'index'])->name('userProfile');
    Route::post('/user-profile-update/{id}', [BuyerController::class, 'update'])->name('user-profile-update');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [RegistrationController::class, 'profile'])->name('profile');
    Route::get('/myCv', [RegistrationController::class, 'myCv'])->name('myCv');
    Route::post('/edit-profile', [RegistrationController::class, 'edit_profile'])->name('edit-profile');
    Route::post('/edit-job', [RegistrationController::class, 'edit_job'])->name('edit-job');
    Route::post('/edit-education', [RegistrationController::class, 'edit_education'])->name('edit-education');
    Route::get('/view-member/{media}', [AdminController::class, 'view_member'])->name('view-member');
    Route::get('/gallery-images-upload', [WebGalleryController::class, 'galleryImagesUpload'])->name('gallery');
    Route::get('/gallery-images-List', [WebGalleryController::class, 'viewall'])->name('list-gallery');
    Route::get('/video-add', [VideoController::class, 'create'])->name('vgallery');
    Route::get('/edit-video/{id}', [VideoController::class, 'edit'])->name('edit-video');
    Route::post('/update/{id}', [VideoController::class, 'update'])->name('update-video');

    Route::post('changeStatus', [WebGalleryController::class, 'changeStatus'])->name('changeStatus');


    Route::get('/video-list', [VideoController::class, 'index'])->name('v-gallery');
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
    Route::get('social-media', [SocialmediaController::class, 'index'])->name('social_media');
    Route::post('Social-update', [SocialmediaController::class, 'update'])->name('socialupdate');
    //rabbi// Journal And Publications

    //    rabbi //contact
    Route::get('Contactindex', [ContactUsController::class, 'index'])->name('Contactindex');
    Route::post('updatecontact/{id}', [ContactUsController::class, 'update']);



    // buy routes


    Route::patch('update-cart', [SaleController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [SaleController::class, 'remove'])->name('remove.from.cart');


    Route::get('/mail', [MailsettingController::class, 'index'])->name('mail.index');
    Route::put('/mail-update/{mailsetting}', [MailSettingController::class, 'update'])->name('mail.update');
});



Route::get('/my-profile-details', [FrontEndController::class, 'aboutsme'])->name('aboutsme');
Route::get('/portfolio', [FrontEndController::class, 'portfolio'])->name('portfolio');
Route::get('/myachievement', [FrontEndController::class, 'myachievement'])->name('myachievement');
Route::get('/my-photo-gallery', [FrontEndController::class, 'mygallery'])->name('mygallery');
Route::get('/my-video-gallery', [FrontEndController::class, 'myvideogallery'])->name('myvideogallery');
Route::get('/photo-story', [FrontEndController::class, 'photostory'])->name('photostory');
Route::get('/story-details/{id}', [FrontEndController::class, 'photostoryDetails'])->name('storyDetails');

Route::get('/my-publications', [FrontEndController::class, 'mypublications'])->name('mypublications');
Route::get('/tear-sheet', [FrontEndController::class, 'tearSheet'])->name('tear-sheet');
Route::get('/my-portfolio-links', [FrontEndController::class, 'myPortfolioLinks'])->name('myPortfolioLinks');

Route::get('/my-achievement', [FrontEndController::class, 'myachievement'])->name('myachievement');

Route::get('/my-publications', [FrontEndController::class, 'mypublications'])->name('mypublications');
Route::get('/my-commercial-work', [FrontEndController::class, 'mycommercials'])->name('mycommercials');
Route::get('/my-commercial-work-details/{id}', [FrontEndController::class, 'mycommercialsDetails'])->name('mycommercials-details');


Route::get('/buy-photos', [FrontEndController::class, 'buyphoto'])->name('buyphoto');
Route::get('/buy-photos-details/{id}', [FrontEndController::class, 'buyPhotoDetails'])->name('buyPhotoDetails');
Route::get('/contact-me', [FrontEndController::class, 'contacts'])->name('contacts');
Route::get('viewstory/{id}', [FrontEndController::class, 'viewstory']);
Route::get('/my-clients', [FrontEndController::class, 'myclients'])->name('myclients');

Route::post('/storestorymessage', [ContactmeController::class, 'storestorymessage'])->name('storestorymessage');
Route::post('/storestorycontact', [ContactmeController::class, 'storestorycontact'])->name('storestorycontact');


Route::get('/contactsemail', [ContactmeController::class, 'contactsemail'])->name('contactsemail');

Route::get('/', [FrontEndController::class, 'index']);


Route::get('/client-area', [RegistrationController::class, 'index'])->name('signin');
Route::post('/create-account', [RegistrationController::class, 'store'])->name('createAccount');


Route::get('cart', [SaleController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [SaleController::class, 'addToCart'])->name('add.to.cart');

Route::get('/image-sorting/{id}/{title}', [FrontEndController::class, 'imageSorting'])->name('image-sorting');



Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('saiful.rana@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});